<?php

namespace App\Controllers;

use App\Interfaces\IMarcaService;
use App\Services\MarcaService;
use Libs\Controller;

class MarcaController extends Controller
{
    private readonly MarcaService $_service;

    public function __construct(IMarcaService $service)
    {
        $this->_service = $service;
        $this->loadBlade();
    }

    public function index()
    {

        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('marca.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;

        $data = $this->_service->get($id);

        echo $this->blade->render('marca.detail', ['data' => $data]);
    }

    public function save()
    {
        $id = isset($_POST['idmarca']) ? intval($_POST['idmarca']) : 0;
        $obj = new \stdClass();
        $obj->idmarca = $id;
        $obj->nombre = $_POST['nombre'];
        $obj->descripcion = $_POST['descripcion'];

        if ($id > 0) {
            $this->_service->update($obj);
        } else {
            $this->_service->insert($obj);
        }

        header("Location:" . URL . "marca/index");
    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        if ($id > 0) {
            $this->_service->delete($id);
            header("Location:" . URL . "marca/index");
        }
    }
}
