<?php
if(!defined('BASEPATH')) exit('Hacking Attempt: Get out of the system ..!');

class Home extends CI_Controller

{

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

$this->load->model('Login_model');

$user = $this->session->userdata('userName');

$data['position'] = $this->session->userdata('position');

$data['user'] = $this->Login_model->userData($user);

$this->load->view('home', $data);

}

}

}

?>
