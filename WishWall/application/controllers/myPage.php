<?php
    session_start();
    class MyPage extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('UserManager');
            $this->load->model('WishManager');

            if( !isset( $_SESSION['UID'])){
                $this->load->helper('url');
                redirect(base_url().'index.php/LogIn');
            }
        }
        public function view( $page = 'myHome' )
        {
            $UM = WishManager::getInstance();

            $uid = $_SESSION['UID'];

            $data['title'] = ucfirst($page);

            $data['wishes'] = $UM->getWishesFromId($uid, "wishMaker");

            $this->load->view('templates/header', $data);
            $this->load->view('logInPages/logout');
            $this->load->view('templates/navigator', $data);
            $this->load->view('templates/mainContent', $data);
            $this->load->view('templates/profile');
            $this->load->view('templates/footer', $data);
        }
    }
?>
