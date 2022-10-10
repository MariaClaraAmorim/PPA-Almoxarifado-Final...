<?php

use App\Controller\Pages\Usuario\Requisicoes;
use App\Http\Response;

$obRouter->get('/requisicoes', [
    function ($request) {
        return new Response(200, Requisicoes::getRequisicoes($request));
    }
]);
