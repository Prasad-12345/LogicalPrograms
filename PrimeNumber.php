<?php
    function primeNumber(){
        $n = readline("Enter number :");//user input
        if($n == 0 || $n == 1){
            echo $n . " " . "is not prime number";
        }

        //to determine the number is prime or not
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0){
                echo $n . " " . "is not prime number";
                break;
            }
            else{
                echo $n . " " . "is prime number";
                break;
            }
        }
    }
    primeNumber();
?>