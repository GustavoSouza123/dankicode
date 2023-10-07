<?php
    require '../vendor/autoload.php';

    $faker = Faker\Factory::create('pt_br');
    $data = array();

    // if($_POST['formName'] == 'home-form') {
    //     $data['email'] = $faker->email();
    // } else if($_POST['formName'] == 'contact-form') {
    //     $data['name'] = $faker->name();
    //     $data['email'] = $faker->email();
    //     $data['phone'] = $faker->phone();
    //     $data['text'] = $faker->text();
    // }

    // die(json_encode($data));
    die(json_encode($_POST)); /* ERROR WITH THE POST ATTRIBUTE NAME */
?>