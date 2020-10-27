<?php 

class productosController extends Controller
{  
    private $_productos;
     function __construct()
    {
        parent::__construct();
        $this->_productos=$this->loadModel('productos');
    }

    public function generarTabla(){
        $fila=$this->_productos->obtenerProductos();
        
        $tabla='';
        foreach ($fila as $f) {

        $datos= json_encode($f);

        $tabla.='<tr>
            <td class="text-center">'.$f['id'].'</td>
            <td class="text-center">'.$f['nombre'].'</td>
            <td class="text-center">'.$f['codigo'].'</td>
            <td class="text-center">'.$f['cantidad'].'</td>
            <td class="text-center">'.$f['precioC'].'</td>
            <td class="text-center">'.$f['precioV'].'</td>
            <td class="text-center">'.$f['fecha'].'</td>
            <td class="text-center">
                <div class="btn-group">
                   <button class="btn btn-primary botonEditar" data-toggle="modal" data-target="#modalEditar" data-p=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                   </button>
                  
                   <button class="btn btn-dark botonEliminar" data-d=\'' .$f['id']. '\'>
                    <span class="fas fa-trash"></span>
                   </button>
                </div>
            </td>
            </tr>';
        }

        return $tabla;
    }

    public function index()
    {   
        $tabla=$this->generarTabla();
        $this->_view->tabla=$tabla;
        $this->_view->renderizar('index');
           
    }


    public function edit(){
            $id=$this->getTexto('id');
            $nombre=$this->getTexto('nombre');
            $codigo=$this->getTexto('codigo');
            $cantidad=$this->getTexto('cantidad');
            $precioC=$this->getTexto('precioC');
            $precioV=$this->getTexto('precioV');
            $fecha=$this->getTexto('fecha');
            $this->_productos->actualizarProductos($id,$nombre,$codigo,$cantidad,$precioC,$precioV,$fecha);
        echo $this->generarTabla();
    }

   public function agregarp()
    {
        $this->_view->pro='<h1 style=" margin-left: 15px;font-size:35px;color:#1b3147">Inserte un producto</h1>';

            if($this->getTexto('agregar')=='1') {
            $nombre=$this->getTexto('nombre');
            $codigo=$this->getTexto('codigo');
            $cantidad=$this->getTexto('cantidad');
            $precioC=$this->getTexto('precioC');
            $precioV=$this->getTexto('precioV');
            $fecha=$this->getTexto('fecha');
            $this->_productos->agregarProductos($nombre,$codigo,$cantidad,$precioC,$precioV,$fecha);
            $this->redireccionar('productos/index');
        }

        $this->_view->renderizar('agregarp');
    }

    public function eliminar(){
        $id = $this->getTexto('id');
        $this->_productos->eliminar($id);
        echo $this->generarTabla();
    }
    

}


 ?>
