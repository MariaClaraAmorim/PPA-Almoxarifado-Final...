<?php

use App\Controller\Pages\Usuario\Carrinho;

use App\Http\Response;

$obRouter->get('/carrinho', [
    function ($request) {
        return new Response(200, Carrinho::getCarrinho($request));
    }
]);
