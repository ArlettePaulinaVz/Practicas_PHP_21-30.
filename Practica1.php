<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1</title>
    <link rel="stylesheet" href="es.css">
</head>
<body>
    <main>
    <header><h2>Numero mayor:</h2></header>
    <section>
    <form action="" method="POST"> <!--En esta parte se encuentra el formulario y envia los datos mediante POST  -->
        <label for="N1">Número 1:</label> <!-- Entrada del numero 1-->
        <input type="number" id="N1" name="N1" required><br><br>

        <label for="N2">Número 2:</label><!-- Entrada del numero 2-->
        <input type="number" id="N2" name="N2" required><br><br>
        
        <label for="N3">Número 3:</label><!-- Entrada del numero 3-->
        <input type="number" id="N3" name="N3" required><br><br>
        
        <button type="submit">Enviar</button><br><br>
    </form>
    </section>
    <?php
    //En esta parte se verifica si el formulario si se ha enviado mediante POST.
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['N1']) && isset($_POST['N2'])
        && isset($_POST['N3'])){
        
    //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
        $N1 = $_POST['N1'];
        $N2 = $_POST['N2'];
        $N3 = $_POST['N3'];
    //En esta condicion se determina cual es el numero mayor mediante la estructura if-else.
        if($N1 >= $N2 && $N1 >= $N3){
            $mayor = $N1;
        } elseif($N2 >= $N1 && $N2 >= $N3){
            $mayor = $N2;
        }else{
            $mayor = $N3;
        } 
        echo "El numero mayor es: ". $mayor; //Aqui se imprime el resiltado en pantalla.
    }
    }
?>
<br><br><a href="Practica2.php">Siguiente practica</a>
    </main>
    <footer> Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>

<!-- Explicacion:
 Este programa tiene como objetivo mediante el metodo POST, pedirle al usuario,
 que ingrese tres numeros distintos y por medio de una estructura condicional elaborada en
 PHP, determinar cual es el numero mayor de los tres datos ingresados.
-->