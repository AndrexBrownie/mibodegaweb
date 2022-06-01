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
}