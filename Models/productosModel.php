<?php 

class productosModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerProductos($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM tbproductos")->fetchAll();
		return $fila;
	}

	public function agregarProductos($nombrep, $codigo, $precioVt, $precioCp, $destino, $fecha, $tbCategorias_idtbCategorias, $tbMultimedia_idtbMultimedia)
	{
		
	  $this->_db->prepare('INSERT INTO tbproductos(nombrep, codigo, precioVt, precioCp, destino, fecha,tbCategorias_idtbCategorias,tbMultimedia_idtbMultimedia) VALUES(:nombrep, :codigo, :precioVt, :precioCp, :destino, :fecha,:tbCategorias_idtbCategorias,:tbMultimedia_idtbMultimedia)')->execute(
	    	array(
	    		'nombrep'=>$nombrep,
	    		'codigo'=>$codigo,
	    		'precioVt'=>$precioVt,
	    		'precioCp'=>$precioCp,
	    		'destino'=>$destino,
	    		'fecha'=>$fecha,
	    		'tbCategorias_idtbCategorias'=>$tbCategorias_idtbCategorias,
	    		'tbMultimedia_idtbMultimedia'=>$tbMultimedia_idtbMultimedia
	    	));
	}
	

 	public function actualizarProductos($idtbProductos,$nombrep, $codigo, $precioVt, $precioCp, $destino, $fecha)
	{
		$this->_db->prepare('UPDATE tbproductos SET 
			nombrep=:nombrep,
			codigo=:codigo, 
			precioVt=:precioVt,
			precioCp=:precioCp,
			destino=:destino, 
			fecha=:fecha
			where idtbProductos= :idtbProductos')->execute(array(
				'idtbProductos'=>$idtbProductos,
	    		'nombrep'=>$nombrep,
	    		'codigo'=>$codigo,
	    		'precioVt'=>$precioVt,
	    		'precioCp'=>$precioCp,
	    		'destino'=>$destino,
	    		'fecha'=>$fecha
	    ));
	}

	public function getCat(){
        $fila = $this->_db->query("SELECT * FROM tbcategorias")->fetchAll();
        return $fila;
        }

    public function getImg(){
        $fila = $this->_db->query("SELECT * FROM tbmultimedia")->fetchAll();
        return $fila;
        }

	public function eliminar($idtbProductos){
        $this->_db->prepare('DELETE FROM tbproductos WHERE idtbProductos =:idtbProductos')->execute(
        	array(
        		'idtbProductos'=>$idtbProductos,
        	));
    }
}


 ?>
