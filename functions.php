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