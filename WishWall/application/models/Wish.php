<?php
    class Wish extends CI_Model
    {
        // attributes :
        // wish maker, wish helper, date, title, description, expDate, 
        // address, city, state
        var $wishMaker = new User();
        var $wishHelper = new User();
        var $date;
        var $title;
        var $description;
        var $expDate;
        var $address;
        var $city;
        var $state;
        var $completionConfirmed; 
        function __construct($wishMaker, $date, $title, $description
            , $expDate, $address, $city, $state)
        {
            $this->wishMaker = $wishMaker;
            $this->date = $date;
            $this->title = $title;
            $this->description = $description;
            $this->expDate = $expDate;
            $this->address = $address;
            $this->state = $state;
        } 

        // getters
        public function __get($property)
        {
            if($property_exists($this, $property))
            {
                return $this->$property;
            }
        }
        // setters
        public function __set($property, $val)
        {
            if($property_exists($this, $property))
            {
                $this->$property = $val;
            }
        }
        // calculate priority
        public getPriority()
        {
            // formula: priority =  date_difference * 5 + user_contribution * 2
            $currentDate = date('Y-m-d', time());
            $currentDate = strtotime($currentDate);
            $createDate = strtotime($date);
            $date_difference = ($currentDate - $createDate) / 60 / 60 / 24;
        }
        // assign a wish to certain wish helper with given user
        public assignWish($user)
        {
            if(! $user instanceof User) // check if user is an object of User
                return false;
            $wishHelper = $user;
        }
        // confirm completion
        public confirmCompletion()
        {
            if($user == null)
                return false;
            // upgrade helper's contribution
            return true;
        }
    }

?>