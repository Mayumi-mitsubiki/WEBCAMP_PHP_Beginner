<?php
//練習1
$color = ['Red','Yellow','Green','Blue','Black',];
foreach ($color as $value){
    echo "{$value} \n";
}

//練習2
$colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];
foreach($colors as $k => $v){
    echo "{$k} -> {$v} \n";
}