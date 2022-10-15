<?php

use App\Controller\Pages\Login;
use App\Controller\Pages\Redefinir;
use App\Http\Response;

$obRouter->get('/', [
  // 'middleware' => [],

  function ($request) {
    return new Response(200, Login::getLogin($request));
  }
]);

//ROTA LOGIN (POST)
$obRouter->post('/', [
  'middleware' => [
    // 'required-usuario-logout',
  ],
  function ($request) {
    return new Response(200, Login::setLogin($request));
  }
]);

//ROTA LOGOUT
$obRouter->get('/logout', [
  'middleware' => [
    'required-usuario-login'
  ],
  function ($request, $erroMessage) {
    return new Response(200, Login::setLogout($request, $erroMessage));
  }
]);

//Rota de redefinir senha
$obRouter->get('/redefinirSenha', [
  function ($request) {
    return new Response(200, Login::getRedefinirSenha($request));
  }
]);
