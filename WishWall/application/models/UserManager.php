<?php
    require_once './application/classes/User.php';

    if( session_status() != PHP_SESSION_ACTIVE )
        session_start();

    class UserManager extends CI_Model
    {
        private static $_instance = NULL;
        private $CurrentUser;

        /*
         * Not allowed to use contructer
         */

        /*
         * factory method
         * return the singleton
         */
        public static function getUserManager()
        {
            if( is_null(self::$_instance )){
                self::$_instance = new UserManager();
                self::$_instance->load->database();
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

        public function __call( $name, $arguments )
        {
                echo ('No such method '.$name);
        }

        public static function __callStatic( $name, $arguments)
        {
            echo ('no such method '.$name);
        }

        /*
         *
         */
        public function logInWithUserNameAndPassword( $uname, $p )
        {
            $sqlS =
                'SELECT UserID, Contribution
                FROM Users WHERE UserName = ? AND Password = ?';
            $query = $this->db->query($sqlS, array( $uname, $p ) );
            if ( $query->num_rows() <= 0 )
                return 0;

            $results = $query->first_row();
            $contri = $results->Contribution;
            $uid = $results->UserID;

            $_SESSION['UID'] = $uid;

            return 1;
        }

        /*
         *
         */
        public function getUserThroughID( $uid )
        {
            $conditions = array("UserID" => $uid);
            $query = $this->db->get_where('Users', $conditions);

            if( $query->num_rows() <= 0)
                return NULL;

            $result = $query->first_row();
            $uname = $result->UserName;
            $psswd = $result->Password;
            $contr = $result->Contribution;
            $address = $result->Address;
            $email = $result->Email;
            $pnumber = $result->PhoneNumber;

            $resultUser =
                new UserModel(
                            $uname,
                            $psswd,
                            $contr,
                            $uid,
                            $address,
                            $email,
                            $pnumber
                        );

            return $resultUser;
        }


        public function getInformationWithName( $username )
        {
            $query =
                $this->db->get_where('Users', array('UserName' => $username));

            $row = $query->num_rows();
            if( $row == 1 ){
                $re = $query->result_array()[0];
                $name = $re['UserName'];
                $password = $re['Password'];
                $contr = $re['Contribution'];
                $id = $re['UserID'];
                $resultUser = new UserModel($name, $password, $contr, $id);
                return $resultUser;
            }
           return NULL;
        }

        public function createUser( $uname, $passwd )
        {
            $data = array(
                'UserName' => $uname,
                'Password' => $passwd,
                'Contribution' => 0
            );
            $result = $this->db->insert('Users', $data);
            if( $result ){
                $newUser = $this->getInformationWithName( $uname );

                if( $newUser === NULL ){
                    return -1;
                }

                $uid = $newUser->UserID;

                return $uid;
            }else{
                //failed to Create
                return -1;
            }
        }

        public function changeContribution( $uid, $addend=1 )
        {
           $query = $this->db->select('Contribution');
           $conditions = array(
               'UserID' => $uid
           );
           $query = $this->db->get_where('Users', $conditions);
           $p = $query->first_row();
           $oldContribution = $p->Contribution;
           $newContribution = $oldContribution + $addend;
           $data = array(
               "Contribution" => $newContribution
           );

           $query = $this->db->where('UserID', $uid);
           $result = $this->db->update('Users', $data);
           return $result;
        }

    }
?>
