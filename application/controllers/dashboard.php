<?php
if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');


 
class dashboard extends CI_Controller {	

public function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('Login_model');

}

public function index()

{

if($this->session->userdata('isLogin') == FALSE)

{

redirect('login/login_form');

}else

{

redirect('login/login_form');

	



}


}

public function sales(){


	$this->load->helper('url');
	$this->load->model('Login_model');

	$user = $this->session->userdata('username');

	$data['position'] = $this->session->userdata('position');

	$data['user'] = $this->Login_model->userdata($user);


	$this->load->view('welcome_message', $data);
	


}	

public function creative(){


	$this->load->helper('url');
	$this->load->model('Login_model');

	$user = $this->session->userdata('username');

	$data['level'] = $this->session->userdata('level');

	$data['user'] = $this->Login_model->userData($user);


	$this->load->view('creative', $data);
	


}	
}
