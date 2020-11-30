<?php 

class usuariosModel extends Model
{
     function __construct()
    {
    	parent::__construct();
    }

	public function obtenerUsuarios($campo=null,$valor=null){
		$fila=$this->_db->query("SELECT * FROM tbusuarios")->fetchAll();
		return $fila;
	}

	public function agregarUsuarios($nombre, $contrasenia,$rol)
	{
	  $this->_db->prepare('INSERT INTO tbusuarios(
	  	nombre, contrasenia, rol) VALUES(:nombre, :contrasenia,:rol)')->execute(
	    	array(
	    		'nombre'=>$nombre,
	    		'contrasenia'=>$contrasenia,
	    		'rol'=>$rol
	    	));
	}
		
 	public function actualizarUsuarios($idtbUsuarios,$nombre,$contrasenia,$rol)
	{
		$this->_db->prepare('UPDATE tbusuarios SET 
			nombre = :nombre,
			contrasenia = :contrasenia,
			rol = :rol,
		 = 
			where idtbUsuarios= :idtbUsuarios')->execute(array(
				'idtbUsuarios'=>$idtbUsuarios,
	    		'nombre'=>$nombre,
	    		'contrasenia'=>$contrasenia,
	    		'rol'=>$rol,
	

	    ));
	}

	public function eliminar($idtbUsuarios){
        $this->_db->prepare('DELETE FROM tbusuarios WHERE idtbUsuarios =:idtbUsuarios')->execute(
        	array(
        		'idtbUsuarios'=>$idtbUsuarios,
        	));
    }
}


 ?>
