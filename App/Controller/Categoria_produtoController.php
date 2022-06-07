<?php

class Categoria_produtoController
{
   
    public static function index()
    {
        
        include 'Model/Categoria_produtoModel.php'; 
        
        $model = new Categoria_produtoModel(); 
        $model->getAllRows();

        include 'View/modules/Categoria_produto/ListaCateogira_produto.php';
    }


    
    public static function form()
    {
        include 'Model/Categoria_produtoModel.php';
        $model = new Categoria_produtoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/Categoria_produto/FormCategoria_produto.php'; 
    }


    

     
    public static function save()
    {
       include 'Model/Categoria_produtoModel.php';

       
       $model = new Categoria_produtoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->tipo = $_POST['tipo'];
       

       $model->save(); 

       header("Location: /categoria_produto"); 
    }


    public static function delete()
    {
        include 'Model/Categoria_produtoModel.php';

        $model = new Categoria_produtoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /categoria_produto");
    }
}