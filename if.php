<?php

//
if (true) {
    echo "true だとここを通る？ \n";
}
//
if (false) {
    echo "false だとここを通る？ \n";
}

//
$age = 18;
if ($age >= 18) {
    echo "成人です \n";
}
if ($age < 18) {
    echo "未成年です \n";
}

//elseで書き換え
$age = 18;
if ($age >= 18) {
    echo "成人です \n";
} else {
    echo "未成年です \n";
}

//elseif付き
if ($age > 18) {
    echo "成人 \n";
} else if ($age === 18) {
    echo "新成人おめでとう！ \n";
} else {
    echo "未成年 \n";
}
