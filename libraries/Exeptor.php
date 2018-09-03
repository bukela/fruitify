<?php
    class Exeptor {
        public static function checkFull($weight) {
            try {
                    if ($weight > 30) {
                    throw new Exception('Juicer capacity overload'); 
                }
            }
            catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }

  
  
  
  
  