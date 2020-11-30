<?php 

class ventasController extends Controller
{   private $_ventas;
     function __construct()
    {
        parent::__construct();
        $this->_ventas=$this->loadModel('ventas');
    }

    public function index()
    { 
       
        $this->_view->renderizar('index');

    }
    public function vents()

    {   $tabla=$this->_ventas->obtenerVentas();
        $this->_view->cat='<h1 style="font-size:35px;color:#1b3147">Listado de ventas</h1>';
        $this->_view->tabla=$tabla;
        $this->_view->renderizar('vents');

    }

   public function agregarv()
    {
        $this->_view->pro='<h1 style=" margin-left: 15px;font-size:35px;color:#1b3147">Inserte un producto</h1>';

            if($this->getTexto('agregar')=='1') {
            $id_producto=$this->getTexto('id_producto');
            $cantidad=$this->getTexto('cantidad');
            $precioV=$this->getTexto('precioV');
            $precioC=$this->getTexto('precioC');
            $precioV=$this->getTexto('precioV');
            $totalV=$this->getTexto('totalV');
            $fecha=$this->getTexto('fecha');
            $this->_ventas->agregarVentas($id_producto,$cantidad,$precioV,$precioC,$totalV,$fecha);
            $this->redireccionar('ventas/vents');
        }

        $this->_view->renderizar('agregarv');
    }

}


 ?>
