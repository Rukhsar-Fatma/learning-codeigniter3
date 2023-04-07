<?php

class Users extends CI_controller
{
    public function User()
    {
        $this->load->helper('xyz');
        test();
        $data['users']=$this->Usermodel->getUserdata();
        $this->load->view('Users/UserList',$data);
    }
}
?>