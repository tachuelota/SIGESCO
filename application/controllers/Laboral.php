<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboral extends CI_Controller {

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
	public function index()
	{
        //echo "<script>alert('".$this->session->userdata('sigesco_laboral_conectado')."');</script>";
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
			$this->load->view('back_end/menu_top/trabajador_laboral');
            $this->load->model('Trabajador_laboral_MO','trabajador',TRUE);
            $this->load->model('listas','lista',TRUE);
            $datos['ciudades'] = $this->lista->lista_ciudades();
            $datos['conocimientos'] = $this->lista->lista_conocimiento();
            $datos['instituciones_basica'] = $this->lista->lista_instituciones_basicas();
            $datos['instituciones_medias'] = $this->lista->lista_instituciones_medias();
            $datos['educaciones_basicas'] = $this->lista->lista_educacion_basica($this->session->userdata('sigesco_laboral_id'));
            $datos['educaciones_medias'] = $this->lista->lista_educacion_media($this->session->userdata('sigesco_laboral_id'));
            $datos['educaciones_universitarias'] = $this->lista->lista_educacion_universitaria($this->session->userdata('sigesco_laboral_id'));
            $datos['educaciones_posteriores'] = $this->lista->lista_educacion_posterior($this->session->userdata('sigesco_laboral_id'));
            $datos['perfil'] = $this->trabajador->datos_trabajador_laboral($this->session->userdata('sigesco_laboral_id'));
            $datos['experiencias_laborales'] = $this->trabajador->experiencia_laboral($this->session->userdata('sigesco_laboral_id'));
            $datos['conocimientos_trabajador'] = $this->trabajador->conocimientos_trabajador($this->session->userdata('sigesco_laboral_id'));
            $this->load->view('back_end/laboral/trabajador_laboral',$datos);
			$this->load->view('back_end/footer/principal');
        } else {redirect('/login', 'refresh');}
	}
    
    ///////////////////////////////////////////////////////////////////////////
    
    //////////////////////////////  F U N C I O N E S   //////////////////////////////
    
    
    
    //////////////////////////////////////////////////////////////////////////////////
    
    
}
