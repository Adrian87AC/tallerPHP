<?php
    abstract class abstractTransporte implements Ivehiculo{
        public function arrancar(){
            echo "El transporte arranca";
        }

        abstract public function detener();

    }