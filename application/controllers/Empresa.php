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
    
    ///////////////////////////////////////////////////  V I S T A S  /////////////////////////////////////////////////
	public function index()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
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
                $this->load->view('back_end/empresa/administrador');
            }
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/empresa/ejecutivo');
            }
            ///////////////////////////////////////////////////////////////////////////////////
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    
    public function trabajadores()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
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
                $this->load->view('back_end/empresa/trabajadores');
            }
            ///////////////////////////////////////////////////////////////////////////////////
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    
    public function ejecutivo()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
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
                $this->load->model('listas','trabajador',TRUE); 
                $datos['trabajadores'] = $this->trabajador->lista_trabajadores_empresa_contratista($this->session->userdata('sigesco_laboral_id'));
                $this->load->view('back_end/empresa/crear_ejecutivo',$datos);
            }
            /*
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/empresa/trabajadores_interno');
            }
            */
            ///////////////////////////////////////////////////////////////////////////////////
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
        $BANDERA = 0;
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
            
            ////////////////////////  S U C U R S A L E S   ////////////////////////////////
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
            ////////////////////////////////////////////////////////////////////////////////////
            ////////////////////////  L O G O   Y   P O R T A D A   ////////////////////////////
            $CODIGO_LOGO = 'Logo_'.$query;
            $CODIGO_PORTADA = 'Portada_'.$query;
            $uploadDir = 'archivos/Empresa_'.$query;

            if (!file_exists($uploadDir)) {
                       mkdir($uploadDir, 0777, true);
            }
            if(isset($_FILES['archivo_logo']['tmp_name'])){
                    $trozos = explode(".", $_FILES['archivo_logo']['name']); 
                    $extension = end($trozos);
                    $tmpFile = $_FILES['archivo_logo']['tmp_name'];
                    $filename = $uploadDir."/".$CODIGO_LOGO.".".$extension;
                    move_uploaded_file($tmpFile,$filename);
                    
                    $this->empresa->actualizar_logo_empresa_contratista($filename,$query);
            }
            
            if(isset($_FILES['archivo_portada']['tmp_name'])){
                    $trozos = explode(".", $_FILES['archivo_portada']['name']); 
                    $extension = end($trozos);
                    $tmpFile = $_FILES['archivo_portada']['tmp_name'];
                    $filename = $uploadDir."/".$CODIGO_PORTADA.".".$extension;
                    move_uploaded_file($tmpFile,$filename);
                    
                    $this->empresa->actualizar_portada_empresa_contratista($filename,$query);
            }
            
            ////////////////////////////////////////////////////////////////////////////////////
            if($BANDERA == 0){
                echo TRUE;
            }else{
                echo FALSE;
            }
               
        }else{
            echo FALSE;
        }
    }
    
     public function crear_ejecutivo_empresa_contratista()
	{
        $CODIGO = 'EJE'.date("dmYHis").rand(1, 99);
        $AUX_PASS = str_replace('-','', $this->input->post('run_ejecutivo_sigesco_laboral'));
        $AUX_PASS = str_replace('.','',$AUX_PASS);
        $PASSWORD =substr($AUX_PASS, 0, 4);  /////// PASSWORD INICIO EJECUTIVO, PRIMEROS 4 DIGITOS DEL RUT //////
        $this->load->model('Empresas','empresa',true);
        if($query = $this->empresa->crear_ejecutivo_empresa_contratista(
            $CODIGO,
            $this->input->post('nombre_ejecutivo_sigesco_laboral',TRUE),
            $this->input->post('run_ejecutivo_sigesco_laboral',TRUE),
            $this->input->post('telefono_ejecutivo_sigesco_laboral',TRUE),
            $this->input->post('email_ejecutivo_sigesco_laboral',TRUE),
            $this->input->post('tipo_ejecutivo_sigesco_laboral',TRUE),
            $this->input->post('sucursal_ejecutivo_sigesco_laboral',TRUE),
            $this->encryption->encrypt($PASSWORD)
        )){
            $datos = explode(",", $query->datos);
            ////////////////////////  F O T O   D E   P E R F I L   ////////////////////////////
            $CODIGO_LOGO = 'Perfil_'.$datos[1];
            $uploadDir = 'archivos/Empresa_'.$datos[2].'/Ejecutivo_'.$datos[0];

            if (!file_exists($uploadDir)) {
                       mkdir($uploadDir, 0777, true);
            }
            if(isset($_FILES['archivo_logo']['tmp_name'])){
                    $trozos = explode(".", $_FILES['archivo_logo']['name']); 
                    $extension = end($trozos);
                    $tmpFile = $_FILES['archivo_logo']['tmp_name'];
                    $filename = $uploadDir."/".$CODIGO_LOGO.".".$extension;
                    move_uploaded_file($tmpFile,$filename);
                    
                    $this->empresa->actualizar_perfil_ejecutivo($filename,$datos[0]);
                    $this->session->set_userdata('sigesco_laboral_foto',$filename);
            }else{
                $filename = 'img/content/upload-image.jpg';
            }
            
            
                $variables = array(
                    TRUE,
                    $datos[0],
                    $datos[1],
                    $datos[2],
                    $this->input->post('nombre_ejecutivo_sigesco_laboral',TRUE),
                    $this->input->post('run_ejecutivo_sigesco_laboral',TRUE),
                    $this->input->post('telefono_ejecutivo_sigesco_laboral',TRUE),
                    $this->input->post('email_ejecutivo_sigesco_laboral',TRUE),
                    $this->input->post('nombre_tipo_ejecutivo_sigesco_laboral',TRUE),
                    $this->input->post('nombre_sucursal_ejecutivo_sigesco_laboral',TRUE),
                    $filename
                );

                    echo json_encode($variables);
            
            ////////////////////////////////////////////////////////////////////////////////////
               
        }else{
            echo FALSE;
        }
    }

    
    public function subir_logo(){
        $CODIGO = date("dmYHis").rand(1, 99);
        $uploadDir = 'archivos/tmp';
            if(isset($_FILES['archivo_logo']['tmp_name'])){
                $trozos = explode(".", $_FILES['archivo_logo']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['archivo_logo']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                echo $filename;
            }else{
                echo FALSE;
            }
    }
    
    public function subir_portada(){
        $CODIGO = date("dmYHis").rand(1, 99);
        $uploadDir = 'archivos/tmp';
            if(isset($_FILES['archivo_portada']['tmp_name'])){
                $trozos = explode(".", $_FILES['archivo_portada']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['archivo_portada']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                echo $filename;
            }else{
                echo FALSE;
            }
    }
    
    //////////////////////////////////////////////////////////////////////////////////
    
    
}
