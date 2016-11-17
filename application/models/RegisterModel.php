<?php

class RegisterModel extends CI_Model {

    public function insert_users($data) {
      $this->load->database();
      return $this->db->insert('users', $data);
    }

}

 ?>
