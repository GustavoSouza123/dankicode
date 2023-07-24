<?php
    include('Interface1.php');

    class Test implements Interface1 {
        public function printOnScreen($param) {
            echo $param;
        }
    }

    $test = new Test();
    $test->printOnScreen('Hello World!');
?>