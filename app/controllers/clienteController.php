<?php

namespace App\Controllers;

use App\Interfaces\IClienteService;
use App\Interfaces\IUsuarioService;
use App\Services\CategoriaService;
use App\Services\ClienteService;
use App\Services\MarcaService;
use App\Services\UsuarioService;
use Libs\Controller;
use Libs\Database;

class ClienteController extends Controller
{
    private readonly ClienteService $_service;
    private readonly UsuarioService $_usuarioService;

    public function __construct(
        IClienteService $service, 
        IUsuarioService $usuarioService)
    {
        $this->_service = $service;
        $this->_usuarioService = $usuarioService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('cliente.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;
        $idusuario = isset($param[1]) ? $param[1] : 0;

        $data = $this->_service->get($id);

        $usurios = $this->_usuarioService->getAllSimple();

        echo $this->blade->render('cliente.detail', [
            'data' => $data,
            'usuarios' => $usurios,
            'idusuario' => $idusuario
        ]);
    }

    public function save()
    {
        $id = isset($_POST['idcliente']) ? intval($_POST['idcliente']) : 0;
        $obj = new \stdClass();
        $obj->idcliente = $id;
        $obj->idusuario = $_POST['idusuario'];
        $obj->nombres = $_POST['nombres'];
        $obj->apellidos = $_POST['apellidos'];
        $obj->direccion = $_POST['direccion'];
        $obj->ubicacion = $_POST['ubicacion'];
        $obj->telefono = $_POST['telefono'];
        $obj->dni = $_POST['dni'];
        $obj->nacimiento = $_POST['nacimiento'];
        $obj->sexo = $_POST['sexo'];
        //$obj->sexo = isset($_POST['sexo']) ? 'masculino' : 'femenino';


        $rpta = 0;

        if ($id > 0) {
            $rpta = $this->_service->update($obj);
        } else {
            $rpta = $this->_service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Cliente guardado correctamente',
                'redirection' => URL . 'cliente/index'
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
                'message' => 'Cliente eliminado correctamente',
                'redirection' => URL . 'cliente/index'
            ];
        }

        echo json_encode($response);
    }
}
