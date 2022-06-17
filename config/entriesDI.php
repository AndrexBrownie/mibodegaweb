<?php

use App\Services\CategoriaService;
use DI\Container;
use Libs\Database;

return [
//forma 1
'icategoriaservice' => function (Container $c)
{
    return new CategoriaService($c->get(Database::class));
},

//forma 2
/*'icategoriaservice' => DI\create(CategoriaService::class)
    ->constructor(DI\create(Database::class))
    */
];