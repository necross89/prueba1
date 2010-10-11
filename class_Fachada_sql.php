<?php


    class Fachada_sql{
        private static $inst;   //instancia de la clase

//constructor que no hace nada
        private function __construct(){}


//Para retornar la instancia de la clase
        public static function retornarFachada_sql(){
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



//Funcion que es usada en la clase estudiante para modificar los valores en la base de dato
        public function Modificar_estudiante($nom,$carr,$ind,$dir,$Carnet){
          include "sql_conf.php";//archivo que contiene las variables
          $sql = "UPDATE estudiante SET
                    nombre = '$nom',
                    carrera = '$carr',
                    indice = '$ind',
                    direccion = '$dir'
                    WHERE carnet = '$Carnet'
                    ";
          //Conexion a la base de datos
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


//funcion que es usada en la lista de estudiante en el metodo Consultar_e()
//retorna la consulta con todos los estudiantes
       public function Consultar_lista_e(){
            include "sql_conf.php"; //archivo de configuracion de sql
            $this -> count_Lista = 0;
            $sql="SELECT * FROM estudiante";
            //Conexion a la base de datos
                $link = @mysql_connect($servidorx,$usuario,$contrasena) or die ("error al conectar ".mysql_error());
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



  }
?>
