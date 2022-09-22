<?php

namespace App\DAO;
use \PDO;

abstract class DAO
{
    protected $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=". $_ENV['db']['database'] . "";

        $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['etecjau']);
    }
}

/**  public function __construct()
*{
*       
*    $dsn = "mysql:host=localhost:3307;dbname=db_mvc";
*
*
*    $this->conexao = new PDO($dsn, 'root', 'etecjau');
*} 
*/