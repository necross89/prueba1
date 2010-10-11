<?php
    include("class_ListaEst.php");


    class Fachada{
        private static $inst;

        private function __construct(){}

        public static function retF(){
            if (!isset(self::$inst)){
                $nombreClass = __CLASS__;
                self::$inst = new $nombreClass();
            }
            return self::$inst;
        }

        /* _______________________________INSERTAR_________________________________
        ------------------------------------------------------------------------
        Funci�n que enlaza la capa de interfaz con la capa l�gica-BD para 'CREAR'
        un nuevo estudiante y almacenarlo en la BD's.
        Devuelve 'true' en caso de haber insertado exitosamente a un estudiante.
        En caso contrario devuelve 'false'.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Insertar($nombre, $carnet, $carrera, $indice, $direccion){
            $est = new Estudiante($nombre, $carnet, $carrera, $indice, $direccion);
            return $est -> Insertar_e();
        }

        /* ________________________________ELIMINAR________________________________
        ------------------------------------------------------------------------

        Funci�n que enlaza la interfaz con la capa l�gica-BD para 'ELIMINAR' un
        estudiante en la BD's.
        _________________________________________________________________________
        -------------------------------------------------------------------------
        */
        public function Eliminar($carnet){
            $est = new Estudiante("a", $carnet, "a", 0.0, "a");
            $est -> Eliminar_e();
        }

        /* ______________________________ACTUALIZAR________________________________
        ------------------------------------------------------------------------
        Funci�n que enlaza la interfaz con la capa l�gica-BD para 'MODIFICAR' los
        datos de un estudiante en la BD's.
        Devuelve 'true' en caso de haber modificado de forma exitosa al estudiante.
        En caso contrario devuelve 'false'.
        NO!!! vamos a modificar el carnet porque ese es el identificador del
        estudiante.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Actualizar($nombre, $carnet, $carrera, $indice, $direccion){
            $est = new Estudiante($nombre, $carnet, $carrera, $indice, $direccion);
           return $est -> Modificar($nombre, $carrera, $indice, $direccion);
        }

        /* _______________________________CONSULTAR________________________________
        ------------------------------------------------------------------------
        Funci�n que enlaza la interfaz con la capa logica-BD para 'CONSULTAR' los
        datos de un estudiante en la BD's.
        Se crea una lista de estudiantes y se llama a la funci�n respectiva
        de la clase (en class_ListaEst.php) para llenarla con la informaci�n
        de todos los estudiantes almacenados en la base de datos.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Consultar(){
            $lista = new ListaEst();
            $lista -> Consultar_e();
            return  $lista->liste();
        }

        public function Consultar_condiciones($nombre, $carnet, $carrera, $indice, $direccion){
            $lista = new ListaEst();
            $lista -> Consultar_e_condiciones($nombre, $carnet, $carrera, $indice, $direccion);
            return  $lista->liste();
        }
    }
?>
