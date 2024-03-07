<html>
<head>
    <title>PHP BASIC</title>
</head>
<body>
    <?php 
    function obtenerNotaAlumno($puntuacion) {
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
    ?>
</body>
</html>