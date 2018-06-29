<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
                $this->load->view('front_end/header/principal');
                $this->load->view('front_end/menu_top/invitado');

                $this->load->model('listas','ciudad',TRUE); 
                $datos['ciudades'] = $this->ciudad->lista_ciudades();

                $this->load->view('front_end/inicio/invitado',$datos);

                $this->load->view('front_end/footer/principal');
        }
    
     /*   public function registro()
        {
            header('Content-Type: text/html; charset=UTF-8');
            if($this->session->userdata('sigesco_laboral_conectado')){
                $codigo = $this->input->get('token',FALSE);
                $codigo = str_replace('|','+',$codigo);
                $this->load->model('trabajador_laboral_MO','trabajador',true);
                $this->trabajador->activar_trabajador_laboral(
                            $codigo
                );
            $this->load->view('front_end/inicio/registro');
            } else {redirect('/login', 'refresh');}
        }
    */
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    //////////////////////////////  F U N C I O N E S    C O M U N I C A C I O N   //////////////////////////////
        
        public function registro_trabajador_laboral()
        {
           // if($this->session->userdata('sigesco_conectado')){
                $CODIGO = date('dmYHis').rand(1,1000);
                        //$letras1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T');
                        //$letras2 = array('K','L','M','N','O','P','Q','R','S','T');

                        //$array_anno = str_split(date("y"));
                        //$array_hora = str_split(date("H"));
                        //$array_minuto = str_split(date("i"));

                        //$ANNO = $letras1[$array_anno[0]].$letras1[$array_anno[1]];
                        //$HORA = $letras2[$array_hora[0]].$letras2[$array_hora[1]];
                        //$MINUTO = $letras2[$array_minuto[0]].$letras2[$array_minuto[1]];

                        //$DIA = date("d")+rand(1,68);

                        //$ALEATORIO = rand(0,9).$letras1[rand(0,19)];

                        /////////// F O R M U L A   D E   P A S S W O R D  = MesAñoDiaSegundoHoraMinutosAleatorio (MAS-SHM-Aleatorio) ///////////
                        $password =  $this->input->post('pass_sigesco_laboral',TRUE);
                        $enc_password = $this->encryption->encrypt($password);
                        ////////////////////////////////////////////////////////////////////////////////////////
            
			    $this->load->model('trabajador_laboral_MO','trabajador',TRUE);
                $registro_trabajador_laboral = $this->trabajador->registro_trabajador_laboral(
                        $this->input->post('nombre_sigesco_laboral',TRUE),
                        $CODIGO,
                        $this->input->post('paterno_sigesco_laboral',TRUE),
                        $this->input->post('run_sigesco_laboral',TRUE),
                        $this->input->post('ciudad_sigesco_laboral',TRUE),
                        $this->input->post('celular_sigesco_laboral',TRUE),
                        $this->input->post('email_sigesco_laboral',TRUE),
                        $enc_password
            ); 

                if($registro_trabajador_laboral == TRUE){
                ///////////////////   E N V I A R   C O R R E O   A C T I V A C I O N   /////////////    
                    $config = Array(
                        'protocol' => 'sendmail',
                        'mailtype' => 'html',
                        'smtp_host' => 'mail.sigesco.cl', //your SMTP host
                        'smtp_port' => 26,
                        'smtp_user' => 'no-responder@sigesco.cl', //your SMTP email address
                        'smtp_pass' => 'system2012', //your SMTP email password
                        'charset' => 'utf-8',
                        'wordwrap' => TRUE
                    );
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->set_header('MIME-Version', '1.0; charset=utf-8'); //must add this line
                    $this->email->set_header('Content-type', 'text/html'); //must add this line

                    $this->email->from('no-responder@sigesco.cl', 'SIGESCO - Bienvenido', 'contacto@sigesco.cl');
                    $this->email->to($this->input->post('email_sigesco_laboral'));
                    $this->email->subject('Bienvenido a SIGESCO');
                    //$body = $this->load->view('emails/bienvenida_cliente.php',$data,TRUE);
                    
                    $datos['nombre'] = $this->input->post('nombre_sigesco_laboral',TRUE);
                    $datos['email'] = $this->input->post('email_sigesco_laboral',TRUE);
                    $datos['password'] = $password;
                    $url = $this->encryption->encrypt($CODIGO);
                    $url = str_replace('+','|',$url);
                    $datos['url'] = base_url().'inicio/registro?token='.$url;
                    
                    $mensaje = $this->load->view('emails/email_bienvenida',$datos,true);
                    
                    $this->email->message($mensaje);   

                    $this->email->send();
                    
                    echo TRUE;
                ////////////////////////////////////////////////////////////////////////    
                }else{
                    if($registro_trabajador_laboral == FALSE){
                        echo FALSE;
                    }else{
                        echo $registro_trabajador_laboral;
                    }
                }
                
                
                
            //} else {redirect('/login', 'refresh');}
        }
    
    
        public function agregar_palabra(){
                        
            $palabras = explode(",", $this->session->userdata('palabra_busqueda_sigesco'));
            array_push($palabras,$this->input->post('palabra_clave',TRUE));
            $this->session->set_userdata('palabra_busqueda_sigesco',implode(',',array_unique($palabras)));
            
            if($this->session->userdata('palabra_busqueda_sigesco')){
                echo TRUE;
            }else{
                echo FALSE;
            }
        }
        
        public function eliminar_palabra(){
                        
            $palabras = explode(",", $this->session->userdata('palabra_busqueda_sigesco'));
            unset($palabras[array_search($this->input->post('palabra_clave',TRUE),$palabras,true)]);
            $this->session->set_userdata('palabra_busqueda_sigesco',implode(',',array_unique($palabras)));
            
            if($this->session->userdata('palabra_busqueda_sigesco')){
                echo TRUE;
            }else{
                echo FALSE;
            }
        }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
     //////////////////////////////  F U N C I O N E S    O T R A S   ///////////////////////////////////////////
    
    
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
}
