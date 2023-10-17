<?php
    // serve apenas para ser herdada, não pode ser instanciada
    abstract class Teste {
        public function func1() {
            echo "chamando função 1<br>";
        }

        abstract function absMethod();
    }

    class Main1 extends Teste {
        public function absMethod() {
            echo "chamando método abstrato<br>";
        }

        public static function static() {
            echo "método estático da classe Main1<br>";
        }

        public function callsStatic() {
            echo "chamando > ";
            self::static(); // também functiona com Main1::static();
            echo "chamando > ";
            Main2::static();
        }
    }

    class Main2 {
        public static function static() {
            echo "método estático da classe Main2<br>";
        }
    }

    $main = new Main1();

    $main->func1();
    $main->absMethod();
    echo "<br>";
    
    Main1::static();
    Main2::static();
    $main->callsStatic();
?>