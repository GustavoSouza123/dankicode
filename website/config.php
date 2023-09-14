<?php
    // autoload classes
    $autoload = function($class) {
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    // website path
    define('INCLUDE_PATH', 'http://localhost/dankicode/website/');
    /*define('INCLUDE_PATH', 'http://localhost/dankicode-courses/website/'); // => cloned repo*/
?>