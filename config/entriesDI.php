<?php

use App\Services\CategoriaService;
use App\Services\ClienteService;
use App\Services\MarcaService;
use App\Services\ProductoService;
use App\Services\UsuarioTipoService;
use App\Services\UsuarioService;
use DI\Container;
use Libs\Database;

return [
    'icategoriaservice' => function (Container $c) {
        return new CategoriaService($c->get(Database::class));
    },
    'imarcaservice' => function (Container $c) {
        return new MarcaService($c->get(Database::class));
    },
    'iproductoservice' => function (Container $c) {
        return new ProductoService($c->get(Database::class));
    },
    'iusuariotiposervice' => function (Container $c) {
        return new UsuarioTipoService($c->get(Database::class));
    },
    'iusuarioservice' => function (Container $c) {
        return new UsuarioService($c->get(Database::class));
    },
    'iclienteservice' => function (Container $c) {
        return new ClienteService($c->get(Database::class));
    }
];
