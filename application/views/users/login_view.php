<?php if($this->session->userdata('logged_in')): ?>
  <?php redirect('home'); ?>
<?php else: ?>
  <div class="card">
    <div class="card-header bg-secondary">
      <h2 class="text-white">Login</h2>
    </div>
    <div class="card-body">
      <?php
        $attributes = array('id' => 'login-form', 'class' => 'form-horizontal');
        echo form_open('users/login', $attributes);
        if($this->session->flashdata('errors')) {
          echo $this->session->flashdata('errors');
        }
      ?>
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
          $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Login'
          );

          echo form_submit($data);
        ?>
        or
        <a href="<?php echo base_url();?>users/register">Register</a>
      </div>
      <div class="">
        <a href="<?php echo base_url();?>users/reset" onclick="showStepper()">
          Forgot Password?
        </a>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
<?php endif; ?>
