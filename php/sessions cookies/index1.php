<?php
    session_start();
    setcookie('name', 'Gustavo', time() - 60*60*24, '/');
    echo "this is supposed to throw an error message because the cookie doesn't exist anymore:<br>";
    echo $_COOKIE['name'];
?>