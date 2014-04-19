<?php
    include '../classes/User.php';

    class UserManager extends CI_Model
    {
        private static $_instance = NULL;
        private $CurrentUser;

        /*
         * Not allowed to use contructer
         */
        public function __construct()
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

            if( isset( $_SESSION['UID'] )
                && !isset( $_instance->$CurrentUser) ){
                    $_instance->getUserThroughID($_SESSION['UID']);
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

            $_SESSION['UID'] = $uid;

            return 1;
        }

        /*
         *
         */
        public function getUserThroughID( $uid )
        {
            $sql =
                'SELECT UserName, Password, Contribution
                 FROM Users
                 WHERE UserID = ?
                ';
            $query = $this->db->query($sql, array( $uid ) );
            if( $query->num_rows() <= 0)
                return NULL;

            $result = $query->first_row();
            $uname = $result->UserName;
            $psswd = $result->Password;
            $contr = $result->Contribution;

            $resultUser = UserModel($uname, $psswd, $contr, $uid);
            return $resultUser;
        }

        public function getUserImformationThroughID( $uid )
        {
            $resultUser = getUserImformationThroughID( $uid );
            return array(
                'UserID' => $uid,
                'UserName' => $resultUser-> UserName,
                'Contribution' => $resultUser->Contribution,
            );
        }

    }
?>
