<?php

namespace App\Services;

use App\Interfaces\IClientTipoService;
use App\Models\ClientTipoModel;
use App\Models\UsuarioTipoModel;
use Libs\Database;

class ClientTipoService implements IClientTipoService
{
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getAll()
    {
        //$result = UsuarioTipoModel::all();
        $result = ClientTipoModel::orderByDesc('idtipo')->get();
        return $result;
    }

    public function getAllSimple()
    {
        $result = ClientTipoModel::select('idtipo', 'nombre')->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = ClientTipoModel::find($id);
        if ($model == null) {
            $model = new ClientTipoModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new UsuarioTipoModel();
        $model->idtipo = $obj->idtipo;
        $model->nombre = $obj->nombre;
        return $model->save();
    }

    public function update($obj)
    {
        $model = UsuarioTipoModel::find($obj->idtipo);
        $model->idtipo = $obj->idtipo;
        $model->nombre = $obj->nombre;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = UsuarioTipoModel::find($id);
        return $model->delete();
    }
}