<?php

use App\Controller\Pages\Usuario\Home;

use App\Http\Response;

$obRouter->get('/home', [
  function ($request) {
    return new Response(200, Home::getHome($request));
  }
]);
