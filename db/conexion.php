
<?php 
class conexion
{
    var $link;
    function conexion(){}

    function conectarBD()
    {
        include("db/configuracion.php");
        $this->link = mysqli_connect($servidor,$usuario,$password,$db);

    if(!$this->link) 
    {
         echo "Error al conectarse a la BD: ".mysqli_connect_error();
    }
    
    }
    function ejecutarcon($consulta, $tipconsulta)
    {
        $data = mysqli_query($this->link, $consulta);
        if($tipconsulta == "S")
        {
            while($linea = mysqli_fetch_array($data))
            {
                $tabla[] = $linea;
            }
        }else
        {
            $tabla[] = "";
        }
        $tab = isset($tabla) ? $tabla:NULL;

        if($tab){ return $tab;}
    }

    function desconectarBD ()
    {
        mysqli_close($this->link);
    }
}
?>