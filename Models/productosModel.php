<?php 

class productosModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerProductos($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM productos")->fetchAll();
		return $fila;
	}

	public function agregarProductos($nombre,$partNo,$cantidad,$precioV,$precioC,$categoria_id,$destino,$media_id,$fecha)
	{
		
	  $this->_db->prepare('INSERT INTO productos(nombre,partNo,cantidad,precioV,precioC,categoria_id,destino,media_id,fecha) VALUES(:nombre, :partNo, :cantidad, :precioV, :precioC, :categoria_id,:destino,:media_id,:fecha)')->execute(
	    	array(
	    		'nombre'=>$nombre,
	    		'partNo'=>$partNo,
	    		'cantidad'=>$cantidad,
	    		'precioV'=>$precioV,
	    		'precioC'=>$precioC,
	    		'categoria_id'=>$categoria_id,
	    		'destino'=>$destino,
	    		'media_id'=>$media_id,
	    		'fecha'=>$fecha
	    	));
	}
		
 	public function actualizarProductos($id,$nombre,$partNo,$cantidad,$precioV,$precioC,$categoria_id,$destino,$media_id,$fecha)
	{
		$this->_db->prepare('UPDATE productos SET 
			nombre = :nombre,
			partNo = :partNo,
			cantidad = :cantidad,
			precioV = :precioV,
			precioC = :precioC,
			categoria_id = :categoria_id,
			destino = :destino,
			media_id = :media_id,
			fecha = :fecha where id= :id')->execute(array(
				'id'=>$id,
	    		'nombre'=>$nombre,
	    		'partNo'=>$partNo,
	    		'cantidad'=>$cantidad,
	    		'precioV'=>$precioV,
	    		'precioC'=>$precioC,
	    		'categoria_id'=>$categoria_id,
	    		'destino'=>$destino,
	    		'media_id'=>$media_id,
	    		'fecha'=>$fecha
	    ));
	}

	public function eliminar($id){
        $this->_db->prepare('DELETE FROM productos WHERE id =:id')->execute(
        	array(
        		'id'=>$id,
        	));
    }
}


 ?>
