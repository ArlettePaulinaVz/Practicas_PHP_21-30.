<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 9</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header><h2>Numero postitivo, negativo y neutro:</h2></header>
        <section>
        <form action="" method="POST"><!-- En esta parte se encuentra el formulario y envía los datos mediante POST -->
            <label for="numero">Numero:</label><!--En esta parte del formulario se debe ingresar un numero-->
            <input type="number" id="numero" name="numero" required><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
        </section>
        <?php
        //En esta parte se verifica si el formulario si se ha enviado mediante POST.
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['numero'])){
        //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
            $num = $_POST['numero'];
        /*En esta parte estableci una condicion que dice si el numero es mayor que 0 y si se cumple la condicion 
        el sistema arrojara un mensaje de que diga que el numero es positivo y este se multiplicara por el numero 2 y si 
        no se cumple la condicion el mensaje dira que es negativo y se multiplicara por tres.*/
            if($num > 0){
                echo "El ". $num ." es positivo y su doble es: ". ($num * 2);
            } elseif($num < 0){
                echo "El ". $num ." es negativo y su triple es: ". ($num * 3);
            }else{
                echo "El ". $num ." es neutro.";
            }

        }

        }
        ?>
        <br><br><a href="Practica10.php">Siguiente practica</a><br>
        <a href="Practica8.php">Regresar practica</a>
    </main>
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicacion:
 Este programa tiene como objetivo mediante el metodo POST, pedirle al usuario
 que ingrese un numero y por medio de una estructura condicional elaborada en
 PHP, determinar si el numero es mayor a cero y si esta condicion se cumple el numero sera multiplicado por
 dos para despues imrpimir un mensaje de que "el numero es postivo y su doble es" pero si el numero es menor
 a cero este numero se multiplicara por tres y se debera imrpimirun mensaje de "el numero es negativoy su triple es."
-->