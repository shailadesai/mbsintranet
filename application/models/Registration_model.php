<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

  Class Registration_model extends CI_Model {

  public function RegisterUser($data)
 {
   {
     $this->db->insert('persons', $data);
   }
 }
}