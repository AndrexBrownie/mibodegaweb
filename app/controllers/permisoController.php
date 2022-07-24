<?php

namespace App\controllers;

use App\Interfaces\IPermisoService;
use App\Interfaces\IUsuarioService;
use App\Interfaces\IUsuarioTipoService;
use App\Services\PermisoService;
use App\Services\UsuarioService;
use App\Services\UsuarioTipoService;
use Libs\Controller;

class PermisoController extends Controller
{
    private readonly PermisoService $_service;
    private readonly UsuarioTipoService $_usuariotipoService;

    public function __construct(IPermisoService $service, IUsuarioTipoService $usuariotipoService)
    {
        $this->_service = $service;
        $this->_usuariotipoService = $usuariotipoService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('permiso.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;
        $idtipo = isset($param[1]) ? $param[1] : 0;

        $data = $this->_service->get($id);

        $usuariostipo = $this->_usuariotipoService->getAllSimple();


        echo $this->blade->render('permiso.detail', [
            'data' => $data,
            'usuariostipo' => $usuariostipo,
            'idtipo' => $idtipo
        ]);
    }

    public function save()
    {
        $id = isset($_POST['idpermiso']) ? intval($_POST['idpermiso']) : 0;
        $obj = new \stdClass();
        $obj->idpermiso = $id;
        $obj->idtipo = $_POST['idtipo'];
        $obj->tablas = $_POST['tablas'];

        $rpta = 0;

        if ($id > 0) {
            $rpta = $this->_service->update($obj);
        } else {
            $rpta = $this->_service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Permiso guardado correctamente',
                'redirection' => URL . 'permiso/index'
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
                'message' => 'Permiso eliminado correctamente',
                'redirection' => URL . 'permiso/index'
            ];
        }

        echo json_encode($response);
    }
}
