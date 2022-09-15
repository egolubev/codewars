<?php
/**
 * Perimeter of squares in a rectangle
 * User: egolubev
 * Date: 15.09.2022
 * Time: 22:00
 */

function perimeter($n) {
    return array_sum(fibonacci($n)) * 4;
}

function fibonacci($n, $first = 1, $second = 1)
{
    $fib = [$first, $second];
    for($i=1; $i<$n; $i++)
    {
        $fib[] = $fib[$i] + $fib[$i-1];
    }
    return $fib;
}
