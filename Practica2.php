<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
        <header><h2>Determina si tu letra es vocal:</h2></header>
    <section>
        <form action="" method="POST"> <!--En esta parte se encuentra el formulario y envia los datos mediante POST-->
            <label for="letra">letra:</label><!--En esta parte del formulario se debe ingresar alguna letra o caracter-->
            <input type="text" id="letra" name="letra" required><br><br>
            <button type="Submit">Enviar:</button><br><br>
        </form>
    </section>
    <?php
    //En esta parte se verifica si el formulario si se ha enviado mediante POST.
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(isset($_POST['letra'])){
    //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
            $letra = $_POST['letra'];
    /*Aqui podemos observar que mediante una estructura condicional determinar si la letra que
    ingresamos es una vocal, como se observa se utiliza la letra tanto mayuscula como minuscula para que 
    no existan errores de escritura al momentor de ingresar una letra*/
            if($letra == 'A' || $letra == 'a'){
                echo "Tu letra es una vocal";
            } elseif($letra == 'E' || $letra == 'e'){
                echo "Tu letra es una vocal";
            } elseif($letra == 'I' || $letra == 'i'){
                echo "Tu letra es una vocal";  
            }elseif($letra == 'O' || $letra == 'o'){
                echo "Tu letra es una vocal";
            }elseif($letra == 'U' || $letra == 'u'){
                echo "Tu letra es una vocal";    
            }else{
                echo "Tu letra no es una vocal";
    /*Como podemos observar si la condicion no se cumple, es decir si la letra es diferente a una vocal se imprime un
    mensaje de  "Tu letra no es una vocal" */
            }
            }
            }
        ?>
            <br><br><a href="Practica3.php">Siguiente practica</a></br>
            <a href="Practica1.php">Regresar practica</a>
    </main>
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicacion:
 Este programa tiene como objetivo mediante el metodo POST, pedirle al usuario,
 que ingrese una caracter o letra y por medio de una estructura condicional elaborada en
 PHP, determinar si la letra que se ingreso es una vocal y en caso de no ser una vocal se imprime un mensaje
 de que no lo es.
-->