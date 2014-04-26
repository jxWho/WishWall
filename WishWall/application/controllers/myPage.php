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
            }else{
                if( !isset( $_SESSION['userName'] ) ){
                    $UM = UserManager::getUserManager();
                    $currentUser = $UM->getUserThroughID( $_SESSION['UID']);
                    $_SESSION['userName'] = $currentUser->UserName;

                }
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

            $wishesMake = $WM->getWishesFromID($uid, "wishMaker");
            $wishesHelp = $WM->getWishesFromID($uid, "wishHelper");
            $data['wishesHelp'] = count( $wishesHelp );
            $data['wishesMake'] = count( $wishesMake );
            $data['userName'] = $_SESSION['userName'];

            if( $helpOrmake == 0 ){
                $data['wishes'] = $wishesMake;
            }else{
                $data['wishes'] = $wishesHelp;
            }


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
