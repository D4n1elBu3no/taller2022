<?php 
    $soyVariable = 10;

    var_dump($soyVariable);

    //En este espacio escribimos los comentarios
    //NUNCA OLVIDAR EL (;)!!!!

    //Definimos una variable de tipo string
    $varTexto = "soy un texto en PHP";

    var_dump($varTexto);

    //Definimos una variable de tipo Real
    $varReal = 12.13;
    var_dump($varReal);

    //Definimos una variable de tipo booleans

    $varBolean = true;
    var_dump($varBolean);
    //Solo muestra si es TRUE y muestra 1
    print_r($varBolean);
    //No muestra nada
    echo($varBolean);

    echo("<br>");
    echo("<hr>");

    //definimos una variable de tipo array
    //Ejemplo de array asosiativo donde usamos conceptos de clave-valor
    $arrayVar = array("primero"=>"uno", "Segundo"=>"dos", "tercero"=>"tres");
    var_dump($arrayVar);
    print_r($arrayVar);

    echo("<br>");
    echo("<hr>");
    //Ejemplo de array numerado
    $varArrayNum = array("uno", "dos", "tres");
    var_dump($varArrayNum);
    print_r($varArrayNum);


?>
<html>
    <head>

    </head>
    <body>
    <?php echo('Soy PHP') ?>
    <br>
    <?=$soyVariable?>
        
    </body>
</html>
