<?php
    // singleton
    class WishManager extends CI_Model
    {
        private static $instances = 0;
        private static $manager;
        public function __constructor()
        {
            ;
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
        public function getAllWishes()
        {
            // load database
            $this->load->database();
            // build query
            $query = $this->db->get('Wishes');
            $wishes = array();
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

        }
    }

?>