<?php

namespace App\Controller\Pages;

use App\Model\Entity\Usuario;

use App\Session\Usuario\Login as UsuarioLogin;

use \App\Utils\View;

class Login extends Page
{
  /**
   * Método responsável por retornar a rederização da página de login
   * @param Request $request
   * @return string
   */
  public static function getLogin($request)
  {
    //CONTEÚDO DA PÁGINA DE LOGIN
    return view::render('/pages/login', [
      'usuario' => '',
      'senha'   => ''
    ]);
  }

  /**
   * Método responsável por definir o login do usuário
   * @param Request $request
   */
  public static function setLogin($request)
  {
    //POST VARS
    $postVars = $request->getPostVars();
    $usuario    = $postVars['usuario'];

    //BUSCAR USUÁRIO PELO LOGIN
    $obUser = Usuario::getUserByUser($usuario);

    //CRIA A SESSÃO DE LOGIN
    UsuarioLogin::login($obUser);

    return true;
  }

  /**
   * Método responsável por validar a criptográfia da senha
   */
  public static function validatePassword($request)
  {
    $postVars = $request->getPostVars();

    if ($postVars['senha_admin']) {
      $senha = $postVars['senha_admin'];
    } else if ($postVars['senha_atual']) {
      $senha = $postVars['senha_atual'];
    }

    //BUSCAR AS INFORMAÇÕES DO USUÁRIO PELO USER
    $obUser = Usuario::getUserByUser($request->user->LOGIN);

    //VERIFICA A SENHA DO USUÁRIO
    if (password_verify($senha, $obUser->SENHA)) {
      return true;
    } else {
      return false;
    }
  }


  /**
   * Método responsável por validar a cripotográfia da senha
   */
  public static function validatePasswordLogin($request)
  {
    $postVars = $request->getPostVars();
    $usuario = $postVars['usuario'];
    $senha = $postVars['senha'];

    //BUSCAR AS INFORMAÇÕES DO USUÁRIO PELO USER
    $obUser = Usuario::getUserByUser($usuario);

    //VERIFICA A SENHA DO USUÁRIO
    if (password_verify($senha, $obUser->SENHA)) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * Método responsável por deslogar o usuário
   * @param Request $request
   */
  public static function setLogout($request)
  {
    //DESTROI A SESSÃO DE LOGIN
    UsuarioLogin::logout();

    //REDIRECIONA O USUÁRIO PARA A TELA DE LOGIN
    $request->getRouter()->redirect('/');
  }



  /**
   * Método responsável por retornar a rederização da página de redefinir senha
   * @param Request $request
   * @return string
   */
  public static function getRedefinirSenha($request)
  {
    //CONTEÚDO DA PÁGINA DE LOGIN
    return view::render('/pages/redefinirSenha', [
      'usuario' => '',
      'senha'   => ''
    ]);
  }
}
