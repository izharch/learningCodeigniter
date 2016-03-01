<?php

class Login extends CI_Controller {

    function index() {
        $data['main_content'] = 'login_view';
        $this->load->view('includes/tamplete', $data);
    }

    function validate_cred() {
        
        $this->load->model('signup_model');
        $query = $this->signup_model->validate_credentials();

        if ($query) {

            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => TRUE
            );

            $this->session->set_userdata($data);
            redirect('daytwo/members_area');
        } 
        
        else {
            $this->index();
        }
    }
    
    function signup_user() {
        
        $data['main_content'] = 'signup_form' ;
        $this->load->view('includes/tamplete', $data);
    }
    
    function create_member() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name' , 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address' , 'trim|required|valid_email');
        $this->form_validation->set_rules('user_name', 'User Name' , 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_lenth[8]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password]');
    
        if($this->form_validation->run()==FALSE) {
            $this->signup_user();
        }
        else {
            $this->load->model('signup_model');
            if($query = $this->signup_model->create_member()){
                $data['main_content'] = 'signup_successful';
                $this->load->view('includes/tamplete', $data); 
            }
            else{
                $this->signup_user();
            }
            
            
        }
        
    }
    
    function logout() {
        $this->session->sess_destroy();
        $this->index();
    }

}
