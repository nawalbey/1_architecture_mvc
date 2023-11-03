<?php

/**
La fonction 'chargeClass' sera donc appelé quand une class sera requise.
L'argument sera le nom de la class requise.

 */
function chargeClass($className)
{
    // On remplace les \ qui sont dans le nom de la class à charger par des / qui est le séparateur de dossier
    // utilisé dans la plupart des systèmes d'exploitation
    // ⚠ RAPPEL : dans les namespaces, on ne peut utiliser que les \

    $filePath = str_replace("\\", "/", $className);
    $root = __DIR__ . "/../" . $filePath . ".php";
    if (file_exists($root)) {
        require $root;
    } else {
        throw new Exception("La class $className n'a pas été trouvée.");
    }
}

/** 
La fonction spl_autoload_register permet de définir la fonction qui sera 
exécutée à chaque fois qu'une class sera requise par le code (par exemple,
quand on utilise le mot-clé 'new' pour instancier un objet)
 */

//1-la fonction "spl-autoload-register" recupere le nom de la classe, des qu'elle rencontre la premiere syntaxe "new", dans notre cas, etant qu"on a inclus le fichier autoload, contenant la fonction "spl-autoload-register", cette fonction reagis des qu'elle rencontre la syntaxe $controller = new $classController; et elle recupere la valeur de la variable $classController, cette variables contient le nom d'un fichier qui se trouve dans le dossier "controller" (avec un C majuscule).

// 2- en 2eme etape elle fait apel a la fonction "chargeClass" en lui envoyany comme parametre la valeur de la variable "classeController".
spl_autoload_register("chargeClass");