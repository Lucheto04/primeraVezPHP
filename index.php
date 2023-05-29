<?php  
    /**
     * *Funciones de salida, las funciones mas comunes en php son las siguientes.
     */

    /**
     * *echo es la fincion mas comun para imprimir en php, se puede usar para imprimir tanto un dato solo como para imprimir una cadena de datos
     */
    echo "Tengo hambre. ";


    echo "<br></br>";
    /**
     * *en printf a diferencia de echo solo podemos imprimir un dato a la vez.
     */
    $texto = "quiero una cocacola";
    printf("Como %s ", $texto);


    echo "<br></br>";
    /**
     * *sprintf sirve para devolverlo como un resultado, el cual le vas a poner su respectiva variable, de forma que despues lo podras invocar donde lo necesites.
     */
    $texto2 = "estaba bueno, pero no me dieron de tomar.";
    $mensaje = sprintf("El mute %s ", $texto2);
    echo $mensaje
?> 