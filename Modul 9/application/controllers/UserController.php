<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function Register()
	{
        if($_POST['pass'] == $_POST['re_pass']){
            if($this->User->Register()) {
                $this->session->set_flashdata('SuccessReg','Success');
                redirect('Landing');
            } else {
                $this->session->set_flashdata('FailReg', 'Fail');
                redirect('Landing/Register');
            }
        } else {
            $this->session->set_flashdata('FailReg', 'Fail');
            redirect('Landing/Register');
        }
    }

    public function Signin() {
        $user = $this->User->findUser();
        if($user != null){
            if($this->input->post('remember-me') != null) {
                set_cookie('logged', $user[0]['Username'], '3600');
                redirect('Landing');
            } else {
                $this->session->set_userdata('successLogin', $user[0]['Username']);
                redirect('Landing');
            }
        } else {
            $this->session->set_flashdata('falselogin','nodata');
            redirect('Landing');
        }
    }

    public function Logout() {
        $cookie = $this->input->cookie('logged');
        if(isset($cookie)) {
            delete_cookie('logged');
            redirect('Landing');
        } else {
            session_destroy();
            redirect('Landing');
        }
    }
}