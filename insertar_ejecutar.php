<?php
//include "sql_conf.php";
include("class_Fachada.php");
    $caja = Fachada::retF();
    $bool = $caja-> Insertar($_POST['nombre'], $_POST['carnet'], $_POST['carrera'], $_POST['indice'], $_POST['direccion']) ;
		if ($bool){
                     header("Location: encabezadoMensaje.php?msg=ins_ok");
                     //mysql_connect($link);
                }
                else {
                    header("Location: encabezadoMensaje.php?msg=ins_inc");
                }
           
?>
