<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header><h2>Ecuacion de primer grado:</h2></header>
        <section>
        <form action="" method="POST"><!-- En esta parte se encuentra el formulario y envía los datos mediante POST -->
            <label for="a">Valor a:</label><!--En esta parte del formulario se debe ingresar el valor de a-->
            <input type="number" id="a" name="a" required><br><br>
            <label for="b">Valor b:</label><!--En esta parte del formulario se debe ingresar el valor de b-->
            <input type="number" id="b" name="b" required><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
        </section>
        <?php
        //En esta parte se verifica si el formulario si se ha enviado mediante POST.
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['a']) && isset($_POST['b'])){
        //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
            $a = $_POST['a'];
            $b = $_POST['b'];
        /*En esta parte estableci una condicion que dice si a es diferente de cero si se cumple la condicion 
        se debera determinar el valor de x mediante la formula previamente establecida*/

            if($a != 0 ){
                $x = (-$b / $a);
                echo "El valor de x es: ". $x;
            } else {
                echo "a = 0 no es una ecuacion de primer grado.";
        /* Pero si no pasa esto, entoces nos va imprimir un mensaje de que no es una ecuacion de primer grado */

            }
        }
    }

        ?>
        <br><br><a href="Practica8.php">Siguiente practica</a><br>
        <a href="Practica6.php">Regresar practica</a>
    </main>  
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html> 
<!-- Explicacion:
 Este programa tiene como objetivo mediante el metodo POST, pedirle al usuario,
 que ingrese dos valores distintos (a y b) y por medio de una estructura condicional elaborada en
 PHP, determinar el valor de x, mediante una formula para resolver una ecuacion de primer grado, siempre
 y cuando el valor de (a) sea diferente de 0, para despues imprimir el resultado.
-->