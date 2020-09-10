<?php 

    class Convert extends CI_Model {
        public function tampil_data()
        {
            return $this->db->get('tb_converter');
        }
        // public function input_data()
        // {
        //     return $this->db->post('tb_mahasiswa');
        // }

        
    }

?>
