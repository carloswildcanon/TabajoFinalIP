<?php
class Pasajero{
    private $nombre;
    private $apellido;
    private $numeroDocumento;
    private $numeroTelefono;
    public function __construct($nombrePasajero,$apellidoPasajero,$dni,$numTel)
    {
        $this->nombre=$nombrePasajero;
        $this->apellido=$apellidoPasajero;
        $this->numeroDocumento=$dni;
        $this->numeroTelefono=$numTel;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }
    public function getNumeroTelefono(){
        return $this->numeroTelefono;
    }
    public function setNombre($nomNuevo){
        $this->nombre=$nomNuevo;
    }
    public function setApellido($apellidoNuevo){
        $this->apellido=$apellidoNuevo;
    }
    public function setNumeroDocumento($dniNuevo){
        $this->numeroDocumento=$dniNuevo;
    }
    public function setNumeroTelefono($telNuevo){
        $this->numeroTelefono=$telNuevo;
    }
    public function __toString()
    {
        return "nombre : ". $this->getNombre().
                ", Apellido: ". $this->getApellido().
                ", DNI: ". $this->getNumeroDocumento().
                ", Telefono: ". $this->getNumeroTelefono(). "\n"; 
    }

    public function darPorcentajeIncremento(){
        $porcentaje=0;
        return $porcentaje;
    }
}
?>