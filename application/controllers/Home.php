<?php
class Home extends CI_Controller {
  public function index() {
    // $data['main_view'] = ($this->session->flashdata('login_success')) ? "admin_view" : "home_view";
    if ($this->session->userdata('logged_in')) {
      // User ONLy to see their projects
      $user_id = $this->session->userdata('user_id');
      $data['tasks'] = $this->task_model->get_all_tasks($user_id);
      $data['projects'] = $this->project_model->get_all_projects($user_id);
    }
    
    $data['main_view'] = "home_view";
    $this->load->view('layouts/main', $data);
  }
}
?>
