<?php

class Contact_model extends CI_Model {
    
    function add_message($data) {
        $this->db->insert('contact', $data);
        return;
    }
}

