<?php


namespace App\Controller\Pages\Usuario;

use App\Utils\View;

class Resultados extends Page
{
    /**
     * Método responsável por renderizar a home
     */
    public static function getResultados($request)
    {
        $user = $request->user;

        $content = View::render('/pages/Usuario/resultados', []);

        return parent::getPage('Resultados', $content, $user);
    }
}
