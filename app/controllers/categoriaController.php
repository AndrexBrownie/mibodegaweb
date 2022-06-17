<?php

//declare( strict_types = 1);

namespace App\controllers;

use App\Services\CategoriaService;
use App\Services\Contracts\ICategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private readonly ICategoriaService $service;

    public function __construct(ICategoriaService $service) 
    {
        $this->service = $service;
    }

    public function index()
    {
       // $data = (new CategoriaService())->getAll();
       $data = $this->service->getAll();
        myEchoPre($data);
    }
}