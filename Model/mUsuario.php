<?php 
include("db/conexion.php");
class mUsuario
{
    function mUsuario(){}
    
  /*  function selecConexion()
    {
        $conBD = new conexion();
        $conBD->conectarBD();
    }
*/
    $conBD = new conexion();

    function ValidarUsuario($usuario,$contraseña)
    {
        $sql = "SELECT * FROM USUARIO WHERE CH_ID_USUARIO='$usuario' AND
                VC_PASSWORD='$contraseña'";
        $tabla = $this->conBD->ejecutarcon($sql,"S");
        
        if(count($tabla)>0)
        {
            echo "Usuario Logeado Correctamente";
        }
        else echo "Usuario y/o Contraseña Incorrectos"
    }
}
?>