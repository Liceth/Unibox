<?php
<$target_path = "/uploads";

if(isset($_POST['boton'])){

    // Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB

    if ((($_FILES["uploadedfile"]["file"] == "image/gif") ||

    ($_FILES["uploadedfile"]["file"] == "image/jpeg") ||

    ($_FILES["uploadedfile"]["file"] == "image/pjpeg")) &&

    ($_FILES["uploadedfile"]["size"] < 20000)) {

 

    //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0).

      if ($_FILES["uploadedfile"]["error"] > 0) {

        echo $_FILES["uploadedfile"]["error"] . "";

      } else {

        // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido

        if (file_exists($target_file)) {
          echo $_FILES["uploadedfile"]["name"] . " ya existe. ";

        } else {

         // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida

          move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],

          "uploads/" . $_FILES["uploadedfile"]["name"]);

          echo "Archivo Subido ";

          echo "<img src="uploads/".$_FILES["uploadedfile"]["name"]."">";

        }

      }

    } else {

        // Si el usuario intenta subir algo que no es una imagen o una imagen que pesa mas de 20 KB mostramos este mensaje

        echo "Archivo no permitido";

    }

}

?>