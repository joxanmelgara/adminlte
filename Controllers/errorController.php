<?php 


class errorController extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
    	

    }
    public function error($error)
    {
    	if ($error==503)
    		$this->_view->mensaje='<div><h3 class="text-danger p-2">
				No tiene suficientes privilegios.
    		</h3></div>';
    		else if($error==504)
    		$this->_view->mensaje='<div><h3 class="text-danger p-2">
				Debe ingresar al sistema.
    		</h3></div>';
    		else 
    		$this->_view->mensaje='<div><h3 class="text-danger p-2">
				Error desconocido.
    		</h3></div>';

    		$this->_view->renderizar('index');
    		
    }
}

 ?>
