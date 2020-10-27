<div class="project-view pb-4">
  <div class="card">
    <div class="card-header bg-primary">
      <h3 class="text-white">
        <?php echo $project_data->project_name; ?>
      </h3>
    </div>
    <div class="card-body">
      <p><b>Date Created: </b><?php echo $project_data->date_created; ?></p>
      <h4>Description</h4>
      <div><?php echo $project_data->project_body; ?></div>
      <div class="float-right">
        <a class="btn btn-success mt-2" href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id?>">Create Task</a>
        <a class="btn btn-warning mt-2" href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id?>">Edit Project</a>
        <a class="btn btn-danger mt-2 delete-alert" id="<?php echo $project_data->id ?>" href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id;?>">Delete Project</a>
        <!-- <a class="show-alert btn btn-danger mt-2" href="<?php echo base_url();?>projects/delete/<?php // echo $project_data->id?>" onclick="return confirm('Are you sure want to delete this project?')">Delete Project</a> -->
      </div>
    </div>
  </div>
</div>

<div class="tasks">
  <?php if ($this->session->flashdata('task_created')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('task_created'); ?>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('task_updated')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('task_updated'); ?>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('task_deleted')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('task_deleted'); ?>
    </div>
  <?php endif; ?>

  <div class="card mb-4">
    <div class="card-header bg-warning">
      <h5 class="">Active Tasks</h5>
    </div>
    <div class="card-body">
      <?php if ($incomplete_tasks): ?>
        <ul class="list-group pb-1">
          <?php foreach ($incomplete_tasks as $task): ?>
            <!-- <span class="pt-1 pb-1"><b>Due: </b><?php // echo $task->due_date; ?></span> -->
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-8">
                  <a class="check-box pr-2" href="<?php echo base_url();?>tasks/mark_complete/<?php echo $task->task_id;?>">
                    <span class="material-icons">check_box_outline_blank</span>
                  </a>
                  <span class="font-weight-bold"><?php echo $task->task_name; ?>: </span>
                  <span><?php echo $task->task_body; ?></span>
                </div>

                <div class="col-md-4">
                  <b>Due: </b>
                  <span class="text-primary pr-1">
                    <?php echo $task->due_date; ?>
                  </span>
                  <a class="btn btn-success" href="<?php echo base_url();?>tasks/edit/<?php echo $task->task_id;?>">
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a class="btn btn-danger delete-alert" href="<?php echo base_url();?>tasks/delete/<?php echo $this->uri->segment(3);?>/<?php echo $task->task_id;?>">
                    <span class="fa fa-trash-o"></span>
                  </a>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="float-right">
          <a class="btn btn-success mt-2" href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id?>">Add Task</a>
        </div>
      <?php else: ?>
        <div class="alert alert-info" role="alert">
          You have no pending tasks...
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-header bg-secondary">
      <h5 class="text-white">Completed Tasks</h5>
    </div>
    <div class="card-body">
      <?php if ($completed_tasks): ?>
        <ul class="list-group pb-2">
          <?php foreach ($completed_tasks as $task): ?>
            <li class="list-group-item list-group-item-light">
              <div class="row">
                <div class="col-md-8">
                  <a class="check-box pr-2" href="<?php echo base_url();?>tasks/mark_incomplete/<?php echo $task->task_id;?>" onclick="boxClicked();">
                    <span class="material-icons">check_box</span>
                  </a>
                  <span class="font-weight-bold"><?php echo $task->task_name; ?>: </span>
                  <span><?php echo $task->task_body; ?></span>
                </div>
                <div class="col-md-4">
                  <b>Due: </b>
                  <span class="text-primary pr-1">
                    <?php echo $task->due_date; ?>
                  </span>
                  <a class="btn btn-success disabled mt-1 mb-1" href="<?php echo base_url();?>tasks/edit/<?php echo $task->task_id;?>">
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a class="btn btn-danger mt-1 mb-1 delete-alert" href="<?php echo base_url();?>tasks/delete/<?php echo $this->uri->segment(3);?>/<?php echo $task->task_id;?>">
                    <span class="fa fa-trash-o"></span>
                  </a>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <div class="alert alert-info" role="alert">
          You have no completed tasks...
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
