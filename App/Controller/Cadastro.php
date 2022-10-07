<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Cadastro extends Page{
  /**
   * Método responsável por retornar a renderização da página de login
   * @param Request $request
   * @return string
   */
  public static function getCadastro($request)
  {
    //CONTEÚDO DA PÁGINA DE LOGIN
    return view::render('/pages/cadastro', [
      'usuario' => '',
      'senha'   => ''
    ]);
  }
}