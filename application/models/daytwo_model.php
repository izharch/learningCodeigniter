<?php

class daytwo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getRecords() {
        
        $q = $this->db->insert('daytwo');

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $rows) {
                $array[] = $rows;
            }
            return $array;
        }
    }

}
