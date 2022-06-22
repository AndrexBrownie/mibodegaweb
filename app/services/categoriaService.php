<?php

namespace App\Services;

use App\Interfaces\ICategoriaService;
use App\Models\CategoriaModel;
use Libs\Database;

class CategoriaService implements ICategoriaService
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }
    
    public function getAll()
    {
        $result = CategoriaModel::all();
        return $result;
    }
    public function getAllSimple()
    {
        $result = CategoriaModel::select('IdCateg', 'Nombre')->get();
        return $result;
    }

    public function get(int $id)
    {

    }
    public function insert($obj)
    {

    }
    public function update($obj)
    {

    }
    public function delete(int $id)
    {

    }
}