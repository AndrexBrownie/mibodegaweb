<?php

namespace App\Services;

use App\Models\CategoriaModel;
use App\Services\Contracts\ICategoriaService;
use Libs\Database;

class CategoriaService implements ICategoriaService
{
   // protected $db;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    

   // public function __construct( Database $db)
   // {
   //     $this->db = $db;
   // }

    public function getAll() 
    {
        $result = CategoriaModel::all();
        return $result;
    }
}