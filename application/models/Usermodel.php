<?php

class Usermodel extends CI_model
{
    public function getUserdata()
    {   $this->load->library(array('form_validation'),('email'));
        $this->form_validation->fb();
        $this->email
        $this->load->database();
        // $this->db->select("firstname");
        // $q=$this->db->get("users");
        $q =$this->db->select('firstname,account_no')
           ->where('id',1)
           ->get('users');
        return $q->result_array();
    }
}
