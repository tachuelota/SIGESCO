<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejecutivo extends CI_Controller {

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
    
       public function registro()
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
            } else {redirect('/login/empresa', 'refresh');}
        }
    */   
    
    
    //////////////////////////////  F U N C I O N E S    C O M U N I C A C I O N   //////////////////////////////
        
        public function agregar_lista_ejecutivo(){
           if($this->session->userdata('sigesco_laboral_conectado')){
               $CODIGO = 'LST'.date("dmYHis").rand(1, 99);
                $this->load->model('Ejecutivos','ejecutivos',true);
                if($query = $this->ejecutivos->agregar_lista_ejecutivo(
                    $CODIGO,
                    $this->input->post('nombre_lista',TRUE),
                    $this->input->post('descripcion_lista',TRUE),
                    date("Y-m-d"),
                    $this->session->userdata('sigesco_laboral_id')
                )){
                    
                    $variables = array(
                        $this->input->post('nombre_lista',TRUE),
                        $this->input->post('descripcion_lista',TRUE),
                        date("d-m-Y"),
                        $query
                    );

                    echo json_encode($variables);
                    

                }else{
                    echo FALSE;
                }
            } else {redirect('/login/empresa', 'refresh');}
        }
    
        public function agregar_trabajador_lista(){
           if($this->session->userdata('sigesco_laboral_conectado')){
               $CODIGO = 'LST'.date("dmYHis").rand(1, 99);
                $this->load->model('Ejecutivos','ejecutivos',true);
                if($query = $this->ejecutivos->agregar_trabajador_lista(
                    $this->input->post('id_lista',TRUE),
                    $this->input->post('id_trabajador',TRUE),
                    date("Y-m-d")
                )){
                    echo TRUE;
                }else{
                    echo FALSE;
                }
            } else {redirect('/login/empresa', 'refresh');}
        }
    
        public function lista_trabajadores(){
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
                /*
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                    $this->load->view('back_end/empresa/trabajadores');
                }
                */
                if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                    $this->load->model('listas','trabajador',TRUE); 
                    if($this->input->post('id_lista') != ''){
                        $datos['trabajadores'] = $this->trabajador->lista_ejecutivo_trabajadores($this->input->post('id_lista'));
                        $datos['id_lista'] = $this->input->post('id_lista');
                        $this->load->view('back_end/empresa/lista_trabajadores_ejecutivo',$datos);
                    }else{
                        redirect('/empresa/listas', 'refresh');
                    }

                }
                ///////////////////////////////////////////////////////////////////////////////////
                $this->load->view('back_end/footer/principal',$datos);
            }else {
                    redirect('/login/empresa/empresa', 'refresh');
            }
        }

    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////  F U N C I O N E S    G E N E R A L E S    ///////////////////////////////////
        public function enviar_mensaje_ejecutivo_trabajador(){
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                $BANDERA = 0;
                $this->load->model('Ejecutivos','ejecutivo',true);
                $this->load->model('Listas','lista',true);
                ///////////////////   BUSCAR TRABAJADORES DE LA LISTA (id_lista)   //////////////////////////////
                
                if($query = $this->lista->lista_ejecutivo_trabajadores(
                        $this->input->post('id_lista',TRUE)
                    )){
                    foreach($query as $dato){
                        $CODIGO = 'MJE'.date("dmYHis").rand(1, 99);
                        if($this->ejecutivo->enviar_mensaje_ejecutivo_trabajador(
                            $CODIGO,
                            $this->input->post('titulo',TRUE),
                            $this->input->post('mensaje',TRUE),
                            date('Y-m-d'),
                            date('H:i:s'),
                            $dato->id_trabajador_laboral,
                            $this->session->userdata('sigesco_laboral_id')
                        )){
                          ///////////////// ENVIAR   EMAIL //////////////////////////////
                          ///////////////////////////////////////////////////////////////
                        }else{
                            $BANDERA = 1;
                        }
                    }
                    
                }
                
                /////////////////////////////////////////////////////////////////////////////////////////////////
                    
                    
                    if($BANDERA == 0){
                        echo TRUE;
                    }else{
                        echo FALSE;
                    }
                    
            }else {
                    redirect('/login/empresa/empresa', 'refresh');
            }
        }
    
        public function enviar_mensaje_trabajador(){
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                    $this->load->model('Ejecutivos','ejecutivo',true);
                    $CODIGO = 'MJE'.date("dmYHis").rand(1, 99);
                        if($this->ejecutivo->enviar_mensaje_ejecutivo_trabajador(
                            $CODIGO,
                            $this->input->post('titulo',TRUE),
                            $this->input->post('mensaje',TRUE),
                            date('Y-m-d'),
                            date('H:i:s'),
                            $this->input->post('id_trabajador',TRUE),
                            $this->session->userdata('sigesco_laboral_id')
                        )){
                          ///////////////// ENVIAR   EMAIL //////////////////////////////
                          ///////////////////////////////////////////////////////////////
                            echo TRUE;
                        }else{
                            echo FALSE;
                        }
            }else {
                    redirect('/login/empresa/empresa', 'refresh');
            }
        }
    
        public function solicitar_documento_ejecutivo_lista(){
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                $BANDERA = 0;
                $this->load->model('Ejecutivos','ejecutivo',true);
                $this->load->model('Listas','lista',true);
                ///////////////////   BUSCAR TRABAJADORES DE LA LISTA (id_lista)   //////////////////////////////
                
                if($query = $this->lista->lista_ejecutivo_trabajadores(
                        $this->input->post('id_lista',TRUE)
                    )){
                    foreach($query as $dato){
                        $CODIGO = 'MJE'.date("dmYHis").rand(1, 99);
                        if($this->ejecutivo->enviar_mensaje_ejecutivo_trabajador(
                            $CODIGO,
                            'Solicitud de Documento',
                            $this->session->userdata('sigesco_laboral_nombre')." ".$this->session->userdata('sigesco_laboral_paterno')." de la empresa \"".$this->session->userdata('sigesco_laboral_nombre_empresa')."\" le ha solicitado el siguiente documento \"".$this->input->post('nombre_tipo',TRUE)."\", subalo a través de la Plataforma",
                            date('Y-m-d'),
                            date('H:i:s'),
                            $dato->id_trabajador_laboral,
                            $this->session->userdata('sigesco_laboral_id')
                        )){
                          ///////////////// ENVIAR   EMAIL //////////////////////////////
                          ///////////////////////////////////////////////////////////////
                          
                          ///////////////// CREAR DOCUMENTACION TRABAJADOR //////////////
                            $CODIGO = 'DOCS'.date("dmYHis").rand(1, 99);
                            if($this->ejecutivo->crear_documento_solitado(
                                $CODIGO,
                                $this->input->post('nombre_tipo',TRUE),
                                $this->session->userdata('sigesco_laboral_nombre_empresa'),
                                $dato->id_trabajador_laboral
                            )){
                                ///////////////// ENVIAR   NOTIFICACION ///////////////////////
                                  /*  $CODIGO = 'DOCS'.date("dmYHis").rand(1, 99);
                                    if($this->ejecutivo->crear_documento_solitado(
                                        $CODIGO,
                                        $this->input->post('nombre_tipo',TRUE),
                                        $this->session->userdata('sigesco_laboral_empresa')
                                        $dato->id_trabajador_laboral
                                    )){

                                    }else{
                                        $BANDERA = 1;
                                    }
                                    */
                                ///////////////////////////////////////////////////////////////                                
                            }else{
                                $BANDERA = 1;
                            }
                          ///////////////////////////////////////////////////////////////
                        }else{
                            $BANDERA = 1;
                        }
                    }
                    
                }
                
                /////////////////////////////////////////////////////////////////////////////////////////////////
                    
                    
                    if($BANDERA == 0){
                        echo TRUE;
                    }else{
                        echo FALSE;
                    }
                    
            }else {
                    redirect('/login/empresa/empresa', 'refresh');
            }
        }
    
        public function descargar_documentos(){
            if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
                $this->load->model('Ejecutivos','ejecutivo',true);
                $trozos = explode(",", $this->input->post('id_documentos',TRUE)); 
                
                foreach($trozos as $dato){
                    $query = $this->ejecutivo->recuperar_url($dato);
                    $this->zip->read_file($query,TRUE);
                    $this->zip->archive('archivos/tmp/mis_documentos.zip');
                }
                
                echo base_url()."archivos/tmp/mis_documentos.zip";

            }else {
                redirect('/login/empresa/empresa', 'refresh');
            }        
        }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
