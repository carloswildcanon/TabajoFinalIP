<?php
include_once("Viaje.php");
include_once("Pasajero.php");
include_once("ResponsableV.php");
include_once("PasajeroComun.php");
include_once("PasajeroVip.php");
include_once("PasajeroEspecial.php");

function saberTipoPasajero($objPasajero){
    if(is_a($objPasajero,'PasajeroComun')){
        $tipoPasajero="comun";
    }elseif(is_a($objPasajero,'PasajeroVip')){
        $tipoPasajero="vip";
    }else{
        $tipoPasajero="especial";
    }
    return $tipoPasajero;
}

function opcionesPasajero(){
    echo "-Ingrese 1 si quiere Modificar el nombre del pasajero.\n";
    echo "-Ingrese 2 si quiere Modificar el apellido del pasajero.\n";
    echo "-Ingrese 3 si quiere Modificar el numero de telefono del pasajero.\n";
}
function modificacoinesPasajeroComun($objPasajero){
    //opcionesPasajero();
    $opcion=trim(fgets(STDIN));
    switch($opcion){
        case 1:
            $nombre=$objPasajero->getNombre();
            echo "El nombre actual es: ". $nombre. "\n";
            echo "Ingrese el nuevo nombre: ";
            $nuevoNombre = trim(fgets(STDIN));
            $objPasajero->setNombre($nuevoNombre);
            echo "El nuevo nombre Ingresado fue: ".$objPasajero->getNombre(). "\n";
            break;
        case 2:
            $apellido=$objPasajero->getApellido();
            echo "El apellido actual es: ". $apellido. "\n";
            echo "Ingrese el nuevo apellido: ";
            $nuevoapellido = trim(fgets(STDIN));
            $objPasajero->setApellido($nuevoapellido);
            echo "El nuevo apellido Ingresado fue: ".$objPasajero->getApellido(). "\n";
            break;
        case 3:
            $telefono=$objPasajero->getNumeroTelefono();
            echo "El numero de telefono actual es: ". $telefono. "\n";
            echo "Ingrese el nuevo numero de telefono: ";
            $nuevotelefono = trim(fgets(STDIN));
            $objPasajero->setNumeroTelefono($nuevotelefono);
            echo "El nuevo numero de telefono Ingresado fue: ".$objPasajero->getNumeroTelefono(). "\n";
            break;
    }
    return $opcion;
}

function modificacionPasajeroVip($objPasajero){
    //opcionesPasajero();
    echo "-Ingrese 4 si quiere cambiar el numero de viajero frecuente.\n";
    echo "-Ingrese 5 si quiere cambiar la cantidad de millas.\n";
    $opcion=modificacoinesPasajeroComun($objPasajero);
    switch($opcion){
        case 4:
            $numViaFre=$objPasajero->getNumViajeroFrecuente();
            echo "El numero de viajero frecuente actual es: ". $numViaFre. "\n";
            echo "Ingrese el nuevo numero de viajero frecuente: ";
            $nuevonumViaFre = trim(fgets(STDIN));
            $objPasajero->setNumViajeroFrecuente($nuevonumViaFre);
            echo "El nuevo numero de viajero frecuente Ingresado fue: ".$objPasajero->setNumViajeroFrecuente(). "\n";
            break;
        case 5:
            $millas=$objPasajero->getCantMillas();
            echo "La cantidad de millas actual es: ". $millas. "\n";
            echo "Ingrese la nueva cantidad de millas: ";
            $nuevomillas = trim(fgets(STDIN));
            $objPasajero->setCantMillas($nuevomillas);
            echo "La cantidad de millas Ingresadas fue: ".$objPasajero->getCantMillas(). "\n";
            break;
}
}

function modificacionesPasajeroEspecial($objPasajero){
    echo "-Ingrese 4 si quiere cambiar la dificultad en la movilidad del pasajero.\n";
    echo "-Ingrese 5 si quiere cambiar la dificultad en la alimentacion del pasajero.\n";
    $opcion=modificacoinesPasajeroComun($objPasajero);
    switch($opcion){
        case 4:
            $movilidad=$objPasajero->getDificultadMovilidad();
            echo "Tiene dificultad en la movilidad: ". $movilidad. "\n";
            echo "Ingrese si tiene difultad en la movilidad: ";
            $nuevomovilidad = trim(fgets(STDIN));
            $objPasajero->setDificultadMovilidad($nuevomovilidad);
            echo "la dificultad en la movilidad nueva es: ".$objPasajero->getDificultadMovilidad(). "\n";
            break;
        case 5:
            $alimenticia=$objPasajero->getDificultadAlimenticia();
            echo "Tiene dificultad en la alimentacion: ". $alimenticia. "\n";
            echo "Ingrese si Tiene dificultad en la alimentacion: ";
            $nuevoalimenticia = trim(fgets(STDIN));
            $objPasajero->setDificultadAlimenticia($nuevoalimenticia);
            echo "La dificultad en la alimentacion Ingresada fue: ".$objPasajero->getDificultadAlimenticia(). "\n";
            break;
}
}

