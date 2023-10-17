<?php
    class Panel {
        public static function isLogged() {
            return (isset($_SESSION['login'])) ? true : false;
        }

        public static function logout() {
            session_destroy();
            header('Location: '.INCLUDE_PATH_PANEL);
        }

        public static function getRole($role) {
            $roles = [
                '0' => 'Employee',
                '1' => 'Sub administrator',
                '2' => 'Administrator'
            ];

            return $roles[$role];
        }
    }
?>