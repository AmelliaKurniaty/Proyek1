<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class akun_model extends CI_Model {
        
        public function getAllakun(){
            $query = $this->db->get('user');
            return $query->result_array();
        }
        public function getakunById($id){
            $query=$this->db->get_where('user', array('id_user' => $id));
            return $query->row_array();
        }
        public function editAkun(){
            $data=[
                "username" => $this->input->post('username', true),
                 "password" => $this->input->post('password', true)
             ];
             $this->db->where('id_user', $this->input->post('id_user'));
             $this->db->update('user',$data);
        }
    }
    
    /* End of file akun_model.php */
    
?>