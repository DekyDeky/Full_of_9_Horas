<?php
$uri = $_SERVER['REQUEST_URI'];

$tempURI = str_replace("/fullof9hours", "", $uri);

switch($tempURI) {
    case '/':
        require './app/controller/home/home.php';
        break;
    case '/login':
        require './app/controller/login/login.php';
        break;
}