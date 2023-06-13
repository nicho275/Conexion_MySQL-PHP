<?php

    $include = include("./config.php");

    $con = connect();

    if($con && $include){

        $ID_USUARIO = 1;
        $descripcion = "Descripcion nueva";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 10;
        $n_comentarios = 30;
        $n_retuits = 50;

         $peticion = "INSERT INTO publicacion VALUES (0,1,'$descripcion','$fecha', '$hora', $corazon, $n_comentarios, $n_retuits)";
         $query = mysqli_query($con, $peticion);

       

         var_dump($query);

         echo "<br><br>";

        $sql = "SELECT * FROM usuarios";

        $sql = "SELECT * FROM publicacion";
        $query = mysqli_query($con, $sql);

        var_dump($query);

        $datos = mysqli_fetch_array($query);

        echo "<br><br><br>";
        var_dump($datos);
        echo "<br><br><br>";
        
        $datos = mysqli_fetch_assoc($query);
        var_dump($datos);




    }

?>