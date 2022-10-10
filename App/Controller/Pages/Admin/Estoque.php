<?php

namespace App\Controller\Pages\Admin;

use App\Utils\View;

class Estoque extends Page
{

  public static function getEstoque()
  {

    // $user = $request->user;
    $user = "Admin";
    $content = View::render('/pages/Admin/estoque', []);

    return parent::getPage('Estoque', $content, true, $user);
  }

  public static function getEstoqueEditar()
  {

    // $user = $request->user;
    $user = "Admin";
    $content = View::render('/pages/Admin/estoqueEditar', []);

    return parent::getPage('Estoque Editar', $content, true, $user);
  }
}
