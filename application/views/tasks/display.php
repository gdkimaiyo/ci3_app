<h2>Task View</h2>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th></th>
      <th>Task</th>
      <th>Task Description</th>
      <th>Date Created</th>
      <th>Due Date</th>
      <th>Actions</th>
    </tr>
  </thead>
      <tr>
        <td>
          <a class="btn btn-success mb-1" href="<?php echo base_url();?>tasks/mark_complete/<?php echo $task->id;?>">
            <span class="fa fas fa-check-square"></span>
          </a>
          <a class="btn btn-dark mb-1" href="<?php echo base_url();?>tasks/mark_incomplete/<?php echo $task->id;?>">
            <span class="fa far fa-check-square"></span>
          </a>
        </td>
        <td>
          <?php echo $task->task_name; ?>
          <!-- <div class="task-name"></div>
          <div class="task-actions"></div> -->
        </td>
        <td>
          <?php echo $task->task_body; ?>
        </td>
        <td>
          <?php echo $task->date_created; ?>
        </td>
        <td>
          <?php echo $task->due_date; ?>
        </td>
        <td>
          <a class="btn btn-success mb-1" href="<?php echo base_url();?>tasks/edit/<?php echo $task->id;?>">
            <span class="fa fa-edit"></span>
          </a>
          <a class="btn btn-danger mb-1" href="<?php echo base_url();?>tasks/delete/<?php echo $task->project_id;?>/<?php echo $task->id;?>">
            <span class="fa fa-trash-o"></span>
          </a>
        </td>
      </tr>
  </tbody>
</table>
