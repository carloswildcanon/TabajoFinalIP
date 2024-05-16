<?php
class REsposableV{
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;
    public function __construct($numEmp,$numLi,$nom,$apellido)
    {
        $this->numeroEmpleado=$numEmp;
        $this->numeroLicencia=$numLi;
        $this->nombre=$nom;
        $this->apellido=$apellido;
    }
    public function getNumeroEmpleado(){
        return $this->numeroEmpleado;
    }
    public function getNumeroLicencia(){
        return $this->numeroLicencia;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        $this->apellido;
    }
    public function setNumeroEmpleado($numEmpleado){
        $this->numeroEmpleado=$numEmpleado;
    }
    public function setNumeroLicencia($numLicencia){
        $this->numeroLicencia=$numLicencia;
    }
    public function setNombre($nombreResposable){
        $this->nombre=$nombreResposable;
    }
    public function setApellido($apellidoResponsable){
        $this->apellido=$apellidoResponsable;
    }
    public function __toString()
    {
        return "Nombre: ". $this->getNombre().
                ", Apellido: ". $this->getApellido().
                ", Num Empleado: ". $this->getNumeroEmpleado().
                ", Num Licencia: ". $this->getNumeroLicencia(). "\n";
    }
}
?>