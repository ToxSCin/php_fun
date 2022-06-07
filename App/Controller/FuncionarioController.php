<?php

class FuncionarioController 
{
   
    public static function index()
    {
        
        include 'Model/FuncionarioModel.php'; 
        
        $model = new FuncionarioModel(); 
        $model->getAllRows();

        include 'View/modules/Funcionario/ListaFuncionario.php';
    }


    
    public static function form()
    {
        include 'Model/FuncionarioModel.php';
        $model = new FuncionarioModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/Funcionario/FormFuncionario.php'; 
    }


    

     
    public static function save()
    {
       include 'Model/FuncionarioModel.php';

       
       $model = new FuncionarioModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->salario = $_POST['salario'];
       $model->cargo = $_POST['cargo'];

       $model->save(); 

       header("Location: /funcionario"); 
    }


    public static function delete()
    {
        include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /funcionario");
    }
}