<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

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
        } else {redirect('/login', 'refresh');}
	}
    */
    public function crear(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('productos','producto',TRUE);
            
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/menu_top/ejecutivo');
            }
            //////////////////////////////////////////////////////////////////////
            //////////////////////////////   B O D Y   /////////////////////////////
            $datos['categorias'] = $this->producto->lista_categorias_empresa($this->session->userdata('sigesco_laboral_empresa')); 
            $datos['subcategorias'] = $this->producto->lista_subcategorias_empresa($this->session->userdata('sigesco_laboral_empresa'));
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/producto/crear_producto',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 3){
                $this->load->view('back_end/producto/crear_producto',$datos);
            }
            
            ////////////////////////////////////////////////////////////////////////
			$this->load->view('back_end/footer/principal');
        } else {redirect('/login', 'refresh');}
	}
    
    public function crear_producto(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('productos','producto',TRUE);
            $CODIGO = 'PROD'.date("dmYHis").rand(1, 99);
                  if($query = $this->producto->crear_producto(
                      $CODIGO,
                      $this->input->post('nombre_producto_sigesco',TRUE),
                      $this->input->post('descripcion_producto_sigesco',TRUE),
                      $this->input->post('medida_producto_sigesco',TRUE),
                      $this->input->post('subcategoria_producto_bodega',TRUE),
                      $this->session->userdata('sigesco_laboral_empresa'),
                      $this->input->post('marca_producto_sigesco',TRUE),
                      $this->input->post('modelo_producto_sigesco',TRUE))->row()){
                         $variables = array(
                            TRUE,
                            $this->input->post('nombre_producto_sigesco',TRUE),
                            $query->id_producto
                        );
                      
                        echo json_encode($variables);
                    }else{
                         echo FALSE;
                    }
        }else {
                    redirect('/login/empresa', 'refresh');
        }
    }
    
    public function crear_subcategoria(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('productos','producto',TRUE);
            $CODIGO = 'SUBC'.date("dmYHis").rand(1, 99);
                  if($query = $this->producto->crear_subcategoria(
                      $CODIGO,
                      $this->input->post('nombre_subcategoria',TRUE),
                      $this->input->post('descripcion_subcategoria',TRUE),
                      $this->input->post('id_categoria',TRUE),
                      $this->session->userdata('sigesco_laboral_empresa')
                  )->row()){
                        $variables = array(
                            TRUE,
                            $this->input->post('nombre_subcategoria',TRUE),
                            $query->id_subcategoria
                        );
                      
                        echo json_encode($variables);
                    }else{
                         echo FALSE;
                    }
        }else {
                    redirect('/login/empresa', 'refresh');
        }
    }
    
    public function lista_articulos(){
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                $this->load->model('listas','lista',TRUE);
                $this->load->model('Productos','producto',TRUE);
                $this->load->view('back_end/header/principal');
                //////////////////////////////  M E N U   T O P  /////////////////////////////////
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                    $this->load->view('back_end/menu_top/administrador');
                    $datos['productos'] = $this->producto->lista_productos($this->session->userdata('sigesco_laboral_empresa'));
                    $this->load->view('back_end/producto/lista_productos',$datos);
                }
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                    $datos['productos'] = $this->producto->lista_productos($this->session->userdata('sigesco_laboral_empresa'));
                    $this->load->view('back_end/menu_top/ejecutivo');
                    $this->load->view('back_end/producto/lista_productos',$datos);
                }

                ///////////////////////////////////////////////////////////////////////////////////

                $this->load->view('back_end/footer/principal');
            }else {
                    redirect('/login/empresa', 'refresh');
            }
        }
    
    ///////////////////////////////////////////////////////////////////////////
    
    
    
    
}
