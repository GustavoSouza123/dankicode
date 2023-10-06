<?php
    require 'vendor/autoload.php';

    use Carbon\Carbon;

    $tomorrow = date("d/m/Y", strtotime(Carbon::now()->addDay()));
    printf("Now is: %s<br>", Carbon::now());
    printf("Tomorrow is: %s", $tomorrow);
?>