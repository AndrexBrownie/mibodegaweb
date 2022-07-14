<?php

namespace App\Services;

use App\Interfaces\IMarcaService;
use App\Models\MarcaModel;
use Libs\Database;

class MarcaService implements IMarcaService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        //$result = MarcaModel::all();
        $result = MarcaModel::orderByDesc('idmarca')->get();
        return $result;
    }
    public function getAllSimple()
    {
        $result = MarcaModel::select('idmarca', 'nombre')->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = MarcaModel::find($id);
        if ($model == null) {
            $model = new MarcaModel();
        }

        return $model;
    }
    public function insert($obj)
    {
        $model = new MarcaModel();
        $model->idmarca = $obj->idmarca;
        $model->nombre = $obj->nombre;
        $model->descripcion = $obj->descripcion;
        $model->save();
    }
    public function update($obj)
    {
        $model = MarcaModel::find($obj->idmarca);
        $model->idmarca = $obj->idmarca;
        $model->nombre = $obj->nombre;
        $model->descripcion = $obj->descripcion;
        $model->save();
    }
    public function delete(int $id)
    {
        $model = MarcaModel::find($id);
        $model->delete();
    }
}