<?php
class jugadores
{
    public $conexion;
    public $modelo;
    
    public function __construct()
    {
        $this->modelo = new conexion_pdo();
		$this->conexion = $this->modelo->get_conexion_pdo();
    }

    public function validar_usuario_admin($objeto)
    {        
        $usuario  = $objeto["usuario"];
        $password = $objeto["password"];

        $query = "select * from administrador where usuario = '$usuario' and password = sha1('$password') limit 1";
        $sentencia = $this->conexion->prepare($query);
        $sentencia->execute();
        if ($row = $sentencia->fetch())
        {            
            return $row;
        } 
        else 
        {
            return false;
        }
    }
}



class depositos
{
    public $conexion;
    public $modelo;
    
    public function __construct()
    {
        $this->modelo = new conexion_pdo();
		$this->conexion = $this->modelo->get_conexion_pdo();
    }

    public function registrar_deposito($objeto)
    {   
        $email    = $objeto["email"];
        $idmoneda = $objeto["idmoneda"];
        $monto    = $objeto["monto"];     
        $query = "select idjugador from jugadores where email = '$email' limit 1";
        $sentencia = $this->conexion->prepare($query);
        $sentencia->execute();
        if ($row = $sentencia->fetch())
        {            
            $idjugador = $row["idjugador"];
            $query = "insert into depositos (idjugador, idmoneda, monto) values ($idjugador, '$idmoneda', $monto)";
            $sentencia = $this->conexion->prepare($query);            
            if ($sentencia->execute())
            {            
                return true;
            } 
            else 
            {
                return false;
            }
        } 
        else 
        {
            return false;
        }
    }
}
?>