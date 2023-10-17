<?php
    class Test {
        const VALUE = 300;

        public function __construct() {
            echo self::VALUE;
        }
    }

    $test = new Test();
    echo "<br>";
    echo Test::VALUE;
?>