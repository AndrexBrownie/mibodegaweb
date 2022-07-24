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
        //$result = CategoriaModel::all();
        $result = CategoriaModel::orderByDesc('idcategoria')->get();
        return $result;
    }

    public function getAllSimple()
    {
        $result = CategoriaModel::select('idcategoria', 'nombre')->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = CategoriaModel::find($id);
        if ($model == null) 
        {
            $model = new CategoriaModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new CategoriaModel();
        $model->idcategoria = $obj->idcategoria;
        $model->nombre = $obj->nombre;
        $model->descripcion = $obj->descripcion;
        return $model->save();
    }

    public function update($obj)
    {
        $model = CategoriaModel::find($obj->idcategoria);
        $model->idcategoria = $obj->idcategoria;
        $model->nombre = $obj->nombre;
        $model->descripcion = $obj->descripcion;
        return $model->save();

    }
    
    public function delete(int $id)
    {
        $model = CategoriaModel::find($id);
        return $model->delete();
    }
}