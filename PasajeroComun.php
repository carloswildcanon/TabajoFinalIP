<?php
class PasajeroComun extends Pasajero{
    public function __construct($nombrePasajero,$apellidoPasajero,$dni,$numTel)
    {
        parent::__construct($nombrePasajero,$apellidoPasajero,$dni,$numTel);
    }
    public function __toString()
    {
        $cadena=parent::__toString();
        return $cadena;
    }
    public function darPorcentajeIncremento(){
        $porcentaje=parent::darPorcentajeIncremento();
        $porcentaje+=10;
        return $porcentaje;
    }
}

?>