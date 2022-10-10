<?php

namespace App\Controller\Pages\Admin;

use App\Utils\View;

class Page
{
  /**
   * Método responsável por retornar o conteúdo (view) da nossa página genérica
   * @param string $title
   * @param string $content
   * @return  string  
   */
  public static function getPage($title, $content, $template = null, $user)
  {
    if ($template === true) {
      $header = self::getHeader($user);
      $footer = self::getFooter();
    } else {
      $header = '';
      $footer = '';
    }

    return View::render('pages/Page', [
      'title' => $title,
      'header' => $header,
      'content' => $content,
      'footer' => $footer,
    ]);
  }

  private static function getHeader($usuario)
  {
    return View::render('templates/header', [
      'usuario' => $usuario
    ]);
  }

  private static function getFooter()
  {
    return View::render('templates/footer', [
      'data' => date('Y')
    ]);
  }
}
