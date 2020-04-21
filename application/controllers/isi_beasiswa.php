<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class isi_beasiswa extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Isi Biodata Siswa";
            $this->load->view('template/header2');
            $this->load->view('isi_beasiswa', $data);
            $this->load->view('template/footer2');
        }
    
    }
    
    /* End of file isi_beasiswa.php */
    
?>