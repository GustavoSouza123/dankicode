<?php
    session_start();
    setcookie('name', 'Gustavo', time() - 60*60*24, '/');
    echo $_COOKIE['name'];
?>