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

if (!function_exists('selected')) {
    function selected($id_current, $id_new)
    {
        if ($id_current == $id_new) 
        {
            return 'selected=selected';
        }else
        {
            return '';
        }
    }
}

if (!function_exists('checked')) {
    function checked(bool $estado)
    {
        if (isset($estado)) {
            if($estado){
                return 'checked=checked';
            }
        }

        return '';
    }
}