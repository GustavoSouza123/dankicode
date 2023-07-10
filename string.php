<?php

    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    echo substr($content, 0, 20);
    echo "<br>";

    $nome = "Gustavo Elia Eisele Souza";
    $nomes = explode(' ', $nome);
    print_r($nomes);
    echo "<br>";

    $nomes = implode('; ', $nomes);
    echo $nomes;
    echo "<br>";

    $content = "<h1>Guilherme</h1>";
    echo $content;
    echo strip_tags($content);
    echo "<br>";

    $div = "<div></div>";
    echo htmlentities($div);
    echo "<br>";
    
?>