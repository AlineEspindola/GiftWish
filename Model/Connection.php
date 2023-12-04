<?php
namespace GiftWish\Model;
use \PDO;
use \PDOException;

class Connection extends PDO{
    private $banco='giftwish';
    private $user='root';
    private $password='';

    function __construct()
    {
        $dns = 'mysql:host=localhost; dbname='. $this -> banco;
        try{
            parent::__construct($dns, $this->user, $this -> password);
        } catch (PDOException $e){
            file_put_contents("log.txt", $e->getMessage(), FILE_APPEND | LOCK_EX);
            die("Erro ao conectar no banco de dados. Tente novamente");
        }
    }
}

?>