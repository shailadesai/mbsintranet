<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Login extends CI_Controller

{

public function __construct()

{

parent::__construct();

$this->load->model('Login_model');

$this->load->library(array('form_validation','session'));

$this->load->database();

$this->load->helper('url');

}

public function index()

{

$session = $this->session->userdata('isLogin');

if($session == FALSE)

{

redirect('login/login_form');

}else

{

redirect('home');

}

}

public function login_form()

{

$this->form_validation->set_rules('userName', 'userName', 'required|trim|xss_clean');

$this->form_validation->set_rules('password', 'password', 'required|xss_clean');

$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

if($this->form_validation->run()==FALSE)

{

$this->load->view('Login_view');

}else

{

$userName = $this->input->post('userName');

$password = $this->input->post('password');

$position = $this->input->post('position');

$cek = $this->Login_model->takeUser($userName, $password, 1, $position);

if($cek <> 0)

{

$this->session->set_userdata('isLogin', TRUE);

$this->session->set_userdata('userName',$userName);

$this->session->set_userdata('position',$position);

redirect('home');

}else

{

echo " <script>

alert('Failed Login: Check your userName and password!');

history.go(-1);
 
alert('Failed Login : $query = $this->membership')

</script>";

}

}

}

public function logout()

{

$this->session->sess_destroy();

redirect('login/login_form');

}

}

?>
