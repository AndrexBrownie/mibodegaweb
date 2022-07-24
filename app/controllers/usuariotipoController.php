<?php

namespace App\controllers;

use App\Interfaces\IUsuarioTipoService;
use App\Services\UsuarioTipoService;
use Libs\Controller;

class UsuarioTipoController extends Controller
{
    private readonly UsuarioTipoService $_service;

    public function __construct(IUsuarioTipoService $service) 
    {
        $this->_service = $service;
        $this->loadBlade();
    }

    public function index()
    {

        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('usuariotipo.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;

        $data = $this->_service->get($id);

        echo $this->blade->render('usuariotipo.detail', ['data' => $data]);
    }

    public function save()
    {
        $id = isset($_POST['idtipo']) ? intval($_POST['idtipo']) : 0;
        $obj = new \stdClass();
        $obj->idtipo = $id;
        $obj->nombre = $_POST['nombre'];

        $rpta = 0;

        if ($id > 0) {
            $rpta = $this->_service->update($obj);
        } else {
            $rpta = $this->_service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Tipo de Usuario guardado correctamente',
                'redirection' => URL . 'usuariotipo/index'
            ];
        }

        echo json_encode($response);

    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        if ($id > 0) {
            $rpta =  $this->_service->delete($id);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Tipo de Usuario eliminado correctamente',
                'redirection' => URL . 'usuariotipo/index'
            ];
        }

        echo json_encode($response);
    }

}