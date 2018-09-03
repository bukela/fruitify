<?php

    class Juicer {
        
        public $apple;

        public function squeezing() {
            for ($i = 0; $i < 100; $i++) {
                $apple = new Apple;
                
                if($apple->rotten) {
                    file_put_contents('log.txt', Logger::log('Jabuka odbacena'), FILE_APPEND);
                    } else {
                        file_put_contents('log.txt', Logger::log('Jabuka ubacena'), FILE_APPEND);
                        
                    }
                    // echo $this->masa;
            }
        }
    }