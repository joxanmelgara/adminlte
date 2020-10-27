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

	public function agregarProductos($nombre,$codigo,$cantidad,$precioC,$precioV,$fecha)
	{
	  $this->_db->prepare('INSERT INTO productos(nombre,codigo,cantidad,precioC,precioV,fecha) VALUES(:nombre, :codigo, :cantidad, :precioC, :precioV, :fecha)')->execute(
	    	array(
	    		'nombre'=>$nombre,
	    		'codigo'=>$codigo,
	    		'cantidad'=>$cantidad,
	    		'precioC'=>$precioC,
	    		'precioV'=>$precioV,
	    		'fecha'=>$fecha
	    	));
	}
		
 	public function actualizarProductos($id,$nombre,$codigo,$cantidad,$precioC,$precioV,$fecha)
	{
		$this->_db->prepare('UPDATE productos SET 
			nombre = :nombre,
			codigo = :codigo,
			cantidad = :cantidad,
			precioC = :precioC,
			precioV = :precioV,
			fecha = :fecha where id= :id')->execute(array(
				'id'=>$id,
	    		'nombre'=>$nombre,
	    		'codigo'=>$codigo,
	    		'cantidad'=>$cantidad,
	    		'precioC'=>$precioC,
	    		'precioV'=>$precioV,
	    		'fecha'=>$fecha,
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
