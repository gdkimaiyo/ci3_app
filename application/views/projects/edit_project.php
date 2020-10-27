<h2>Edit Project</h2>
<?php
  $attributes = array('id' => 'edit-project', 'class' => 'form-horizontal');
  echo validation_errors("<p class='bg-warning p-1 rounded'>");
  echo form_open('projects/edit/'. $project_data->id. '', $attributes);
?>
<div class="form-group">
  <?php
    echo form_label('Project Name');
    $data = array(
      'class' => 'form-control',
      'name' => 'project_name',
      'value' => $project_data->project_name
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
      'value' => $project_data->project_body
    );

    echo form_textarea($data);
  ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class' => 'btn btn-primary',
      'name' => 'submit',
      'value' => 'Update'
    );

    echo form_submit($data);
  ?>
</div>

<?php echo form_close(); ?>
