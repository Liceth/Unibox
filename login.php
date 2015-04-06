<?php
session_start();
if (isset($_POST['ingresar']))
{$user = $_POST['usuario'];
$pass = $_POST['password'];

$con = mysql_connect("localhost","root","");
mysql_select_db("db_uninorte",$con);
$query = "SELECT * FROM profesor WHERE usuario = '$user' and contrasena='$pass'";
$result = mysql_query($query,$con);

$num_rows = mysql_num_rows($result);
	
	  if($num_rows > 0){
	
		  $row = mysql_fetch_array($result);
	
		  $_SESSION['se-logged'] = true;
		  $_SESSION['se-id'] = $row['id_profesor'];
		  $_SESSION['se-nombre'] = $row['nombre'];
		  $_SESSION['se-apellido'] = $row['apellido'];
		  
		  $_SESSION['se-mensaje'] = 'Bienvenido(a)  ' . $_SESSION['se-nombre'] .  ' ' . $_SESSION['se-apellido'] . ' Has ingresado correctamente';
	  }
	  else{
		$_SESSION['se-mensaje'] = 'El usuario o contraseña son incorrectos';
	  }
	  mysql_close($con);

  
}
?> 