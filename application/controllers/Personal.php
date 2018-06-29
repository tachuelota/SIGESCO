<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {

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
    
    ////////////////////////////////   F U N C I O N E S   D E    V I S T A S  /////////////////////////////////
      /*   public function index()
        {
                $this->load->view('front_end/header/principal');
                $this->load->view('front_end/menu_top/invitado');

                $this->load->model('listas','ciudad',TRUE); 
                $datos['ciudades'] = $this->ciudad->lista_ciudades();

                $this->load->view('front_end/inicio/invitado',$datos);

                $this->load->view('front_end/footer/principal');
        }
    */   
    
    
    //////////////////////////////  F U N C I O N E S    C O M U N I C A C I O N   //////////////////////////////
    
    public function lista_personal(){
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                $this->load->model('listas','lista',TRUE);
                $this->load->model('personal_MO','personal',TRUE);
                $this->load->view('back_end/header/principal');
                //////////////////////////////  M E N U   T O P  /////////////////////////////////
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                    $this->load->view('back_end/menu_top/administrador');
                }
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                    $datos['tipo_documentos'] = $this->lista->lista_documentacion_empresa($this->session->userdata('sigesco_laboral_empresa'));
                    $this->load->view('back_end/menu_top/ejecutivo');
                }
                ///////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////  B O D Y  /////////////////////////////////////////
                
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                    $datos['trabajador_personal'] = $this->personal->lista_personal($this->session->userdata('sigesco_laboral_empresa'));
                    $this->load->view('back_end/personal/lista_personal',$datos);
                }
                /*
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                    $this->load->view('back_end/empresa/trabajadores');
                }
                */
                ///////////////////////////////////////////////////////////////////////////////////
                $this->load->view('back_end/footer/principal');
            }else {
                    redirect('/login/empresa', 'refresh');
            }
        }
        
    public function lista_privilegios(){
        $this->load->model('Personal_MO','personal',true);
        if($query = $this->personal->lista_privilegios(
            $this->input->post('id_trabajador',TRUE),
            $this->session->userdata('sigesco_laboral_empresa'))){
            echo $query;
        }else{
            echo FALSE;
        }
    }
    
    public function agregar_modulo(){
        $this->load->model('Personal_MO','personal',true);
        if($query = $this->personal->agregar_modulo(
            $this->input->post('id_modulo',TRUE),
            $this->input->post('id_trabajador',TRUE))){
            echo $query;
        }else{
            echo FALSE;
        }
    }
    
    public function eliminar_modulo(){
        $this->load->model('Personal_MO','personal',true);
        if($query = $this->personal->eliminar_modulo(
            $this->input->post('id_modulo',TRUE),
            $this->input->post('id_trabajador',TRUE))){
            echo $query;
        }else{
            echo FALSE;
        }
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