function modificarPorelTipoPasajero($tipo,$objPasajero){
    switch($tipo){
        case "comun":
            opcionesPasajero();
            modificacoinesPasajeroComun($objPasajero);
            break;
        case "vip":
            opcionesPasajero();
            modificacionPasajeroVip($objPasajero);
            break;
        case "especial":
            opcionesPasajero();
            modificacionesPasajeroEspecial($objPasajero);
            break;
    }
}
$objPasajero1=new PasajeroVip("lolo","gyu",21454,5874,78,500);
$objPasajero2=new PasajeroEspecial("lalo","yuh",1234,2541,"no","si");
$pasajeros=[$objPasajero1,$objPasajero2];
$objResponsable=new REsposableV(21,23652,"juan","perez");
$objViaje1=new Viaje(256,"peru",10,$pasajeros,$objResponsable);
//$objViaje1=new Viaje(1,null,null,null,null);
echo "|-------------------------------------|\n\n";
echo "     Bienvenidos a Viaje Feliz\n\n";

echo "Elija la accion que se desea realizar:\n";
echo "-Ingrese 0 para mostrar los datos del viaje \n";
echo "-Ingrese 1 Si quiere modificar el codigo del viaje. \n";
echo "-ingrese 2 Si desea modificar el destino. \n";
echo "-Ingrese 3 si desea modificar o agregar pasajero.\n";
echo "-Ingrese 4 si desea modificar el responsable del viaje.\n";
echo "-Ingrese 5 para Salir \n";
$opcion=trim(fgets(STDIN));
switch($opcion){
    case 1:
        $codigo=$objViaje1->getCodigoViaje();
        if($codigo==null){
            echo "No hay codigo asigando: \n"; 
            echo "Ingrese el codigo nuevo: ";
            $ncodigo=trim(fgets(STDIN));
            $objViaje1->setCodigoViaje($ncodigo);
            echo "El nuevo codigo ingresado para el viaje es: ". $objViaje1->getCodigoViaje(). "\n";

        }else{
            echo "Codigo actual: ". $codigo. "\n";
            echo  "Ingrese el codigo nuevo: ";
            $ncodigo=trim(fgets(STDIN));
            $objViaje1->setCodigoViaje($ncodigo);
            echo "El nuevo codigo ingresado para el viaje es: ". $objViaje1->getCodigoViaje(). "\n";
        }
        break;
    case 2:
        $destino=$objViaje1->getDestino();
        if($destino==null){
            echo "No hay destino asigando: \n"; 
            echo "Ingrese el destino nuevo: ";
            $ndestino=trim(fgets(STDIN));
            $objViaje1->setDestino($ndestino);
            echo "El nuevo destino ingresado para el viaje es: ". $objViaje1->getDestino(). "\n";
            
        }else{
            echo "Destino actual: ". $destino. "\n";
            echo  "Ingrese el destino nuevo: ";
            $ndestino=trim(fgets(STDIN));
            $objViaje1->setDestino($ndestino);
            echo "El nuevo destino ingresado para el viaje es: ". $objViaje1->getDestino(). "\n";
        }
        break;
    case 3:
        echo "-Ingrese 1 si quiere modificar los datos de un pasajero\n";
        echo "-Ingrese 2 si quiere ingresar un pasajero nuevo\n";
        $nuevaOpcion=trim(fgets(STDIN));
        switch($nuevaOpcion){
            case 1:
                echo "Ingrese el numero de documento: ";
                $dniBusqueda=trim(fgets(STDIN));
                $pasjeroBuscado=$objViaje1->buscarPasajeroPorDni($dniBusqueda);
                if($pasjeroBuscado == null){
                    echo "El pasajero no se encuentra ingresado.\n";
                }else{
                    $tipoPasajero=saberTipoPasajero($pasjeroBuscado);
                    modificarPorelTipoPasajero($tipoPasajero,$pasjeroBuscado);
                }
        }

    case 4:    
}



?>