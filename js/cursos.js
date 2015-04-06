$(document).ready(function() {	

	window.onload = function() {
		 var tabla = $("#curso").find('ul');
              tabla.empty();
             var output="";
		     var categoria="";
             $.post("cargarcursos.php", {categoria:categoria}, function(respuesta) {
             
             	
             	var prueba = JSON.parse(respuesta);
             	
             	for (var j in prueba) {
					
                   output+="<li><a href='perfil2.php?opcion="+prueba[j].nombre_curso+"'>"+prueba[j].nombre_curso+"</a></li>";
				}
			      if(output=="")
            {
             output+="<li></li>";
            }
           tabla.append(output);
        });

	};
});