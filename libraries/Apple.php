<?php

    class Apple extends Fruit {

        public $rotten_percent = 20;

        public $name = 'apple';

        public $brand = 'newtonka';

        public $min = 1;

        public $max = 3;

        public function __construct() {
            $this->checkRotten();
            $this->fruitMass();
        }
         
    }