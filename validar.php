<?php
 	
		$con = mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_uninorte",$con);	
		$user = mysql_real_escape_string($_POST["usuario"]);
		$pass = mysql_real_escape_string($_POST["password"]);
		if($user!="" && $pass!=""){
		
		$query = "SELECT * FROM profesor WHERE usuario = '$user' and contrasena='$pass'";
		$result = mysql_query($query,$con);
		$fila=mysql_num_rows($result);
     	
		if($fila>0)
		{	
			session_start();
			$_SESSION['var_sesion']=$user;
			$_SESSION['password']=$pass;
			$_SESSION['LOGIN_STATUS'] = true;
			mysql_close($con);
			
			echo true;
		}
		else{
			mysql_close($con);
			echo false;
		}
		
	}
	
?>
