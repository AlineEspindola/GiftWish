<?php
namespace GifiWish\Model;

class Item{
    
    public $id;
    public $nome;
    public $descricao;
    public $categoria;
    public $nivel_desejo;
    public $media_preco;

    function __construct($id=null){
        if($id){
            $conn = new Connection();
            $user = $conn -> query("SELECT * FROM item WHERE id=$id");

            if($item){
                $this -> id = $item['id'];
                $this -> nome = $item['nome'];
                $this -> descricao = $item['descricao'];
                $this -> categoria = $item['categoria'];
                $this -> nivel_desejo = $item['nivel_desejo'];
                $this -> media_preco = $item['media_preco'];
            }else{
                die('Item não encontrado');
            }
        }
        
    }

}

?>