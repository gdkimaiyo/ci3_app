<div class="text-center">
  <div class="user-icon">
    <span class="fas fa fa-user-circle fa-7x"></span>
  </div>
  <div class="">
    <?php if ($this->session->userdata('logged_in')): ?>
      <?php if ($this->session->userdata('username')): ?>
        <div class="alert alert-secondary" role="alert">
          You are logged in as
          <?php echo $this->session->userdata('username');?>
        </div>
      <?php endif; ?>
      <?php
        echo form_open('users/logout');
        $data = array(
          'class' => 'btn btn-primary',
          'name' => 'submit',
          'value' => 'Logout'
        );
        echo form_submit($data);
        echo form_close();
      ?>
    <?php else: ?>
      <div class="alert alert-info" role="alert">
        Please log in or
        <a href="<?php echo base_url(); ?>users/register">register</a>
        to continue
      </div>
    <?php endif; ?>
  </div>
</div>
