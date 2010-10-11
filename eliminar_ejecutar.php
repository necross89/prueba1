<?php
    /*A diferencia de las otras esta  pagina borra directamente
    porque no hace falta especificar nada mas*/

    include("class_Fachada.php");

    $caja = Fachada::retF();
    $caja-> Eliminar($_GET['carnet']);

    header("Location: encabezadoMensaje.php?msg=del_ok");

   // mysql_close($link);

?>