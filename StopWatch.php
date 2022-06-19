<?php
    function stopwatch(){
        $input = readline("Press the key Enter twice two measure the time difference between them");

        if(empty($input)){
            $time1 = microtime(true);
        }

        $input = readline();

        if(empty($input)){
            $time2 = microtime(true);
        }

        //calculate time elapsed
        echo "Time elapsed :" . " " . (int)($time2 - $time1) . "sec";
    }
    stopwatch();
?>