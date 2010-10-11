<?php

    include("class_Fachada.php");
    $caja = Fachada::retF();
	
    $bool = $caja-> Actualizar($_POST['nombre'], $_POST['carnet'], $_POST['carrera'], $_POST['indice'], $_POST['direccion']) ;
				
				if ($bool){
                     header("Location: encabezadoMensaje.php?msg=mod_ok");
                   //  mysql_connect($link);
                }
                else {
                    header("Location: encabezadoMensaje.php?msg=mod_inc");
                }
           
?>
