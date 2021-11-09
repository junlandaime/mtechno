<?php

class M_lecturer extends CI_model {

    public function getALlLecturer()
    {
        return $this->db->get('tbl_lecturer')->result_array();
        
    }

}