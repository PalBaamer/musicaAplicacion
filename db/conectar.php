<?php
echo "Iniciando conexion BD"."<br>";

// Creación de una clase que nos permita conectarnos a la BD
class Conectar{
    public static function conexion(){
		//10.128.98.161
        $conexion=new mysqli("10.129.14.174", "root", "rootroot", "musica");
		if($conexion!=null){
	    return $conexion;
		}else{
			die("Error conexión: " . mysqli_connect_error());
		}
	}
}
?>
