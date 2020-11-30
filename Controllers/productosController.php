<?php 

class productosController extends Controller
{  
    private $_productos;
     function __construct()
    {
        parent::__construct();
        $this->_productos=$this->loadModel('productos');
    }

     public function generarCategoria(){
            $fila = "";
            $datos = $this->_productos->getCat();
            foreach($datos AS $d){
                $fila .= '<option value="'.$d['idtbCategorias'].'">'.$d['nombre'].'</option>';
            }
            return $fila;
        }


    public function generarImg(){
        $fila = "";
        $datos = $this->_productos->getImg();
        foreach($datos AS $d){
        $fila .= '<option value="'.$d['idtbMultimedia'].'">'.$d['nombre'].'</option>';
        }

        return $fila;
        }

    public function generarTabla(){
        $fila=$this->_productos->obtenerProductos();
        
        $tabla='';
        foreach ($fila as $f) {

        $datos= json_encode($f);
        
        $tabla.='<tr>
            <td class="text-center">'.$f['idtbProductos'].'</td>
            <td class="text-center">'.$f['nombrep'].'</td>
            <td class="text-center">'.$f['codigo'].'</td>
            <td class="text-center">'.$f['precioVt'].'</td>
            <td class="text-center">'.$f['precioCp'].'</td>
            <td class="text-center">'.$f['destino'].'</td>
            <td class="text-center">'.$f['fecha'].'</td>
            <td class="text-center">
                <div class="btn-group">
                   <button class="btn btn-primary botonEditar" data-toggle="modal" data-target="#modalEditar"  data-p=\'' .$datos. '\'>
                    <span class="fas fa-edit"></span>
                   </button>
                  
                   <button class="btn btn-dark botonEliminar" data-d=\'' .$f['idtbProductos']. '\'>
                    <span class="fas fa-trash-alt"></span>
                   </button>
                </div>
            </td>
            </tr>';
        }

        return $tabla;
    }

    public function index()
    {   
        Accesos::acceso('admin');
        $tabla=$this->generarTabla();
        $this->_view->tabla=$tabla;
        $this->_view->renderizar('index');
           
    }

    public function edit(){
            Accesos::acceso('registrador');
            $idtbProductos=$this->getTexto('idtbProductos');
            $nombrep=$this->getTexto('nombrep');
            $codigo=$this->getTexto('codigo');
            $precioVt=$this->getTexto('precioVt');
            $precioCp=$this->getTexto('precioCp');
            $destino=$this->getTexto('destino');
            $fecha=$this->getTexto('fecha');
            $this->_productos->actualizarProductos($idtbProductos,$nombrep,$codigo,$precioVt,$precioCp,$destino,$fecha);
        echo $this->generarTabla();
    }

   public function agregarp()
    {
            if($this->getTexto('agregar')=='1') {
            $nombrep=$this->getTexto('nombrep');
            $codigo=$this->getTexto('codigo');
            $precioVt=$this->getTexto('precioVt');
            $precioCp=$this->getTexto('precioCp');
            $destino=$this->getTexto('destino');
            $fecha=$this->getTexto('fecha');
            $tbCategorias_idtbCategorias=$this->getTexto('tbCategorias_idtbCategorias');
            $tbMultimedia_idtbMultimedia=$this->getTexto('tbMultimedia_idtbMultimedia');
            $this->_productos->agregarProductos($nombrep,$codigo,$precioVt,$precioCp,$destino,$fecha, $tbCategorias_idtbCategorias,$tbMultimedia_idtbMultimedia);
            $this->redireccionar('productos');
        }
        $this->_view->categoria = $this->generarCategoria();
        $this->_view->multimedia = $this->generarImg();
        $this->_view->renderizar('agregarp');
    }

    public function eliminar(){
        $idtbProductos = $this->getTexto('idtbProductos');
        $this->_productos->eliminar($idtbProductos);
        echo $this->generarTabla();
    }
    

}


 ?>
