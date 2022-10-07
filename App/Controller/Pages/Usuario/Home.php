<?php

// namespace App\Controller\Pages\Admin;

namespace App\Controller\Pages\Usuario;

use App\Utils\View;

class Home extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getHome()
  {
    $content = View::render('/pages/Usuario/home', []);

    return parent::getPage('Home', $content);
  }
}
