<?

require "config.php";

class ConexionPrincipal{ 
    var $conexion_db=null;
    
    public function ConexionPrincipal(){
        $this->conexion_db=new mysqli(BD_HOST,BD_USUARIO,BD_PASS,BD_NOMBRE_BD);

        if($this->conexion_db->connect_error){
            echo "Fallo al conectar a MySql". $this->conexion_db->connect_error;
            return;
        }

        $this->conexion_db->set_charset(BD_CHARSET);

    }
    /*public function getBaseAsociada($user){
        
        $consulta="SELECT * FROM user where user=".$user;
        $resultado =$this->conexion_db->query($consulta);//Consulta la comunidades que tiene el usuario
        $bd_asociada=[$resultado['codCominidadBD']]; //Devuelve el numero de comunidades que tiene el usuario
	    $elementos = null;
        return $bd_asociada;
    }*/
}

class ConexionSecundaria{ 
    
    var $conexion_db2=null;
    
    public function ConexionSecundaria($codComunidadAsociada){
     
        $this->conexion_db2=new mysqli(BD_HOST_2,BD_USUARIO_2,BD_PASS_2,$codComunidadAsociada);
        
        if($this->conexion_db2->connect_error){
            echo "Fallo al conectar a MySql". $this->conconexion_db2->connect_error;
            return;
        }
        $this->conexion_db2->set_charset(BD_CHARSET);

    }

}

?>