<?php
    
        session_start();
        $formatos = array('.jpg' , '.png' , '.docx' , '.xls' , '.pdf','.pptx');
        $directorio='archivos';
        $contArchivos=0;
       
      
        if (isset($_POST['boton'])){
            $nombrearchivo = $_FILES['archivo']['name'];
            $nombreaTmpArchivo = $_FILES['archivo']['tmp_name'];
            $ext = substr($nombrearchivo, strrpos($nombrearchivo, '.'));
            $nombreoriginal =  $_SESSION["var_sesion"]."/".mysql_real_escape_string($_POST['nombre']) . $ext;
            if(in_array($ext,$formatos)){
                if(move_uploaded_file($nombreaTmpArchivo,"archivos/$nombreoriginal" )){
                   
                    echo "Felicitaciones, $nombreoriginal subido exitosamente" ;

                }else{
                    echo "ocurrio un error";
                }
            }else{
                    echo "archivo no permitido";

                }
            }
           header('location:cargar.php');
?>

