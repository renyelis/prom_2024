<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>


<?php

    //Parametros de conexion a la BD
    DEFINE('USER','root');
    DEFINE('PW','');
    DEFINE('HOST','localhost');
    DEFINE('BD','bd_zapateria');


//Parametros de conexion a la BD remota(infinityfree)

    /*DEFINE('USER','if0_37566864');
    DEFINE('PW','pKatMpQxu8VqmgE');
    DEFINE('HOST','sql100.infinityfree.com');
    DEFINE('BD','if0_37566864_prom2024');*/

    //Conexion a la BD
    $conexion = mysqli_connect('sql100.infinityfree.com', 'if0_37566864', ' pKatMpQxu8VqmgE',  'if0_37566864_prom2024');

    //Establecer caracteres para el hosting
    //mysqli_set_charset($conexion, "utf8mb4");

    //verificamos la conexion con la BD
    if(!$conexion)
    {
        die("la conexion a la BD fallo: "+ mysqli_error($conexion));
    }
    //else
    //{
    //    die("Conexion exitosa a la BD");
    //}




?>