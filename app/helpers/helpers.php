<?php

if (! function_exists('myEchoPre')) {
    function myEchoPre($content)
    {
        echo "<pre>", print_r($content), "</pre>";
    }
}

if (!function_exists('myEchoDump')) {
    function myEchoDump($content)
    {
        echo "<pre>", var_dump($content), "</pre>";
    }
}