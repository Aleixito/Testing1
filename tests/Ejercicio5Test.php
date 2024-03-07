
<?php
use PHPUnit\Framework\TestCase;  

class ObtenerNotaAlumno extends TestCase {

    public function testPrimeraDivision() {
        $this->assertEquals('Primera División', obtenerNotaAlumno(70));
    }

    public function testSegundaDivision() {
        $this->assertEquals('Segunda División', obtenerNotaAlumno(50));
    }

    public function testTerceraDivision() {
        $this->assertEquals('Tercera División', obtenerNotaAlumno(40));
    }

    public function testReprobado() {
        $this->assertEquals('Reprobado', obtenerNotaAlumno(30));
    }

    public function testLimiteSuperiorPrimeraDivision() {
        $this->assertEquals('Primera División', obtenerNotaAlumno(60));
    }

    public function testLimiteInferiorReprobado() {
        $this->assertEquals('Reprobado', obtenerNotaAlumno(0));
    }

    public function testValoresNegativos() {
        $this->assertEquals('Reprobado', obtenerNotaAlumno(-10));
    }

    public function testValoresNoNumericos() {
        $this->assertEquals('Reprobado', obtenerNotaAlumno('abc'));
    }
}
?>