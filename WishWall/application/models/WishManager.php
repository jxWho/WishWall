<?php
require_once "./application/classes/Wish.php";
    // singleton
    class WishManager extends CI_Model
    {
        private static $instances = 0;
        private static $manager;
        public function __construct()
        {
            $this->load->database();
        }
        static public function getInstance()
        {
            if(self::$instances == 0)// first instance
            {
                self::$manager = new WishManager();
                self::$instances++;
                return self::$manager;
            }
            else
            {
                return self::$manager;
            }

        }
        static public function getInstanceNumber()
        {
            return self::$instances;
        }

        // get all wishes from database, and return them after sorting
        public function getAllWishes($num, $offset)
        {          
            // build query
            $query = $this->db->get_where('Wishes', array('Status' => '0'), $num, $offset);
            $wishes = array();
            foreach($query->result() as $row)
            {
                $wishes[] = new Wish($row->WishID, $row->WishMaker, $row->WishHelper, 
                    $row->Date, $row->Title, $row->Description, $row->ExpireDate, $row->Status);
            }
            // sort
            for($i = 0; $i < count($wishes); $i++)
            {
                $max = $i;
                for($j = $i; $j < count($wishes); $j++)
                {
                    if($wishes[$j]->getPriority() >= $wishes[$max]->getPriority())
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
        }
        // get wishes according to given user id
        public function getWishesFromId($id, $role)
        {
            $wishes = array();
            // build query
            if($role == "wishMaker")
                $query = $this->db->query("SELECT * FROM Wishes WHERE WishMaker = '" . $id . "' ");
            if($role == "wishHelper")
                $query = $this->db->query("SELECT * FROM Wishes WHERE WishHelper = '" . $id . "' ");
            $i = 0;
            foreach($query->result() as $row)
            {
                $wishes[] = new Wish($row->WishID, $row->WishMaker, $row->WishHelper, 
                    $row->Date, $row->Title, $row->Description, $row->ExpireDate, $row->Status);
            }
            return $wishes;
        }

        // create a new wish
        // given: title, wish maker, description, expiration date
        public function createNewWish($title, $wishMaker, $description, $expDate)
        {
            // date
            $date = date("Y-m-d", time());
            $data = array(
                'Date' => $date , 
                'Title' => $title ,
                'Description' => $description ,
                'ExpireDate' => $expDate ,
                'WishMaker' => $wishMaker ,
                'WishHelper' => $wishMaker ,
                'Status' => 0
            );

            $this->db->insert('Wishes', $data); 
        }

        // help with certain wish
        // given: wishId, wish helper
        public function help($wishId, $wishHelper)
        {
            $data = array(
               'WishHelper' => $wishHelper,
               'Status' => '1'
            );
            $this->db->where('WishID', $wishId);
            $this->db->update('Wishes', $data); 
        }

        // confirms a wish
        // status changed to 1
        public function confirm($wishId)
        {
            $data = array(
               'Status' => '1'
            );
            $this->db->where('WishID', $wishId);
            $this->db->update('Wishes', $data); 
        }
    }

?>
