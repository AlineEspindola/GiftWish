<?php
namespace GiftWish\Model;

class Controller{

    function home(){
        $page = 'home';
        $itens = Item::list();
        require 'view/template/template_nav.php';
    }

}
?>