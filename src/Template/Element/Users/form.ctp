<?= $this->Form->create($user, ['action' => 'add']); ?>
<div class="row">
  <div class="form">
    <fieldset>
      <div class="header">
        <span>Step 1: About You</span>
      </div>
      <div class='form-fields default row' id="One">
        <div class="row">
          <?php
          echo "<div class='six columns'>";
          echo $this->Form->input('first_name', ['class' => 'active']);
          echo "</div>";
          echo "<div class='six columns'>";
          echo $this->Form->input('last_name', ['class' => 'active']);
          echo "</div>";
          echo "</div>";
          echo "<div class='row'>";
          echo "<div class='six columns'>";
          echo $this->Form->input('gender', ['class' => 'active', 
                                  'type' => 'select', 
                                  'options' => ['male' => 'Male', 'female' => 'Female'],
                                  'empty' => ' ']);
          echo "</div>";
          echo "<div class='six columns'>";
          echo "<div class='input select required'>
                  <label for='dob'>Date of Birth</label>";
          echo $this->Form->year('dob', 
                                  ['class' => 'active',
                                  'minYear' => 1940,
                                  'maxYear' => date('Y'),
                                  'default' => '']);
          echo $this->Form->Month('dob', 
                                  ['class' => 'active',
                                  'default' => '']);
          echo $this->Form->day('dob', 
                                ['class' => 'active',
                                'default' => '']);
          echo "</div>";
          echo "</div>";
          echo "</div>";
          ?>
          <div class="row">
            <div class='form-actions u-full-width'>
              <button class='form-button toggle' disabled="disabled" data-target="#Two">Next ></button>
            </div>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <div class="header">
          <span>Step 2: Contact Details</span>
        </div>
        <div class='form-fields' id="Two">
          <div class="row">
            <div class="six columns">
              <?
                echo $this->Form->input('telephone');
                echo $this->Form->input('email');
              ?>
            </div>
          </div>
          <div class="row">
            <div class='form-actions u-full-width'>
              <button class='form-button toggle'data-target="#Three">Next ></button>
            </div>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <div class="header">
          <span>Step 3: Additional Comments </span>
        </div>
        <div class='form-fields' id="Three">
            <div class="row">
            <?
              echo $this->Form->input('comments', ['class' => 'u-full-width']);
            ?>
          </div>
          <div class="row">
            <div class='form-actions'>
              <?= $this->Form->button(__('Submit')) ?>
            </div>
          </div>
        </div>
      </fieldset>
  </div>
</div>
<?= $this->Form->end() ?>