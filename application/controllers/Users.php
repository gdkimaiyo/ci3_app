<?php

class Users extends CI_Controller {
  // public function show() {
  //   // $this->load->model('user_model');
  //
  //   $data['results'] = $this->user_model->get_users();
  //
  //   $this->load->view('user_view', $data);
  //
  //   // foreach ($result as $key) {
  //   //   echo $key->id;
  //   // }
  // }
  //
  // // Create
  // public function insert() {
  //   $username = "Newborn";
  //   $password = "Secret";
  //
  //   $this->user_model->create_users([
  //     'username' => $username,
  //     'password' => $password
  //   ]);
  // }
  //
  // // Update
  // public function update() {
  //   $id = 5;
  //
  //   $username = "Mike";
  //   $password = "notsecret";
  //
  //   $this->user_model->update_users([
  //     'username' => $username,
  //     'password' => $password
  //   ], $id);
  // }
  //
  // public function delete() {
  //   $id = 4;
  //
  //   $this->user_model->delete_users($id);
  // }
  public function register() {
    // trim spaces
    $this->form_validation->set_rules('first_name','First Name', 'trim|required|min_length[2]');
    $this->form_validation->set_rules('last_name','Last Name', 'trim|required|min_length[2]');
    $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('username','Username', 'trim|required|min_length[2]');
    $this->form_validation->set_rules('password','Password', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('confirm_password','Confirm Password', 'trim|required|matches[password]');

    if($this->form_validation->run() == FALSE) {
      $data['main_view'] = "users/register_view";
      $this->load->view('layouts/main', $data);
    } else {
      if ($this->user_model->create_user()) {
        $this->session->set_flashdata('user_registered', 'Registration successful...');
        redirect('home/index');
      } else {
        echo "<p>";
        echo "Something went wrong. User was not created";
        echo "</p>";
      }
    }
  }

  public function login() {
    $this->form_validation->set_rules('username','Username', 'trim|required|min_length[2]');
    $this->form_validation->set_rules('password','Password', 'trim|required|min_length[3]');

    if($this->form_validation->run() == FALSE) {
      $data = array(
        'errors' => validation_errors("<p class='bg-warning p-1 rounded'>")
      );

      $this->session->set_flashdata($data);
      redirect('home');
    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user_id = $this->user_model->login_user($username, $password);

      if ($user_id) {
        $user_data = array(
          'user_id' => $user_id,
          'username' => $username,
          'logged_in' => true
        );

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success', 'Log in successful!');

        // $data['main_view'] = "home_view";
        // $this->load->view('layouts/main', $data);
        redirect('home/index');
      } else {
        $this->session->set_flashdata('login_failed', 'Sorry, Username or password incorrect...');
        redirect('home/index');
      }
    }
  }

  public function reset() {
    $this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password','Password', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('confirm_password','Confirm Password', 'trim|required|matches[password]');

    if($this->form_validation->run() == FALSE) {
      $data['main_view'] = "users/reset_view";
      $this->load->view('layouts/main', $data);
    } else {
      $email = $this->input->post('email');
      $user_email = $this->user_model->get_user_email($email);
      if (!strcmp($email, $user_email)) {        
        if ($this->user_model->update_pass($email)) {
          $this->session->set_flashdata('reset_success', 'Password reset successfully...');
          redirect('home/index');
        }
      } else {
        $this->session->set_flashdata('reset_failed', 'Email does not exists...');
        redirect('users/reset');
      }
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('home/index');
  }
}
?>
