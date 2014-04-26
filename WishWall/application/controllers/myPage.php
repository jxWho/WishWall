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
        public function view( $page = 'Home' )
        {
            $WM = WishManager::getInstance();
            $UM = UserManager::getUserManager();

            $uid = $_SESSION['UID'];
            $currentUser = $UM->getUserThroughID( $uid );
            $page="".$currentUser->UserName."'s ".$page;
            $data['title'] = ucfirst($page);

            $helpOrmake = $this->input->get('help', 0);
            if( $helpOrmake == 0 ){
                $helpOrmake = "wishMaker";
            }else{
                $helpOrmake = "wishHelper";
            }

            $data['wishes'] = $WM->getWishesFromId($uid, $helpOrmake);

            $this->load->helper('url');
            $links = array();
            $links[] = array(
                current_url(),
                "Wishes I make"
            );
            $links[] = array(
                current_url().'?help=1',
                "Wishes I help"
            );

            $data['links'] = $links;

            $this->load->view('templates/header', $data);
            $this->load->view('logInPages/logout');
            $this->load->view('templates/navigator', $data);
            $this->load->view('templates/mainContent', $data);
            $this->load->view('templates/profile');
            $this->load->view('templates/footer', $data);
        }
    }
?>
