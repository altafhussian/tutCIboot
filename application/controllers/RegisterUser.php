<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterUser extends CI_Controller {

  public function index() {

     //This method will have the credentials validation
     $this->load->library('form_validation');

     $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
     $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
     $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
     $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
     $this->form_validation->set_rules('passwd', 'Password', 'trim|required|xss_clean');
     $this->form_validation->set_rules('cpasswd', 'Confirm Password', 'trim|required|xss_clean|matches[passwd]');

     if($this->form_validation->run() == FALSE)
     {
       //Field validation failed.  User redirected to Register page
       $this->load->view('register_view');
     }
     else
     {
       //insert the user registration details into database
        $data = array(
            'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('passwd')
        );

       $this->load->model('RegisterModel');

       $this->RegisterModel->insert_users($data);
       redirect('Login', 'refresh');
     }
   }
}

 ?>
