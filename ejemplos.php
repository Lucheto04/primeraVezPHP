<?php 
    $ejemplo_json_encode = [
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
    $json = '{"nombre": "Jose Manuel", "edad": 16,"ciudad":"Nueva York"}';
    $data = json_decode($json); //Retorna un objeto
    $dataAsocc = json_decode($json, true); // Retorna un array asociativo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include('includes/header.php') ?>
    </header>
    <h1>Uso de JSON Example</h1>
    <main>
        <pre class="resultado">
            <?php 
                var_dump($ejemplo_json_encode);
                $json = json_encode($ejemplo_json_encode, JSON_UNESCAPED_UNICODE);
            ?>
            <br>
            <?php
                var_dump($json);
            ?>
        </pre>
        <table class="contenido">
            <thead>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $dataAsocc['nombre'] ?></td>
                    <td><?php echo $dataAsocc['edad'] ?></td>
                    <td><?php echo $dataAsocc['ciudad'] ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>