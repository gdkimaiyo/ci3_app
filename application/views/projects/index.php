<!-- Notifications -->
<?php if ($this->session->flashdata('project_created')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('project_created'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('project_updated')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('project_updated'); ?>
  </div>
<?php endif; ?>

<?php if ($this->session->flashdata('project_deleted')): ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('project_deleted'); ?>
  </div>
<?php endif; ?>

<div class="projects">
  <div class="card mb-4">
    <div class="card-header bg-success">
      <h2 class="text-white">Projects</h2>
    </div>
    <div class="card-body">
      <ul class="list-group">
        <?php if (count($projects) < 1): ?>
          <div class="alert alert-info" role="alert">
            No projects available.
          </div>
        <?php endif; ?>
        <?php foreach ($projects as $project): ?>
          <li class="list-group-item">
            <a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>">
              <?php echo $project->project_name; ?>
            </a>
            <div class="float-right">
              <!-- Actions buttons -->
              <a class="btn btn-success mb-1" href="<?php echo base_url();?>projects/edit/<?php echo $project->id;?>">
                <span class="fa fa-pencil"></span>
              </a>
              <a class="btn btn-danger mb-1 delete-alert" href="<?php echo base_url();?>projects/delete/<?php echo $project->id;?>">
                <span class="fa fa-times"></span>
              </a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="float-right pt-2">
        <a class="btn btn-primary" href="<?php echo base_url();?>projects/create">Create Project</a>
      </div>
    </div>
  </div>
</div>
