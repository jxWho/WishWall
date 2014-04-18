<?php
    class UserModel
    {
        //Attribute
        private $UserName;
        private $Password;
        private $Contribution;
        private $UserID;

        //Contructor
        public function __construct($name, $password, $contrubution)
        {
            $this->$UserName = $name;
            $this->$Password = $password;
            $this->$Contribution = $contrubution;
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
