<?php

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/Categoria_produtoController.php';
include 'Controller/MenuController.php';
include 'Controller/LoginController.php';
use App\Controller\LoginController;



$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    case '/pessoa': 
        
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    case '/produto':
        
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/form/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    case '/funcionario':
        
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/form/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

    case '/categoria_produto':      
        Categoria_produtoController::index();
    break;

    case '/categoria_produto/form':
        Categoria_produtoController::form();
    break;

    case '/categoria_produto/form/save':
        Categoria_produtoController::save();
    break;

    case '/categoria_produto/delete':
        Categoria_produtoController::delete();
    break;


    case '/login':
        LoginController::index();
    break;
    
    case '/login/auth':
        LoginController::auth();
    break;
    
    case '/logout':
        LoginController::logout();
    break;
    
    
    
      

  
    



    default:
        MenuController::index();
    break;
}