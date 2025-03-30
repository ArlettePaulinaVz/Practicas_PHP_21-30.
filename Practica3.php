<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
<header><h2>Multiplo de 3 y 5:</h2></header>
    <main> 
    <section>
        <form action="" method="POST"> <!-- En esta parte se encuentra el formulario y envía los datos mediante POST -->
            <Label for="numero">Numero:</Label> <!-- Entrada del número a evaluar -->
            <input type="number" id="numero" name="numero" required><br><br><br>
            <button type="submit">Enviar:</button><br><br>
        </form>
    </section>
    <?php
     // Se verifica si el formulario ha sido enviado mediante POST
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['numero'])){
    // Se asigna el valor ingresado en el formulario a una variable PHP
                $num = $_POST['numero'];
     // Se verifica  si el número es múltiplo de 3 y 5, solo de 3, solo de 5 o de ninguno
                if($num % 3 == 0 && $num % 5 == 0 ){
                    echo "El ". $num ." es multiplo de 3 y 5";
                }elseif($num % 3 == 0){
                    echo "El ". $num . " es multiplo de 3";
                }elseif($num % 5 == 0){
                    echo "El ". $num . " es multiplo de 5";
                }else{
                    echo "El ". $num . " no es multiplo de 3 y 5";
                }
                }

            }
    ?>    
            <br><br><a href="Practica4.php">Siguiente practica</a><br>
            <a href="Practica2.php">Regresar practica</a>
    </main>  
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicación:
Este programa solicita al usuario un número mediante un formulario HTML y lo envía mediante el método POST.
En el código PHP, se evalúa si el número ingresado es múltiplo de 3 y 5, solo de 3, solo de 5 o de ninguno.
Finalmente, se imprime el resultado correspondiente en pantalla. -->