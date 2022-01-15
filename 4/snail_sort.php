<?php
/**
 * Snail Sort
 * User: egolubev
 * Date: 15.12.2021
 * Time: 23:27
 * @param $array
 * @return array
 */

function snail($array) {
    $sorted = [];
    while(count($array)) {
        // 1 step
        $sorted = array_merge($sorted, array_shift($array));
        // 2 step
        for($i=0; $i < count($array); $i++) {
            array_push($sorted, array_pop($array[$i]));
        }
        // 3 step
        $sorted = array_merge($sorted, array_reverse(array_pop($array) ?? []));
        // 4 step
        for($i = count($array) - 1; $i >= 0; $i--) {
            array_push($sorted, array_shift($array[$i]));
        }
    }
    return $sorted;
}

$array = [[1, 2, 3, 1], [4, 5, 6, 4], [7, 8, 9, 7], [7, 8, 9, 7]];

$result = snail($array);



