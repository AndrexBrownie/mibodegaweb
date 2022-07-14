<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Services\CategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private readonly CategoriaService $_service;

    public function __construct(ICategoriaService $service) 
    {
        $this->_service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        
        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('categoria.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;

        $data = $this->_service->get($id);

        echo $this->blade->render('categoria.detail', ['data' => $data]);
    }

    public function save()
    {
        $id = isset($_POST['idcategoria']) ? intval($_POST['idcategoria']) : 0;
        $obj = new \stdClass();
        $obj->idcategoria = $id;
        $obj->nombre = $_POST['nombre'];
        $obj->descripcion = $_POST['descripcion'];

        if ($id > 0) {
            $this->_service->update($obj);
        } else {
            $this->_service->insert($obj);
        }

        header("Location:" . URL . "categoria/index");
    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        if ($id > 0) {
            $this->_service->delete($id);
            header("Location:" . URL . "categoria/index");
        }
    }

}