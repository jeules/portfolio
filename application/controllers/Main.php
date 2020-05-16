<?php
    class Main extends CI_Controller {
        public function index(){
            $data['message'] = 'Welcome to my site';
            $this->load->view('header');
            $this->load->view('message_view', $data);
            $this->load->view('footer');
        }
    }
?>
