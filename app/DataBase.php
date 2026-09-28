<?php
namespace App;
use PDO;
use PDOException;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = '123';
    const DBNAME = 'consultorio';
    private $connection;
    private $table;
    
    public function __construct($table = null){
        $this->setConnection();
        $this->table = $table;
    }
    private function setConnection(){
        $this->connection = new PDO
        ('mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USER,self::PASSWORD);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function insert($array){
        $query = "insert into paciente(nome,cpf,telefone)values(?,?,?)";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

}