<?php 

class categoriasController extends Controller
{  
    private $_categorias;
     function __construct()
    {
        parent::__construct();
        $this->_categorias=$this->loadModel('categorias');
    }

    public function generarTabla(){
        $fila=$this->_categorias->obtenerCategorias();
        $tabla='';
        foreach ($fila as $f) {

        $datos= json_encode($f);

        $tabla.='<tr>
            <td class="text-center">'.$f['idtbCategorias'].'</td>
            <td class="text-center">'.$f['nombre'].'</td>
            <td class="text-center">
                <div class="btn-group">
                   <button class="btn btn-primary botonEditar1" data-toggle="modal" data-target="#modalEditarcat" data-p=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                   </button>
                  
                   <button class="btn btn-dark botonEliminar1" data-d=\'' .$f['idtbCategorias']. '\'>
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
            $idtbCategorias=$this->getTexto('idtbCategorias');
            $nombre=$this->getTexto('nombre');
            $this->_categorias->actualizarCategorias($idtbCategorias,$nombre);
        echo $this->generarTabla();
    }

   public function agregarc()
    {
            if($this->getTexto('agregar')=='1') {
            $nombre=$this->getTexto('nombre');
            $this->_categorias->agregarCategorias($nombre);
            $this->redireccionar('categorias');
        }

        $this->_view->renderizar('agregarc');
    }

    public function eliminar(){
        $idtbCategorias = $this->getTexto('idtbCategorias');
        $this->_categorias->eliminar($idtbCategorias);
        echo $this->generarTabla();
    }
    

}


 ?>
