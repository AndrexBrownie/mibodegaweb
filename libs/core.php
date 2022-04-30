<?php

use App\Controllers\HomeController;

class Core {

    public function __construct() {

        //$url = $_GET['url'];
         $url = isset($_GET['url'])  ? $_GET['url'] : null;
         $url = rtrim($url, "/");
         $url = explode('/', $url);


        if (empty($url[0])) {

            require_once '../app/controllers/homeController.php';
            $controller = new HomeController();
            $controller->index();
            return false;
        }


        //echo "<pre>", print_r($url), "</pre>";
        myEchoPre($url);
        myEchoDump($url);
    }
}