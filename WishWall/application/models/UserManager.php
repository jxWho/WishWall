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
                $_instance->load->database();
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

        /*
         *
         */
        public function logInWithUserNameAndPassword( $uname, $p )
        {
            $sqlS =
                'SELECT UserID, Contribution
                FROM Users WHERE UserName = ? AND Password = ?';
            $query = $this->db->query($sql, array( $uname, $p ) );
            if ( $query->num_rows() <= 0 )
                return 0;

            $results = $query->first_row();
            $contri = $results->Contribution;
            $uid = $result->UserID;
            $this->$CurrentUser = UserModel($uname, $p, $contri, $uid);

            return 1;
        }

    }
?>
