<?php

namespace practicals;

class Practical {
    //Prints "Hello, World!" to the standard output.
    public static function printHello() {
        echo "Hello, World!";
    }

 
    //Takes two numbers as arguments and returns their sum.
     
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    
     //Takes an integer 'n' as an argument and returns an array of
    public static function generateFibonacciSequence($n) {
        $fibSequence = array();
        if ($n > 0) {
            $a = 0;
            $b = 1;
            for ($i = 0; $i < $n; $i++) {
                $fibSequence[] = $a;
                $temp = $a;
                $a = $b;
                $b = $temp + $b;
            }
        }
        return $fibSequence;
    }
}


?>
