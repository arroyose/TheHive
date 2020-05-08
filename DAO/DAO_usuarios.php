 <?php
   require ("./bd/conexion.php");
   require ("./Modelos/Usuarios.php");

   class DAO_usuarios{
      //Creacion de la conexion para el manejo de datos
      public $conexion;
      //Creacion de un Objeto Usuario para las operaciones
      public $usuario;

     function __construct() {
         $this->conexion=new ConexionPrincipal();
         $this->usuario=new Usuarios();
      }

      //Funcion para recuperar un usuario sabiendo el alias
      function usuarioPorAlias($alias){
         
         $sentencia="Select * from Usuarios where alias='".$alias."';";
         echo $sentencia;
         $resultado= $this->conexion->conexion_db->query($sentencia);
         $numfilas = $resultado->num_rows;
        
         if ($numfilas==1) {
            $this->usuario=$resultado->fetch_object();
            return $this->usuario;
         }
         else{
           return null;
         }
        
      }


   }
  
 ?>