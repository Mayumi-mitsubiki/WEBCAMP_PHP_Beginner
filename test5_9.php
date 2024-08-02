<?php
declare(strict_types=1);
//
function myFuncStringAdd(string $a, string $b) : string
{
    //
    $c = "{$a}{$b}";

    //戻り値
    return $c;
}
//
echo myFuncStringAdd('aaa', 'bbb');