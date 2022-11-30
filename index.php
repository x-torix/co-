<?php

use Steampixel\Route;

require_once('config.php');
require_once('class/class.php');

Route::add('/', function(){
    echo "strona główna";
});

Route::add('/login', function(){
    //echo "strona logowania";
    global $twig;
    $twig->display('login.html.twig');
});

Route::add('/register', function(){
    //echo "strona rejestracji";
    global $twig;
    $twig->display('register.html.twig');
});



Route::run('/coś');

?>