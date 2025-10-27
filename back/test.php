<?php
    require __DIR__ .'/interfaces/ianimal.php';
    require __DIR__ .'/class/perro.php';
    require __DIR__ . '/class/gato.php';
    
    $oPerro = new Perro();
    $oPerro->hacerSonido();

    $oGato = new Gato();
    $oGato->hacerSonido();