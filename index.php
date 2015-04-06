<?php

    header("Acces-Control-Allow-Origin: *");
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $db_host='localhost';
    $db_user='root';
    $db_password='';
    $db_schema="db_uninorte";
    date_default_timezone_set('America/Bogota');

if(isset($_POST['opcion'])){

    switch ($_POST['opcion']) {
    case '1':// Listar Todos los Archivos
            $connection = mysqli_connect($db_host,$db_user,$db_password,$db_schema) or die("Error " . mysqli_error($connection));
                $query = "SELECT * FROM archivo" ;
                $result = mysqli_query($connection,$query);
                if($result){
                    while ($rows = $result->fetch_array(MYSQLI_ASSOC)) {
                        $r[] = $rows;
                    }
                    $r["resultado"] = "1";
                    echo json_encode($r);
                }else{
                    $r["resultado"] = "0";
                    echo json_encode($r);
                }
            mysqli_close($connection);
            break;

    case '2':// Login
            $connection = mysqli_connect($db_host,$db_user,$db_password,$db_schema) or die("Error " . mysqli_error($connection));
            if(isset($_POST['data'])){
                parse_str($_POST['data'], $data);
                $usuario = $data['usuario'];
                $password = $data['password'];
                $query = "SELECT nombre, apellido, usuario, dpto FROM profesor WHERE usuario='".$usuario."' AND contrasena='".$password."'";
                $result = mysqli_query($connection,$query);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0){
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    $r["resultado"] = "1";
                    $r["nombre"] = $row["nombre"];
                    $r["apellido"] = $row["apellido"];
                    $r["usuario"] = $row["usuario"];
                    $r["dpto"] = $row["dpto"];
                    echo json_encode($r);
                }else{
                    $r["resultado"] = "0";
                    echo json_encode($r);
                }
            }
            mysqli_close($connection);
            break;

   case '3':// Cargar archivo
            $connection = mysqli_connect($db_host,$db_user,$db_password,$db_schema) or die("Error " . mysqli_error($connection));
            if(isset($_POST['data'])){
                parse_str($_POST['data'], $data);
                $nombre = $data['nombre'];
                $asignatura = $data['asignatura'];
                $descripcion = $data['descripcion'];
                $query = "INSERT INTO archivo (nombre, asignatura, descripcion) VALUES ('$nombre', '$asignatura', '$descripcion')";
                $result = mysqli_query($connection,$query);
                if($result){
                    $r["resultado"] = "1";
                    echo $query;
                    echo json_encode($r);
                }else{
                    $r["resultado"] = "0";
                    echo json_encode($r);
                }
            }
            mysqli_close($connection);
            break;
    case '4':// Registro Usuarios
            $connection = mysqli_connect($db_host,$db_user,$db_password,$db_schema) or die("Error " . mysqli_error($connection));
            if(isset($_POST['data'])){
                parse_str($_POST['data'], $data);
                $nombre = $data['nombre'];
                $apellido = $data['apellido'];
                $usuario = $data['usuario'];
                $dpto = $data['dpto'];
                $
                $query = "SELECT usuario FROM profesor WHERE usuario='".$usuario."'";
                $result1 = mysqli_query($connection,$query);
                $usuarioexiste = $result1->fetch_array(MYSQLI_ASSOC);
                if(isset($usuarioexiste)){
                $query2 = "UPDATE profesor SET nombre = '$nombre', apellido = '$apellido', dpto = '$dpto' WHERE usuario = '$usuario'";  
                $result = mysqli_query($connection,$query2);
                if($result){
                    $r["resultado"] = "1";
                    echo json_encode($r);
                    mkdir("archivos/$usuario");
                }else{
                    $r["resultado"] = "0";
                    echo json_encode($r);
                }
            }else{
                echo "Usted no tiene permiso para ingresar";
            }
            mysqli_close($connection);
            header:location("cargar.php");
            break;

    case '5':// Listar  los Archivos de acuerdo al tipo
            $connection = mysqli_connect($db_host,$db_user,$db_password,$db_schema) or die("Error " . mysqli_error($connection));
                $query = "SELECT * FROM archivo" ;
                $result = mysqli_query($connection,$query);
                if($result){
                    while ($rows = $result->fetch_array(MYSQLI_ASSOC)) {
                        $r[] = $rows;
                    }
                    $r["resultado"] = "1";
                    echo json_encode($r);
                }else{
                    $r["resultado"] = "0";
                    echo json_encode($r);
                }
            mysqli_close($connection);
            break;
            
        }
    }
}

?>
