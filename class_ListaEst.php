<?php
   
   include("class_Estudiante.php");
   // include("conexion.php");

    class ListaEst{
        private $count_Lista;
        private	$arreglo_Lista;

        /* ______________________________CONSTRUCTOR_______________________________
        ------------------------------------------------------------------------
        */
        public function ListaEst(){
            $this -> count_Lista = 0;
        }

        /* __________________________________GET'S_________________________________
        ------------------------------------------------------------------------
        Funciones que devuelven los atributos respectivos de la instancia
        de una lista estudiante.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function count(){
            return $this -> $count_Lista;
        }
        public function liste(){
            return $this ->arreglo_Lista;
        }

        /* _______________________________CONSULTAR________________________________
        ------------------------------------------------------------------------
        Funcion que ejecuta la consulta necesaria para 'BUSCAR' 	los datos de
        los estudiantes en la BD's e ir agragandolos (uno a uno) en la instancia
        de la lista.
        - Cada estudiante se agrega con toda su informacion como un elemento
        de la lista para luego ser leido en un ciclo creado en la interfaz
        que recorrera toda esta lista.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Consultar_e(){
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


            //Aqui se almacena la lista de estudiantes (fila por fila)
            while ( $fila = mysql_fetch_array ($result)){

                $est = new Estudiante($fila['nombre'], $fila['carnet'], $fila['carrera'], $fila['indice'],$fila['direccion'] );
                $this -> arreglo_Lista[$this -> count_Lista]=$est;
                $this -> count_Lista++;
            }
        }

        public function Consultar_e_condiciones($nombre, $carnet, $carrera, $indice, $direccion){
            include "sql_conf.php"; //archivo de configuracion de sql
            $this -> count_Lista = 0;
            $primero = 1;
            $sql="SELECT * FROM estudiante WHERE";
            if($nombre != ""){
                if(primero==1){
                    $sql_aux = " nombre = '".$nombre."'";
                    $sql=$sql.$sql_aux;
                    $primero = 0;
                }
                else{
                    $sql_aux = " AND nombre = '".$nombre."'";
                    $sql=$sql.$sql_aux;
                }
            }
            if($carnet != ""){
                if(primero==1){
                    $sql_aux = " carnet = '".$carnet."'";
                    $sql=$sql.$sql_aux;
                    $primero = 0;
                }
                else{
                    $sql_aux = " AND carnet = '".$carnet."'";
                    $sql=$sql.$sql_aux;
                }
            }
            if($carrera != ""){
                if(primero==1){
                    $sql_aux = " carrera = '".$carrera."'";
                    $sql=$sql.$sql_aux;
                    $primero = 0;
                }
                else{
                    $sql_aux = " AND carrera = '".$carrera."'";
                    $sql=$sql.$sql_aux;
                }
            }
            if($indice != 0){
                if(primero==1){
                    $sql_aux = " indice = ".$indice;
                    $sql=$sql.$sql_aux;
                    $primero = 0;
                }
                else{
                    $sql_aux = " AND indice = ".$indice;
                    $sql=$sql.$sql_aux;
                }
            }
            if($direccion != ""){
                if(primero==1){
                    $sql_aux = " direccion = '".$direccion."'";
                    $sql=$sql.$sql_aux;
                    $primero = 0;
                }
                else{
                    $sql_aux = " AND direccion = '".$direccion."'";
                    $sql=$sql.$sql_aux;
                }
            }
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

            //$result = ejecutar($sql);

            //Aqui se almacena la lista de estudiantes (fila por fila)
            while ( $fila = mysql_fetch_array ($result)){

                $est = new Estudiante($fila['nombre'], $fila['carnet'], $fila['carrera'], $fila['indice'],$fila['direccion'] );
                $this -> arreglo_Lista[$this -> count_Lista]=$est;
                $this -> count_Lista++;
            }
        }
    }
?>