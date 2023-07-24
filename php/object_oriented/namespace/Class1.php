<?php
    namespace Session1;
    use Session2\Class2;

    class Class1 {
        public function __construct() {
            new Class2();
            echo "classe 1 instanciada<br>";
        }
    }
?>