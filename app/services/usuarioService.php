<?php

namespace App\Services;

use App\Interfaces\IUsuarioService;
use App\Models\UsuarioModel;
use Libs\Database;

class UsuarioService implements IUsuarioService
{
    private $db;

    public function __construct(Database $db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = UsuarioModel::select(
            'usuarios.idusuario',
            'usuarios.idtipo',
            'usuarios.usuario',
            'usuarios.clave',
            'usuarios.correo',
            'usuarios_tipo.nombre as usuariotipo'
        )
            ->join('usuarios_tipo', 'usuarios.idtipo', '=', 'usuarios_tipo.idtipo')
            ->orderByDesc('usuarios.idusuario')
            ->get();
        return $result;
    }

    

    public function get(int $id)
    {
        $model = UsuarioModel::find($id);
        if ($model == null) {
            $model = new UsuarioModel();
        }

        return $model;
    }
    public function insert($obj)
    {
        $model = new UsuarioModel();
        $model->idusuario = $obj->idusuario;
        $model->idtipo = $obj->idtipo;
        $model->usuario = $obj->usuario;
        $model->clave = $obj->clave;
        $model->correo = $obj->correo;
        $model->save();
    }
    public function update($obj)
    {
        $model = UsuarioModel::find($obj->idusuario);
        $model->idusuario = $obj->idusuario;
        $model->idtipo = $obj->idtipo;
        $model->usuario = $obj->usuario;
        $model->clave = $obj->clave;
        $model->correo = $obj->correo;
        $model->save();
    }
    public function delete(int $id)
    {
        $model = UsuarioModel::find($id);
        $model->delete();
    }
}