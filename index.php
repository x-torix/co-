<?php

use Steampixel\Route;

require_once('config.php');
require_once('class/class.php');

Route::add('/', function(){
    echo "strona główna";
});

Route::add('/', function(){
    echo "strona logowania";
});

Route::add('/', function(){
    echo "strona rejestracji";
});



Route::run('/coś');

?>