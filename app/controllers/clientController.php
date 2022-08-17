<?php

namespace App\Controllers;

use App\Interfaces\IClienteService;
use App\Interfaces\IClientService;
use App\Interfaces\IClientTipoService;
use App\Interfaces\IUsuarioService;
use App\Services\CategoriaService;
use App\Services\ClienteService;
use App\Services\ClientService;
use App\Services\ClientTipoService;
use App\Services\MarcaService;
use App\Services\UsuarioService;
use Libs\Controller;
use Libs\Database;

class ClientController extends Controller
{
    private readonly ClientService $_service;
    private readonly ClientTipoService $_clienttipoService;

    public function __construct(
        IClientService $service, 
        IClientTipoService $clienttipoService)
    {
        $this->_service = $service;
        $this->_clienttipoService = $clienttipoService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->_service->getAll();
        //myEchoPre($data);
        echo $this->blade->render('client.index', ['data' => $data]);
    }

    public function detail($param = null)
    {

        $id = isset($param[0]) ? $param[0] : 0;
        $idclienttipo = isset($param[1]) ? $param[1] : 0;

        $data = $this->_service->get($id);

        $clienttipo = $this->_clienttipoService->getAllSimple();

        echo $this->blade->render('client.detail', [
            'data' => $data,
            'clienttipo' => $clienttipo,
            'idclienttipo' => $idclienttipo
        ]);
    }

    public function get()
    {
        $documento = $_POST["documento"];
        $data = $this->_service->getdocument($documento);

      echo  json_encode($data);
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
