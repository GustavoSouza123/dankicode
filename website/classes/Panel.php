<?php
    class Panel {
        public static function isLogged() {
            return (isset($_SESSION['login'])) ? true : false;
        }
    }
?>