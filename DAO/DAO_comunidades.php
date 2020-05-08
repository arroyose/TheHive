<?php
  $path=$_SERVER["DOCUMENT_ROOT"];
  require ("$path/bd/conexion.php");
  require ("$path/Modelos/Comunidades.php");
   

   class DAO_comunidades{
      //Creacion de la conexion para el manejo de datos
      public $conexion;
      //Creacion de un Objeto Usuario para las operaciones
      public $comunidad;

      function __construct() {
         $this->conexion=new ConexionPrincipal();
         $this->comunidad=new Comunidad();
      }   

      //Funcion para recuperar un usuario sabiendo el alias
      function comunidadesPorAdministrador($idAdministrador){

        $sentencia="Select * from ComunidadesAdministradas where idUsuario='".$idAdministrador."';";
        $resultado= $this->conexion->conexion_db->query($sentencia);
        $numfilas = $resultado->num_rows;
        
        if ($numfilas==1) {
            return "HAY UNA COMUNIDAD";
        }else if($numfilas>1){
            return "HAY VARIASSSSSS COMUNIDAD";
        }else{
            return "NO HAY COMUNIDADES";
        }
        
      }


   }
  
 ?>