
    <?php

    class NotasAlumno {

        public static function obtenerNota($puntuacion) {
            if ($puntuacion >= 60) {
                return 'Primera División';
            } elseif ($puntuacion >= 45 && $puntuacion < 60) {
                return 'Segunda División';
            } elseif ($puntuacion >= 33 && $puntuacion < 45) {
                return 'Tercera División';
            } else {
                return 'Reprobado';
            }
        }

    }

    $puntuacion = 75;
    $nota = NotasAlumno::obtenerNota($puntuacion);
    echo "El alumno tiene la siguiente nota: $nota";

    ?>