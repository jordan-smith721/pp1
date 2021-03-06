<?php
/**
 * Created by PhpStorm.
 * User: Jsmit
 * Date: 1/4/2019
 * Time: 10:39 AM
 */

function printArray($array)
{
    echo implode($array, ",");
}

function largest($array)
{
    echo max($array);

}

function average($array)
{
    $total = 0;
    foreach ($array as $element)
    {
        $total += $element;
    }

    $average = $total / sizeof($array);

    echo $average;
}

function removeDups($array)
{
    $removedArray = array_unique($array);
    foreach($removedArray as $element)
    {
        echo $element;
    }
}

function distribution($array)
{
    sort($array);
    $countedArray = array_count_values($array);
    $printArray = Array();
    foreach ($countedArray as $key => $value)
    {
        $printArray[] = "$key=>$value";
    }

    echo '[' . implode(", ", $printArray) . ']';
}
