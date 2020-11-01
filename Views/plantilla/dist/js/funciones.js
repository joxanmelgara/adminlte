/*-----------------------------------Productos------------------------------*/
	
	// obtener datos productos

$(document).ready(function(){
	$(".botonEditar").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id']);
		$("#nombre").val(datos['nombre']);
		$("#partNo").val(datos['partNo']);
		$("#cantidad").val(datos['cantidad']);
		$("#precioV").val(datos['precioV']);
		$("#precioC").val(datos['precioC']);
		$("#categoria_id").val(datos['categoria_id']);
		$("#media_id").val(datos['media_id']);
		$("#destino").val(datos['destino']);
		$("#fecha").val(datos['fecha']);
	})

	// eliminar productos

	$("#tablaProductos tbody").on('click','.botonEliminar', function(){

				var  id = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'productos/eliminar',
				     type:'post',
				     data:{'id':id},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#tablaProductos tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})
	
	//actualizar productos

	$("#formEdit").submit(function(e){
		e.preventDefault();

		var id = $("#id").val();
		var nombre = $("#nombre").val();
		var partNo = $("#partNo").val();
		var cantidad = $("#cantidad").val();
		var precioV = $("#precioV").val();
		var precioC = $("#precioC").val();
		var categoria_id = $("#categoria_id").val();
		var media_id = $("#media_id").val();
		var destino = $("#destino").val();
		var fecha = $("#fecha").val();

		$.ajax({
			url:'productos/edit',
			type:'post',

			data:{'id':id,'nombre':nombre,'partNo':partNo,'cantidad':cantidad,'precioV':precioV,'precioC':precioC,'categoria_id':categoria_id,'media_id':media_id,'destino':destino,'fecha':fecha},

			success: function(respuesta){

					Swal.fire({
					type: "success",
					title: "Producto Actualizado",
					text: "¡Éxito!"
				})

				$("#tablaProductos tbody").html(respuesta);
				$("#modalEditar").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

});
/*-----------------------------------Fin productos----------------------------*/