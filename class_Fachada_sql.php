<?php


    class Fachada_sql{
        private static $inst;   //instancia de la clase

//constructor que no hace nada
        private function __construct(){}


//Para retornar la instancia de la clase
        public static function retornarFachada2(){
            if (!isset(self::$inst)){
                $nombreClass = __CLASS__;
                self::$inst = new $nombreClass();
            }
            return self::$inst;
        }


//Insertar para estudiante
       public function insertar_estudiante($nom,$carn,$carre,$indi,$direc){
           include "sql_conf.php";//archivo que contiene las variables
           $sql = "INSERT INTO estudiante SET
                    nombre = '$nom',
                    carnet = '$carn',
                    carrera = '$carre',
                    indice = '$indi',
                    direccion = '$direc'
                    ";
           if(self::verificar_insertar($carn)==0){ //verifica que no hayan insertado
                 $link = @mysql_connect($servidor,$usuario,$contrasena) or die ("error al conectar ".mysql_error());
                 if ( isset($link) ){
            // Luego mysql_select_db selecciona la base de datos, en este caso llamada "ejemplos"
                    $select_db = @mysql_select_db($base_Datos,$link) or die("error al seleccionar la DB".mysql_error());
                 }
                //Uso de la funcion ejecutar para mandarle el SQL a la BD.
                 $result = @mysql_query($sql,$link) or die ("error al ejecutar el $sql");
                 //Cerramos conexion
                 mysql_close($link);
                 return $result;
           }
           else{return false;}
       }



//FUNCION AUXILIAR
        private function verificar_insertar($carnet){
           include "sql_conf.php";//archivo que contiene las variables
           $sql = "select * from estudiante where carnet = '$carnet'";
           $link = @mysql_connect($servidor,$usuario,$contrasena) or die ("error al conectar ".mysql_error());
           if ( isset($link) ){
            // Luego mysql_select_db selecciona la base de datos, en este caso llamada "ejemplos"
                   $select_db = @mysql_select_db($base_Datos,$link) or die("error al seleccionar la DB".mysql_error());
            }
            //Uso de la funcion ejecutar para mandarle el SQL a la BD.
            $result = @mysql_query($sql,$link) or die ("error al ejecutar el $sql");
            //Cerramos conexion
            mysql_close($link);
            return mysql_num_rows($result);
        }

//Funcion eliminar de la clase estudiante
        public function Eliminar_estudiante($Carnet){
            include "sql_conf.php";//archivo que contiene las variables
            $sql = "DELETE FROM estudiante
                    WHERE  carnet = '$Carnet'
                    ";
            //Conexion a la base de datos
            $link = @mysql_connect($servidor,$usuario,$contrasena) or die ("error al conectar ".mysql_error());
            if ( isset($link) ){
           // Luego mysql_select_db selecciona la base de datos, en este caso llamada "ejemplos"
                $select_db = @mysql_select_db($base_Datos,$link) or die("error al seleccionar la DB".mysql_error());
            }
            //se ejecuta la consulta
            $result = @mysql_query($sql,$link) or die ("error al ejecutar el $sql");
            //Cerramos conexion
            mysql_close($link);
            //return $result;
         }


        public function Modificar_estudiante(){}



    }
?>