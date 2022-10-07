<?php

use App\Controller\Pages\Cadastro;

use App\Http\Response;

$obRouter->get('/cadastro', [
  function ($request) {
    return new Response(200, Cadastro::getCadastro($request));
  }
]);
