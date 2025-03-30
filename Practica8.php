<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header><h2>Ingresa tu edad:</></header>
        <section>
        <form action="" method="POST"><!-- En esta parte se encuentra el formulario y envía los datos mediante POST -->
            <label for="Edad">Edad:</label><!--En esta parte del formulario se debe ingresar la edad del usuario-->
            <input type="number" id="Edad" name="Edad" required>
            <button type="submit">Enviar</button>
        </form>
        </section>
        <?php
        //En esta parte se verifica si el formulario si se ha enviado mediante POST.
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['Edad'])){
        //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
            $Edad = $_POST ['Edad'];
        /*En esta parte estableci una condicion que dice si edad es mayor que 18, si se cumple la condicion 
        el sistema arrojara un mensaje de que el usuario es mayor de edad y si no el sistema dira que no lo es.*/
            if($Edad >= 18){
                echo "El usuario es mayor de edad";
            } else {
                echo "El usuario es menor de edad";
            }
        }
    }
        ?>
        <br><br><a href="Practica9.php">Siguiente practica</a><br>
        <a href="Practica7.php">Regresar practica</a>
    </main>  
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicacion:
 Este programa tiene como objetivo mediante el metodo POST, pedirle al usuario
 que ingrese su edad y por medio de una estructura condicional elaborada en
 PHP, determinar si el usuario es mayor de 18, para finalmente imprimir en pantalla
 eñ resultado.
-->