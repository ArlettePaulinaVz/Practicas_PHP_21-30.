<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 6</title>
    <link rel="stylesheet" href="es.css">
</head>
<body> 
    <main>
        <header><h2>Numeros ascendentes</h2></header>
        <section>
        <form action="" method="POST"><!-- En esta parte se encuentra el formulario y envía los datos mediante POST -->
            <label for="num1">Numero 1:</label><!--En esta parte del formulario se debe ingresar el primer dato-->
            <input type="number" id="num1" name="num1" required><br><br>
            <label for="num2">Numero 2:</label><!--En esta parte del formulario se debe ingresar el segundo dato-->
            <input type="number" id="num2" name="num2" required><br><br>
            <label for="num3">Numero 3:</label><!--En esta parte del formulario se debe ingresar el tercer dato-->
            <input type="number" id="num3" name="num3" required><br><br>

            <button type="submit">Enviar</button><br><br>
        </form>
        </section>
        <?php
        //En esta parte se verifica si el formulario si se ha enviado mediante POST.
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
        //Aqui se asignan las variables mediante el PHP, para que funcionen con el HTML.
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
        //En esta condicion se determina cual es el numero mayor mediante esta primera estructura.
            if($num1 > $num2 && $num1 >= $num3){
                $mayor = $num1;
            } elseif($num2 > $num1 && $num2 >= $num3){
                $mayor = $num2;
            }else{
                $mayor = $num3;
            }
    
            echo "El numero mayor es: ". $mayor ."<br>";
        //En esta condicion se determina cual es el numero menor mediante esta segunda estructura.
            if($num1 <= $num2 && $num1 <= $num3){
                $menor = $num1;
            } elseif($num2 <= $num1 && $num2 <= $num3){
                $menor = $num2;
            }else{
                $menor = $num3;
            }
            echo "El numero menor es: ". $menor . "<br>";
        //En este caso declare una variable suma para establcer la formula y poder calcular el numero intermedio
            $suma = ($num1 + $num2 + $num3)-($mayor+$menor);
             
            echo "El numero intermedio es: ".$suma;

        }
        }
        ?>
        <br><br><a href="Practica7.php">Siguiente practica</a><br>
        <a href="Practica5.php">Regresar practica</a>
    </main>
    <footer>Leonel Bautista Hernández</footer><!-- Pie de página -->
</body>
</html>
<!-- Explicacion:
 Este programa tiene como objetivo mediante el metodo POST, pedirle al usuario,
 que ingrese tres numeros distintos y por medio de una estructura condicional elaborada en
 PHP, determinar cual es el numero mayor el numero menor y el numero intermedio y luego arrojara los resultados
 de forma ascendente.
-->
