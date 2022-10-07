<?php

use App\Controller\Pages\Login;

use App\Http\Response;

$obRouter->get('/', [
  function ($request) {
    return new Response(200, Login::getLogin($request));
  }
]);
