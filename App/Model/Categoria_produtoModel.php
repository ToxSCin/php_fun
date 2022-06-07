<?php

class Categoria_produtoModel
{

    public $id, $nome, $tipo;



    public $rows;


  
    public function save()
    {
        include 'DAO/Categoria_produtoDAO.php'; 
   
        $dao = new Categoria_produtoDAO(); 

      
        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }


    
    public function getAllRows()
    {
        include 'DAO/Categoria_produtoDAO.php'; 
        $dao = new Categoria_produtoDAO();

        
        $this->rows = $dao->select();
    }


    
    public function getById(int $id)
    {
        include 'DAO/Categoria_produtoDAO.php'; 

        $dao = new Categoria_produtoDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new Categoria_produtoModel();

     
    }


    
    public function delete(int $id)
    {
        include 'DAO/Categoria_produtoDAO.php'; 
        $dao = new Categoria_produtoDAO();

        $dao->delete($id);
    }
}