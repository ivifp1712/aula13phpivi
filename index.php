<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2> Variables y constantes </h2>";
        define("DATO", "un dato de ejemplo");
        echo "la constante DATO es ".DATO;
        $numero = 5;
        $numero++;
        echo "<p> El numero es ".$numero."</p>"; // el valor seá 6
        echo "<p> El numero es ".$numero++."</p>"; // será 6
        echo "<hr>";
        echo "<h3> Operadores </h3>";
        $numero1=10;
        $numero2=15;
        if ($numero1>=$numero2) {// operador de comparación
            echo "<p> el primer número es mayor </p>"; 
        }else{
            echo "<p> el primer número es menor </p>";
        }
        $aprobado = true;
        if(!$aprobado){
            echo "<p> has aprobado </p>";
        }
        else{
            echo "<p> NA: no apto por no se</p>";
        }
        $nota="8";
        if($nota==8){
            echo "<p>Tu nota es un 8 - notable </p>";
        }
        else{
            echo "<p> tu nota NO es un 8";
        }
        // compara dato y tipo
        if($nota===8){
            echo "<p>Tu nota es un 8 - notable </p>";
        }
        else{
            echo "<p> tu nota NO es un 8";
        }
        echo "<hr>";
        echo "<h3> Estructuras de control </h3>";
        for ($i = 0;$i < 10; $i++){
            echo $i."-";
        }
        echo "<br>";
        foreach (range(0,10) as $i) {
            echo $i;
        }
        echo "<br>";
        $a = 0;
        while ($a <=10){
            echo $a++."--";
        }

    ?>
</body>
</html>