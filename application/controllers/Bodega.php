<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodega extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    //////////////////////////////  V I S T A S  //////////////////////////////
    /*
	public function index()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador',$datos_mensaje);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/ejecutivo',$datos_mensaje);
            }
            //////////////////////////////////////////////////////////////////////
            //////////////////////////////   B O D Y   /////////////////////////////
            $datos['ciudades'] = $this->lista->lista_ciudades();
            $this->load->view('back_end/busqueda/busqueda',$datos);
            ////////////////////////////////////////////////////////////////////////
			$this->load->view('back_end/footer/principal');
        } else {redirect('/login/empresa', 'refresh');}
	}
    */
    public function ingreso()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('productos','producto',TRUE);
            $this->load->model('Empresas','empresa',TRUE);
            $this->load->model('Bodegas','bodega',TRUE);
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
            $datos['bodegas'] = $this->bodega->lista_bodegas($this->session->userdata('sigesco_laboral_empresa'));
            $datos['categorias'] = $this->producto->lista_categorias_empresa($this->session->userdata('sigesco_laboral_empresa'));
            $datos['productos'] = $this->producto->lista_productos($this->session->userdata('sigesco_laboral_empresa'));
            $datos['subcategorias'] = $this->producto->lista_subcategorias_empresa($this->session->userdata('sigesco_laboral_empresa'));
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/bodega/ingreso',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/menu_top/ejecutivo');
                $this->load->view('back_end/bodega/ingreso',$datos);
            }
            //////////////////////////////////////////////////////////////////////

			$this->load->view('back_end/footer/principal');
        } else {redirect('/login/empresa', 'refresh');}
	}
    
    public function prestamo()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('productos','producto',TRUE);
            $this->load->model('Empresas','empresa',TRUE);
            $this->load->model('Bodegas','bodega',TRUE);
            $this->load->model('listas','lista',TRUE);
			$this->load->view('back_end/header/principal');
            $datos['ciudades'] = $this->lista->lista_ciudades();
            $datos['bodegas'] = $this->bodega->lista_bodegas($this->session->userdata('sigesco_laboral_empresa'));
            $datos['categorias'] = $this->producto->lista_categorias_empresa($this->session->userdata('sigesco_laboral_empresa'));
            $datos['subcategorias'] = $this->producto->lista_subcategorias_empresa($this->session->userdata('sigesco_laboral_empresa'));
            $datos['mandantes'] = $this->empresa->lista_empresas_mandantes($this->session->userdata('sigesco_laboral_empresa'));
            $datos['responsables'] = $this->empresa->lista_responsables($this->session->userdata('sigesco_laboral_empresa'));
            $datos['faenas'] = $this->empresa->lista_faenas_mineras($this->session->userdata('sigesco_laboral_empresa'));
            $datos['retiros'] = $this->empresa->lista_retiros($this->session->userdata('sigesco_laboral_empresa'));
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/bodega/prestamo',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/menu_top/ejecutivo');
                $this->load->view('back_end/bodega/prestamo',$datos);
            }            
            ////////////////////////////////////////////////////////////////////////
			$this->load->view('back_end/footer/principal');
        } else {redirect('/login/empresa', 'refresh');}
	}
    
    public function lista_prestamos()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
            $datos['bodegas'] = $this->bodega->lista_bodegas($this->session->userdata('sigesco_laboral_empresa'));
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/bodega/lista_prestamos_bodega',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/menu_top/ejecutivo');
                $this->load->view('back_end/bodega/lista_prestamos_bodega',$datos);
            }
            //////////////////////////////////////////////////////////////////////

			$this->load->view('back_end/footer/principal');
        } else {redirect('/login/empresa', 'refresh');}
	}
    
    public function lista_en_bodega()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
            $datos['bodegas'] = $this->bodega->lista_bodegas($this->session->userdata('sigesco_laboral_empresa'));
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/bodega/lista_en_bodega',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/menu_top/ejecutivo');
                $this->load->view('back_end/bodega/lista_en_bodega',$datos);
            }
            //////////////////////////////////////////////////////////////////////

			$this->load->view('back_end/footer/principal');
        } else {redirect('/login/empresa', 'refresh');}
	}
    
    public function entre_bodegas()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
            $datos['bodegas'] = $this->bodega->lista_bodegas($this->session->userdata('sigesco_laboral_empresa'));
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/bodega/entre_bodegas',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/menu_top/ejecutivo');
                $this->load->view('back_end/bodega/entre_bodegas',$datos);
            }
            //////////////////////////////////////////////////////////////////////

			$this->load->view('back_end/footer/principal');
        } else {redirect('/login/empresa', 'refresh');}
	}
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function ingreso_bodega(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
        $BANDERA = TRUE;
            $this->load->model('Bodegas','bodega',TRUE);
                for($i=1;$i<$this->input->post('cantidad_ingresos',TRUE);$i++){
                    if($query = $this->bodega->ingreso_bodega(
                      $this->input->post('fecha_ingreso'.$i,TRUE),
                      date('H:i:s'),
                      str_replace(',','.', str_replace('.','', $this->input->post('precio'.$i,TRUE))),
                      str_replace(',','.', str_replace('.','', $this->input->post('cantidad'.$i,TRUE))),
                      $this->input->post('id_producto'.$i,TRUE),
                      $this->input->post('id_bodega'.$i,TRUE)
                  )){
                    }else{$BANDERA = FALSE;}
                }
            if($BANDERA == TRUE){echo TRUE;}else{ echo FALSE;}
        }else {
                    redirect('/login/empresa', 'refresh');
        }
    }
    
    public function prestar_bodega(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            
            $BANDERA = TRUE;
            $this->load->model('Bodegas','bodega',TRUE);
            $BANDERA_CANTIDAD = TRUE; ///////////// PASA A FALSE  SI ALGUNO DE NO TIENE CANTIDAD/////////
                
                for($i=1;$i<$this->input->post('cantidad_prestamos',TRUE);$i++){
                    if($query = $this->bodega->chequear_cantidad_articulo(
                        str_replace(',','.', str_replace('.','', $this->input->post('cantidad'.$i,TRUE))),
                        $this->input->post('id_producto'.$i,TRUE),
                        $this->input->post('id_bodega'.$i,TRUE)
                    )){
                        if($query < 0){
                            $BANDERA_CANTIDAD = FALSE;
                        } 
                    }
                }
            
                for($i=1;$i<$this->input->post('cantidad_prestamos',TRUE);$i++){
                    if($this->input->post('fecha_devolucion'.$i,TRUE) == '') {
                        $ESTADO = 3; /*OCUPADO, YA QUE NO VOLVERA*/
                        $FECHA_DEVOLUCION = $this->input->post('fecha_prestamo'.$i,TRUE);
                    }else{$ESTADO = 1; $FECHA_DEVOLUCION = date($this->input->post('fecha_prestamo'.$i,TRUE), strtotime("now + 1 month"));}
                    
                    if(($this->input->post('id_producto'.$i,TRUE))  && ($BANDERA_CANTIDAD == TRUE)){
                            if($query = $this->bodega->prestar_bodega(
                              $this->input->post('id_producto'.$i,TRUE),
                              str_replace(',','.', str_replace('.','', $this->input->post('cantidad'.$i,TRUE))),
                              $this->input->post('fecha_prestamo'.$i,TRUE),
                              $FECHA_DEVOLUCION,
                              str_replace('undefined','null', $this->input->post('faena_minera'.$i,TRUE)),
                              $this->input->post('responsable'.$i,TRUE),
                              $this->input->post('quien_retira'.$i,TRUE),
                              date("H:i:s"),
                              $ESTADO,
                              $this->input->post('id_bodega'.$i,TRUE)
                          )){
                                
                            }else{$BANDERA = FALSE;}
                    }
                }
            
            if(($BANDERA == TRUE)){
                if($BANDERA_CANTIDAD == TRUE){
                    echo TRUE;
                }else{
                    echo -1;
                }
            }else{ echo FALSE;}
            
        }else {
                    redirect('/login/empresa', 'refresh');
        }
    }    
    
    ///////////////////////////////////////////////////////////////////////////
    
    public function lista_productos_bodega(){
       if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
                  if($query = $this->bodega->lista_productos_bodega(
                      $this->input->post('id_bodega',TRUE)
                  )){
                    echo json_encode($query);
                    }else{
                         echo FALSE;
                    }
        }else {
                    redirect('/login/empresa', 'refresh');
        } 
    }
    
    public function lista_prestamos_bodega(){
       if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
                  if($query = $this->bodega->lista_prestamos_bodega(
                      $this->input->post('id_bodega',TRUE)
                  )){
                    echo json_encode($query);
                    }else{
                         echo FALSE;
                    }
        }else {
                    redirect('/login/empresa', 'refresh');
        } 
    }
    
    public function lista_productos_en_bodega(){
       if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
                  if($query = $this->bodega->lista_productos_en_bodega(
                      $this->input->post('id_bodega',TRUE)
                  )){
                    echo json_encode($query);
                    }else{
                         echo FALSE;
                    }
        }else {
                    redirect('/login/empresa', 'refresh');
        } 
    }
    
    public function chequear_cantidad_articulo(){
       if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Bodegas','bodega',TRUE);
                  if($query = $this->bodega->chequear_cantidad_articulo(
                       str_replace(',','.', str_replace('.','', $this->input->post('cantidad',TRUE))),
                      $this->input->post('id_producto',TRUE),
                      $this->input->post('id_bodega',TRUE)
                  )){
                    echo $query;
                    }else{
                         echo FALSE;
                    }
        }else {
                    redirect('/login/empresa', 'refresh');
        } 
    }
    
    
}
