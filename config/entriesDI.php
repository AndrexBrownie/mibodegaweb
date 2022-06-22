<?php

use App\Services\CategoriaService;
use DI\Container;
use Libs\Database;

return [
    'icategoriaservice' => function (Container $c) {
        return new CategoriaService($c->get(Database::class));
    }
];
