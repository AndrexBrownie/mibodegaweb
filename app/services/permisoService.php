<?php

namespace App\Services;

use App\Interfaces\IPermisoService;
use App\Interfaces\IUsuarioService;
use App\Models\PermisoModel;
use App\Models\UsuarioModel;
use Libs\Database;

class PermisoService implements IPermisoService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = PermisoModel::select(
            'permisos.idpermiso',
            'permisos.idtipo',
            'permisos.tablas',
            'usuarios_tipo.nombre as usuariotipo'
        )
            ->join('usuarios_tipo', 'permisos.idtipo', '=', 'usuarios_tipo.idtipo')
            ->orderByDesc('permisos.idpermiso')
            ->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = PermisoModel::find($id);
        if ($model == null) {
            $model = new PermisoModel();
        }

        return $model;
    }
    public function insert($obj)
    {
        $model = new PermisoModel();
        $model->idpermiso = $obj->idpermiso;
        $model->idtipo = $obj->idtipo;
        $model->tablas = $obj->tablas;
        return $model->save();
    }
    public function update($obj)
    {
        $model = PermisoModel::find($obj->idpermiso);
        $model->idpermiso = $obj->idpermiso;
        $model->idtipo = $obj->idtipo;
        $model->tablas = $obj->tablas;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = PermisoModel::find($id);
        return $model->delete();
    }
}
