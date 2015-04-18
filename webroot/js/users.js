$(function(){
  
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  
  // This slides down all form sections, in the event
  // that the validation fails server side,
  // i.e an $email already exists in database.
  // also adds active class to all fields, for basic jQuery validation
  
  if($('div.message').length) {
    setElements (); // used here just to disabled both next buttons as they are not needed
    $('.form-fields').slideDown();
    addRemoveClasses('.form-fields');
  }
 
  $('.form').on('change keyup', ".required > input[class=active], select[class=active]", function(){
    
    var isValid = true;
      
    var inputVal = $(this).val();
    var $parentTag = $(this).parent();
    
    //check that all required fields are not blank (not telephone or email fields)

    if($(this).not('#telephone') || $(this).not('#email')) {
      if ( inputVal == '') {
        $parentTag.addClass('error');
        isValid = false;
      } else {
        removeFormErrors($parentTag);
      }
    }
    
    // special check for numericality and email-format
    // also allow for error checking after form has been submitted
      
    if($(this).is('#telephone') && !isNumber(inputVal)) {
      if (!$parentTag.hasClass('error')) {      // stop it from appending more than one span
          $parentTag.addClass('error').append('<span class="error">Must only contain numbers.</span>');
          isValid = false;
      } else if ($parentTag.hasClass('error-message') || isNumber(inputVal)){
        removeFormErrors($parentTag);
      }
    }
      
    if ($(this).is('#email') && !emailReg.test(inputVal)) {
      console.log("hii");
      if (!$parentTag.hasClass('error')) {
        $parentTag.addClass('error').append('<span class="error">Enter a valid email address.</span>');
        isValid = false;
      } else if ($(this).next('.error-message').length !=0 || emailReg.test(inputVal)){
        console.log("hii");
        removeFormErrors($parentTag);
      }
    }
    
    //if form section is valid, enable next button
    
    if (isValid) {
      $('.form-button').removeAttr('disabled');
    }
  });
  
  //performs the form accordion action
  
  $('.form').on('click', '.toggle', function(event){
    event.preventDefault();

    var source = $(this).parents('.form-fields'); // $source is the form section we want to slide up
    var target = $(this).data('target'); // $target is is the next section what we want to slidedown
    
    toggleSection(source, target);
    addRemoveClasses(target);
    setElements(); // sets $isValid to false and disables next button
  });
  
  function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n); 
  }
  
  function toggleSection(source, target) {
    $(source).slideUp();
    $('.form').find(target).slideToggle();
  };
  
  function addRemoveClasses(element) {
    $('.form').find(':input[class=active], select[class=active]').removeClass('active');
    $(element).find(':input, textarea, select').addClass('active');
  };
  
  function setElements () {
    $('.form-button').attr('disabled', 'disabled');
    isValid = false;                                   
  };
  
  function removeFormErrors(tag) {
    tag.find('span.error').remove();
    tag.find('div.error-message').remove
    $(tag).removeClass('error');
  };
});