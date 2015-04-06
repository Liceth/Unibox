  $(document).ready(function() {
        $('#registrocurso').click(function(event) {
            event.preventDefault();
                 var nombre_curso = $("#nombre_curso").val();
                 var cod_curso = $("#cod_curso").val();
                 
                 $.post("validar_curso.php", {nombre_curso: nombre_curso, cod_curso:cod_curso}, function(respuesta){
          // location.href = '../cargar.php';
          
            if (respuesta == true) { 
                 alert("Curso registrado");
                location.href = 'cargar.php';
            }
            else {
                if(respuesta == false){
                    alert("Error registrar curso ");
             
                }
             
            }
        });
                    //console.log('sale');
                });
            });
