<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {
    public function do_upload() {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 4096;
        $config['max_width']        = 1920;
        $config['max_height']       = 1080;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('Landing/loginPage');
        } else {
            $upload = $this->upload->data();
            $this->session->set_flashdata('upload_data', $upload['file_name']);
            $this->User->imageUpload($upload['file_name']);
            redirect('Landing/loginPage');
        }
    }
}