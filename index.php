<?php

declare(strict_type=1);

function myAutoloader($class)
{
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($classPath)) {
        include $classPath;

    }
}
// La fonction myAutoloader est lancé sur la classe appelée n'est pas trouvée
spl_autoload_register("myAutoloader");

if ( file_exists($cPath) ) {
    include $cPath;
    $c = 'controllers\\' . $c;
    if ( class_exists($c)) {
        //instancier dynamiquement le controller
        $cObject = new $c(new Users());
        //vérifier que la méthode (l'action) existe
        if ( method_exists($cObject, $a) ) {
            //appel dynamique de la méthode
            $cObject->$a();
        } else {
            die("La methode ".$a." n'existe pas");
        }

    } else {
        die("La class controller ".$c." n'existe pas");
    }
} else {
    die("Le fichier controller ".$c." n'existe pas");
}