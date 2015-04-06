 $(document).ready(function() {
        $('#ingresar').click(function() {
                var usuario = $("#txtcorreo_login").val();
                var password = $("#txtcontra_login").val();
                $.post("validar.php", {usuario: usuario, password: password}, function(respuesta) {
                 if (respuesta == true) {alert("Bienvenido"+ usuario);
                            window.location.href = 'cargar.php';
                  }else {

                            alert("Error iniciar Sesion");
                            
                        }
                 });
                
                });
            });
        
  
