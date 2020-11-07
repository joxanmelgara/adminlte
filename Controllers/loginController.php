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
    		if ($this->getTexto('clave')=='123') {

    			// validados
    			Accesos::setDatos('validados', true);
    			Accesos::setDatos('rol', $this->getTexto('usuario'));
    			Accesos::setDatos('usuario', 'Joxan Melgara');
    			$this->redireccionar('index');

    		} else{
    			$this->_view->mensaje='
    			<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Ups!</strong> Usuario y/o Clave Incorrectos.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    			</div>';
    		}
    	}
    	$this->_view->renderizar('index');

    }
    public function salir()
    {
    	Accesos::salir();
    	$this->redireccionar('index');
    }
}

 ?>