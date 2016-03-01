<?php

class Email extends CI_Controller {

    function index() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 587,
            'smtp_user' => 'izhar.purplearts@gmail.com',
            'smtp_pass' => 'acer5366japan*?'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("/r/n");

        $this->email->from('izhar.purplearts@gmail.com', 'izhar choudhry');
        $this->email->to('izhar.purplearts@gmail.com');
        $this->email->subject('test');
        $this->email->message('is it working?? o great it is working');

        if ($this->email->send()) {
            echo "o good";
        } else {
            show_error($this->email->print_debugger());
        }
    }

}
