<?php
session_start();
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "db_uninorte";
$con = mysql_connect($server, $username, $password) or die ("No se conecto: " . mysql_error());
mysql_select_db($database, $con)or die ("no exite la tabla");

//$usuario= $_SESSION['var_sesion'];
$sql = "SELECT nombre_curso FROM cursos";
$ejecutar_sql1=mysql_query($sql,$con);
if(mysql_num_rows($ejecutar_sql1) > 0){

$rawdata = array(); 
$i=0;
while($row = mysql_fetch_array($ejecutar_sql1))
    {
        $rawdata[$i] = $row;
        $i++;
    }

     
     echo json_encode($rawdata);}
//echo $ejecutar_sql1;

?>