<?php

class User_model extends CI_Model {
  // public function get_users() {
  //   // query users - Method 1
  //   $query = $this->db->query("SELECT * FROM users");
  //   // return $query->num_rows(); // columns count
  //   // return $query->num_fields(); // rows count
  //
  //   // query users - Method 2
  //   // $query = $this->db->get('users');
  //   return $query->result();
  //
  //   // $config['hostname'] = "localhost";
  //   // $config['username'] = "root";
  //   // $config['password'] = "g22kimaiyo";
  //   // $config['database'] = "ci3_test_db";
  //   //
  //   // $conn = $this->load->database($config);
  //
  // }
  //
  // public function create_users($data) {
  //   $this->db->insert('users', $data);
  // }
  //
  // public function update_users($data, $id) {
  //   $this->db->where('id', $id);
  //   $this->db->update('users', $data);
  // }
  //
  // public function delete_users($id) {
  //   $this->db->where('id', $id);
  //   $this->db->delete('users');
  // }
  public function create_user() {
    $options = ['cost' => 12]; // delay execution time. Time taken to encrypt
    $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

    $data = array(
      'username'    => $this->input->post('username'),
      'password'    => $encripted_pass,
      'first_name'  => $this->input->post('first_name'),
      'last_name'   => $this->input->post('last_name'),
      'email'       => $this->input->post('email')
    );
    $insert_data =  $this->db->insert('users', $data);
    return $insert_data;
  }

  public function login_user($username, $password){
    // login user
    $this->db->where(['username' => $username]);
    $result = $this->db->get('users');

    $db_password = $result->row(2)->password;

    if (password_verify($password, $db_password)) {
      return $result->row(0)->id;
    } else {
      return false;
    }
  }

  public function get_user_email($email){
    $this->db->where(['email' => $email]);
    $result = $this->db->get('users');
    return $result->row();
  }
  public function update_pass($email){
    $options = ['cost' => 12]; // delay execution time. Time taken to encrypt
    $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

    $data = array(
      'password'    => $encripted_pass
    );
    $this->db->where('email', $email);
    $this->db->update('users', $data);

    return true;
  }
}
?>
