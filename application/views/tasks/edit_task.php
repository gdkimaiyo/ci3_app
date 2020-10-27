<h2>Edit Task</h2>
<?php
  $attributes = array('id' => 'edit-task', 'class' => 'form-horizontal');
  echo validation_errors("<p class='bg-warning p-1 rounded'>");
  echo form_open('tasks/edit/'. $task_data->id. '', $attributes);
?>
<div class="form-group">
  <?php
    echo form_label('Task Name');
    $data = array(
      'class' => 'form-control',
      'name' => 'task_name',
      'value' => $task_data->task_name
    );

    echo form_input($data);
  ?>
</div>

<div class="form-group">
  <?php
    echo form_label('Task Description');
    $data = array(
      'class' => 'form-control',
      'name' => 'task_body',
      'rows' => '3',
      'value' => $task_data->task_body
    );

    echo form_textarea($data);
  ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class' => 'form-control',
      'name' => 'due_date',
      'type' => 'date',
      'value' => $task_data->due_date
    );

    echo form_input($data);
  ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class' => 'btn btn-primary',
      'name' => 'submit',
      'value' => 'Update Task'
    );

    echo form_submit($data);
  ?>
</div>

<?php echo form_close(); ?>
