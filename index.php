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
    echo $mensaje;

    echo "<br></br>";
    /**
     * ? Variables y constantes, las variables en php se crean usando primero el "$" y luego si el nombre de la variable, del resto es como siempre, se le asigna el valor usando el "="
     */

    /**
     * ! VARIABLES
     */
    /**
     * ? Declaramos un entero, usamos el var_dumb en todos los ejemplos posteriores para ver en la pagina el tipo de dato que es y su contenido
     */
    $edad = 19;
    echo var_dump($edad);

    echo "<br></br>";
    /**
     * ?Declaramos un string
     */
    $nombre = "Luis";
    echo var_dump($nombre);

    echo "<br></br>";
    /**
     * ? Declaramos un booleano
     */
    $es_valido = true;
    echo var_dump($es_valido);

    /**
     * ! CONSTANTES
     */

    
    echo "<br></br>";
    /**
     * ? Declaramos una constante numerica, las variables funcionan algo similar al par "llave, valor", creamos tanto el nombre de la variable (llave) como su contenido (valor) dentro del "define", luego para usarlo lo llamamos por su nombre (llave).
     */
    define("PI", 3.1416);
    echo var_dump(PI);

    echo "<br></br>";
    /**
     * ? Declaramos una constante de texto
     */
    define("SALUDO", "Que tengo hambreee!!");
    echo var_dump(SALUDO);

    echo "<br></br>";
    /**
     * ? Declaramos una constante booleana
     */

     define("ES_VALIDO", true);
     echo var_dump(ES_VALIDO);

    
     /**
      * *Tipos de datos, en los tipos de datos se pueden almacenar difetentes tipos de información.
      * *Los mas comunes son los siguientes.
      */
    echo "<br></br>";
      /**
       * ? Boolean
       * * Se utilizan para almacenar valores de verdad o falsedad, representados en true o false.
       */
      $logueado = false;
      var_dump($logueado);

    echo "<br></br>";
      /**
       * ? Int
       * * Se utilizan para almacenar números enteros sin decimales.
       */
      $numero = 200;
      var_dump($numero);
   
    echo "<br></br>";
      /**
       * ? Float
       * * Se utilizan para almacenar números con decimales.
       */
      $float = 200.5;
      var_dump($float);

    echo "<br></br>";
      /**
       * ? Strings
       * * Se utilizan para almacenar texto y caracteres.
       */
      $nombre2 = "Lucheto";
      var_dump($nombre2);

    echo "<br></br>";
      /**
       * ? Array 
       * * Se utiliza para almacenar un conjunto de de datos, lo datos pueden ser de diferentes tipos.
       */
      $array = ["Hoy", "tambien", "tengo", "hambre", "!!!"];
      var_dump($array);
?> 