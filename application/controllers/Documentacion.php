<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentacion extends CI_Controller {

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
        public function index()
        {
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                $this->load->model('listas','lista',TRUE);
                $this->load->view('back_end/header/principal');
                //////////////////////////////  M E N U   T O P  /////////////////////////////////
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                    $this->load->view('back_end/menu_top/administrador');
                }
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                    $this->load->view('back_end/menu_top/ejecutivo');
                }
                ///////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////  B O D Y  /////////////////////////////////////////
                
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                    $datos['documentos'] = $this->lista->lista_documentos_ejecutivo($this->session->userdata('sigesco_laboral_id'));
                    $this->load->view('back_end/ejecutivo/documentacion',$datos);
                }
                
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                    $datos['documentos'] = $this->lista->lista_documentos_ejecutivo($this->session->userdata('sigesco_laboral_id'));
                        
                    $this->load->view('back_end/ejecutivo/documentacion',$datos);
                }
                ///////////////////////////////////////////////////////////////////////////////////
                $this->load->view('back_end/footer/principal');
            }else {
                    redirect('/login/empresa', 'refresh');
            }
        }

    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    
}
