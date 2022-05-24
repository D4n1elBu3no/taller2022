<?php

    $var1 = 10;
    $var2 = 7;
    $resultado = "";

    if($var1 > $var2){
        $resultado = "var1 es mayor a var 2";
    }else {

        $resultado = "var1 es menor a var2";
    }

    $edad = 34;
    $quienSoy = "No tengo categoria";

    if($edad > 0 && $edad <12){
        $quienSoy = "Soy un niño";
    }elseif($edad >= 12 && $edad < 18){
        $quienSoy = "Soy un Adolescente";
    }elseif ($edad >= 18 && $edad < 30) {
        $quienSoy = "Soy un adulto joven";
    }elseif ($edad >= 30 && $edad <70 ) {
        $quienSoy= "Soy un adulto"
    }else{
        $quienSoy = "Soy un jubilado"
    }



?>

<h1><?php=$resultado?></h1>