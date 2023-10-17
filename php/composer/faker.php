<?php
    declare(strict_types=1);
    require 'vendor/autoload.php';

    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create('pt_br');
    // $faker->seed(1234); // always get the same generated data

    // generate data by calling methods
    echo $faker->name() . "<hr>";
    echo $faker->rg() . "<hr>";
    echo $faker->cpf() . "<hr>";
    echo $faker->email() ." <hr>";
    echo $faker->text() . "<hr>";
    echo $faker->sentence(20) . "<hr>";
    echo $faker->company() . "<hr>";
    echo $faker->cnpj() . "<hr>";
    echo $faker->jobTitle() . "<hr>";
    echo $faker->address() . "<hr>";
    echo $faker->state() . "<hr>";
    echo $faker->phone() . "<hr>";
    $date = $faker->dateTime();
    echo $date->format("d/m/Y H:i:s") . "<hr>";
    echo $faker->numberBetween(0, 10) . "<hr>";
    echo $faker->randomDigit() . "<hr>";
    echo $faker->randomNumber(2) . "<hr>";

    echo "Names:<br>";
    $names = array();
    for ($i = 0; $i < 5; $i++) {
        $names[] = $faker->name() . "<br>";
    }
    sort($names);
    print_r($names);
?>