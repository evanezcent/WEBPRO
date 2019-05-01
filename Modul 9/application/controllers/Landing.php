<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('logged');
        if(isset($cookie) || isset($_SESSION['successLogin'])){
            $this->loginPage();
        } else {
            $data['title'] = "Login";
            $this->load->view('Landing/Header', $data);
            $this->load->view('Landing/Login', $data);
            $this->load->view('Landing/Footer');
        }
    }
    
    public function Register() {
        $data['title'] = "Register";
        $this->load->view('Landing/Header', $data);
        $this->load->view('Landing/Register');
        $this->load->view('Landing/Footer');
    }

    public function loginPage() {
        $cookie = $this->input->cookie('logged');
        $data['image'] = $this->User->getImage();
        $this->load->view('loggedin', $data);
    }
}