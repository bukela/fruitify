<?php
    class Exeptor {
        public static function checkFull($number) {
            try {
                    if ($number > 30) {
                    throw new Exception('Juicer capacity overload'); 
                }
            }
            catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }

  
  
  
  
  