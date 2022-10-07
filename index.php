<?php

require __DIR__ . '/includes/app.php';

use App\Http\Router;

//INICIA O ROUTER
$obRouter = new Router(URL);


//INCLUI AS ROTAS DA API
// include __DIR__ . '/routes/Api/api.php';

//INCLUI AS ROTAS DAS PÁGINAS DE ADMIN
include __DIR__ . '/routes/Admin.php';

//INCLUI AS ROTAS DAS PÁGINAS DE ADMIN
include __DIR__.'/routes/Usuario.php';

//INCLUI A ROTA DA PÁGINA DE LOGIN
include __DIR__.'/routes/login.php';

//INCLUI A ROTA DA PÁGINA DE CADASTRO
include __DIR__.'/routes/cadastro.php';

// IMPRIME O RESPONSE DA ROTA
$obRouter->run()
    ->sendResponse();
