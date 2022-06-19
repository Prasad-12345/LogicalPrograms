<?php
    function reverseNumber(){
        $n = readline("Enter number :"); //user input
        //initializing variables
        $reverse = 0;
        $remainder = 0;
        //to get reverse number iterate through loop
        while($n > 0){
            $remainder = $n % 10;
            $reverse = ($reverse * 10) + $remainder;
            $n = (int) ($n/10);
        }
        echo "Reverse number : " . $reverse;
    }
    reverseNumber();
?>