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
            $a = new UserModel('god', '1', 0, 1);
            echo $a->Password;
            echo "end";
            $UM = UserManager::getUserManager();
            $p = $UM->getInformationWithName( 'Ron' );
            echo $p->Password;
        }
    }
?>
