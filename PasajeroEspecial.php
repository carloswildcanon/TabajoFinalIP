<?php
class PasajeroEspecial extends Pasajero{
    private $dificultadMovilidad;
    private $dificultadAlimenticia;
    public function __construct($nombrePasajero,$apellidoPasajero,$dni,$numTel,$dificultadMovilidad,$dificultadAlimenticia)
    {
        parent::__construct($nombrePasajero,$apellidoPasajero,$dni,$numTel);
        $this->dificultadMovilidad=$dificultadMovilidad;
        $this->dificultadAlimenticia=$dificultadAlimenticia;
    }
    public function getDificultadMovilidad(){
        return $this->dificultadMovilidad;
    }
    public function getDificultadAlimenticia(){
        return $this->dificultadAlimenticia;
    }
    public function setDificultadMovilidad($nMovilidad){
        $this->dificultadMovilidad=$nMovilidad;
    }
    public function setDificultadAlimenticia($nAlimenticia){
        $this->dificultadAlimenticia=$nAlimenticia;
    }

    public function __toString()
    {
        return parent::__toString(). 
                "dificultad en la movilidad: ". $this->getDificultadMovilidad(). "\n". 
                "dificultad en la alimetacion: ". $this->getDificultadAlimenticia()."\n";
    }

    public function darPorcentajeIncremento(){
        $porcentaje=parent::darPorcentajeIncremento();
        $porcentajePorMovilidad=0;
        $porcentajePorAlimentacion=0;
        $movilidad=$this->getDificultadMovilidad();
        $alimentacion=$this->getDificultadAlimenticia();
        if($alimentacion != null){
            $porcentajePorAlimentacion=15;
        }
        if($movilidad != null){
            $porcentajePorMovilidad=15;
        }
        $porcentaje+=$porcentajePorAlimentacion+$porcentajePorMovilidad;
        return $porcentaje;
    }
} 

?>