<?php

/**
 * Chargement automatique des classes. 
 */
function __autoload( $classname) {
    
  /* Vérification de l'existence de la classe dans le dossier. */
  if( file_exists( PATH_CLASSES  . '/' . $classname . '.php')) {
    require_once PATH_CLASSES . '/' . $classname . '.php';
  } else {
    die( "La classe " . $classname . " n'existe pas dans " . PATH_CLASSES . '/'.$classname . '/');
  }
}