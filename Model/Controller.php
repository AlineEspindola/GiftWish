<?php
namespace GiftWish\Model;

class Controller{

    function home(){
        $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
        $descriptions = Item::limitCharacters();
        $descriptionsFinal = [];
        $count = 0;

        if($search){
            $items = Item::searchField($search);
        }else{
            $items = Item::list();
        }

        for($i = 0; $i<sizeof($descriptions); $i++){
            for($j = 0; $j<sizeof($items); $j++){
                if($descriptions[$i]['id'] == $items[$j]['id']){
                    $descriptionsFinal[$count] = $descriptions[$i]['descricao'];
                    $count ++;
                }
            }
        }

        $page = 'home';
        require 'view/template/template_nav.php';
    }


}
?>