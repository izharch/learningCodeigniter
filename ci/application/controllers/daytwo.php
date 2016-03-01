<?php 

class Daytwo extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }
    
    function members_area() {
        
        $data['main_content'] = 'view_records' ;
        
        $this->load->view('includes/tamplete', $data);
    }
    
    function is_logged_in(){
        $is_logged_in = $this->session->set_userdata('is_logged_in');
        if(!isset($is_logged_in) && $is_logged_in != TRUE) {
            $data['main_content'] = 'members_only';
            $this->load->view('includes/tamplete', $data);
        }
    }
}

