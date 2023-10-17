<?php
    class Pessoa {
        private $nome = "Gustavo";
        public $idade = "16";
        public $peso = "55kg";

        public function crescer() {
            echo "estou crescendo<br>";
            $this->comer();
        }

        private function comer() {
            echo "estou comendo<br>";
        }
    }

    // instanciando objetos
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa1->crescer();
    echo $pessoa2->peso;
?>