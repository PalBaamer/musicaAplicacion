<?php
echo "Iniciando conexion BD"."<br>";

// Creación de una clase que nos permita conectarnos a la BD
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("10.130.37.152", "root", "rootroot", "spotify");
		if($conexion!=null){
	    return $conexion;
		}else{
			die("Error conexión: " . mysqli_connect_error());
		}
	}
}
?>
