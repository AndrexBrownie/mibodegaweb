<?php

namespace App\controllers;

use App\Interfaces\IUsuarioService;
use App\Interfaces\IUsuarioTipoService;
use App\Services\UsuarioService;
use App\Services\UsuarioTipoService;
use Libs\Controller;

class UsuarioController extends Controller
{
    private readonly UsuarioService $_service;
    private readonly UsuarioTipoService $_usuariotipoService;

    public function __construct(IUsuarioService $service, IUsuarioTipoService $usuariotipoService) 
    {
        $this->_service = $service;
        $this->_usuariotipoService = $usuariotipoService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('usuario.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;
        $idtipo = isset($param[1]) ? $param[1] : 0;

        $data = $this->_service->get($id);

        $usuariostipo = $this->_usuariotipoService->getAllSimple();


        echo $this->blade->render('usuario.detail', [
            'data' => $data,
            'usuariostipo' => $usuariostipo,
            'idtipo' => $idtipo
        ]);
    }

    public function save()
    {
        $id = isset($_POST['idusuario']) ? intval($_POST['idusuario']) : 0;
        $obj = new \stdClass();
        $obj->idusuario=$id;
        $obj->idtipo = $_POST['idtipo'];
        $obj->usuario = $_POST['usuario'];
        $obj->clave = $_POST['clave'];
        $obj->correo = $_POST['correo'];

        $rpta = 0;

        if ($id > 0) {
            $rpta = $this->_service->update($obj);
        } else {
            $rpta = $this->_service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Usuario guardado correctamente',
                'redirection' => URL . 'usuario/index'
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
                'message' => 'Usuario eliminado correctamente',
                'redirection' => URL . 'usuario/index'
            ];
        }

        echo json_encode($response);
    }

}