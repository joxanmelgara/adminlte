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
    		$this->_view->mensaje='<div class="container">
            <section class="content" style="margin-top:200px">
              <div class="error-page">
                <h2 class="headline text-warning"> 503</h2>
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i>¡Ups! Acceso a la página bloqueado.!</h3>
                  <p>
                    No pudimos encontrar la página que buscabas.<br><b class="text-danger">No tienes suficientes privilegios.</b>
                  </p>
                </div>    
              </div>
            </section>';
    		else if($error==504)
    		$this->_view->mensaje='<div class="">
            <section class="content" style="margin-top:200px">
              <div class="error-page">
                <h2 class="headline text-warning"> 504</h2>
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i>¡Ups! Página no encontrada.!</h3>
                  <p>
                    No pudimos encontrar la página que buscabas.<br><b class="text-danger">Debes ingresar al sistema.</b>
                  </p>
                </div>    
              </div>
            </section>
          </div>';
    		else 
    		$this->_view->mensaje='<div class="">
            <section class="content" style="margin-top:200px">
              <div class="error-page">
                <h2 class="headline text-warning"> 404</h2>
                <div class="error-content">
                  <h3><i class="fas fa-exclamation-triangle text-warning"></i>¡Ups! Página no encontrada.!</h3>
                  <p>
                    No pudimos encontrar la página que buscaba.<br><b class="text-danger"> Error desconocido.</b>
                  </p>
                </div>    
              </div>
            </section>
          </div>';
    		$this->_view->renderizar('index');
    		
    }
}

?>

