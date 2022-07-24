<?php

namespace App\Services;

use App\Interfaces\IClienteService;
use App\Models\ClienteModel;
use Libs\Database;

class ClienteService implements IClienteService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = ClienteModel::select(
            'clientes.idcliente',
            'clientes.idusuario',
            'clientes.nombres',
            'clientes.apellidos',
            'clientes.direccion',
            'clientes.ubicacion',
            'clientes.telefono',
            'clientes.dni',
            'clientes.nacimiento',
            'clientes.sexo',
            'usuarios.usuario as usuario'
        )
            ->join('usuarios', 'clientes.idusuario', '=', 'usuarios.idusuario')
            ->orderByDesc('clientes.idcliente')
            ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = ClienteModel::find($id);
        if ($model == null) {
            $model = new ClienteModel();
        }

        return $model;
    }
    public function insert($obj)
    {
        $model = new ClienteModel();
        $model->idcliente = $obj->idcliente;
        $model->idusuario = $obj->idusuario;
        $model->nombres = $obj->nombres;
        $model->apellidos = $obj->apellidos;
        $model->direccion = $obj->direccion;
        $model->ubicacion = $obj->ubicacion;
        $model->telefono = $obj->telefono;
        $model->dni = $obj->dni;
        $model->nacimiento = $obj->nacimiento;
        $model->sexo = $obj->sexo;
        return $model->save();
    }

    public function update($obj)
    {
        $model = ClienteModel::find($obj->idcliente);
        $model->idcliente = $obj->idcliente;
        $model->idusuario = $obj->idusuario;
        $model->nombres = $obj->nombres;
        $model->apellidos = $obj->apellidos;
        $model->direccion = $obj->direccion;
        $model->ubicacion = $obj->ubicacion;
        $model->telefono = $obj->telefono;
        $model->dni = $obj->dni;
        $model->nacimiento = $obj->nacimiento;
        $model->sexo = $obj->sexo;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = ClienteModel::find($id);
        return $model->delete();
    }
}
