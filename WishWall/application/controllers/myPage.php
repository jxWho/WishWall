<?php
    class MyPage extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function view( $page = 'myHome' )
        {
            $data['title'] = ucfirst($page);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer', $data);
        }
    }
?>
