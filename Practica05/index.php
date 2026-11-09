<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera pagina Web en PHP - 250683</title>
</head>
<body>
    <?php      
    // Declaracion de una variable de tipo string
    $nombre = "Leslie Yariveth Tellez Ortega";
    $carrera_estudia = "T.S.U. en Desarrollo de Software Multiplataforma";
    echo "<h1> Hola mundo desde PHP! </h1>";
    #Esta linea imprime la version de PHP QUE SE ESTA UTILIZANDO
    echo "<h2> Estas usando la version de PHP: "  . phpversion() . "</h2>";
    ?>
    <!-- Este es un comentario HTMl -->
    <hr>
    <?php
    /* Despues de asignarle un valor a la variable $nombre,
    podemos imprimirla en pantalla */
    echo "<h3> Mi nombre es: $nombre y estudio: $carrera_estudia </h3>";
    ?>
    
   <?php
    $x = 10; 
    $y = 5;
    $z = '3';

    echo "<h3> La suma de $x + $y es: " .($x + $y) ."</h3>";
    echo "<h3> La suma de $x + $y + $z es: " .($x + $y + $z) ."</h3>";
    
    function multiplicar($a, $b)
    {
       $resultado = $a * $b;
       echo "<h4>n La multiplicacion de $a * $b es: $resultado </h4>";
       return $resultado;

    }

    echo "<h4> La multplicación de 3 x 3 es: " . multiplicar(3,3) ."</h4>";
    echo "<h4> La multplicación de $x x $z es: " . multiplicar($x, $z) ."</h4>";
    echo "<h4> La multplicación de 1250 x 325 es: " . multiplicar(1250, 325) ."</h4>";
    echo "<hr>";
    echo "<p> El resultado de la última multiplicación es: $resultado </p>"; 
    

    /* Static Scope - Alcance Estático */
    function myTest()
    {
        static $w=0;
        echo"$w <br>";
        $w++;    
    }
    myTest();
    myTest();
    myTest();
    myTest();
    echo "$w";
    myTest();
    myTest();
    myTest();
    #función para saber el tipo de dato de una variable
    /* var_dump() es una función que nos permite conocer
    el tipo de dato de una variable y su valor, no es necesario programarla
    porque ya está implementada en PHP */
    
    echo "<h4> Las variables <strong>nombre</strong> es de tipo: ";
    var_dump($nombre);
    echo "</p>";

    echo "<h4> Las variables <strong>nombre</strong> es de tipo: ";
    var_dump($carrera_estudia);
    echo "</p>";

    $fecha_nacimiento = date("2007/04/23");

    echo "<h4> Las variables <strong>fecha_nacimiento</strong> es de tipo: ";
    var_dump($fecha_nacimiento);
    echo "</p>";

    $fecha_hoy = date("Y/M/D");
    $edad_actual = $fecha_hoy - $fecha_nacimiento;
    echo "<p> La edad actual es: $edad_actual </p>";
    ?>

</body>
</html>