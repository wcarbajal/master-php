<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>

        <?= "Bienvenidos" ?>

        <h1>Master en PHP - Wuilmer Carbajal B</h1>
        <?php
        //titular
        echo '<h3> Listado de Videojuegos:</h3> ';

        echo "<ul>"
        . "<li>GTA</li>"
        . "<li>Fifa</li>"
        . "<li>Mario bros</li>"
        . "</ul>";
        echo '<p> Esta es toda' . ' - ' . 'lista de juegos</p>';
        /*echo PHP_OS . '<br>';
        echo PHP_EXTENSION_DIR . '<br>';
        echo __DIR__ . '<br>';
        echo __FILE__ . '<br>';*/
        echo __FUNCTION__ . '<br>';
        ?>
    </body>
</html>




