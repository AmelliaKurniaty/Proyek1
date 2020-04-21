<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class siswa_model extends CI_Model {

        public function getAllsiswa(){
            $query = $this->db->get('siswa');
            return $query->result_array();
        }
    }
    
    /* End of file siswa_model.php */
    
?>