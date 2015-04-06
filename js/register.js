  $(document).ready(function() {
        $('#registro').click(function(event) {
            event.preventDefault();
                 var usuario = $("#usuario").val();
                 var nombre = $("#nombre").val();
                 var apellido = $("#apellido").val();
                 var  dpto = $("#dpto").val();
                 var codigo = $("#codigo").val();
                 var contrasena = $("#contrasena").val();

                 var  oficina = $("#oficina").val();
                  var telefono= $("#telefono").val();
                 var email = $("#email").val();
                 var pagweb = $("#pagweb").val();

                 $.post("validar_reg.php", {nombre: nombre, apellido:apellido, dpto:dpto, oficina:oficina, telefono:telefono, email:email, contrasena:contrasena, codigo:codigo, pagweb:pagweb, usuario:usuario}, function(respuesta){
          // location.href = '../cargar.php';
          
            if (respuesta == true) { 
                 alert("Bienvenido "+ usuario);
                location.href = 'cargar.php';
            }
            else {
                if(respuesta == false){
                    alert("Error registrar usuario ");
             
                }
             
            }
        });
                    //console.log('sale');
                });
            });
      
  