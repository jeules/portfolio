<?php
    class Main extends CI_Controller {
        public function index(){
            $data['message'] = '<!--<h3 class="display-5">Julius Almodal</h3>--><br/><br/>
                                <span>Hello, I\'m Jeules. A passionate web developer based in Philippines <br/>
                                and I will accept assignments worldwide soon!</span><br/>';
            $this->load->view('header');
            $this->load->view('message_view', $data);
            $this->load->view('footer');
        }
    }
?>
