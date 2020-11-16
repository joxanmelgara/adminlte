<?php 


class loginController extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

    public function index()
    {	
    	if ($this->getTexto('ingresar')=='1') {
    		//acceso a la base de datos 
    		if ($this->getTexto('usuario')=='Joxan' && $this->getTexto('clave')=='123') {

    			// validados
    			Accesos::setDatos('validados', true);
    			Accesos::setDatos('rol', 'admin');
    			Accesos::setDatos('usuario', 'Joxan Melgara');
    			$this->redireccionar('index');

    		} else{
    			$this->_view->mensaje='<div class=" text-center alert alert-danger alert-dismissible fade show" role="alert"><strong>Usuario y/o Clave Incorrectos</strong>.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    		}
    	}
    	$this->_view->renderizar('index');

    }
    public function salir()
    {
    	Accesos::salir();
    	$this->redireccionar('login/index');
    }
}

 ?>