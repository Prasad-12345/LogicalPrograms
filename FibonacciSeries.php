<?php
    function fibonacciSeries(){
        $n = readline("Enter number :"); //user input
        $num1 = 0;
        $num2 = 1;

        echo 0 . "," . " " . 1 . "," . " ";

        //to print fobonacci series
        for($i = 3; $i <= $n; $i++){
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
            echo $num3 . "," . " ";
        }
    }
    fibonacciSeries();
?>