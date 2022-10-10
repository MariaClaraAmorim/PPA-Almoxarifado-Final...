<?php


namespace App\Controller\Pages\Usuario;

use App\Utils\View;

class Requisicoes extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getRequisicoes($request)
  {
    // $user = $request->user;
    $user = "Maria Clara";
    
    $content = View::render('/pages/Usuario/requisicoes', []);
 
    return parent::getPage('Requisicoes', $content, true, $user);
  }
}