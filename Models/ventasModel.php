<?php 

class ventasModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerVentas($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM tbventas")->fetchAll();
		$tabla='';
		foreach ($fila as $f) {
			
		$tabla.='<tr>
			<td class="text-center">'.$f['idventas'].'</td>
		 	<td class="text-center">'.$f['id_producto'].'</td>
		 	<td class="text-center">'.$f['cantidad'].'</td>
		 	<td class="text-center">'.$f['precioV'].'</td>
		 	<td class="text-center">'.$f['precioC'].'</td>
		 	<td class="text-center">'.$f['totalV'].'</td>
		 	<td class="text-center">'.$f['fecha'].'</td>
		 	<td class="text-center">
                <div class="btn-group">
                   <a href="" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Editar">
                    <span class="fas fa-edit"></span>
                   </a>
                   <a href="" class="btn btn-sm btn-danger mr-1" data-toggle="tooltip" title="Eliminar">
                    <span class="fas fa-trash"></span>
                   </a>
                </div>
            </td>
		 	</tr>';
		}

		return $tabla;
	}

	public function agregarVentas($id_producto, $cantidad, $precioV, $precioC, $totalV, $fecha)
	{
	  $this->_db->prepare('INSERT INTO ventas(id_producto, cantidad, precioV, precioC, totalV, fecha) VALUES(:id_producto,:cantidad,:precioV,:precioC,:totalV,:fecha)')->execute(
	    	array(
	    		'id_producto'=>$id_producto, 
	    		'cantidad'=>$cantidad,
	    		'precioV'=>$precioV,
	    		'precioC'=>$precioC,
	    		'totalV'=>$totalV,
	    		'fecha'=>$fecha
	    	));

	  return 'hecho';
	}
		
}

 ?>
