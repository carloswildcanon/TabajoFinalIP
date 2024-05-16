<?php
class Viaje{
    private $codigoViaje;
    private $destino;
    private $cantMaximaPasajeros;
    private $objPasajeros;//coleccion de pasajeros
    private $objResponsable;
    public function __construct($codigoViaje,$destinoViaje,$cantMaxPasajeros,$coleccionPasajeros,$objResponsableViaje)
    {
        $this->codigoViaje=$codigoViaje;
        $this->destino=$destinoViaje;
        $this->cantMaximaPasajeros=$cantMaxPasajeros;
        $this->objPasajeros=$coleccionPasajeros;
        $this->objResponsable=$objResponsableViaje;
    }
    public function getCodigoViaje(){
        return $this->codigoViaje;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getCantidadMaximaPasajeros(){
        return $this->cantMaximaPasajeros;
    }
    public function getPasajeros(){
        return $this->objPasajeros;
    }
    public function getResposable(){
        return $this->objResponsable;
    }
    public function setCodigoViaje($codNuevo){
        $this->codigoViaje=$codNuevo;
    }
    public function setDestino($destinoNuevo){
        $this->destino=$destinoNuevo;
    }
    public function setCantidadMaximaPasajeros(){
        $this->cantMaximaPasajeros;
    }
    public function setPasajeros($nuevosPasajeros){
        $this->objPasajeros=$nuevosPasajeros;
    }
    public function setResponsable($nuevoResponsable){
        $this->objResponsable=$nuevoResponsable;
    }

    public function buscarPasajeroPorDni($dni){
        $colPasajeros=$this->getPasajeros();
        $contador=0;
        $pasajero=null;
        $bandera=true;
        if ($colPasajeros == null){
            $cantidadPsajeros=0;
        }else{
            $cantidadPsajeros=count($colPasajeros);
        }

        while($bandera && $contador < $cantidadPsajeros){
                if($dni == $colPasajeros[$contador]->getNumeroDocumento() ){
                    $pasajero=$colPasajeros[$contador];
                    $bandera=false;
                }
                $contador=$contador+1;
            }
        
        return $pasajero;
    }

    public function ingresarPasajero($objPasajero){
        $colPasajero=$this->getPasajeros();
        if($colPasajero == null){
            $colPasajero=[];
        }
        array_push($colPasajero,$objPasajero);
        $this->setPasajeros($colPasajero);
    }
    /*
    public function cambiarNombrePasajero($dniPasajero,$nombreNuevo){
        $pasajero=$this->buscarPasajeroPorDni($dniPasajero);
        if($pasajero!=null){
            $pasajero->setNombre($nombreNuevo);
        }
        return $pasajero;

    }*/

}
?>