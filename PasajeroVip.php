<?php
class PasajeroVip extends Pasajero{
    private $numViajeroFrecuente;
    private $cantMillas;

    public function __construct($nombrePasajero,$apellidoPasajero,$dni,$numTel,$numViajeroFrecuente,$cantMillas)
    {
        parent::__construct($nombrePasajero,$apellidoPasajero,$dni,$numTel);
        $this->numViajeroFrecuente=$numViajeroFrecuente;
        $this->cantMillas=$cantMillas;
    }
    public function getNumViajeroFrecuente(){
        return $this->numViajeroFrecuente;
    }
    public function getCantMillas(){
        return $this->cantMillas;
    }
    public function setNumViajeroFrecuente($nuevoNumViajeroFrecuente){
        $this->numViajeroFrecuente=$nuevoNumViajeroFrecuente;
    }
    public function setCantMillas($nCantMillas){
        $this->cantMillas=$nCantMillas;
    }
    public function __toString()
    {
        return parent::__toString(). 
               "numero de viajero frecuente: ". $this->getNumViajeroFrecuente(). "\n". 
               "cantidad de millas recorridas: ". $this->getCantMillas(). "\n";
    }

    public function darPorcentajeIncremento(){
        $porcentaje=parent::darPorcentajeIncremento();
        $porcentajePorVip=35;
        $porcentajePorMillas=0;
        $millas=$this->getCantMillas();
        if($millas > 300){
            $porcentajePorMillas=30;
        }
        $porcentaje+=$porcentajePorVip+$porcentajePorMillas;
        return $porcentaje;
    }
}


?>