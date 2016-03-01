<?php

class Signup_model extends CI_Model {

    function validate_credentials() {

        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');

        if ($query->num_rows == 1) {
            return TRUE;
        } else {
            echo ('record not found');
        }
    }

    function create_member() {
        $create_member = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('user_name'),
            'password' => md5($this->input->post('password')),
            'password2' => md5($this->input->post('password2'))
        );

        $insert = $this->db->insert('membership', $create_member);
        return $insert;
    }
}
