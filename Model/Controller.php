<?php
namespace GiftWish\Model;

class Controller{

    function home(){
        $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if($search){
            $items = Item::searchField($search);
        }else{
            $items = Item::list();
        }

        $descriptions = Item::limitCharacters();

        $page = 'home';
        require 'view/template/template_nav.php';
    }


}
?>