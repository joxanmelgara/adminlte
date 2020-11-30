<?php 

class usuariosController extends Controller
{  
    private $_usuarios;
     function __construct()
    {
        parent::__construct();
        $this->_usuarios=$this->loadModel('usuarios');
    }


    public function generarTabla(){
        $fila=$this->_usuarios->obtenerUsuarios();
        
        $tabla='';
        foreach ($fila as $f) {

        $datos= json_encode($f);
      
        $tabla.='<tr>
            <td class="text-center">'.$f['idtbUsuarios'].'</td>
            <td class="text-center">'.$f['nombre'].'</td>
            <td class="text-center">'.$f['contrasenia'].'</td>
            <td class="text-center"><span class="badge bg-danger">'.$f['rol'].'</span></td>
            <td class="text-center">
                <div class="btn-group">
                   <button class="btn btn-primary botonEditarusr" data-toggle="modal" data-target="#modalEditarusr" data-p=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                   </button>
                  
                   <button class="btn btn-dark botonEliminarusr" data-d=\'' .$f['idtbUsuarios']. '\'>
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
            $idtbUsuarios=$this->getTexto('idtbUsuarios');
            $nombre=$this->getTexto('nombre');
            $contrasenia=$this->getTexto('contrasenia');
            $rol=$this->getTexto('rol');
            $this->_usuarios->actualizarUsuarios($idtbUsuarios, $nombre, $contrasenia, $rol);
        echo $this->generarTabla();
    }

   public function agregarus()
    {
        
            if($this->getTexto('agregar')=='1') {
            $nombre=$this->getTexto('nombre');
            $contrasenia=$this->getTexto('contrasenia');
            $rol=$this->getTexto('rol');

            $this->_usuarios->agregarUsuarios($nombre, $contrasenia,  $rol);
            $this->redireccionar('usuarios');
        }
        $this->_view->renderizar('agregarus');
    }

    public function eliminar(){
        $idtbUsuarios = $this->getTexto('idtbUsuarios');
        $this->_usuarios->eliminar($idtbUsuarios);
        echo $this->generarTabla();
    }
    

}


 ?>
