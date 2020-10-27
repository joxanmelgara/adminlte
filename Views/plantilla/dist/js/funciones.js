$(document).ready(function(){
	$(".botonEditar").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id']);
		$("#nombre").val(datos['nombre']);
		$("#codigo").val(datos['codigo']);
		$("#cantidad").val(datos['cantidad']);
		$("#precioC").val(datos['precioC']);
		$("#precioV").val(datos['precioV']);
		$("#fecha").val(datos['fecha']);
	})

	$(".botonEliminar").click(function(){
		let id = $(this).attr("data-d");
	  

	   $.ajax({
	     url:'productos/eliminar',
	     type:'post',
	     data:{id},

	     success: function(respuesta){
	       $("#tablaProductos tbody").html(respuesta)
	     },

	     error: function(){
	       console.error("Error fatal en el sistema");
	     },
	   })

	  })
	
	$("#formEdit").submit(function(e){
		e.preventDefault();

		var id = $("#id").val();
		var nombre = $("#nombre").val();
		var codigo = $("#codigo").val();
		var cantidad = $("#cantidad").val();
		var precioC = $("#precioC").val();
		var precioV = $("#precioV").val();
		var fecha = $("#fecha").val();

		$.ajax({
			url:'productos/edit',
			type:'post',

			data:{'id':id,'nombre':nombre,'codigo':codigo,'cantidad':cantidad,'precioC':precioC,'precioV':precioV,'fecha':fecha},

			success: function(respuesta){

				$("#tablaProductos tdody").html(respuesta);
				$("#modalEditar").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

	
});