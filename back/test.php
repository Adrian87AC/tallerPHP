<?php
    require __DIR__ .'/interfaces/ianimal.php';
    require __DIR__ .'/class/perro.php';
    require __DIR__ . '/class/gato.php';
    
    require __DIR__ . '/interfaces/ivehiculo.php';
    require __DIR__ . '/class/abstractTransporte.php';
    require __DIR__ . '/class/bicicleta.php';
    
    $oPerro = new Perro();
    $oPerro->hacerSonido();

    $oGato = new Gato();
    $oGato->hacerSonido();

    $bici = new bicicleta();
    $bici->arrancar();
    $bici->detener();