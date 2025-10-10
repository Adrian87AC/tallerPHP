<?php
    /*Utilice switch para mostrar el día de la semana basado en un número (1-7).*/
    $dia = 3;
    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Número inválido. Por favor ingrese un número entre 1 y 7.";
    }
    ?>