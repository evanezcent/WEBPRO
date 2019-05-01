<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function Register() {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            "Username" => $this->input->post('name'),
            "Email" => $this->input->post('email'),
            "Pass" => md5($this->input->post('pass')),
            "RegisTime" => Date("d-m-Y, H:i:s")
        );

        if($this->isExist($data['Username'])) {
            return false;
        } else {
            $this->db->insert('register', $data);
            $this->db->insert('login',
            array(
                "Username" => $data['Username'],
                "Pass" => $data['Pass']
            ));
            return true;
        }
    }

    public function isExist($username) {
        $this->db->where("Username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "Username" => $this->input->post('your_name'),
            "Pass" => md5($this->input->post('your_pass'))
        );

        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }

    public function imageUpload($imgName) {
        $this->db->insert('image_path', array('ImgName' => $imgName));
    }

    public function getImage() {
        return $this->db->get('image_path')->result_array();
    }
}