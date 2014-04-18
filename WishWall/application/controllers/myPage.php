<?php
    class MyPage extends CI_Controller
    {
        public function view( $page = 'myHome' )
        {
            $data['title'] = ucfirst($page);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer', $data);
        }
    }
?>
