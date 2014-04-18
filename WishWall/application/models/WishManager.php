<?php
    class Wish extends CI_Model
    {
        static $instances = 0;
        function __construct()
        {
            $instances++;   
        } 
    }

?>