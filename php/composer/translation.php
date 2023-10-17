<?php
    require 'vendor/autoload.php';

    use Symfony\Component\Translation\Translator;
    use Symfony\Component\Translation\Loader\ArrayLoader;
    
    $translator = new Translator('pt_BR');
    $translator->addLoader('array', new ArrayLoader());
    $translator->addResource('array', [
        'Hello World!' => 'Olá Mundo!',
    ], 'pt_BR');
    
    echo $translator->trans('Hello World!'); // outputs « Bonjour ! »
?>