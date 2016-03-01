<?php

class Mycal extends CI_CONTROLLER {

    function index($year = NULL, $month = NULL) {

        if (!$year) {
            $year = date('y');
        }
        if (!$month) {
            $month = date(m);
        }
        $this->load->model('mycal_model');
        if($day = $this->input->post('day')){
            $this->mycal_model->add_calendar_data(
                    "$year-$month-$day",
                    $this->input->post('data')
                    );
        }
       

        
        $data['calendar'] = $this->mycal_model->generate($year, $month);

        $data['main_content'] = 'mycal_view';
        $this->load->view('includes/tamplete', $data);
        
    }

}
