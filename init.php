<?php

require("libraries/config.php");


/*
 * Autoload Core Libraries
 *
 * Note: We are not using namespaces, so this will
 * blow up in our faces if we have any duplicate class
 * names! TODO: consider using namespaces!
 */
spl_autoload_register(function($class){

    $controllers = APPROOT .'/controllers/' . $class . '.php';
    $models = APPROOT .'/models/' . $class . '.php';
    $libraries = APPROOT .'/libraries/' . $class . '.php';


    if (file_exists($libraries)) {
        require_once $libraries;
    }elseif(file_exists($controllers)) {
        require_once $controllers;
    }elseif(file_exists($models)) {
        require_once $models;
    }

});

$healthdb = new Database();

session_start();

$viewdata=[];