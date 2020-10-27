<?php
  class Project_model extends CI_Model {
    public function get_project($id) {
      // Get a single project from db
      // $query = $this->db->query("SELECT * FROM projects WHERE id = $id");
      $this->db->where('id', $id);
      $query = $this->db->get('projects');
      return $query->row(); // single item returned
    }

    public function get_projects($user_id) {
      // Get Projects for user form db
      $this->db->where('project_user_id', $user_id);
      $query = $this->db->get('projects');
      
      return $query->result(); // array of objects
    }

    public function get_all_projects($user_id) {
      $this->db->where('project_user_id', $user_id);
      $query = $this->db->get('projects');

      return $query->result();
    }

    public function create_project($data) {
      // Insert project created to db
      $insert_query = $this->db->insert('projects', $data);
      return $insert_query;
    }

    public function edit_project($project_id, $data) {
      // Update project
      $this->db->where('id', $project_id);
      $this->db->update('projects', $data);

      return true;
    }

    public function delete_project($project_id) {
      // Delete project
      $this->db->where('id', $project_id);
      $this->db->delete('projects');

    }

    public function get_projects_info($project_id) {
      $this->db->where('id', $project_id);
      $get_data = $this->db->get('projects');

      return $get_data->row();
    }

    public function get_project_tasks($project_id, $active = true) {
      $this->db->select('
        tasks.task_name,
        tasks.task_body,
        tasks.id as task_id,
        tasks.date_created,
        tasks.due_date,
        projects.project_name,
        projects.project_body
      ');
      $this->db->from('tasks');
      $this->db->join('projects', 'projects.id = tasks.project_id');
      $this->db->where('tasks.project_id', $project_id);

      if ($active == true) {
        $this->db->where('tasks.status',0);
      } else {
        $this->db->where('tasks.status',1);
      }

      $query = $this->db->get();
      if($query->num_rows() < 1) {
        return FALSE;
      }
      return $query->result();
    }

    public function delete_project_tasks($project_id) {
      $this->db->where('project_id', $project_id);
      $query = $this->db->delete('tasks');

      return $query;
    }
  }
?>
