<?php if($this->session->userdata('logged_in')): ?>
  <?php redirect('home'); ?>
<?php else: ?>
  <div class="card">
    <div class="card-header bg-secondary">
      <h2 class="text-white">Reset Password</h2>
    </div>
    <div class="card-body">
      <div class="pb-2">
        <a href="<?php echo base_url();?>users/login">
          <span class="fa fa-arrow-left"></span>
          Go back
        </a>
      </div>
      <?php if ($this->session->flashdata('reset_failed')): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('reset_failed'); ?>
        </div>
      <?php endif; ?>
      <?php
        $attributes = array('id' => 'change-pass-form', 'class' => 'form-horizontal');
        echo validation_errors("<p class='bg-warning p-1 rounded'>");
        echo form_open('users/reset', $attributes);
      ?>
      <div class="form-group">
        <?php
          echo form_label('Provide your email');
          $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Enter your email',
            'value' => set_value('email')
          );

          echo form_input($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('New Password');
          $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter new password'
          );

          echo form_password($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Confirm New Password');
          $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm new password'
          );

          echo form_password($data);
        ?>
      </div>

      <div class="form-group">
        <?php
          $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Submit'
          );

          echo form_submit($data);
        ?>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
<?php endif; ?>
