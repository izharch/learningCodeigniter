<?php

class Contact extends CI_Controller {

    function index() {
        $data['main_content'] = 'contact_form';
        $this->load->view('includes/tamplete', $data);
    }

    function contact_us() {
   
        $this->load->model('contact_model');
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
        );



        if ($this->input->post('ajax')) {
            $this->contact_model->add_message($data);
            $data['main_content'] = 'contact_submitted';
            $this->load->view($data['main_content']);
        } else {
            //$this->load->view('includes/tamplete', $data);
            die('abbbb');
        }
    }

}
