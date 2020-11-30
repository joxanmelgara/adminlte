<?php 

class categoriasModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerCategorias($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM tbcategorias")->fetchAll();
		return $fila;
	}

	public function agregarCategorias($nombre)
	{
	  $this->_db->prepare('INSERT INTO tbcategorias(nombre) VALUES(:nombre)')->execute(
	    	array(
	    		'nombre'=>$nombre,
	    	));
	}
		
 	public function actualizarCategorias($idtbCategorias,$nombre)
	{
		$this->_db->prepare('UPDATE tbcategorias SET 
			nombre = :nombre
			where idtbCategorias= :idtbCategorias')->execute(array(
				'idtbCategorias'=>$idtbCategorias,
	    		'nombre'=>$nombre		
	    ));
	}

	public function eliminar($idtbCategorias){
        $this->_db->prepare('DELETE FROM tbcategorias WHERE idtbCategorias =:idtbCategorias')->execute(
        	array(
        		'idtbCategorias'=>$idtbCategorias,
        	));
    }
}


 ?>
