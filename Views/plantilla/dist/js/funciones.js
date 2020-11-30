 $(document).ready(function(){
 	$("#contrasenia").complexify({},function(valid,complexify){
 		console.log(valid,complexify);
 		$(".progress-bar").css('width',complexify+'%');
 		if (valid) {
 			// statement
 			$("#btnAgregar").prop('disable',false);
 			$(".progress-bar").addClass('bg-success').removeClass('bg-danger');
 			$("#btnAgregar").attr('estado',true);
 		}
 		else {
 			$("#btnAgregar").prop('disable',true);
 			$(".progress-bar").addClass('bg-danger').removeClass('bg-success');
 			$("#btnAgregar").attr('estado',false);
 		}
 	})
 });

  $(function () {
    $("#e").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv","print", "colvis"]
    }).buttons().container().appendTo('#e_wrapper .col-md-6:eq(0)');
  });
  
/*-----------------------------------Productos------------------------------*/
	// obtener datos productos

$(document).ready(function(){
	$(".botonEditar").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#idtbProductos").val(datos['idtbProductos']);
		$("#nombrep").val(datos['nombrep']);
		$("#codigo").val(datos['codigo']);
		$("#precioVt").val(datos['precioVt']);
		$("#precioCp").val(datos['precioCp']);
		$("#destino").val(datos['destino']);
		$("#fecha").val(datos['fecha']);
	})

	// eliminar productos

	$("#e tbody").on('click','.botonEliminar', function(){

				var  idtbProductos = JSON.parse($(this).attr('data-d'));
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
				     data:{'idtbProductos':idtbProductos},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
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

		var idtbProductos = $("#idtbProductos").val();
		var nombrep = $("#nombrep").val();
		var codigo = $("#codigo").val();
		var precioVt = $("#precioVt").val();
		var precioCp = $("#precioCp").val();
		var destino = $("#destino").val();
		var fecha = $("#fecha").val();

		$.ajax({
			url:'productos/edit',
			type:'post',

			data:{'idtbProductos':idtbProductos,'nombrep':nombrep,'codigo':codigo,'precioVt':precioVt,'precioCp':precioCp,'destino':destino,'fecha':fecha},

			success: function(respuesta){

					Swal.fire({
					type: "success",
					title: "Producto Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditar").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

});
/*-----------------------------------Fin productos----------------------------*/



/*-----------------------------------Categorias------------------------------*/

	// obtener datos categoria

$(document).ready(function(){
	$(".botonEditar1").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#idtbCategorias").val(datos['idtbCategorias']);
		$("#nombre").val(datos['nombre']);
		
	})

	// eliminar categoria

		$("#e tbody").on('click','.botonEliminar1', function(){

				var  idtbCategorias = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'categorias/eliminar',
				     type:'post',
				     data:{'idtbCategorias':idtbCategorias},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})
	
	// actualizar categoria

	$("#formEditcta").submit(function(e){
		e.preventDefault();

		var idtbCategorias = $("#idtbCategorias").val();
		var nombre = $("#nombre").val();

		$.ajax({
			url:'categorias/edit',
			type:'post',

			data:{'idtbCategorias':idtbCategorias,'nombre':nombre},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Categoria Actualizada",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarcat").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});

/*-----------------------------------Fin Categorias------------------------*/




/*-----------------------------------Usuarios------------------------------*/

	// obtener datos usuario  idtbUsuarios`, `nombre`, `contrasenia`, `estado`, `tbGrupoUs_idtbGrupoUs
	
$(document).ready(function(){
	$(".botonEditarusr").click(function (){
		var datos= JSON.parse($(this).attr('data-p'));
		$("#idtbUsuarios").val(datos['idtbUsuarios']);
		$("#nombre").val(datos['nombre']);
		$("#contrasenia").val(datos['contrasenia']);
		$("#estado").val(datos['estado']);
		$("#tbGrupoUs_idtbGrupoUs").val(datos['tbGrupoUs_idtbGrupoUs']);
	})

	// eliminar usuario

	$("#e tbody").on('click','.botonEliminarusr', function(){

				var  idtbUsuarios = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'usuarios/eliminar',
				     type:'post',
				     data:{'idtbUsuarios':idtbUsuarios},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})

	// actualizar usuario

	$("#formEditusr").submit(function(e){
		e.preventDefault();
		var idtbUsuarios = $("#idtbUsuarios").val();
		var nombre = $("#nombre").val();
		var contrasenia = $("#contrasenia").val();
		var estado = $("#estado").val();
		var tbGrupoUs_idtbGrupoUs = $("#tbGrupoUs_idtbGrupoUs").val();

		$.ajax({
			url:'usuarios/edit',
			type:'post',

			data:{'idtbUsuarios':idtbUsuarios,'nombre':nombre,'contrasenia':contrasenia,'estado':estado,'tbGrupoUs_idtbGrupoUs':tbGrupoUs_idtbGrupoUs,},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Usuario Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarusr").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});
/*-----------------------------------Fin usuarios------------------------------*/

/*-----------------------------------Media----------------------------------*/

	// obtener datos media
	
$(document).ready(function(){
	$(".botonEditarimg").click(function (){
		var datos= JSON.parse($(this).attr('data-p'));
		$("#idtbMultimedia").val(datos['idtbMultimedia']);
		$("#nombre").val(datos['nombre']);
	
	})

	// eliminar media

	$("#e tbody").on('click','.botonEliminarimg', function(){

				var  idtbMultimedia = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'media/eliminar',
				     type:'post',
				     data:{'idtbMultimedia':idtbMultimedia},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})

	// actualizar media

	$("#formEditimg").submit(function(e){
		e.preventDefault();
		var idtbMultimedia = $("#idtbMultimedia").val();
		var nombre = $("#nombre").val();
		$.ajax({
			url:'media/edit',
			type:'post',

			data:{'idtbMultimedia':idtbMultimedia,'nombre':nombre},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Dato Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarimg").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});
/*-----------------------------------Fin Media------------------------------*/
