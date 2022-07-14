<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Interfaces\IMarcaService;
use App\Interfaces\IProductoService;
use App\Services\CategoriaService;
use App\Services\MarcaService;
use App\Services\ProductoService;
use Libs\Controller;
use Libs\Database;

class ProductoController extends Controller
{
    private readonly ProductoService $_service;
    private readonly CategoriaService $_categoriaService;
    private readonly MarcaService $_marcaService;

    public function __construct(
        IProductoService $service, 
        ICategoriaService $categoriaService, 
        IMarcaService $marcaService)
    {
        $this->_service = $service;
        $this->_categoriaService = $categoriaService;
        $this->_marcaService = $marcaService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll(true);
        echo $this->blade->render('producto.index',['data'=>$data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;
        $idcategoria = isset($param[1]) ? $param[1] : 0;
        $idmarca = isset($param[2]) ? $param[1] : 0;

        $data = $this->_service->get($id);

        $categorias = $this->_categoriaService->getAllSimple();
        $marcas = $this->_marcaService->getAllSimple();
        
        
        echo $this->blade->render('producto.detail', [
            'data' => $data,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'idcategoria' => $idcategoria,
            'idmarca' => $idmarca
            ]);
    }

    public function save()
    {
        $id = isset($_POST['idproducto']) ? intval($_POST['idproducto']) : 0;
        $obj = new \stdClass();
        $obj->idproducto=$id;
        $obj->idmarca = $_POST['idmarca'];
        $obj->idcategoria = $_POST['idcategoria'];
        $obj->nombre = $_POST['nombre'];
        $obj->descripcion = $_POST['descripcion'];
        $obj->preciocosto = $_POST['preciocosto'];
        $obj->precioventa = $_POST['precioventa'];
        $obj->stock = $_POST['stock'];
        $obj->stockminimo = $_POST['stockminimo'];
        $obj->estado = isset($_POST['estado']) ? 1 : 0;

        if ($id > 0) 
        {
            $this->_service->update($obj);
        }else 
        {
            $this->_service->insert($obj);
        }

        header("Location:" . URL . "producto/index");

    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        if ($id > 0) 
        {
            $this->_service->delete($id);
            header("Location:" . URL . "producto/index");
        }
    }
}
