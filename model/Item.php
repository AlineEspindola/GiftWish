<?php
namespace GiftWish\Model;

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

    static function list(){
        $conn = new Connection();
        return $conn -> query("SELECT * FROM item");
    }

    static function limitCharacters(){
        $conn = new Connection();
        $descriptions = $conn -> query("SELECT descricao FROM item") -> fetchAll();

        for ($i = 0; $i<sizeof($descriptions); $i++){
            $descriptions[$i]['descricao'] = str_split($descriptions[$i]['descricao'], 20);
        }

        return $descriptions;
    }

    static function searchField($search){ 
        if($search){
            $conn = new Connection();
            $searched = "SELECT * FROM item WHERE nome LIKE '%$search%'";
            return $conn -> query($searched);
        }
    }

}

?>