<?php

namespace App\Controller;

abstract class Controller
{
    protected static function render($view, $model = null)
    {
        $arquivo_view = app_views . $view . ".php";

        if(file_exists($arquivo_view))
        {
            include $arquivo_view;
        }
        else
        {
            exit("Arquivo não encontrado. Procurando: " . $view . ".php");
        }
    }
    protected static function isAuthenticated()
    {
        if(!isset($_SESSION['usuario_logado']))
            header("location: /login");
    } 
}
