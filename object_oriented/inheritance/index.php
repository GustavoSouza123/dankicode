<?php

    class Filha {
        public function printHello() {
            echo "Hello World!<br>";
        }

        protected function protected() {
            echo "Método protegido<br>";
        }
    }

    class Pai extends Filha {
        public function printHello() {
            parent::printHello(); // override
            echo "Nova função<br>";
        }

        public function printBye() {
            echo "Goodbye World!<br>";
        }

        public function callsProtected() {
            $this->protected();
        }
    }

    $filha = new Filha();
    $filha->printHello();

    $pai = new Pai();
    $pai->printBye();

    // inherit
    // $pai->printHello();

    // protected method
    $pai->callsProtected();

    // override
    $pai->printHello();

?>