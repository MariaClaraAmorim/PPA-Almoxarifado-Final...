<?php

namespace App\Controller\Pages\Admin;

use App\Utils\View;

class Requisicoes extends Page
{

    public static function getRequisicoesAdmin()
    {

        // $user = $request->user;
        $user = "Admin";
        $content = View::render('/pages/Admin/requisicoes', []);

        return parent::getPage('Requisições', $content, true, $user);
    }
}
