<?php
    // singleton
    class WishManager
    {
        private static $instances = 0;
        private static $manager;
        private function __constructor()
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
            $this->load->database();
            // build query
            $query = $this->db->get('Wishes');
            $wishes = array();
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
        }
    }

?>