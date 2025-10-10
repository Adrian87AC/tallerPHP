<?php
/*Utilice un bucle while que sume los números del 1 al 100 y muestre el
resultado.*/
$a = 1;
$suma = 0;
while($a <= 100){
    echo $a;
    $suma += $a;
    $a++;
}
echo "La suma es: " . $suma;