<?php
    session_start();

    /* autoload classes */
    $autoload = function($class) {
        require_once('../classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    /* constants variables */

    // website paths
    define('INCLUDE_PATH', 'http://localhost/dankicode/website/');
    define('INCLUDE_PATH_PANEL', INCLUDE_PATH.'panel/');

    // database connection
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'website');

    include('connection.php');
?>