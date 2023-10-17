<?php
    include('Class1.php');
    include('Class2.php');

    use \Session1\Class1 as example_class;

    $class1 = new example_class();
?>