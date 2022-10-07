<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{

  /**
   * Método responsável por renderizar o conteúdo (view)
   * @return string
   */
  public static function getPage($title, $content)
  {
    return View::render('pages/Page', [
      'title'   => $title,
      'content' => $content,
    ]);
  }
}


