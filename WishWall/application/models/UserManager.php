include '../classes/User.php';

<?php
    class UserManager extends CI_Controller
    {
        private static $_instance = NULL;
        private $CurrentUser;

        /*
         * Not allowed to use contructer
         */
        private function __construct()
        {
            die('UserManager is a singleton');
        }

        /*
         * factory method
         * return the singleton
         */
        public static function getUserManager()
        {
            if( is_null(self::$_instance )){
                self::$_instance = new UserManager();
            }
            return self::$_instance;
        }

        /*
         * Not allowed to clone
         */
        public function __clone()
        {
            die('Clone is not allowed '. E_USER_ERROR );
        }


    }
?>
