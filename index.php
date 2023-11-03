<?php
require "inc/init.inc.php";


/* 
URL: index.php?controller=user&method=update&id=32
*/
$controller = $_GET["controller"] ?? "home";
$method = $_GET["method"] ?? "liste";
$id = $_GET["id"] ?? null;

// echo $controller."<br>";
// echo $method."<br>";
// echo $id."<br>";


$classeController = "Controller\\" . ucfirst($controller) . "Controller"; // ucfirst: met la première lettre d'un string en majuscule
/* $classeController = "Controller\HomeController" 
   $methode = "liste"
*/

// echo $controller . "<br>";
// echo $method . "<br>";
// echo $id . "<br>";

/* On peut instancier un objet en utilisant un string pour le nom de la classe.
    _⚠ le nom de la classe doit être dans une variable pour pouvoir utiliser 'new'
*/
$controller = new $classeController;
// $UserController->update($id);
$controller->$method($id);