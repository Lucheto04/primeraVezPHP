<?php  
    echo "<hr><h1>Punto 1 - PHP Basicó.</h1>";

    /**
     * TODO: Punto 1.
     * ? Funciones de salida, las funciones mas comunes en php son las siguientes.
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

    echo "<hr><h1>Punto 2.</h1>";

    /**
     * TODO: Punto 2.
     * ? Variables y constantes, las variables en php se crean usando primero el "$" y luego si el nombre de la variable, del resto es como siempre, se le asigna el valor usando el "="
     */

    /**
     * ! VARIABLES
     */
    /**
     * * Declaramos un entero, usamos el var_dumb en todos los ejemplos posteriores para ver en la pagina el tipo de dato que es y su contenido
     */
    $edad = 19;
    echo var_dump($edad);

    echo "<br></br>";
    /**
     * * Declaramos un string
     */
    $nombre = "Luis";
    echo var_dump($nombre);

    echo "<br></br>";
    /**
     * * Declaramos un booleano
     */
    $es_valido = true;
    echo var_dump($es_valido);

    /**
     * ! CONSTANTES
     */

    
    echo "<br></br>";
    /**
     * * Declaramos una constante numerica, las constantes funcionan algo similar al par "llave, valor", creamos tanto el nombre de la variable (llave) como su contenido (valor) dentro del "define", luego para usarlo lo llamamos por su nombre (llave).
     */
    define("PI", 3.1416);
    echo var_dump(PI);

    echo "<br></br>";
    /**
     * * Declaramos una constante de texto
     */
    define("SALUDO", "Que tengo hambreee!!");
    echo var_dump(SALUDO);

    echo "<br></br>";
    /**
     * * Declaramos una constante booleana
     */

    define("ES_VALIDO", true);
    echo var_dump(ES_VALIDO);

    echo "<hr><h1>Punto 3.</h1>";
    
    /**
      * TODO: Punto 3.
      * ? Tipos de datos, en los tipos de datos se pueden almacenar difetentes tipos de información.
      * ? Los mas comunes son los siguientes.
      */
    /**
       * ! Boolean
       * * Se utilizan para almacenar valores de verdad o falsedad, representados en true o false.
       */
    $logueado = false;
    var_dump($logueado);

    echo "<br></br>";
    /**
       * ! Int
       * * Se utilizan para almacenar números enteros sin decimales.
       */
    $numero = 200;
    var_dump($numero);

    echo "<br></br>";
    /**
       * ! Float
       * * Se utilizan para almacenar números con decimales.
       */
    $float = 200.5;
    var_dump($float);

    echo "<br></br>";
    /**
       * ! Strings
       * * Se utilizan para almacenar texto y caracteres.
       */
    $nombre2 = "Lucheto";
    var_dump($nombre2);

    echo "<br></br>";
    /**
       * ! Array 
       * * Se utiliza para almacenar un conjunto de de datos, lo datos pueden ser de diferentes tipos.
       */
    $array = ["Hoy", "tambien", "tengo", "hambre", "!!!"];
    var_dump($array);

    echo "<hr><h1>Punto 4.</h1>";

    /**
       * TODO: Punto 4.
       * ? Números y operadores, como en los demas, php tambien tiene sus operadores lógicos con los cuales podemos hacer las operaciones básicas y complejas.
       */

    /**
       * ! Arithmetic Operator
       * * Los operadores aritmeticos son usados para hacer operaciones matematicas sobre valores númericos. 
       */
    $a = 4;
    $b = 6;
    
    /**
       * ! Addition
       * * Se utiliza para sumar el valor de "a" con el valor de "b"
       */
    echo $a + $b;

    echo "<br></br>";
    /**
       * ! Subtraction
       * * Se utiliza para restar el valor de "a" al valor de "b"
       */
    echo $a - $b;

    echo "<br></br>";
    /**
       * ! Multiplication
       * * Se utiliza para multiplicar el valor de "a" con el valor de "b"
       */
      echo $a * $b;

    echo "<br></br>";
    /**
       * ! Division
       * * Se utiliza para Dividir el valor de "a" en el valor de "b"
       */
    echo $a / $b;

    echo "<br></br>";
    /**
       * ! Modulo
       * * Se utiliza para conseguir el residuo de la division de el valor de "a" en el valor de "b"
       */
    echo $a % $b;

    echo "<br></br>";
    /**
       * ! Exponentiation
       * * Se utiliza para  de el valor de "a" en el valor de "b"
       */
      echo $a ** $b;

    /**
       * ! Comparison Operator
       * * los operadores de comparacion son utilizados para comparar 2 valores y determinar la relacion entre ellos. Estos operadores devuelven un valor booleano que indica si la comparación es verdadera o falsa. 
       */

    echo "<br></br>";
    /**
       * ! Greater than
       * * Se utiliza para confirmar si "a" es mayor que "b"
       */
    var_dump($a > $b);

    echo "<br></br>";
    /**
     * ! Less than
     * * Se utiliza para confirmar si "a" es menor que "b"
     */
    var_dump($a < $b);

    echo "<br></br>";
    /**
     * ! Greater than or equal
     * * Se utiliza para confirmar si "a" es mayor o igual que "b"
     */
    var_dump($a >= $b);

    echo "<br></br>";
    /**
     * ! Less than or equal
     * * Se utiliza para confirmar si "a" es menor o igual que "b"
     */
    var_dump($a <= $b);

    echo "<br></br>";
    /**
     * ! equal
     * * Se utiliza para confirmar si "a" es igual que "b"
     */
    var_dump($a == $b);

    echo "<br></br>";
    /**
     * ! identical
     * * Se utiliza para confirmar si "a" es identico a "b"
     */
    var_dump($a === $b);

    echo "<hr><h1>Punto 5.</h1>";
    /**
     * todo Punto 5.
     * ? Arreglos, Arreglos asociativos y funciones para arreglos, Los arreglos son estructuras de datos en las cuales podemos guardar diferentes valores en una sola variable (los valores pueden ser de diferentes tipos de datos).
     */
    /**
     * ! Array Indexado
     * *Este tipo de array tiene índices numéricos. Aquí está un ejemplo de cómo definir un array indexado:
     * @var array $nombres
     */
    $nombres = array("Juan", "Pedro", "Santiago");
    print_r($nombres);
    echo "<hr>";
    /**
     * ! Array Asociativo
     * *En este tipo de array, los valores son asociados con claves específicas en lugar de índices numéricos. Aquí está un ejemplo:
     * @var array $edades
     */
    $edades = array(
        "Juan" => 35, 
        "Pedro" => 37, 
        "Santiago" => 43);
    print_r($edades);
    print_r(array_flip($edades));
    echo "<hr>";
    /**
     * ! Array Multidimensional
     * *Este es un array que contiene uno o más arrays en sí. Un ejemplo común sería un array que contiene información para varias personas, donde cada persona es un array que contiene la información para esa persona. Aquí está un ejemplo:
     * @var array $personas
     */
    $personas = array(
        "Juan" => array(
            "Edad" => 35, 
            "Ciudad" => "Madrid", 
            "País" => "España"),
        "Pedro" => array(
            "Edad" => 37, 
            "Ciudad" => "Barcelona", 
            "País" => "España"),
        "Santiago" => array(
            "Edad" => 43, 
            "Ciudad" => "Valencia", 
            "País" => "España")
    );
    /**
     * ? Ejemplo de como insertar un dato nuevo al array Multidimensional
     */
    $personas["Pedro"]["Altura"] = 1.63;
    print_r($personas);
    /**
     * ? Ejemplo de como aceder al array
     */
    echo "<hr>";
    print_r($personas['Pedro']['País']);

    echo "<hr>";
    echo "array_flip(): ";
    /**
     * ! Metodo array_flip()
     * * Este metodo se usa para cambiar de posición los llaves con los valores.
     * ? Ejemplo de como usar el metodo array_flip()
     */
    $ejemplo_flip = array_flip($edades);
    print_r($ejemplo_flip);

    echo "<hr>";
    echo "array_fill(): ";
    /**
     * ! Metodo array_fill()
     * * Este metodo se usa para crear un numero predefinido de elementos dentro de un array, en el cual todos van a tener el mismo valor, este metodo siempre crea un array indexado numéricamente.
     * ? Ejemplo de como usar el metodo array_fill()
     */
    $ejemplo_fill = array_fill(0, 5, 'camper');
    print_r($ejemplo_fill);

    echo "<hr>";
    echo "array_filter(): ";
    /**
     * ! Metodo array_filter()
     * * Este metodo se utiliza cuando quieres filtrar los datos de un array para solo traerte los que cumplen esas condiciones.
     * ? Ejemplo de como usar el metodo array_filter()
     */
    $ejemplo_filter = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    print_r(array_filter($ejemplo_filter,fn($numero_filter) => 
    $numero_filter % 2 == 0
));

    echo "<hr>";
    echo "array_map(): ";
    /**
     * ! Metodo array_map()
     * * Este metodo se utiliza para clonar un array y aplicarle una funcion a este nuevo array sin que afecte al array original.
     * ? Ejemplo de como usar el metodo array_map()
     */
    $ejemplo_map = array(1, 2, 3, 4, 5);
    $resultado_map = array_map(fn($numero_map) => (
        $numero_map * 2
    ), $ejemplo_map);
    print_r($ejemplo_map);
    echo "<br><br>";
    print_r($resultado_map);


    echo "<hr>";
    echo "array_reduce(): ";
    /**
     * ! Metodo array_reduce()
     * * Este metodo se utiliza para reducir los elemtos del array a 1, se hace por medio de una funcion en la cual le pasamos la resticcion que queramos para conseguir ese unico elemento
     * ? Ejemplo de como usar el metodo array_reduce()
     */
    $ejemplo_reduce = [1, 2, 3, 4, 5];
    $resultado_reduce = array_reduce($ejemplo_reduce, fn($acumulador, $valor) => 
        $acumulador + $valor
    );
    print_r($resultado_reduce);

    echo "<hr>";
    echo "array_key_exists(): ";
    /**
     * ! Metodo array_key_exists()
     * * Este metodo
     */
    $ejemplo_key_exists = array(
        "nombre" => "Juan", 
        "edad" => 37, 
        "camper" => true);
    if(array_key_exists('ciudad', $ejemplo_key_exists)) {
        echo "La clave 'ciudad' existe en el arreglo";
    } else {
        echo "La clave 'ciudad' no existe en el arreglo";
    };

    echo "<hr>";
    echo "in_array(): ";
    /**
     * ! Metodo in_array()
     * * Este metodo se utiliza para verificar la existencia de un valor dentro del array, en este metodo tenemos la opcion de solicitar una busqueda del valor tanto estricta como no estricta, si lo solicitamos estricto entonces el tipo de dato tambien debe coincidir, el metodo biene por defecto con busqueda no estricta.
     * ? Ejemplo de como usar el metodo in_array() con busqueda estricta.
     * * Para hacer una busqueda estricta solo tenemos que pasarle un 'true' como parametro al metodo despues de pasar el array en el que vamos a buscar.
     */
    $ejemplo_in_array = ["John", "Diego", "Juan"];
    if (in_array("Diego", $ejemplo_in_array, true)) {
        echo "El valor 'Diego' si esta dentro del array";
    } else {
        echo "El valor 'Diego' no esta dentro del array";
    }

    echo "<hr>";
    echo "array_rand(): ";
    /**
     * ! Metodo array_rand()
     * * Este metodo se utiliza para obtener un valor aleatorio de un array, se puede usar tanto para obtener la posicion en la que se encuentra el valor como tambien para obtener el contenido de dicho valor, el metodo tiene la opcion de 'cantidad' la cual se la podemos pasar como parametro despues de pasarle el array en el que queremos realizar la busqueda aleatoria, de esa forma nos devuelve mas de un valor si es lo que queremos, si no le definimos una 'cantidad' el metodo por defecto solo devuelve un valor.
     * ? Ejemplo de como usar el meotodo array_rand()
     */
    $ejemplo_rand = ["Hamburguesa", "Perro", "Pizza", "panzerotti"];
    $resultado_rand = array_rand($ejemplo_rand);
    print_r("Esta en la posición: ".$resultado_rand." y el valor es: ".$ejemplo_rand[$resultado_rand]); 

    echo "<hr>";
    echo "array_unique(): ";
    /**
     * ! Metodo array_unique()
     * * Este metodo se utiliza cuando tienes un array con valores duplicados y quieres eliminar esos valores duplicados, puedes crear un nuevo array con los valores unicos.
     * ? Ejemplo de como usar el meotodo array_unique()
     * * Este ejemplo primero intente hacerlo con un array multidimensional y por lo que vi no funciona, por lo que lo pase a un array indexado y ahí si funcionó el metodo de forma correcta.
     */
    $ejemplo_unique = array('God of war', 'Halo', 'Call of duty','Dark souls', 'Doom', 'Red dead redemption 2', 'Doom', 'Dark souls');
    $resultado_unique = array_unique($ejemplo_unique);
    print_r($resultado_unique);
    
    echo "<hr>";
    echo "array_intersect(): ";
    /**
     * ! Metodo array_intersect()
     * * Este metodo se utiliza cuando quieres comparar 2 arrays y ver cuales elementos tiene en comun.
     * ? Ejemplo de como usar el metodo array_intersect()  
     */
    $ejemplo_intersect1 = array('hoy', 'tambien', 'tengo', 'hambre', ':c');
    $ejemplo_intersect2 = array('mañana', 'seguramente', 'tambien', 'tendre', 'hambre', ':c');    
    $resultado_intersect = array_intersect($ejemplo_intersect1, $ejemplo_intersect2);
    print_r($resultado_intersect);

    echo "<hr>";
    echo "array_diff(): ";
    /**
     * ! Metodo array_diff()
     * * Este metodo es lo contrario al ejemplo anterior donde usamos el "intersect()", lo que hace es devolvernos los valores que solo estan presentes en el primer array que le pasemos como parametro, a este metodo se le puede pasar mas de 2 arrays como parametro.
     * ? Ejemplo de como usar el metodo array_diff()
     */
    $ejemplo_diff1 = array('hoy', 'tambien', 'tengo', 'hambre', ':c', 'quiero', 'plata', 'para', 'comprar', 'comida');
    $ejemplo_diff2 = array('mañana', 'seguramente', 'tambien', 'tendre', 'hambre', ':c');
    $ejemplo_diff3 = array('ya', 'no', 'se ', 'que', 'poner', 'aqui', 'de', 'ejemplo', 'tengo', 'que', 'pensar', 'en', 'como', 'hacer', 'plata');    
    $resultado_diff = array_diff($ejemplo_diff1, $ejemplo_diff2, $ejemplo_diff3);
    print_r($resultado_diff);

    echo "<hr>";
    echo "array_push(): ";
    /**
     * ! Metodo array_push()
     * * Este metodo se utiliza para agregar uno o mas elementos al final del array.
     * ? Ejemplo de como usar el metodo array_push()
     */
    $ejemplo_push = array(1, 2, 3);
    print_r($ejemplo_push); echo "<br><br>";
    array_push($ejemplo_push, 4,5,6,7);
    print_r($ejemplo_push);

    echo "<hr>";
    echo "array_pop(): ";
    /**
     * ! Metodo array_pop()
     * * Este metodo se utiliza para eliminar el ultimo elemento de un array
     * ? Ejemplo de como usar el metodo array_pop()
     */
    $ejemplo_pop = array(1, 2, 3);
    print_r($ejemplo_pop); echo "<br><br>";
    array_pop($ejemplo_pop);
    print_r($ejemplo_pop);

    echo "<hr>";
    echo "array_reverse(): ";
    /**
     * ! Metodo array_reverse()
     * * Este metodo se utiliza para invertir el orden de los elemtos dentro del array, se le puede pasar como parametro con un 'true' o 'false' si queremos que las llaves tambien se inviertan o si queremos que se mantengan donde estan.
     * ? Ejemplo de como usar el metodo array_reverse()
     */
    $ejemplo_reverse = array(1, 2, 3);
    print_r($ejemplo_reverse); echo "<br><br>";
    print_r(array_reverse($ejemplo_reverse));

    echo "<hr>";
    echo "array_sum(): ";
    /**
     * ! Metodo array_sum()
     * * Este metodo se utiliza para sumar los valores numericos de un array, en caso de que el valor no sea un numero se valida si se puede convertir en un numero, si puede entonces lo convertira y lo sumara, si no puede entonces lo ignorara y pasara al siguiente valor.
     * ? Ejemplo de como usar el metodo array_sum()
     */
    $ejemplo_sum = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
    print_r(array_sum($ejemplo_sum));

    echo "<hr>";
    echo "array_product(): ";
    /**
     * ! Metodo array_product()
     * * Este metodo se utiliza para calcular el producto de los valores numéricos en un arreglo, el metodo tiene 3 comportamientos diferentes.
     * * 1. Si el arra esta vacio, devuelve '1'
     * * 2. Si el array contiene elementos numericos, se multiplicaran entre si y devolvera el resultado.
     * * 3. Si el array contiene elementos no numericos, primero intentara convertir esos elementos en valores numericos, si puede los multiplicara, si no puede entonces les dara el valor de '0' y los multiplicara.
     * ? Para este metodo voy a hacer 2 ejemplos de como se usa el metodo array_product(), uno con elementos que se puedan convertir en valores numericos y otro en el que no se puedan convertir.
     */
    $ejemplo_product1 = array(1, '2', '3', '5', 6);
    print_r(array_product($ejemplo_product1));echo "<br><br>";
    $ejemplo_product2 = array(1, 'azul', 'tres', true, 6);
    print_r(array_product($ejemplo_product2));

    echo "<hr>";
    echo "array_chunk(): ";
    /**
     * ! Metodo array_chunk()
     * * Este metodo se utiliza para dividir un array en fragmentos más pequeños, cada uno de ellos con un número específico de elementos. Toma como parametro el array a dividir y el tamaño deseado de cada fragmento, y devuelve un nuevo array multidimensional que contiene los fragmentos.
     * ? Ejemplo de como usar el metodo array_chunk()
     */
    $ejemplo_chunk = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    print_r(array_chunk($ejemplo_chunk, 3));

    echo "<hr>";
    echo "array_keys(): ";
    /**
     * ! Metodo array_keys()
     * * Este metodo se utiliza para obtener las llaves de un array asociativo, se le pasa como parametro el array que queremos y el nos devolvera las llaves de dicho array.
     * ? Ejemplo de como usar el metodo array_keys()
     */
    $ejemplo_keys = array(
        'manzana' => 'roja',
        'naranja' => 'naranja',
        'banano' => 'amarillo',
        'uva' => 'morada',
        'limón' => 'amarillo'
    );
    print_r(array_keys($ejemplo_keys));

    echo "<hr>";
    echo "array_values(): ";
    /**
     * ! Metodo array_values()
     * * Este metodo se utiliza para obtener los valores de un array asociativo, se le pasa como parametro el array en cuestion y devuelve un nuevo array unicamente con los valores del array original.
     * ? Ejemplo de como usar el metodo array_values()
     */
    $ejemplo_values = array(
        "Miguel" => "Sputnik",
        "Roy" => "Artemis",
        "Johlver" => "Apolo"
    );
    print_r(array_values($ejemplo_values));

    echo "<hr>";
    echo "array_walk(): ";
    /**
     * ! Metodo array_walk()
     * * Este metodo se utiliza para aplicar una funcion de devolucion de llamada a cada elemento dentro de un array, se le pasan como parametros el array en cuestion y la duncion de devolución de llamada.
     * ? Ejemplo de como usar el metodo array_walk()
     */
    $ejemplo_walk = array(
        "Miguel" => "Sputnik",
        "Roy" => "Artemis",
        "Johlver" => "Apolo"
    );
    function funcionWalk ($valor, $clave) {
        echo "El profesor $clave esta en el salon $valor, ";
    };
    array_walk($ejemplo_walk, 'funcionWalk');
    print_r($ejemplo_walk);


    echo "<hr><h1>Punto 6.</h1>";

    /**
     * TODO: Punto 6.
     * ? Isset y Empty, en php son dos funciones utilizada para verificar si una variable o el elemento de un array tienen un valor ya definido o no.
     * * , en cambio Con empty estamos preguntando si esta vacio, por lo que si la variable o elemento estan vacios va a devolver un "true"
     */

    /**
     * ! Isset() 
     * * Con isset estamos preguntando si la variable o elemento existe y esta definida, por lo que si existe y esta definida devuelve un "true" y si no existe o no esta definido va a devolver un "false".
     */
    $isset = "Existo y estoy definida";
    $isset_no_definida;
    var_dump(isset($isset)); // retorna true
    echo "<br><br>";
    var_dump(isset($isset_no_definida));// retorna false
    echo "<hr>";

        echo "<br>";
    /**
     * ! Empty()
     * * on empty estamos preguntando si esta vacio, por lo que si la variable o elemento estan vacios o no existen va a devolver un "true" pero si ya existen y estan definidos va a devolver un "false".
     */
    $empty = "Existo y estoy definida";
    $empty_no_definida;
    var_dump(empty($empty)); // retorna false
    echo "<br><br>";
    var_dump(empty($empty_no_definida)); // retorna true
    echo "<hr>";

    /**
     * ! Funciones para la manipulación de datos.
     * ? Ejemplos de algunas de las funciones que nos permiten manipular los datos que se encuentren almacenados en un arreglo.
     */
    $cliente = array(
        'saldo' => 200,
        'tipo' => 'Premium',
        'nombre' => 'Juan'
    );
    /**
     * * Ordena por valores (orden alfabetico)
     */
    asort($cliente);
    echo "<pre>";
    var_dump($cliente);
    /**
     * 
     * *Ordena por valores (de la Z a la A)
     */
    echo "<hr>";

    arsort($cliente);
    echo "<pre>";
    var_dump($cliente);
    /**
     * * Ordena por llaves (orden alfabetico)
     */
    echo "<hr>";

    ksort($cliente);
    echo "<pre>";
    var_dump($cliente);
    /**
     * *Ordena por llaves (de la Z a la A)
     */
    echo "<hr>";

    krsort($cliente);
    echo "<pre>";
    var_dump($cliente);


    echo "<hr><h1>Punto 7.</h1>";
    /**
     * TODO: Punto 7.
     * ? Estructuras de control.
     * * Son herramientas con las cuales podemos controlar el flujo de ejecución de un programa. Con estas estructuras podemos hacer que el programa tome decisiones diferentes y realice acciones distintas en función de ciertas condiciones.
     */

    /**
     * ? Estructuras de control condicionales.
     * * Estas estructuras permiten que el programa tome decisiones en función de si se cumple o no una determinada condición. Estas estructuras permiten que el programa ejecute diferentes bloques de código en función de si se cumple o no una determinada condición.
    */

    /**
     * ! if
     * * Esta estructura se usa para definir una acción que se ejecutará si se cumple la condición y una acción diferente que se ejecutará si no se cumple dicha condición.
     */
    if (10 > 3) {
        echo "10 es mayor que 3";
    } elseif (10<20){
        echo "10 es menor que 20";
    } else {
        echo "Todo lo demas";
    }

    echo "<hr>";
    /**
     ** Ejemplos del pdf porque me parecieron muy buenos.
     */
    $autenticado_ejemplo_if = true;
    $admin_ejemplo_if = false;
    if ($autenticado_ejemplo_if && $admin_ejemplo_if) {
        echo "Usuario autenticado correctamente";
    } else {
        echo "Usuario no autenticado, inicia sesión";
    }
    // if anidados...
    echo "<hr>";
    $cliente_ejemplo_if = [
        'nombre' => 'Lucheto',
        'saldo' => 0,
        'informacion' => [
            'tipo' => 'Regular'
        ]
    ];
    if(!empty($cliente_ejemplo_if)) {
        echo "El arreglo de cliente no esta vacio";
        
        if($cliente_ejemplo_if['saldo'] > 0) {
            echo "El cliente tiene saldo disponible"; 
        } else {
            echo "<br>";
            echo "No hay saldo";
        }
    }
    echo "<hr>";
    // else if
    if ($cliente_ejemplo_if['saldo']>0){
        echo "El cliente tiene saldo";
    } else if ($cliente_ejemplo_if['informacion']['tipo']=== 'Premium') {
        echo "El cliente es premium";
    } else {
        echo "No hay cliente definido o no tiene saldo o no es premium";
    }
    echo "<hr>";
     /**
     * ! switch
     * * Esta estructura se usa para ejecutar diferentes bloques de código dependiento del valor de la variable que le pasamos
     */
    $ejemplo_switch = 5;
    switch($ejemplo_switch) {
        case 1:
            echo "El numero es 1";
            break;
        case 2:
            echo "El numero es 2";
            break;
        case 3:
            echo "El numero es 3";
            break;
        case 4:
            echo "El numero es 4";
            break;
        case 5:
            echo "El numero es 5";
            break;
    }
    echo "<hr>";
    /**
     ** Ejemplos del pdf porque me parecieron muy buenos.
     */
    $tecnologia_ejemplo_switch = 'HTML';
    switch($tecnologia_ejemplo_switch) {
        case 'PHP':
            echo "PHP, unexcelente lenguaje!";
            break;
        case 'JavaScript':
            echo "Genial, el lenguaje de la web";
            break;
        case 'HTML':
            echo "Emmm....";
            break;
        default:
            echo "Algún lenguaje que no se cual es";
            break;
    }
    echo "<hr>";
    /**
     *? Estructuras repetitivas
     ** Estas estructuras son usadas para hacer que el mismo bloque de codigo se repite una determinada cantidad de veces o mientras la condicion se cumpla.
    */

    /**
     * ! While
     * * Permite repetir la ejecución de un bloque de código mientras se cumpla una condición. 
     */
    $i = 0;
    while ($i <= 10) {
        echo $i."<br>";
        $i++;
        // if ($i === 10) {
        //     break;
        // }
    }
    
    echo "<hr>";
    /**
     * ! Do-while
     * * La diferencia con el bucle while es que este sin obligacion de que se cumpla la condicion siempre se ejecutara al menos una vez.
     */
    $i = 20;
    do {
        echo $i."<br>";
        $i++;
         // if ($i === 10) {
         //     break;
         // }
    } while ($i <= 10);

    echo "<hr>";
    /**
     * ! For
     * * Con el bucle for podemos iterar un bloque de codigo el numero determinado de veces que le pongamos al controlador.
     */
    for ($i=0; $i<=10; $i++) {
        echo $i."<br>";
    };

    echo "<hr>";
    /**
     * ! Foreach
     * * Con el bucle foreach podemos iterar los elementos que contiene un array.
     */
    $ejemplo_foreach = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponible' => true
        ],
        [
            'nombre' => 'Television 24',
            'precio' => 300,
            'disponible' => true
        ],
        [
            'nombre' => 'Monitor Curvo',
            'precio' => 400,
            'disponible' => false
        ]
    ];
    foreach ($ejemplo_foreach as $producto) {
            echo $producto['nombre']."<br>";
            echo $producto['precio']."<br>";
            echo $producto['disponible']."<br>";
            echo "<hr>";
        }

    echo "<h1>Punto 8.</h1>";
    /**
     * TODO: Punto 8.
     * ? Funciones definidas por el usuario.
     * * Las funciones definidas por el usuario son bloques de codigo que puedes ejecutar en cualquier parte del programa para realizar la tarea que tiene definida, solo tienes que crear la funcion y luego llamarla por el nombre que le diste en el lugar que quieras de tu programa, le pasas los parametros requeriodos y de ser necesario le das un valor a retornar cuando termine su dicha funcion.
     */

    echo "<hr>";
    /**
     * ! Función de void.
     * * Son las funciones que no tienen un valor de retorno. No es obligatorio pasarle la palabra reservada void a estas funciones pero si es una buena practica que permite identificar de forma mas facil que tipo de funcion es. 
     */
    function sumar(int $numero1 = 0, int $numero2):void {
        echo $numero1 + $numero2;
    }
    sumar(10, 35);

    echo "<hr>";
    /**
     * ! Funcion que retorna.
     * * Es una funcion que retornan un valor que es el resultado de la funcionq que se alla realizado con los parametros que le pasamos al llamar la funcion. Es importante tener en cuenta que para indicar el tipo de dato que va a retornar la función se debe utilizar los dos puntos ( : ) seguido de un símbolo de interrogante (?) y el tipo de dato a retornar. 
     */
    function usuaruiAutentucado(bool $autenticado_ejemplo_funcion): ?string {
        if ($autenticado_ejemplo_funcion) {
            return 'Autenticado';
        } else {
            return 'No Autenticado';
        }
    }
    print(usuaruiAutentucado(false));
    
    echo "<hr><h1>Punto 9.</h1>";
    /**
     * TODO: Punto 9.
     * ? include, require, include_once, require_once.
     * * Estas funciones se utilizan para utilizar archivos externos al programa, son similares al 'export' y al 'import' de JavaScript. Esto nos permite incluir archivos de codigo externos en un programa PHP lo que permite la reutilización de código y la separación de la lógica del programa en diferentes archivos.
     */
    echo "PARA VER EL EJEMPLO IR AL ARCHIVO 'ejemplos.php'.";


    echo "<hr><h1>Punto 10.</h1>";
    /**
      * TODO: Punto 10.
      * ? Json_encode y json_decode.
      * * json_encode se utiliza para convertir una estructura de datos de PHP en una cadena JSON. Y json_decode se utiliza para convertir una cadena JSON en una estructura de datos de PHP. Esta función toma una cadena JSON y la convierte en un objeto, un array asociativo o un valor escalar según corresponda.
      */
    echo "PARA VER EL EJEMPLO IR AL ARCHIVO 'ejemplos.php'.";


    echo "<hr><h1>Punto 11 - PHP Intermedio.</h1>";
    /**
      * TODO: Punto 11.
      * ? Programación Orientada a objetos.
      * * 
      */
?>
