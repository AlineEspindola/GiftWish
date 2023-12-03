<?php
require 'autoload.php';
session_start();

use GiftWish\Model\Controller;

$page = filter_input(INPUT_GET, 'page');
$controller = new Controller;

switch ($page) {
    case 'x':
        $controller -> x();
        break;
    default:
        $controller -> home();
        break;
}

?>