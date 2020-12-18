<?php 


class indexController extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
    	$datos='';
    	$cat=0;
    	for ($i = 1; $i <= 9 ; $i++) {
    		$cat++;
    		$datos.='<div class="col-lg-4 mb4 cat">
    		<div class="card">
    			<img   style="width:220px; height:200px" class="card-img-top img-fluid" src="'.PLANTILLA.'imagen/'.$i.'.png" alt="">
    			<div class="card-body">
    				<h5 class="card-title">Nombre Producto</h5>
    				<p class="card-text">Contenido</p>
    				<a href="#" class="btn btn-primary" title="">Comprar</a>
    			</div>
    		</div>
    		</div>';
    		if ($cat==3)
    			$cat=0;
    	}
    	$this->_view->datos=$datos;
    	$this->_view->renderizar('index');
 	}
}

 ?>