
<?php
use PHPUnit\Framework\TestCase;  

require_once 'Ejercicio5.php';

class NotasAlumnoTest extends TestCase {

    public function testObtenerNotaPrimeraDivision() {
        $this->assertEquals('Primera División', NotasAlumno::obtenerNota(70));
    }

    public function testObtenerNotaSegundaDivision() {
        $this->assertEquals('Segunda División', NotasAlumno::obtenerNota(50));
    }

    public function testObtenerNotaTerceraDivision() {
        $this->assertEquals('Tercera División', NotasAlumno::obtenerNota(40));
    }

    public function testObtenerNotaReprobado() {
        $this->assertEquals('Reprobado', NotasAlumno::obtenerNota(20));
    }
}

?>