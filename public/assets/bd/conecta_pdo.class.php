<?php
class conexion_pdo
{
    
	public function get_conexion()
	{
		/* SERVIDOR PRINCIPAL*/		
		$user = "admin_arbol";
		$pass = "Admin3030**";
		$host = "localhost";
		$db   = "arbol";		
		/*SERVIDOR LOCAL*/
		$user = "root";
		$pass = "";
		$host = "localhost";
		$db   = "winredclub";
		$conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
		return $conexion;
		
		
	}

}
?>