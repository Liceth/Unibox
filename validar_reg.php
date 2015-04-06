
<?php
 	
		$con = mysql_connect("127.0.0.1","root","")or die ("No se conecto: " . mysql_error());	
		mysql_select_db("db_uninorte", $con)or die ("no exite la tabla");
		
		$nombre= strip_tags($_POST['nombre']);
		$apellido= strip_tags($_POST['apellido']);
		$dpto= strip_tags($_POST['dpto']);
		$oficina= strip_tags($_POST['oficina']);
		$tel= strip_tags($_POST['telefono']);
		$email= strip_tags($_POST['email']);
		$contrasena= strip_tags($_POST['contrasena']);
		$codigo= strip_tags($_POST['codigo']);
		$pagweb= strip_tags($_POST['pagweb']);
		$usuario= strip_tags($_POST['usuario']);
		
		$query= @mysql_query("SELECT * FROM profesor WHERE usuario='$usuario'",$con) or die('No se pudo identificar si existe el usuario');
		if (mysql_num_rows($query) > 0){

			mysql_close($con);
			echo false;
          }
		else{
			
            $meter=  "INSERT INTO profesor SET id_profesor='$codigo',nombre='$nombre',apellido='$apellido',usuario='$usuario',dpto='$dpto',contrasena='$contrasena'";
            $ejecutar_sql=mysql_query($meter,$con);
            session_start();
			$_SESSION['var_sesion']=$usuario;
			$_SESSION['var_contrasena']=$contrasena;
			$_SESSION['LOGIN_STATUS']= true;
			mkdir('archivos/'.$usuario);
			
			mysql_close($con);
			echo true;
		}
		
?>