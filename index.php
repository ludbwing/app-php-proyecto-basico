<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ludwing Aldair <b>Mamani Yucra </b></p>
    
    <?php
    echo "imprimiendo de php </br>";
    $dato_1 = 1;
    $dato_2 = 100;

    echo "El resultado es: " . $dato_1 + $dato_2."</br>";

    echo "El incremento: ". $dato_1+1 ."</br>";
    
    if ($dato_2 == 2) {
        echo "No es igual";
    }else if($dato_2 === 100){
        echo"Si es igual"."</br>";
    }


    // Declarar 7 tipos e datos//
    //$cadena = "ludwing Aldair Mamani Yucra";
    //$entero = 18;
    //$Flotante = 3.12;
    //$Caracter = '$';
    //$Lista = [1, "manzana", 3.14, True];
    //$boleano = true;
    //$conjunto = ("1, 2, 3, 4");
    
    "</br>";
    $array = array ("1", "2", "3", "4", "5");
    $nombre = ["Diego", "Pedro", "Pablo" , "Ricardo","Maria"];
    
    foreach($nombre as $item){
        echo $item ."</br>";
    }


    $tabla = array(1,2,3,4,5,6,7,8,9,10,11,12);
    foreach($multiplicacion_1 as $tabla_1){
        echo $tabla_1 ."</br>";
    }
    
    ?>
</body>
</html>