<h2>Create Task</h2>
<?php
  $attributes = array('id' => 'create-task', 'class' => 'form-horizontal');
  echo validation_errors("<p class='bg-warning p-1 rounded'>");
  echo form_open('tasks/create/'.$this->uri->segment(3).'', $attributes);
?>
<div class="form-group">
  <?php
    echo form_label('Task');
    $data = array(
      'class' => 'form-control',
      'name' => 'task_name',
      'placeholder' => 'Enter Task Name'
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
      'placeholder' => 'Task Description'
    );

    echo form_textarea($data);
  ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class' => 'form-control',
      'name' => 'due_date',
      'type' => 'date'
    );

    echo form_input($data);
  ?>
</div>

<div class="form-group">
  <?php
    $data = array(
      'class' => 'btn btn-primary',
      'name' => 'submit',
      'value' => 'Create Task'
    );

    echo form_submit($data);
  ?>
</div>

<?php echo form_close(); ?>
