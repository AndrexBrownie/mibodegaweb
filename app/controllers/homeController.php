<?php

namespace App\controllers;

use Libs\Controller;

class HomeController extends Controller
{
    
    public function __construct() {
        $this->loadBlade();
    }
    
    public function index()
    {

        echo $this->blade->make('home.index', ['name' => 'Andre'])->render();
        //require_once __DIR__ . '/../views/home/index.php';
    }

    public function suma($param = null)
    {


        if ($param == null) 
        {
            $num1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $num2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);

        }else{
            $num1 = (isset($param[0]) ? $param[0] : 0);
            $num2 = (isset($param[1]) ? $param[1] : 0);
        }

        $rpta = $num1 + $num2;

        echo $this->blade->make('home.suma', ['name' => 'Andre'])->render();
        //require_once __DIR__ . '/../views/home/suma.php';
    }

}