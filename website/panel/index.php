<?php
    include ('../config/config.php');

    if(Panel::isLogged()) {
        include('main.php');
    } else {
        include('login.php');
    }
?>