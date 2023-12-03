<?php
namespace GifiWish\Model;

class Item{
    
    public $id;
    public $nome;
    public $descricao;
    public $categoria;
    public $nivel_desejo;
    public $media_preco;

    function __construct($id = null){
        if($id){
            $conn = new Connection();
            $item = $conn -> query("SELECT * FROM item WHERE id=$id");

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

    function delete($id = null){
        $conn = new Connection();
        return $conn -> query("DELETE * FROM item WHERE id=$id") -> fetch();
    }

    function list(){
        $conn = new Connection();
        return $coon -> query("SELECT * FROM item");
    }

    function searchField(){ 
        if($nome){
            $conn = new Connection();
            $searched = "SELECT * FROM item WHERE nome LIKE '%'$this->nome'%'";
            return $conn -> query($searched);
        }
    }

}

?>