<?php

$adress = explode("/", $_SERVER['REQUEST_URI']);

switch ($adress[2]):
    case 'films-list':
        require_once('views/films-list.php');
        break;
    case 'detail':
        require_once('views/detail.php');
        break;
    case 'form':
        require_once('views/form.php');
        break;
    case 'AddProduct':
        require_once('views/AddProduct.php');
        break;
    default:
        include('views/404.php');
        break;
endswitch;
