<?php
require_once('vendor/autoload.php');

$loader = new Twig\Loader\FilesystemLoader('./templates');
$twig = new Twig\Environment($loader);
$db = new mysqli('localhost', 'root', '', '4hploginform');
require_once('class/class.php');

?>