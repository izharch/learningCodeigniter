<?php

class Files extends CI_CONTROLLER {

  
    
    
    function write_test() {

        $data = "hello world";
        write_file($this->file, $data);
        echo("finished writing");
    }
    
    function read_test() {
        $this->load->helper('file');
        $file = "application" . DIRECTORY_SEPARATOR . "test_file" . DIRECTORY_SEPARATOR . "ne.txt";
        $string = read_file($file);
        echo $string;
    }
       }
