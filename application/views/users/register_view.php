<?php if (!$this->session->userdata('logged_in')): ?>
  <div class="card">
    <div class="card-header bg-secondary">
      <h2 class="text-white">Register</h2>
    </div>
    <div class="card-body">
      <?php
        $attributes = array('id' => 'register-form', 'class' => 'form-horizontal');
        echo validation_errors("<p class='bg-warning p-1 rounded'>");
        echo form_open('users/register', $attributes);
      ?>
      <div class="form-group">
        <?php
          echo form_label('First Name');
          $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'Enter First Name',
            'value' => set_value('first_name')
          );

          echo form_input($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Last Name');
          $data = array(
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Enter Last Name',
            'value' => set_value('last_name')
          );

          echo form_input($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Email');
          $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Enter Email',
            'value' => set_value('email')
          );

          echo form_input($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Username');
          $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username',
            'value' => set_value('username')
          );

          echo form_input($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Password');
          $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password'
          );

          echo form_password($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Confirm Password');
          $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'
          );

          echo form_password($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Register'
          );

          echo form_submit($data);
        ?>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>

<?php else: ?>
  <?php redirect('home/index'); ?>
<?php endif; ?>
