<?php

class LoginModel extends CI_Model {

    public function login($username, $password) {
      $this->load->database();

      $condition = "username =" ."'$username'"." AND password = "."'$password'";

      $this->db->select('*');
      $this->db->from('users');
      $this->db->where($condition);
      $this->db->limit(1);
      $query = $this->db->get();

      if ($query->num_rows() == 1) {
        return true;
      } else {
        return false;
      }
    }

}

 ?>
