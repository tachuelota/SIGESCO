<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
            //if($this->session->userdata('sigesco_conectado')){
                $this->load->view('front_end/inicio/login');
            //} else {redirect('/login', 'refresh');}
        }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    //////////////////////////////  F U N C I O N E S    C O M U N I C A C I O N   //////////////////////////////
        public function validar()
        {
            if(strpos($this->input->post('user'), '@')){
               $usuario = $this->input->post('user');
            }
            else{
                $remplazar = array('-','.');
                $auxiliar_usuario = str_replace($remplazar, '' ,$this->input->post('user'));
                $usuario = number_format( substr (intval($auxiliar_usuario), 0 , -1 ) , 0, "", ".") . '-' . substr (intval($auxiliar_usuario), strlen(intval($auxiliar_usuario)) -1 , 1 );
            }
            
            $this->load->model('trabajador_laboral_MO','trabajador',true);
            $query = $this->trabajador->validad_trabajador_laboral($usuario,$this->input->post('pass'));    
                echo $query;
            
        }
    
        public function validar_extranjero()
        {
            $this->load->model('trabajador_laboral_MO','trabajador',true);
            $query = $this->trabajador->validad_trabajador_laboral($this->input->post('user'),$this->input->post('pass'));    
                echo $query;
        }

    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
     //////////////////////////////  F U N C I O N E S    O T R A S   ///////////////////////////////////////////
    
    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
}
