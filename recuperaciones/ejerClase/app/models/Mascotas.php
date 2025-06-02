<?php
namespace App\Models;

class Mascotas extends DBAbstractModel {
    private static $instancia;

    public function getInstancia() {
        // Modelo singleton
        if(!isset(self::$instancia)) {
            miClase = __CLASS__;
            self::$instancia = new $miClase;
        }
        return self::$instancia;
    }
}

?>