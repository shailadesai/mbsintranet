<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Login_model extends CI_Model

{

public function __construct()

{

parent::__construct();

}

public function takeUser($userName, $password, $status, $position)

{

$this->db->select('*');

$this->db->from('persons');

$this->db->where('userName', $userName);

$this->db->where('password', $password);

$this->db->where('status', $status);

$this->db->where('position', $position);

$query = $this->db->get();

return $query->num_rows();

$this->load->view();

}

public function userData($userName)

{

$this->db->select('userName');

$this->db->where('userName', $userName);

$query = $this->db->get('persons');

return $query->row();

}

}
