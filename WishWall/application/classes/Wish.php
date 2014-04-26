<?php
    class Wish
    {
        // attributes :
        // wish maker, wish helper, date, title, description, expDate, 
        // address, city, state
        private $wishId;
        private $wishMaker;
        private $wishHelper;
        private $date;
        private $title;
        private $description;
        private $expDate;
        private $completionConfirmed; 
        function __construct($wishId, $wishMaker, $wishHelper, $date, $title, $description, $expDate, $status)
        {
            $this->wishId = $wishId;
            $this->wishMaker = $wishMaker;
            $this->wishHelper = $wishHelper;
            $this->date = $date;
            $this->title = $title;
            $this->description = $description;
            $this->expDate = $expDate;
            $this->completionConfirmed = $status;
        } 

        // getters
        public function __get($property)
        {
            if(property_exists($this, $property))
            {
                return $this->$property;
            }
        }
        // setters
        public function __set($property, $val)
        {
            if(property_exists($this, $property))
            {
                $this->$property = $val;
            }
        }
        // calculate priority
        public function getPriority()
        {
            // formula: priority =  date_difference * 5 + user_contribution * 2
            $currentDate = date('Y-m-d', time());
            $currentDate = strtotime($currentDate);
            $createDate = strtotime($this->date);
            $date_difference = ($currentDate - $createDate) / 60 / 60 / 24;
            return $date_difference * 5;
        }
        // assign a wish to certain wish helper with given user
        public function assignWish($user)
        {
            if(! $user instanceof User) // check if user is an object of User
                return false;
            $wishHelper = $user;
        }
        // confirm completion
        public function confirmCompletion()
        {
            if($user == null)
                return false;
            // upgrade helper's contribution
            return true;
        }
    }

?>