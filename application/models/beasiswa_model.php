<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class beasiswa_model extends CI_Model {
    
        public function getAllbeasiswa(){
            $this->db->select('*');
            $this->db->from('siswa');
            $this->db->join('beasiswa','beasiswa.nisn = siswa.nisn');
            
            $query = $this->db->get();
            return $query->result_array();
        }
        
    }
    
    /* End of file beasiswa_model.php */
    
?>