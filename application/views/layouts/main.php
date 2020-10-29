<?php
$home = "";
$register = "";
$projects = "";

if($this->uri->segment(1) == 'projects') {
  $projects = "active";
} else if($this->uri->segment(2) == 'register') {
  $register = "active";
} else {
  $home = "active";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootbox.locales.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">CI App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo $home; ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>

          <?php if ($this->session->userdata('username')): ?>
            <li class="nav-item <?php echo $projects; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>projects">Projects</a>
            </li>
          <?php else: ?>
            <li class="nav-item <?php echo $register; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
            </li>
          <?php endif; ?>
        </ul>

        <?php if ($this->session->userdata('username')): ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
            </li>
          </ul>
        <?php else: ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Login</a>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </nav>

    <div class="container m-auto row rounded">
      <div class="my-left col-md-3 p-3">
        <?php
          $this->load->view('side_view');
        ?>
      </div>
      <div class="my-right col-md-9 p-3">
        <?php
          $this->load->view($main_view);
        ?>
      </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  </body>
</html>
