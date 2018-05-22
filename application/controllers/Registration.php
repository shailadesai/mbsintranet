<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Registration extends CI_Controller { 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Registration_model');
  $this->load->helper(array('form', 'url'));
 }
 public function index()
 {
  $this->load->view('Registration_view');
 }
 public function registration_form()
 {
  $save = array(
      'userName'          => $this->input->post('userName'),
      'password'          => $this->input->post('password'),
      'contactNumber'     => $this->input->post('contactNumber'),
      'position'         => $this->input->post('position'),
      'market'          => $this->input->post('market')

        );

   $this->Registration_model->RegisterUser($save);
  redirect('Registration/index');
 }
}