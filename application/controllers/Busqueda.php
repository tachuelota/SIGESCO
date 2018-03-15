<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

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
			$this->load->view('front_end/header/principal');
			$this->load->view('front_end/menu_top/invitado');
            $this->load->view('front_end/contacto/invitado');
			$this->load->view('front_end/footer/principal');
	}
    */
    ///////////////////////////////////////////////////////////////////////////
    
    public function trabajadores()
	{
            if($this->input->post('palabra_busqueda',TRUE) != ''){
                $datos['palabra_busqueda'] = $this->input->post('palabra_busqueda',TRUE);}
            else{$datos['palabra_busqueda'] = '';}
        
            if($this->input->post('ciudad_busqueda',TRUE) != ''){
                $datos['ciudad_busqueda'] = $this->input->post('ciudad_busqueda',TRUE);}
            else{$datos['ciudad_busqueda'] = '';}
            $this->load->model('listas','lista',TRUE);
            $datos['trabajadores'] = $this->lista->lista_trabajadores($this->input->post('palabra_busqueda',TRUE), $this->input->post('ciudad_busqueda_id',TRUE));
        
			$this->load->view('front_end/header/principal');
			$this->load->view('front_end/menu_top/invitado');
            $this->load->view('front_end/busqueda/trabajadores',$datos);
			$this->load->view('front_end/footer/principal');
	}
    
    
    //////////////////////////////  F U N C I O N E S   //////////////////////////////
    
    
    
    //////////////////////////////////////////////////////////////////////////////////
    
    
}
