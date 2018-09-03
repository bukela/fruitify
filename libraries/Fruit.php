<?php

    abstract class Fruit {

        public $mass;

        public $name;

        protected $min;

        protected $max;

        public $rotten;

        protected $rotten_percent;

        public function fruitMass() {
            $this->mass = mt_rand($this->min,$this->max);
        }

        public function checkRotten() {
            $probability = mt_rand(1, 100);
            $probability < $this->rotten_percent ? $this->rotten = true : $this->rotten = false;
        }

    }