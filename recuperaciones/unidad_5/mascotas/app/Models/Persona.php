<?php
namespace App\Models;
class Persona
{
    private $_nombre;
    private $_apellidol;
    private $_apellido2;

    public function construct($nombre, $apellido1, $apellido2)
    {
        $this->_nombre = $nombre;
        $this->_apellidol = $apellido1;
        $this->_apellido2 = $apellido2;
    }

    public function __destruct()
    {
        echo $this->_nombre . " destruido";
    }

    public function saluda()
    {
        echo "Hola mundo<br>";
    }

    public function Nombre()
    {
        return $this->_nombre." ".$this->_apellidol." ".$this->_apellido2;
    }
}

?>