<?php

    $arrayColores2 = [];

    $arrayColores = array();

    $arrayColores3 = array("rojo", "verde", "azul", "amarillo");

    //De esta forma se imprime el array
    print_r($arrayColores3);
    echo("<hr>");

    //De esta forma solo imprimo uno de los valores que quiero
    print_r($arrayColores3 [1]);
    echo("<hr>");

    print_r($arrayColores3 [3]);
    echo("<hr>");

    //Si no esta en la opciones me va a dar un error
    print_r($arrayColores3 [5]);
    echo("<hr>");

    //aca le agregamos mas colores
    $arrayColores3[] = "Blanco";

    $arrayColores3[16] = "Indigo";

    //lo va numerar como el siguiente al anterior
    $arrayColores3[] = "Rosado";

    print_r($arrayColores3);

    //Puedo cambiar uno de los valores
    $arrayColores3[3] = "Turquesa";

    echo("<hr>");
    echo("<hr>");

    $arrayAss = array('Azul' => '#0000ff',  'Rojo' => '#ff0000', 'Verde' => '#008800');

    print_r($arrayAss);
    echo("<hr>");

    print_r($arrayAss['Azul']);

    $arrayAss['morado'] = '#800080';
    print_r($arrayAss);
    echo("<hr>");
    


    $persona = array();
    $persona [] = array('Nombre' => 'Daniel', 
                        'Apellido' => 'Bueno', 
                        'Edad' => '30');
    $persona [] = array('Nombre' => 'Sofia', 
                        'Apellido' => 'Salate', 
                        'Edad' => '22');
    $persona [] = array('Nombre' => 'Andres', 
                        'Apellido' => 'Bueno', 
                        'Edad' => '24');
    $persona [] = array('Nombre' => 'Santigo', 
                        'Apellido' => 'Salate', 
                        'Edad' => '12');
    $persona [] = array('Nombre' => 'Gabriel', 
                        'Apellido' => 'Bueno', 
                        'Edad' => '27');
    
    print_r($persona);
    
    echo("<hr>");


    foreach($persona as $per){

        print_r($per);
        echo("<br>");
    }
    echo("<hr>");
?>