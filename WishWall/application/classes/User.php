<?php
    class UserModel
    {
        //Attribute
        private $UserName;
        private $Password;
        private $Contribution;
        private $UserID;
        private $Address;
        private $Email;
        private $PhoneNumber;

        //Contructor
        public function __construct($name,
                                    $password,
                                    $contrubution,
                                    $uid,
                                    $address = NULL,
                                    $email = NULL,
                                    $pnumber = NULL
                                )
        {
            $this->UserName = $name;
            $this->Password = $password;
            $this->Contribution = $contrubution;
            $this->UserID = $uid;
            $this->Address = $address;
            $this->Email = $email;
            $this->PhoneNumber = $pnumber;
        }


        //getter
        public function __get($property)
        {
            if( property_exists($this, $property )){
                return $this->$property;
            }else{
                echo 'No such property ';
            }
        }

        //setter
        public function __set($property, $value)
        {
            if( property_exists($this, $property )){
                $this->$property = $value;
            }else{
                echo 'No such property';
            }
        }
    }
?>
