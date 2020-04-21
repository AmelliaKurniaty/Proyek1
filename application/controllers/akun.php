<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class akun extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('akun_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = "Data Akun";
            $data['akun'] = $this->akun_model->getAllakun();

            $this->load->view('template/header');
            $this->load->view('akun', $data);
            $this->load->view('template/footer');
        }
       
        public function edit(){
            $data['title']='Edit Akun';
            $this->form_validation->set_rules('id_user', 'id_user', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
            if ($this->form_validation->run() == FALSE) {
                $data['akun']=$this->buku_model->getbukuById($id);
                $this->load->view('template/header',$data);
                $this->load->view('account/formedit',$data);
                $this->load->view('template/footer');
            }else {
                $this->akun_model->editAkun();
                $this->session->set_flashdata('flash-data', 'diedit');
                redirect('akun','refresh');     
            }   
        }
    }
    
    /* End of file akun.php */
    
?>