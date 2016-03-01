<?php

class Hlo extends CI_Controller {

//    function index() {
//        $this->load->model('helloworld_model');
//        $abc['xyz'] = $this->helloworld_model->getAll();
//        $this->load->view('helloworld_view', $abc);
//    }

    function index() {
        $this->load->view('butn_view');
    }

    function getAlll() {
        $this->load->model('helloworld_model');
        $query['data'] = $this->daytwo_model->getRecords();

        $this->load->view('daytwo_view', $query);
    }

    function insetAll() {
        $this->load->model('daytwo_model');
        $query['data'] = $this->daytwo_model->getRecords();

        $this->load->view('daytwo_view', $query);
    }

}
