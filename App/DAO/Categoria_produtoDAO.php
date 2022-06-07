<?php


class Categoria_produtoDAO
{
   
    private $conexao;


     
    public function __construct()
    {
       
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

     
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    
    public function insert(Categoria_produtoModel $model) 
    {
       
        $sql = "INSERT INTO categoria_produto (nome, tipo) VALUES (?, ?) ";


        
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->tipo);
        

         
        $stmt->execute();
    }


    
    public function update(Categoria_produtoModel $model)
    {
        $sql = "UPDATE categoria_produto SET nome=?, tipo=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->tipo);  
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM categoria_produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/Categoria_produtoModel.php';

        $sql = "SELECT * FROM categoria_produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Categoria_produtoModel");
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}