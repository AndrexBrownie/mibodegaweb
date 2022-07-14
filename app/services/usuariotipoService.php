<?php

namespace App\Services;

use App\Interfaces\IUsuarioTipoService;
use App\Models\UsuarioTipoModel;
use Libs\Database;

class UsuarioTipoService implements IUsuarioTipoService
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getAll()
    {
        //$result = UsuarioTipoModel::all();
        $result = UsuarioTipoModel::orderByDesc('idtipo')->get();
        return $result;
    }

    public function getAllSimple()
    {
        $result = UsuarioTipoModel::select('idtipo', 'nombre')->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = UsuarioTipoModel::find($id);
        if ($model == null) {
            $model = new UsuarioTipoModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new UsuarioTipoModel();
        $model->idtipo = $obj->idtipo;
        $model->nombre = $obj->nombre;
        $model->save();
    }

    public function update($obj)
    {
        $model = UsuarioTipoModel::find($obj->idtipo);
        $model->idtipo = $obj->idtipo;
        $model->nombre = $obj->nombre;
        $model->save();
    }

    public function delete(int $id)
    {
        $model = UsuarioTipoModel::find($id);
        $model->delete();
    }
}