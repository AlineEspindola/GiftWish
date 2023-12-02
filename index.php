<?php
require 'autoload.php';
session_start();

use GiftWish\Controller\Controller;

$page = filter_input(INPUT_GET, 'page');
$controller = new Controller;

switch ($page) {
    case 'home':
        $controller -> home();
        break;
}

?>