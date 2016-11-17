<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

  function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
     $this->load->model('RegisterModel');
     $user_data = $this->session->all_userdata();
     $id = $user_data['logged_in']['id'];
     
     $this->data['user'] = $this->RegisterModel->get_users($id);

     $this->load->view('home_view',$this->data);
   }
 }

 function check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');

    $this->load->model('LoginModel');
    //query the database
    $result = $this->LoginModel->login($username, $password);
    if(count($result) > 0)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id' => $row['id'],
          'username' => $row['username']
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }

}
