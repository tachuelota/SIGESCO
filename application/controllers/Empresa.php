<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

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
	/*public function index()
	{
			$this->load->view('front_end/header/principal');
			$this->load->view('front_end/menu_top/invitado');
            $this->load->view('front_end/empresa/invitado');
			$this->load->view('front_end/footer/principal');
	}
    */
    
    public function crear()
	{
			$this->load->view('front_end/header/principal');
			$this->load->view('front_end/menu_top/invitado');
            $this->load->model('listas','ciudad',TRUE); 
            $datos['ciudades'] = $this->ciudad->lista_ciudades();
            $this->load->view('front_end/empresa/crear',$datos);
			$this->load->view('front_end/footer/principal');
	}
    
    ///////////////////////////////////////////////////////////////////////////
    
    //////////////////////////////  F U N C I O N E S   //////////////////////////////
    public function crear_empresa_contratista()
	{
        $CODIGO = 'EMP'.date("dmYHis").rand(1, 99);
        $this->load->model('Empresas','empresa',true);
        if($query = $this->empresa->crear_empresa_contratista(
            $CODIGO,
            $this->input->post('nombre_empresa_sigesco',TRUE),
            $this->input->post('razon_social_empresa_sigesco',TRUE),
            $this->input->post('rut_empresa_sigesco',TRUE),
            $this->input->post('sector_empresa_sigesco',TRUE),
            $this->input->post('cantidad_empleados_empresa_sigesco',TRUE),
            $this->input->post('presentacion_empresa_sigesco',TRUE),
            $this->input->post('user_empresa_sigesco',TRUE),
            $this->encryption->encrypt($this->input->post('pass_empresa_sigesco',TRUE)),
            $this->input->post('facebook_empresa_sigesco',TRUE),
            $this->input->post('twitter_empresa_sigesco',TRUE),
            $this->input->post('google_empresa_sigesco',TRUE),
            $this->input->post('linkedin_empresa_sigesco',TRUE),
            $this->input->post('youtube_empresa_sigesco',TRUE),
            $this->input->post('instagram_empresa_sigesco',TRUE),
            $this->input->post('ciudad1_empresa_sigesco',TRUE),
            $this->input->post('direccion1_empresa_sigesco',TRUE),
            $this->input->post('telefono1_empresa_sigesco',TRUE),
            $this->input->post('email1_empresa_sigesco',TRUE)
        )){
            for($i=1;$i<=$this->input->post('cantidad_sucursal_empresa_sigesco',TRUE);$i++){
              $CODIGO_SUC = 'SUC'.date("dmYHis").rand(1, 99);
              
                if($query_suc = $this->empresa->crear_sucursal_empresa_contratista(
                    $CODIGO_SUC,
                    $this->input->post('direccion'.$i.'_empresa_sigesco',TRUE),
                    $this->input->post('telefono'.$i.'_empresa_sigesco',TRUE),
                    $this->input->post('email'.$i.'_empresa_sigesco',TRUE),
                    $query,
                    $this->input->post('ciudad'.$i.'_empresa_sigesco',TRUE)
                    )
                  ){
                    
                }else{
                    $BANDERA = 1;
                }
                
            }
            
            if($BANDERA == 0){
                return TRUE;
            }else{
                return FALSE;
            }
               
        }else{
            return FALSE;
        }
    }
    //////////////////////////////////////////////////////////////////////////////////
    
    
}
