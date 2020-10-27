<?php if ($this->session->flashdata('login_success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('login_success'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('user_registered')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('user_registered'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('reset_success')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('reset_success'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('login_failed')): ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $this->session->flashdata('login_failed'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('no_access')): ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $this->session->flashdata('no_access'); ?>
  </div>
<?php endif; ?>

<div class="">
  <?php if (!isset($projects)): ?>
    <?php
      $data['main_view'] = "users/login";
      $this->load->view('users/login_view', $data);
    ?>
    <!-- <div class="reset-password" id="reset-pass">
      <?php
        // $data['main_view'] = "users/reset";
        // $this->load->view('users/reset_view', $data);
      ?>
    </div> -->
  <?php else: ?>
    <div class="jumbotron text-center" style="background-color: #ffffff;">
      <h2 class="display-4">Welcome to CI App</h2>
      <hr class="my-4">
      <blockquote class="blockquote mb-0">
        <footer class="blockquote-footer">
          The best App for creating and managing your projects and its related tasks.
        </footer>
      </blockquote>
    </div>
    <div class="card mb-4">
      <div class="card-header bg-info">
        <h2 class="text-white">Projects</h2>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <?php if (count($projects) < 1): ?>
            <div class="alert alert-info" role="alert">
              No projects available.
              <a class="btn btn-primary" href="<?php echo base_url(); ?>projects/create">Create project</a>
            </div>
          <?php endif; ?>
          <?php foreach ($projects as $project): ?>
            <li class="list-group-item">
              <a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>">
                <?php echo $project->project_name; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <?php // if (!isset($tasks)): ?>
      <!-- <hr class="my-3">
      <div class="alert alert-info" role="alert">
        No tasks available...
      </div> -->
    <?php // else: ?>
      <!-- <div class="card mb-2">
        <div class="card-header bg-info">
          <h2 class="text-white">All tasks</h2>
        </div>
        <div class="card-body">
          <ul class="list-group">
            <?php // if (count($tasks) < 1): ?>
              <div class="alert alert-info" role="alert">
                No tasks available.
              </div>
            <?php // endif; ?>
            <?php // foreach ($tasks as $task): ?>
              <?php // if ($task->status == 1): ?>
                <li class="list-group-item list-group-item-light">
                  <div class="row">
                    <div class="col-md-10">
                      <a href="<?php  // echo base_url();?>projects/display/<?php // echo $task->project_id; ?>">
                        <?php // echo $task->task_name; ?>
                      </a>:
                      <?php // echo $task->task_body; ?>
                    </div>
                    <div class="col-md-2">
                      <span class="fa fa-check-circle text-success"></span>
                      <span class="text-success">Done</span>
                    </div>
                  </div>
                </li>
              <?php // else: ?>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-10">
                      <a href="<?php  // echo base_url();?>projects/display/<?php // echo $task->project_id; ?>">
                        <?php // echo $task->task_name; ?>
                      </a>:
                      <?php // echo $task->task_body; ?>
                    </div>
                    <div class="col-md-2">
                      <span class="fa fa-circle text-warning"></span>
                      <span class="text-warning">Active</span>
                    </div>
                  </div>
                </li>
              <?php // endif; ?>
            <?php // endforeach; ?>
          </ul>
        </div>
      </div> -->
    <?php // endif; ?>
  <?php endif; ?>
</div>
