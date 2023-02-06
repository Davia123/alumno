<?php

class alumno
{
    public $nombre;
    public $nota;


    public function __construct($a1, $a2)
    {

        $this->nombre = $a1;
        $this->nota = $a2;
    }

    public function comprobarAprobado()
    {
        if ($this->nota < 5) {
            return "suspendido";
        } else {
            return "aprobado";
        }
    }
    public function obtenerNombre()
    {
        return $this->nombre;
    }
}
