<?php
    // singleton
    class WishManager
    {
        private static $instances = 0;
        private static $manager;
        static public function getInstance()
        {
            if(self::$instances == 0)// first instance
            {
                $manager = new WishManager();
                self::$instances++;
                echo "first";
                return self::$manager;
            }    
            else
            {
                echo "duplicate";
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

        }
    }

?>