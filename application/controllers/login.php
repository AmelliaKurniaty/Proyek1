<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login extends CI_Controller {
    
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('login_model');
            $this->load->library('session');
        }
        
        public function index(){
            $this->load->view('login');
        }

        public function proses_login(){
            $username=htmlspecialchars($this->input->post('username'));
            $password=htmlspecialchars($this->input->post('password'));

            $ceklogin=$this->login_model->login($username,$password);

            if($ceklogin){
                foreach($ceklogin as $row);
                $this->session->set_userdata('user',$row->username);
                $this->session->set_userdata('level',$row->level);

                if($this->session->userdata('level')=="admin"){
                    redirect('../akun');
                }elseif($this->session->userdata('level')=="siswa"){
                    redirect('../biodata_siswa');
                }
            }
            else{
                $this->session->set_flashdata('message','password salah');
                redirect('login');
                // $data['pesan']="username dan password anda salah";
                // $data['title']="Login";
                // $this->load->view('login');
                // redirect('login/index','refresh');
            }
        }
        
        // public function logout(){
        //     $this->session->sess_destroy();
        //     redirect('login','refresh');
        // }
    }
    
    /* End of file login.php */
    
?>