<?php

spl_autoload_register(function ($name){
    $file = 'Models' . DIRECTORY_SEPARATOR . "{$name}.php";
    if(!file_exists($file))
        die("{$file} doesnt exists.");

    include_once $file;

    if(!class_exists($name) && !interface_exists($name))
    die("{$name} doesnt exists.");
});

