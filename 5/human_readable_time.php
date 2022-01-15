<?php
/**
 * Human Readable Time
 * User: egolubev
 * Date: 12.10.2021
 * Time: 23:27
 * @param $seconds
 * @return string
 */

function human_readable($seconds) {
    $t = $seconds;
    $h = floor($t / 3600);
    $m = floor(($t - $h * 3600) / 60);
    $s = $t - $h * 3600 - $m * 60;
    return sprintf('%02d:%02d:%02d', $h, $m, $s);
}
