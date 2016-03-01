<?php

class Crud_model extends CI_Model {

    function add_record($data) {
        $this->db->insert('daytwo', $data);
        return;
    }

    function view_records() {
        $query = $this->db->get('daytwo');
        return $query->result();
    }

    function delete_record() {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('daytwo');
    }

    function update_record() {
        $this->db->where('id', $this->uri->segment(3));
        $query = $this->db->get('daytwo');
        return $query->result();
    }

    function edit_record($data) {
        
        $this->db->where('id', $this->uri->segment(3));
        $this->db->update('daytwo', $data);
    }

}
