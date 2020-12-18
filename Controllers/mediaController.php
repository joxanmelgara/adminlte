<?php 

class mediaController extends Controller
{  
    private $_media;
     function __construct()
    {
        parent::__construct();
        $this->_media=$this->loadModel('media');
    }

    public function generarTabla(){
        $fila=$this->_media->obtenerMedia();
        $tabla='';
        foreach ($fila as $f) {

        $datos= json_encode($f);

        $tabla.='<tr>
            <td class="text-center">'.$f['idtbMultimedia'].'</td>
            <td class="text-center">'.$f['nombre'].'</td>
            <td class="text-center">
                <div class="btn-group">
                   <button class="btn btn-primary botonEditarimg" data-toggle="modal" data-target="#modalEditarimg" data-p=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                   </button>
                  
                   <button class="btn btn-dark botonEliminarimg" data-d=\'' .$f['idtbMultimedia']. '\'>
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
            $idtbMultimedia=$this->getTexto('idtbMultimedia');
            $nombre=$this->getTexto('nombre');
            $this->_media->actualizarMedia($idtbMultimedia,$nombre);
        echo $this->generarTabla();
    }

   public function agregar()
    {
            if($this->getTexto('agregar')=='1') {
            $nombre=$this->getTexto('nombre');
            $this->_media->agregarMedia($nombre);
            $this->redireccionar('media');
        }

        $this->_view->renderizar('agregar');
    }

    public function eliminar(){
        $idtbMultimedia = $this->getTexto('idtbMultimedia');
        $this->_media->eliminar($idtbMultimedia);
        echo $this->generarTabla();
    }
    

}


 ?>
