<?php


/* Racine du projet. */
if( ! defined ( 'PATH_ROOT')) {
    define ( 'PATH_ROOT', dirname(__FILE__));
}

/* Classes path. */
if( ! defined ( 'PATH_CLASSES')) {
    define ( 'PATH_CLASSES', PATH_ROOT . '/src/classes');
}

/* Config path. */
if( ! defined ( 'PATH_CONF')) {
    define ( 'PATH_CONF', PATH_ROOT . '/config');
}

require_once(PATH_CONF . '/__autoload.php');
