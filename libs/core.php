<?php

namespace Libs;

use App\controllers\CategoriaController;
use App\Services\CategoriaService;
use App\Services\Contracts\ICategoriaService;
use ContainerDI;

//use App\Controllers\HomeController;

class Core {

    public function __construct(ContainerDI $container) {

        //$url = $_GET['url'];
         $url = isset($_GET['url'])  ? $_GET['url'] : null;
         $url = rtrim($url, "/");
         $url = explode('/', $url);

         $service_name = "i" . $url[0] . "service";
         $flag_service = $container->searchEntry($service_name);

        if (empty($url[0])) {

            require_once '../app/controllers/homeController.php';


            //modificado
            if(array_key_exists(1, $entries))
            {
                $controller = new \App\Controllers\HomeController($container->getContainer()->get($service_name));
            }
            else
            {
                $controller = new \App\Controllers\HomeController();
            }
            ///


            $controller->index();
            return false;
        }

        $file_controller = '../app/controllers/' . $url[0] . 'Controller.php';


        if (file_exists($file_controller)) 
        {

            require_once $file_controller;
            $controller_name = '\\App\\Controllers\\' . $url[0] . 'Controller';

            //modificado
           if($flag_service)
           {
            $controller = new $controller_name($container->getContainer()->get($service_name));
           }else
           {
            $controller = new $controller_name();
           }

            $nelementos = sizeof($url);

            if($nelementos >= 2){
               if (method_exists($controller, $url[1])) 
               {
                   if ($nelementos>= 3) {
                       $param = [];
                       for ($i=2; $i < $nelementos; $i++) { 
                           array_push($param, $url[$i]);
                       }
                       $controller->{$url[1]}($param);
                   }else
                   {
                        $controller->{$url[1]}();
                   }
                   //echo "La acción  {$url[1]} SI xiste";
               }else
               {
                    echo "La acción  {$url[1]} NO xiste";
               }
            }else{
                $controller->index();
            }

            //echo "Controlador: {$url[0]} Si existe";

        }else{

            echo "Controlador: {$url[0]} No existe";
        }

        //echo "<pre>", print_r($url), "</pre>";
        //myEchoPre($url);
        //myEchoDump($url);
    }
}