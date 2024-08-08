<?php
function fibonacci ($max) {
    $fib = [0, 1];

    //0,1
    echo $fib[0] . "\n" . $fib[1] . "\n";

    //繰り返し
    $i = 2;
    while (true) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];

        //出力
        echo $fib[$i] . "\n";

        //終了条件
        if ($fib[$i] > $max) {
            break;
        }

        $i++;
    }
}

//出力
fibonacci (10000);