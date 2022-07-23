<?php

namespace App\Services;

use App\Interfaces\IProductoService;
use App\Models\ProductoModel;
use Libs\Database;

class ProductoService implements IProductoService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(bool $estado)
    {
        $result = ProductoModel::select(
            'productos.idproducto',
            'productos.idmarca',
            'productos.idcategoria',
            'productos.nombre',
            'productos.descripcion',
            'productos.preciocosto',
            'productos.precioventa',
            'productos.stock',
            'productos.stockminimo',
            'productos.estado',
            'categorias.nombre as categoria',
            'marcas.nombre as marca'
        )
        ->join('categorias','productos.idcategoria','=','categorias.idcategoria')
        ->join('marcas','productos.idmarca','=','marcas.idmarca')
        ->where('productos.estado', $estado)
        ->orderByDesc('productos.idproducto')
        ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = ProductoModel::find($id);
        if ($model == null) 
        {
            $model = new ProductoModel();
            $model->estado = true;
        }

        return $model;

    }
    public function insert($obj)
    {
        $model = new ProductoModel();
        $model->idproducto = $obj->idproducto;
        $model->idmarca = $obj->idmarca;
        $model->idcategoria = $obj->idcategoria;
        $model->nombre = $obj->nombre;
        $model->descripcion = $obj->descripcion;
        $model->preciocosto = $obj->preciocosto;
        $model->precioventa = $obj->precioventa;
        $model->stock = $obj->stock;
        $model->stockminimo = $obj->stockminimo;
        $model->estado = $obj->estado;
        return $model->save();

        //en caso sea una venta
        //return $model->idproducto;
    }

    public function update($obj)
    {
        $model = ProductoModel::find($obj->idproducto);
        $model->idproducto = $obj->idproducto;
        $model->idmarca = $obj->idmarca;
        $model->idcategoria = $obj->idcategoria;
        $model->nombre = $obj->nombre;
        $model->descripcion = $obj->descripcion;
        $model->preciocosto = $obj->preciocosto;
        $model->precioventa = $obj->precioventa;
        $model->stock = $obj->stock;
        $model->stockminimo = $obj->stockminimo;
        $model->estado = $obj->estado;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = ProductoModel::find($id);
        return $model->delete();
    }
}
