<?php


namespace App\Controllers;

class HomeController
{
    public function index($param = null)
    {
        echo "Página de Inicio" , "</br>";
        echo($param[0]), "</br>";
        echo ($param[1]), "</br>";
    }

    public function suma($param)
    {
        $rpta = $param[0] + $param[1];

        echo "La suma de {$param[0]} + {$param[1]} es {$rpta}", "</br>";
    }
}