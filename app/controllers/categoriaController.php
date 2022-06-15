<?php

namespace App\controllers;

use App\Services\CategoriaService;
use App\Services\Contracts\ICategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private readonly ICategoriaService $_service;

    public function __construct(ICategoriaService $service) {
        $this->_service = $service;
    }

    public function index()
    {
       // $data = (new CategoriaService())->getAll();
       $data = $this->_service->getAll();
        myEchoPre($data);
    }
}