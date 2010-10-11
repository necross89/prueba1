<?php

	include("class_Fachada.php");
?>

<head>
	<title> Pruebas </title>
</head>
<body>
<?php
/*
 function verificar_insertar($carnet){
           include "sql_conf.php";//archivo que contiene las variables
           $sql = "select carnet from estudiante where carnet = '$carnet'";
           $link = @mysql_connect($servidor,$usuario,$contrasena) or die ("error al conectar ".mysql_error());
           if ( isset($link) ){
            // Luego mysql_select_db selecciona la base de datos, en este caso llamada "ejemplos"
                   $select_db = @mysql_select_db($base_Datos,$link) or die("error al seleccionar la DB".mysql_error());
            }
            //Uso de la funcion ejecutar para mandarle el SQL a la BD.
            $result = @mysql_query($sql,$link) or die ("error al ejecutar el $sql");
            //Cerramos conexion
            mysql_close($link);
            //retorna el numero de columnas a usar
            return mysql_num_rows($result);

        }
*/


	// Ejemplos de uso de las funciones permitidas para la interfaz
	// Solo se pueden usar las funciones de la fachada!!!

	$nom="ale";
	$carn="07-41179";
	$carr="compu";
	$indi=3.6;
	$dir="caricuao";

  echo verificar_insertar("06-40350");
	/*
	$caja = Fachada::retF(); 
	$caja-> Insertar($nom, $carn, $carr, $indi, $dir);
	$caja-> Eliminar($carn);
	
	$caja-> Eliminar("06-40446");
	$caja-> Eliminar("06-33333");
	//imprime uno xq se inserta correctamente :)
	$caja-> Insertar("ramiro", "06-40446", "vaguear", 3.77, "el silencio");
	$caja-> Insertar("wendy", "06-33333", "reganar", 3.68, "caracas");
	
	$caja-> Actualizar("Diana", "06-33333", "cantar", 3.68, "caracas");
	$lista = $caja-> Consultar(); 
	
	foreach ($lista as $ele=>$valor){
	
		echo $valor-> nombre1();
		echo $valor-> carnet1();
		echo $valor-> carrera1();
		echo $valor-> indice1();
		echo $valor-> direccion1()."<br>";

	}*/
?>
</body>