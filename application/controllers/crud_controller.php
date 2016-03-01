<?php

class Crud_controller extends CI_Controller {

    function index() {
        $this->load->view('crud_view');
    }

    function add_records() {
        $this->load->view('crud_view');

        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'contents' => $this->input->post('content')
        );

        $this->crud_model->add_record($data);
        $this->index();
    }

    function view_records() {




        $query = $this->crud_model->view_records();
        $data['record'] = $query;

        $this->load->view('view_records', $data);
    }

    function delete_record() {
        $this->crud_model->delete_record();
        $this->index();
    }

    function update_record() {
        if ($query = $this->crud_model->update_record()) {
            $data['record'] = $query;
        }
        $this->load->view('update_view', $data);
    }

    function edit_record() {
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'contents' => $this->input->post('content'),
        );

        $this->crud_model->edit_record($data);
        $this->index();
    }

    function pagination_records() {
        $this->load->model('crud_model');
        $this->load->library('pagination');
        $this->load->library('table');

        $config['base_url'] = 'http://127.0.0.1/ci/index.php/crud_controller/pagination_records/';       
        $config['total_rows'] = $this->db->get('daytwo')->num_rows();
        $config['per_page'] = 2;
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<div id="pagination">';
        
        $config['full_tag_close'] = '</div>';
        

        $this->pagination->initialize($config);
        
        $data['records'] = $this->db->get('daytwo',$config['per_page'] , $this->uri->segment(3));
       
        


        $this->load->view('pagination_view', $data);
    }

}
