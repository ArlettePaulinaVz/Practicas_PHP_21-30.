<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header</header><h2>Numero par o impar:</h2></header>
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
                $numero = $_POST['numero'];
        // Se evalua si el número es par o impar utilizando el operador módulo
                if($numero % 2 == 0){
                    echo "El ". $numero . " es par";
                } else {
                    echo "El ". $numero . " es impar";
                }
            }
        }
            ?>
           <br><br><a href="Practica5.php">Siguiente practica</a><br>
            <a href="Practica3.php">Regresar practica</a>
    </main>
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicación:
Este programa solicita al usuario un número mediante un formulario HTML y lo envía mediante el método POST.
En el código PHP, se evalua si el número ingresado es par o impar utilizando el operador módulo (%),
Finalmente, se imprime el resultado correspondiente en pantalla. -->