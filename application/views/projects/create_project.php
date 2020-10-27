<h2>Create Project</h2>
<?php
  $attributes = array('id' => 'create-project', 'class' => 'form-horizontal');
  echo validation_errors("<p class='bg-warning p-1 rounded'>");
  echo form_open('projects/create', $attributes);
?>
<div class="form-group">
  <?php
    echo form_label('Project Name');
    $data = array(
      'class' => 'form-control',
      'name' => 'project_name',
      'placeholder' => 'Enter Project Name'
    );

    echo form_input($data);
  ?>
</div>

<div class="form-group">
  <?php
    echo form_label('Project Description');
    $data = array(
      'class' => 'form-control',
      'name' => 'project_body',
      'rows' => '3',
      'placeholder' => 'Project Description'
    );

    echo form_textarea($data);
  ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class' => 'btn btn-primary',
      'name' => 'submit',
      'value' => 'Create'
    );

    echo form_submit($data);
  ?>
</div>

<?php echo form_close(); ?>
