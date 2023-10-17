<?php
    class Example {
        private $var1;
        public $var2;
        public static $var3 = "estático";

        public static function staticMethod() {
            echo "<br>método estático<br>";
        }

        public function getVar1() {
            return $this->var1;
        }

        public function setVar1($var1) {
            $this->var1 = $var1;
        }
    }
?>