<?php
    function perfectNumber(){
        $n = readline("Enter number :");//user input
        $sum = 0;

        //finind its factors and adding them
        for($i = 1; $i < $n; $i++){
            if($n % $i == 0){
                $sum = $sum + $i;
            }
        }
        //check sum is equal to number
        if($n == $sum){
            echo $n . " " . "is perfect number";
        }
        else{
            echo $n . " " . "is not perfect number";
        }
    }
    perfectNumber();
?>