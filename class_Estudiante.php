<?php

include "class_Fachada_sql.php";

    class Estudiante{
 

        private $Nombre;
        private $Carnet;
        private $Carrera;
        private $Indice;
        private $Direccion;
        
        /* ______________________________CONSTRUCTOR_______________________________
        ------------------------------------------------------------------------
        */
        public function Estudiante($nom, $carn, $carr, $ind, $dir){
            $this -> Nombre = $nom;
            $this -> Carnet = $carn;
            $this -> Carrera = $carr;
            $this -> Indice = $ind;
            $this -> Direccion = $dir;
        }

        /* __________________________________GET'S_________________________________
        ------------------------------------------------------------------------
        Funciones que devuelven los atributos respectivos de la instancia
        estudiante
        En el codigo solo se uso la funcion nombre1().
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */

        function carnet1(){   return $this->Carnet;}
        function nombre1(){   return $this->Nombre;}
        function carrera1(){  return $this->Carrera;}
        function indice1(){   return $this->Indice;}
        function direccion1(){return $this->Direccion;}

        /* _______________________________INSERTAR_E_______________________________
        ------------------------------------------------------------------------
        Funcion que ejecuta la consulta necesaria para 'INSERTAR' un nuevo
        estudiante en la BD.
        Devuelve 'true' en caso de haber insertado exitosamente a un estudiante.
        En caso contrario devuelve 'false'.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Insertar_e(){
            //Validaciones de datos del estudiante.
            $patron0 = "/^[a-z]+(\s*[a-z]*)*$/i";
            $patron1 = "/^([0-9]{2})-([0-9]{5})$/";
            $patron2 = "/^[a-z]+(\s*[a-z]*)*$/i";
            $patron3 = "/^([0-5])(\.([0-9]{1,4}))?$/";
            
            //verifica los datos de los elementos del formulario
            if ((preg_match($patron0, $this->Nombre))&& (preg_match($patron1, $this->Carnet)) &&
            (preg_match($patron2, $this->Carrera)) && (preg_match($patron3, $this->Indice))){
               $facha_sql = Fachada_sql::retornarFachada_sql();
               $result = $facha_sql->insertar_estudiante($this->Nombre,$this->Carnet,
                                      $this->Carrera,$this->Indice,$this->Direccion);
               return $result;
            }
            else {return false;}
            
        }



        /* _______________________________ELIMINAR_E_______________________________
        ------------------------------------------------------------------------
        Funcion que ejecuta la consulta necesaria para 'ELIMINAR' un nuevo
        estudiante en la BD's.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Eliminar_e(){
            $facha_sql = Fachada_sql::retornarFachada_sql();
            $facha_sql->Eliminar_estudiante($this->Carnet);
         }

        /* _______________________________MODIFICAR________________________________
        ------------------------------------------------------------------------
        Funcion que ejecuta la consulta necesaria para 'ACTUALIZAR'los datos
        de un nuevo estudiante en la BD.
        Devuelve 'true' en caso de haber modificado de forma exitosa al estudiante.
        En caso contrario devuelve 'false'.
        - carnet no entra como atributo porque es el identificador y se
        sobreentiende que no se modifica.
        ________________________________________________________________________
        ------------------------------------------------------------------------
        */
        public function Modificar($nom,$carr, $ind, $dir){
            //Validaciones de datos del estudiante.
            $patron0 = "/^[a-z]+(\s*[a-z]*)*$/i";
            $patron1 = "/^([0-9]{2})-([0-9]{5})$/";
            $patron2 = "/^[a-z]+(\s*[a-z]*)*$/i";
            $patron3 = "/^([0-5])(\.([0-9]{1,4}))?$/";

            if ((preg_match($patron0, $this->Nombre)) &&
            (preg_match($patron2, $this->Carrera)) && (preg_match($patron3, $this->Indice))){
               $facha_sql = Fachada_sql::retornarFachada_sql();
               $result = $facha_sql->Modificar_estudiante($nom,$carr,$ind,$dir,$this->Carnet);
               return $result;
               
            }else{
                return false;
            }
        }
    }
?>
