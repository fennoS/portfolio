<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('UploadModel');
    }

    public function index($error = null)
    {	
		crender('index', array('error' => ''));
    }

    public function uploadFile() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg|csv'; 
         $config['max_size']      = 10000; 
         $config['max_width']     = 1920; 
         $config['max_height']    = 1080;  
         $row = 1;

         $this->load->library('upload', $config);
         print_r($this->upload->display_errors());
         if (!$this->upload->do_upload('fileName')) {
            $error = array('error' => $this->upload->display_errors()); 
            print_r($this->upload->display_errors());
            $this->UploadModel->insertFileName($this->upload->data());
            redirect('upload/index', $error); 
         } else { 
            redirect('files/index');
         } 
      } 

  	public function getAnswers($data) {
  		return $data;
  	}
}
