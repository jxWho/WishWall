<?php
    if( !session_status() == PHP_SESSION_ACTIVE )
        session_start();
    require_once './application/classes/User.php';

    class test extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('UserManager');
        }

        public function index()
        {
            $UM = UserManager::getUserManager();
            $p = $UM->getUserThroughID( 2 );
            print_r($p);
        }
    }
?>
