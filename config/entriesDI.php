<?php

use App\Services\CategoriaService;
use App\Services\HorarioService;
use DI\Container;
use Libs\Database;

return [
    'ihorarioservice' => function (Container $c) {
        return new HorarioService($c->get(Database::class));
    }
];
