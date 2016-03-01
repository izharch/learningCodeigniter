<?php

class Gallery_model extends CI_Model {

    var $gallery_path;
    var $gallery_path_url;

    function Gallery_model() {
        //to upload image we use a basic windows folder path
        $this->gallery_path = realpath(APPPATH . '../assets/images');
        //to fetch an image we use a path in our project where image is uploaded
        $this->gallery_path_url = base_url() . 'assets/images/';
      
    }

    function do_upload() {

        $data = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $this->gallery_path
        );

        $this->load->library('upload', $data);
        $this->upload->do_upload();

        //data() brings all the information about image
        $image_data = $this->upload->data();

        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->gallery_path . '/thumbs',
            'maintain_ration' => true,
            'width' => 150,
            'height' => 100
        );

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    function get_images() {


        $files = scandir($this->gallery_path);
        $files = array_diff($files, array('.', '..', 'thumbs'));


        $images = array();

        foreach ($files as $file) {
            $images[] = array(
                'url' => $this->gallery_path_url . $file,
                'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
            );
        }
        return $images;
    }

}
