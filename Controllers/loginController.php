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
    			$this->_view->mensaje='<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong><i class="icon fas fa-exclamation-triangle"></i>Usuario y/o Clave Incorrectos.</strong>
                  
                </div>';
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