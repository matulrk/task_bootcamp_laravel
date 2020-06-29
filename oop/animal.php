<?php

    class animal{
        
        public $legs = 2;
        public $cold_blooded = "false";

        public function __construct($name){
            $this->name = $name;
            
        }

        public function set_name($name){
            $this->name = $name;
        }

        public function set_legs($legs){
            $this->legs = $legs;
        }

        public function get_legs(){
            return $this->legs;
        }

        public function get_cold_blooded(){
            return $this->cold_blooded;
        }
    }
?>