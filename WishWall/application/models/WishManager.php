<?php
    // singleton
<<<<<<< HEAD
    class WishManager
    {
        private static $instances = 0;
        private static $manager;
=======
    class WishManager extends CI_Model
    {
        private static $instances = 0;
        private static $manager;
        public function __constructor()
        {
            ;
        }
>>>>>>> master
        static public function getInstance()
        {
            if(self::$instances == 0)// first instance
            {
<<<<<<< HEAD
                $manager = new WishManager();
                self::$instances++;
                echo "first";
=======
                self::$manager = new WishManager();
                self::$instances++;
>>>>>>> master
                return self::$manager;
            }    
            else
            {
<<<<<<< HEAD
                echo "duplicate";
=======
>>>>>>> master
                return self::$manager;
            }
                
        }
        static public function getInstanceNumber()
        {
            return self::$instances;
        }

        // get all wishes from database, and return them after sorting
        public function getAllWishes()
        {
<<<<<<< HEAD
=======
            // load database
>>>>>>> master
            $this->load->database();
            // build query
            $query = $this->db->get('Wishes');
            $wishes = array();
<<<<<<< HEAD
            foreach($query->result as $row)
            {
                $wishes[] = new Wish(new User($row->WishMaker), new User($row->WishHelper), 
                    $row->Date, $row->Title, $row->Description, $row->ExpireDate, $row->Status);
            }
            // sort
            for($i = 0; $i < count($wishes); $i++)
            {
                $max = $i;
                for($j = $i; $j < count($wishes); $j++)
                {
                    if($wishes[$j].getPriority() >= $wishes[$max].getPriority())
                    {
                        $max = $j;
                    }
                }
                // swap 
                $temp = $wishes[$i];
                $wishes[$i] = $wishes[$max];
                $wishes[$max] = $temp;
            }

            // return an array of wishes
            return $wishes;
=======
            $i = 0;
            foreach($query->result() as $row)
            {

                $wishes[$i]['date'] = $row->Date;
                $wishes[$i]['title'] = $row->Title;
                $wishes[$i]['description'] = $row->Description;
                $wishes[$i]['expireDate'] = $row->ExpireDate;
                $wishes[$i]['wishMaker'] = $row->WishMaker;// need to build a user with given user id
                $wishes[$i]['wishHelper'] = $row->WishHelper;// save as above
                $wishes[$i++]['status'] = $row->Status;
                $wishList[] = new Wish(new User($wishes[$i]['wishMaker']), new User($wishes[$i]['wishHelper'])
                    , $wishes[$i]['date'], $wishes[$i]['title'], $wishes[$i]['description'], $wishes[$i]['expireDate']);
            }
            $size = $i;
            $id = array();
            // sort
            for($k = 0; $k < $size; $k++)
            {
                $max = 0;
                for($p = 0; $p < $size; $p++)
                {
                    $wishes[]
                }
            }
            return $wishes;

>>>>>>> master
        }
    }

?>