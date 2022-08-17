<?php

namespace App\Services;

use App\Interfaces\IClientService;
use App\Models\ClienteModel;
use App\Models\ClientModel;
use Libs\Database;

class ClientService implements IClientService
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
            'clientes.idtipo',
            'clientes.documento',
            'clientes.nombres',
            'clientes.apellidos',
            'clientes.telefono',
            'clientes.nacimiento',
            'clientes_tipo.nombre as tipo',
        )
            ->join('clientes_tipo', 'clientes.idtipo', '=', 'clientes.idtipo')
            ->orderByDesc('clientes.idcliente')
            ->get();

        return $result;
    }
    public function getdocument($documento)
    {
        

        $result = ClienteModel::/*from(
            'clientes.idcliente',
            'clientes.idtipo',
            'clientes.documento',
            'clientes.nombres',
            'clientes.apellidos',
            'clientes.telefono',
            'clientes.nacimiento',
            'clientes_tipo.nombre as tipo',
        )
            */join('clientes_tipo', 'clientes.idtipo', '=', 'clientes.idtipo')
            ->where('clientes.documento', '=', $documento)
            ->orderByDesc('clientes.idcliente')
            ->first();

        return $result;
    }

    public function get(int $id)
    {
        $model = ClientModel::find($id);
        if ($model == null) {
            $model = new ClientModel();
        }

        return $model;
    }
    public function insert($obj)
    {
        $model = new ClientModel();
        $model->idcliente = $obj->idcliente;
        $model->idtipo = $obj->idtipo;
        $model->nombres = $obj->nombres;
        $model->apellidos = $obj->apellidos;
        $model->direccion = $obj->direccion;
        $model->telefono = $obj->telefono;
        $model->nacimiento = $obj->nacimiento;
        return $model->save();
    }

    public function update($obj)
    {
        $model = ClientModel::find($obj->idcliente);
        $model->idcliente = $obj->idcliente;
        $model->idtipo = $obj->idtipo;
        $model->nombres = $obj->nombres;
        $model->apellidos = $obj->apellidos;
        $model->direccion = $obj->direccion;
        $model->telefono = $obj->telefono;
        $model->nacimiento = $obj->nacimiento;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = ClienteModel::find($id);
        return $model->delete();
    }
}
