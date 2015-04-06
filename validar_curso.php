
<?php

session_start(); //Iniciamos o Continuamos la sesion

        $con = mysql_connect("127.0.0.1","root","");
        mysql_select_db("db_uninorte",$con);    
       $nombre_curso= mysql_real_escape_string($_POST['nombre_curso']);
        $cod_curso= mysql_real_escape_string($_POST['cod_curso']);
        $user= $_SESSION['var_sesion'];

        // $grupo= strip_tags($_POST['grupo']);
        // $año= strip_tags($_POST['año']);
        // $nrc= strip_tags($_POST['nrc']);
        // $semestre= strip_tags($_POST['semestre']);
        // $codigo= strip_tags($_POST['codigo']);
        $query= @mysql_query("SELECT cod_curso FROM cursos WHERE cod_curso='$cod_curso'") or die('No se pudo identificar si existe el usuario');
        if ($existe=@mysql_fetch_object($query)){
            echo "aca1";
            echo false;
        }else{
            
              //  $meter2= mysql_query('INSERT INTO cursos(nombre_curso, cod_curso,grupo,año,nrc,semestre,codigo)  VALUES ("'.mysql_real_escape_string($nombre_curso).'","'.mysql_real_escape_string($cod_curso).'","'.mysql_real_escape_string($grupo).'","'.mysql_real_escape_string($año).'","'.mysql_real_escape_string($nrc).'","'.mysql_real_escape_string($semestre).'", "'.mysql_real_escape_string($codigo).'")') or die('No se pudo registrar el usuario.');
               $meter2=  "INSERT INTO cursos SET cod_curso='$cod_curso',nombre_curso='$nombre_curso', usuario='$user'";
                mysql_query($meter2,$con);
                  mysql_close($con);

                 echo true;
   
        }
        

        

    
    
    


?>