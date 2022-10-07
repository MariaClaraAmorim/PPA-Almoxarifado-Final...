<?php

use App\Controller\Pages\Usuario\Resultados;
use App\Http\Response;

$obRouter->get('/resultados', [
    function ($request) {
        return new Response(200, Resultados::getResultados($request));
    }
]);
