<?php


namespace App\Controller\Pages\Usuario;

use App\Utils\View;

class Carrinho extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getCarrinho($request)
  {
    // $user = $request->user;
    $user = "Maria Clara";
    
    $content = View::render('/pages/Usuario/carrinho', []);
 
    return parent::getPage('Carrinho', $content, true, $user);
  }
}