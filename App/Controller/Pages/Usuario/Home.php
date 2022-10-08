<?php


namespace App\Controller\Pages\Usuario;

use App\Utils\View;

class Home extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getHome($request)
  {
    // $user = $request->user;
    $user = "Maria Clara";
    
    $content = View::render('/pages/Usuario/home', []);
 
    return parent::getPage('Home', $content, true, $user);
  }
}