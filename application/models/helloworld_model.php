<?php

class helloworld_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getAll() {
        $q = $this->db->get('data');

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $rows) {
                $array[] = $rows;
            }
            return $array;
        }
    }

}
