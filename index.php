<?php
require 'autoload.php';
session_start();

use GiftWish\Model\Controller;

$page = filter_input(INPUT_GET, 'page');
$controller = new Controller;

switch ($page) {
    default:
        $controller -> home();
        break;
}

?>