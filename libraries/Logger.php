<?php

    class Logger {

        public static function log($msg) {
            return date('d-m-Y H:i').' '.$msg.PHP_EOL;
        }

    }