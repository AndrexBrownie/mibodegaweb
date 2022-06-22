<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Services\CategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private readonly CategoriaService $_service;

    public function __construct(ICategoriaService $service) 
    {
        $this->_service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll();
        myEchoPre($data);
    }
}