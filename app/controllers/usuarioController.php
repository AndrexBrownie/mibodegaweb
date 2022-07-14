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

        if ($id > 0) 
        {
            $this->_service->update($obj);
        }else 
        {
            $this->_service->insert($obj);
        }

        header("Location:" . URL . "usuario/index");

    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        if ($id > 0) 
        {
            $this->_service->delete($id);
            header("Location:" . URL . "usuario/index");
        }
    }

}