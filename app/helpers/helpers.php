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

if (!function_exists('myEnv')) {
    function myEnv($key, $default = null)
    {
        if (array_key_exists($key, $_ENV)) {
            return $_ENV[$key];
        } else {
            return $default;
        }
    }
}