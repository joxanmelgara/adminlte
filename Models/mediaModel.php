<?php 

class mediaModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerMedia($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM tbmultimedia")->fetchAll();
		return $fila;
	}

	public function agregarMedia($nombre)
	{
	  $this->_db->prepare('INSERT INTO tbmultimedia(nombre) VALUES(:nombre)')->execute(
	    	array(
	    		'nombre'=>$nombre,
	    	));
	}
		
 	public function actualizarMedia($idtbMultimedia,$nombre)
	{
		$this->_db->prepare('UPDATE tbmultimedia SET
			nombre = :nombre

			where idtbMultimedia= :idtbMultimedia')->execute(array(
				'idtbMultimedia'=>$idtbMultimedia,
	    		'nombre'=>$nombre		
	    ));
	}

	public function eliminar($idtbMultimedia){
        $this->_db->prepare('DELETE FROM tbmultimedia WHERE idtbMultimedia =:idtbMultimedia')->execute(
        	array(
        		'idtbMultimedia'=>$idtbMultimedia,
        	));
    }
}


 ?>
