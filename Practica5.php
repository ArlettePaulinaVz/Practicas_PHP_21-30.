<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 5</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header><h2>Numero doble y triple</h2></header>
        <section>
        <form action="" method="POST"><!-- En esta parte se encuentra el formulario y envía los datos mediante POST -->
            <label for="numero">Numero:</label><!--En esta parte del formulario se debe ingresar un numero-->
            <input type="number" id="numero" name="numero" required><br><br>
            <button type="submit">Enviar:</button><br><br>
        </form>
        </section>
        <?php
        //En esta parte se verifica si el formulario si se ha enviado mediante POST.
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['numero'])){
        //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
            $numero = $_POST ['numero'];
        /* Se evalua si el número es par o impar utilizando el operador módulo mediante condiciones,
        apartir de ahi se multiplica *2 0 *3 dependiendo de la condicion. */
            if($numero % 2 == 0){
                echo "El ". $numero . " es par.<br>";
                echo "El triple de ". $numero. " es ". ($numero * 3);//Como dije anteriormente so se cumple la condicion aqui se multiplica * 3.
            } else{
                echo "El ". $numero . " no es par.<br>";
                echo "El doble de ". $numero. " es ". ($numero * 2);//Como dije anteriormente so se cumple la condicion aqui se multiplica * 2.
                
            }
        }
    }
        ?>
        <br><br><a href="Practica6.php">Siguiente practica</a><br>
        <a href="Practica4.php">Regresar practica</a>
     </main> 
     <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicación:
Este programa solicita al usuario un número mediante un formulario HTML y lo envía mediante el método POST.
En el código PHP, se evalua si el número ingresado es par o impar utilizando el operador módulo (%),
despues se multiplica por el numero 2 o 3 dependiendo si el numero que se ingreso cumple esta condicion, Finalmente, 
se imprime el resultado correspondiente en pantalla. -->