<?php
    session_start();

    // autoload classes
    $autoload = function($class) {
        require_once('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    // website path
    define('INCLUDE_PATH', 'http://localhost/dankicode/website/');
    define('INCLUDE_PATH_PANEL', INCLUDE_PATH.'panel/');
?>