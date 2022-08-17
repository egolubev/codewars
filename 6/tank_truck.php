<?php
/**
 * Tank Truck
 * User: egolubev
 * Date: 17.08.2022
 * Time: 22:25
 */

function tankvol($h, $d, $vt) {
    $r = $d / 2;
    // получаем высоту цилиндра
    $H = $vt / (pi() * pow($r,2));
    // определяем угол
    $sin = sqrt(pow($r,2) - pow(($r - $h), 2)) / $r;
    $alfa = 2 * rad2deg(asin($sin));
    // площадь треугольника
    $s1 = 0.5 * pow($r,2) * sin(deg2rad($alfa));
    // площадь сегмента, отсеченного хордой
    if ($h < $r ) {
        $s2 = (pi() * pow($r, 2) * $alfa) / 360;
        $s = $s2 - $s1;
        $sSeg = ($s * $vt) / (pi() * pow($r,2));
    } else {
        $s2 = pi() * pow($r, 2) * (1 - $alfa / 360);
        $s = $s2 + $s1;
        $sSeg = ($s * $vt) / (pi() * pow($r,2));
    }
    return floor($sSeg);
}
