<?php
    class UserModel
    {
        //Attribute
        private $UserName;
        private $Password;
        private $Contribution;
        private $UserID;

        //Contructor
        public function __construct($name, $password, $contrubution, $uid)
        {
            $this->$UserName = $name;
            $this->$Password = $password;
            $this->$Contribution = $contrubution;
            $this->$UserID = $uid;
        }

        //getter
        public function __get($property)
        {
            if( property_exists($this, $property )){
                return $this->$property;
            }
        }

        //setter
        public function __set($property, $value)
        {
            if( property_exists($this, $property )){
                $this->$property = $value;
            }
        }
    }
?>
