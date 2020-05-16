<?php
    class Main extends CI_Controller {
        public function index(){
            $data['message'] = '<h4 class="display-4">Welcome</h4>';
            $this->load->view('header');
            $this->load->view('message_view', $data);
            $this->load->view('footer');
        }
    }
?>
