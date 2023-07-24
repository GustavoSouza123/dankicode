<?php
    $nome = "Gustavo";
    if($nome == "Gustavo"):
        echo "Acesso permitido<br><br>";
    endif;

    $i = 0;
    while($i < 10):
        echo "$i<hr>";
        $i++;
    endwhile;
    echo "<br>";

    for($i = 0; $i < 5; $i++):
        echo "gustavo " . $i+1 . "<br>";
    endfor;
?>