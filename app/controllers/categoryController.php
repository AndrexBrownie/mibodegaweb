<?php

namespace App\controllers;

use App\Models\CategoryModel;
use Libs\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {
       // $this->loadBlade();
    }

    public function index()
    {
       // echo $this->blade->make('home.index', ['name' => 'Andre'])->render();
       $data = (new CategoryModel())->getAll();

       myEchoPre($data);
    }
}
