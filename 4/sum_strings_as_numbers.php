<?php
/**
 * Sum Strings as Numbers
 * User: egolubev
 * Date: 17.09.2022
 * Time: 0:01
 */

function sum_strings($a, $b) {
    // второе больше первого
    if (strlen($a) > strlen($b)) {
        list($a, $b) = [$b, $a];
    }
    // результат
    $str = "";
    // длина строк
    $n1 = strlen($a);
    $n2 = strlen($b);
    // переворачиваем
    $a = strrev($a);
    $b = strrev($b);
    // складываем основу
    $carry = 0;
    for ($i = 0; $i < $n1; $i++) {
        $sum = ((ord($a[$i]) - 48) + ((ord($b[$i]) - 48) + $carry));
        $str .= chr($sum % 10 + 48);
        // перенос десятка
        $carry = (int)($sum/10);
    }
    // докидываем остатки
    for ($i = $n1; $i < $n2; $i++) {
        $sum = (ord($b[$i]) - 48) + $carry;
        $str .= chr($sum % 10 + 48);
        $carry = (int)($sum/10);
    }
    // докидываем последний символ
    if (!empty($carry)) {
        $str .= chr($carry + 48);
    }
    // переворачиваем
    return ltrim(strrev($str), '0');
}
