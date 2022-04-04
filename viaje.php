<?php

class viaje{
    private string $codigo;
    private string $destino;
    private int $maximoPasajeros;
    private array $Pasajeros=array();

    public function __construct($codigo,$destino,$maximoPasajeros,$arrayPasajeros)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maximoPasajeros= $maximoPasajeros;
        $this->Pasajeros =$arrayPasajeros;
    }
     /**
     * Se muestra la informacion del viaje
     * @return void
     */
    public function info()
    {
        $cantidadPasajero = count($this->Pasajeros);

        //$cantidadPasajeros = count($this->pasajero);
        $salida= "*****************" ." \n ";
        $salida.= "Codigo: " . $this->codigo." \n ";
        $salida.= "Destino: ". $this->destino." \n ";
        $salida.= "Maximo pasajero: ". $this->maximoPasajeros." \n ";
        $salida.= "Pasajero" ." \n ";
        $salida.= "Nombre: " . $this->pasajero["Nombre"]." \n ";
        $salida.= "Apellido: " . $this->pasajero["Apellido"]." \n ";
        $salida.= "Dni: " . $this->pasajero["Dni"]." \n ";
        $salida.= "**********************" ." \n ";

        return $salida;
    }

    /**
     * Get the value of codigo
     * @param int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     * @param int
     * @return void
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get the value of destino
     * @array string
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     * @array string
     * @return void
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * Get the value of maximoPasajeros
     * @param int
     */ 
    public function getMaximoPasajeros()
    {
        return $this->maximoPasajeros;
    }

    /**
     * Set the value of maximoPasajeros
     * @param int
     * @return void
     */ 
    public function setMaximoPasajeros($maximoPasajeros)
    {
        $this->maximoPasajeros = $maximoPasajeros;
    }

    /**
     * Get the value of cantidadPasajeros
     * @array
     */ 
    public function getCantidadPasajeros()
    {
        return $this->cantidadPasajeros;
    }

    /**
     * Add new pasajero
     * @array string
     * @param int
     * @return void
     */ 
    public function getPasajero()
    {
        return $this->pasajero;
    }
    public function setPasajeros($nombre,$apellido,$documento)
    {
        $this->Pasajero["nombre"]=$nombre;
        $this->pasajero["apellido"]=$apellido;
        $this->pasajero["documento"]=$documento;
    }
}



  