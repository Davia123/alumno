<?php

use PHPUnit\Framework\TestCase;

include './src/alumnos.php';

class alumnoTest extends TestCase
{

   public function testComprobarAbrobado()
   {
      $objeto = new alumno("Alejandro", 5);
      $this->assertEquals("aprobado", $objeto->comprobarAprobado());
   }
   public function testObtenerNombre()
   {
      $objeto = new alumno("Alejandro", 5);
      $this->assertEquals("Alejandro", $objeto->obtenerNombre());
   }
}
