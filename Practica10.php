<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 10</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header><h2>Promedio:</h2></header>
        <section>
        <form action="" method="POST"> <!-- Formulario para ingresar las notas mediante metodo POST-->
            <label for="N1">Nota 1:</label> <!--  se ingresa primera nota -->
            <input type="number" id="N1" name="N1" required><br><br>
            <label for="N2">Nota 2:</label> <!-- se ingresa segunda nota -->
            <input type="number" id="N2" name="N2" required><br><br>
            <label for="N3">Nota 3:</label> <!-- se ingresa tercera nota -->
            <input type="number" id="N3" name="N3" required><br><br>
            <label for="N4">Nota 4:</label> <!-- se ingresa cuarta nota -->
            <input type="number" id="N4" name="N4" required><br><br>
            <button type="submit">Enviar</button><br><br> 
        </form>
        </section>
        <?php
        // Se verifica si el formulario ha sido enviado mediante POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Se verifica que todas las notas estén definidas en $_POST
            if(isset($_POST['N1']) && isset($_POST['N2']) && isset($_POST['N3']) && isset($_POST['N4'])){
                
                // Se asignan los valores ingresados a variables PHP
                $N1 = $_POST['N1'];
                $N2 = $_POST['N2'];
                $N3 = $_POST['N3'];
                $N4 = $_POST['N4'];

                // Se almacenan las notas en un array y se ordenan de mayor a menor
                $NOTAS = array($N1, $N2, $N3, $N4);
                rsort($NOTAS);

                // Se calcula el promedio de las tres mejores notas
                $PROM = ($NOTAS[0] + $NOTAS[1] + $NOTAS[2]) / 3;

                // Se muestra el promedio formateado con dos decimales
                echo "<p>El promedio de las 3 mejores notas es: ".number_format($PROM, 2). "</p>";

                // Se evalúa si el estudiante aprueba o reprueba según su promedio
                if($PROM >= 6){
                    echo "<p>APROBADO</p>";
                } else {
                    echo "<p>REPROBADO</p>";
                }
            }
        }
        ?>
        <br><br><a href="Practica9.php">Regresar práctica</a> 
    </main>
    <footer>Leonel Bautista Hernández</footer> <!-- Pie de página con el nombre del autor -->
</body>
</html>

<!-- Explicación:
Este programa permite ingresar cuatro notas y calcular el promedio de las tres mejores.
Primero, las notas se almacenan en un array y se ordenan de mayor a menor.
Luego, se suman las tres notas más altas y se dividen entre tres para obtener el promedio.
Si el promedio es mayor o igual a 6, se muestra "APROBADO"; de lo contrario, se muestra "REPROBADO". -->

