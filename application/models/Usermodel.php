<?php

class Usermodel extends CI_model
{
    public function getUserdata()
    {   
        // $this->load->database();
        $q =$this->db->select('firstname,account_no')
           ->where('id',1)
           ->get('users');
        return $q->result_array();
    }
}
