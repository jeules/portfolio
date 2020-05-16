<?php
    class Main extends CI_Controller {
        public function index(){
            $data['message'] = '<!--<h3 class="display-5">Julius Almodal</h3>--><br/><br/>
                                <span>Hello, I\'m Jeules. A passionate web developer based in Philippines. <br/>
                                I\'m still working on my contents but thanks for dropping in!</span><br/>';
            $this->load->view('header');
            $this->load->view('message_view', $data);
            $this->load->view('footer');
        }
    }
?>
