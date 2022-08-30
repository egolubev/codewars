<?php
/**
 * Nesting Structure Comparison
 * User: egolubev
 * Date: 30.08.2022
 * Time: 23:31
 */

function same_structure_as(array $a, array $b): bool {
    // проверяем количество элементов в массиве
    if (count($a) != count($b)) {
        return false;
    }
    // пробегаем по массивам
    foreach ($a as $key => $item) {
        // если элементы явл. массивами, делаем рекурс. вызов
        if (is_array($a[$key]) && is_array($b[$key])) {
            if (!same_structure_as($a[$key], $b[$key])) {
                return false;
            }
            // если первые элементы не все явл. массивами, то => false
        } elseif (!is_array($a[$key]) && is_array($b[$key])) {
            return false;
            // если первые элементы не все явл. массивами, то => false
        } elseif (is_array($a[$key]) && !is_array($b[$key])) {
            return false;
        }
    }
    // структура идентична
    return true;
}
