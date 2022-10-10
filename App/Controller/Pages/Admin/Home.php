<?php

namespace App\Controller\Pages\Admin;

use App\Utils\View;

class Home extends Page
{
  
  public static function getHomeAdmin()
  {

    // $user = $request->user;
    $user = "Admin";
    $content = View::render('/pages/Admin/home',[
    ]);

    return parent::getPage('Home', $content, true, $user);
  }
}
