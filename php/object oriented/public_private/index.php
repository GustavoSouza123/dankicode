<?php
    include('Example.php');

    // instanciando um objeto
    $example = new Example();
    $example->var2 = "Gustavo";

    $example2 = new Example();
    $example2->var2 = "João";

    /*echo $example->var2;
    echo "<br>";
    echo $example2->var2;*/

    // static attributes
    echo Example::$var3;
    Example::staticMethod();

    // set private variable var1
    $example->setVar1("Gustavo Souza");
    echo $example->getVar1() . "<br>";

    $example2->setVar1("João");
    echo $example2->getVar1() . "<br>";
?>