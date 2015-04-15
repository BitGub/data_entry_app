<div class="formContainer large-10 medium-9 columns">
  <?= $this->Form->create($user); ?>
  <fieldset>
    <div class="header">
      <span>Step 1: About You</span>
    </div>
      <?php
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('gender');
        echo $this->Form->input('dob');
        ?>
      <div class='form-actions'>
        <button class='form-button'>Next ></button>
      </div>
    </fieldset>
    <fieldset>
      <div class="header">
        <span>Step 2: Contact Details</span>
      </div>
      <?
      echo $this->Form->input('telephone');
      echo $this->Form->input('email');
      ?>
      <div class='form-actions'>
        <button class='form-button'>Next ></button>
      </div>
      </fieldset>
      <fieldset>
      <div class="header">
        <span>Step 3: Additional Comments </span>
      </div>
      <?
      echo $this->Form->input('comments');
      ?>
      <div class='form-actions'>
        <?= $this->Form->button(__('Submit')) ?>
      </div>
  </fieldset>
  <?= $this->Form->end() ?>
</div>