<?php

namespace App\Controller\Pages\Usuario;

use App\Utils\View;

class Page
{

  // public static function getPage($title, $content, $user)
  // {
  //   return View::render('pages/Page', [
  //     'title'   => $title,
  //     'header'  => self::getHeader($user),
  //     'content' => $content,
  //     'footer'  => self::getFooter()
  //   ]);
  // }


  // private static function getHeader($user)
  // {
  //   return View::render('template/header', []);
  // }

  // private static function getFooter()
  // {
  //   return View::render('template/footer', [
  //     'data' => '2022'
  //   ]);
  // }


  private static function getHeader()
  {
    return View::render('template/header', []);
  }

  private static function getFooter()
  {
    return View::render('template/footer', [
      'data' => '2022'
    ]);
  }

  public static function getPage($title, $content)
  {
    return View::render('pages/Page', [
      'title'   => $title,
      'header'  => self::getHeader(),
      'content' => $content,
      'footer'  => self::getFooter()
    ]);
  }
}
