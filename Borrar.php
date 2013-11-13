<html>
<head>

</head>
<body>
<?php 
// Actualizamos en funcion del id que recibimos 

 if(!isset($_GET["ide"])){ 

	
	$iden = mysql_connect("localhost", "root", "think");

// seleccionado la base de datos

if(!mysql_select_db("Datos", $iden))
    die("Error: No existe la base de datos"); 
    	  
$id = $_GET["ide"];

$q = "DELETE FROM php WHERE ide='".$id."'";  
$result = mysql_query($q,$id);  
 
 	mysql_close($conexion);
 	

echo "El registro ha sido eliminado con exito.";

}
?> 
</body>
</html>