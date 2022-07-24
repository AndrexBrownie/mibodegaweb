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

        $rpta = 0;

        if ($id > 0) {
           $rpta = $this->_service->update($obj);
        } else {
           $rpta = $this->_service->insert($obj);
        }

        if($rpta)
        {
            $response = [
                'success' => true,
                'message' => 'Categoria guardado correctamente',
                'redirection' => URL.'categoria/index'
            ];
        }

        echo json_encode($response);
    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        if ($id > 0) 
        {
            $rpta = $this->_service->delete($id);
        }

        if($rpta)
        {
            $response = [
                'success' => true,
                'message' => 'Categoria eliminado correctamente',
                'redirection' => URL.'categoria/index'
            ];
        }

        echo json_encode($response);
    }

}