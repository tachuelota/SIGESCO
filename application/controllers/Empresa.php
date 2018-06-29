<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//////////////////////////////////////////////////////   F U N C I O N E S   /////////////////////////////////////////////////////
    function formatSizeUnits($bytes){
        if ($bytes >= 1073741824){$bytes = number_format($bytes / 1073741824, 2,',','.') . ' GB';}
            elseif ($bytes >= 1048576){$bytes = number_format($bytes / 1048576, 2,',','.') . ' MB';}
                elseif ($bytes >= 1024){$bytes = number_format($bytes / 1024, 2,',','.') . ' KB';}
                    elseif ($bytes > 1){$bytes = $bytes . ' Bytes';}
                        elseif ($bytes == 1){$bytes = $bytes . ' Byte';}
                            else{ $bytes = '0 Bytes';}
                                return $bytes;
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
	public function index(){
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
    
    public function trabajadores(){
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
                $this->load->model('listas','trabajador',TRUE); 
                $datos['trabajadores'] = $this->trabajador->lista_trabajadores_ejecutivo($this->session->userdata('sigesco_laboral_id'));
                $this->load->view('back_end/empresa/trabajadores',$datos);
            }
            ///////////////////////////////////////////////////////////////////////////////////
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }        
	}
    
    public function trabajador(){
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
                $this->load->model('listas','trabajador',TRUE); 
                if($this->input->post('id_trabajador') != ''){
                    $datos['documentos'] = $this->trabajador->lista_documentos_trabajador($this->input->post('id_trabajador'));
                    $datos['nombre'] = $this->input->post('nombre_trabajador');
                    $datos['id_trabajador_busqueda'] = $this->input->post('id_trabajador');
                    $this->load->view('back_end/empresa/trabajador',$datos);
                }else{
                    redirect('/empresa/trabajadores', 'refresh');
                }
                
            }
            ///////////////////////////////////////////////////////////////////////////////////
            $this->load->view('back_end/footer/principal');
        }else {
                redirect('/login/empresa', 'refresh');
        }
    }
    
    public function crear_ejecutivo(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
            $this->load->model('listas','trabajador',TRUE);
            $this->load->model('Empresas','empresa',TRUE);
            //////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $datos['sucursales'] = $this->trabajador->lista_sucursales($this->session->userdata('sigesco_laboral_empresa'));
                $datos['trabajadores'] = $this->trabajador->lista_trabajadores_empresa_contratista($this->session->userdata('sigesco_laboral_id'));
                $datos['ciudades'] = $this->trabajador->lista_ciudades();
                $datos['tipo_ejecutivos'] = $this->empresa->lista_tipo_ejecutivos();
                $this->load->view('back_end/empresa/crear_ejecutivo',$datos);
            }
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/ejecutivo');
            }
            ///////////////////////////////////////////////////////////////////////////////////
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
    
    public function crear_faena(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
            $this->load->model('listas','lista',TRUE);
            $this->load->model('Empresas','empresa',TRUE);
            //////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $datos['mandantes'] = $this->empresa->lista_empresas_mandantes($this->session->userdata('sigesco_laboral_empresa'));
                $datos['ciudades'] = $this->lista->lista_ciudades();
                $this->load->view('back_end/empresa/crear_faena_minera',$datos);
            }
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/administrador');
                $datos['mandantes'] = $this->empresa->lista_empresas_mandantes($this->session->userdata('sigesco_laboral_empresa'));
                $datos['ciudades'] = $this->lista->lista_ciudades();
                $this->load->view('back_end/empresa/crear_faena_minera',$datos);
            }
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    
    public function crear_mandante(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
            $this->load->model('listas','lista',TRUE);
            //////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $datos['ciudades'] = $this->lista->lista_ciudades();
                $this->load->view('back_end/empresa/crear_mandante',$datos);
            }
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/administrador');
                $datos['ciudades'] = $this->lista->lista_ciudades();
                $this->load->view('back_end/empresa/crear_mandante',$datos);
            }
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////   F U N C I O N A L I D A D E S   //////////////////////////////////////////
    public function listas(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('listas','lista',TRUE);
			$this->load->view('back_end/header/principal');
            //////////////////////////////  M E N U   T O P  /////////////////////////////////
            /*
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->model('listas','lista',TRUE);
                $datos['listas'] = $this->lista->lista_listas_empresa();
                $this->load->view('back_end/menu_top/administrador');
            }
            */
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->view('back_end/menu_top/ejecutivo');
            }
            
            ///////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////  B O D Y  /////////////////////////////////////////
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/empresa/listas');
            }
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                
                $datos['listas'] = $this->lista->lista_listas_ejecutivo($this->session->userdata('sigesco_laboral_id'));
                $this->load->view('back_end/empresa/listas',$datos);
            }
            ///////////////////////////////////////////////////////////////////////////////////
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    
    public function documentos(){
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
            //////////////////////////////  B O D Y  /////////////////////////////////////////
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->model('listas','lista',TRUE);
                $datos['documentos'] = $this->lista->lista_documentacion_empresa($this->session->userdata('sigesco_laboral_empresa'));
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/empresa/lista_documentos',$datos);
            }
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->model('listas','lista',TRUE);
                $datos['documentos'] = $this->lista->lista_documentacion_empresa($this->session->userdata('sigesco_laboral_empresa'));
                $this->load->view('back_end/menu_top/ejecutivo');
                $this->load->view('back_end/empresa/lista_documentos',$datos);
            }
            ///////////////////////////////////////////////////////////////////////////////////
            
			$this->load->view('back_end/footer/principal');
        }else {
            redirect('/login/empresa', 'refresh');
        }
	}
    
    function lista_sucursales($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM sigesco_laborum.sucursal_empresa_contratista
                    WHERE empresa_contratista_id_empresa_contratista = ".$id_empresa."
                    ORDER BY (nombre_sucursal_empresa_contratista) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////// E D I T A R   P E R F I L   ///////////////////////////////////
    public function editar_perfil()
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
                //$this->load->model('Empresas','trabajador',TRUE); 
                //$datos['datos'] = $this->trabajador->datos_ejecutivo($this->session->userdata('sigesco_laboral_id'));
                //$this->load->view('back_end/empresa/editar_ejecutivo',$datos);
            }
            
            if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 2){
                $this->load->model('Empresas','trabajador',TRUE); 
                $variables['datos'] = $this->trabajador->datos_ejecutivo($this->session->userdata('sigesco_laboral_id'));
                //var_dump(array($variables['datos']));
                $this->load->view('back_end/empresa/editar_perfil',$variables);
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
    ///////////////////////////////////////////////////////////////////////////////////
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function crear(){
			$this->load->view('front_end/header/principal');
			$this->load->view('front_end/menu_top/invitado');
            $this->load->model('listas','ciudad',TRUE); 
            $datos['ciudades'] = $this->ciudad->lista_ciudades();
            $this->load->view('front_end/empresa/crear',$datos);
			$this->load->view('front_end/footer/principal');
	}
    
    public function crear_sucursal()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('listas','ciudad',TRUE);
            $datos['ciudades'] = $this->ciudad->lista_ciudades();
			$this->load->view('back_end/header/principal');
			//////////////////////////////  M E N U   T O P  /////////////////////////////////
			if($this->session->userdata('sigesco_laboral_tipo_trabajador') == 1){
                $this->load->view('back_end/menu_top/administrador');
                $this->load->view('back_end/empresa/crear_sucursal',$datos);
            }
            
            //////////////////////////////////////////////////////////////////////

			$this->load->view('back_end/footer/principal');
        } else {redirect('/login', 'refresh');}
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
                    $this->input->post('ciudad'.$i.'_buscar_empresa_sigesco',TRUE),
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
    
    public function crear_sucursal_empresa_contratista()
	{
        $this->load->model('Empresas','empresa',true);
        ////////////////////////  S U C U R S A L E S   ////////////////////////////////
        $CODIGO = 'SUC'.date("dmYHis").rand(1, 99);
              
                if($query_suc = $this->empresa->crear_sucursal_empresa_contratista(
                    $CODIGO,
                    $this->input->post('nombre_sucursal_sigesco',TRUE),
                    $this->input->post('direccion_sucursal_sigesco',TRUE),
                    $this->input->post('telefono_sucursal_sigesco',TRUE),
                    $this->input->post('email_sucursal_sigesco',TRUE),
                    $this->session->userdata('sigesco_laboral_empresa'),
                    $this->input->post('ciudad_sucursal_sigesco',TRUE)
                    )
                  ){
                    echo TRUE;
                }else{
                    echo FALSE;
                }
                
            ////////////////////////////////////////////////////////////////////////////////////
    }
    
    public function crear_sucursal_empresa_contratista_modal()
	{
        $this->load->model('Empresas','empresa',true);
        ////////////////////////  S U C U R S A L E S   ////////////////////////////////
        $CODIGO = 'SUC'.date("dmYHis").rand(1, 99);
              
                if($query_suc = $this->empresa->crear_sucursal_empresa_contratista(
                    $CODIGO,
                    $this->input->post('nombre_sucursal_sigesco',TRUE),
                    $this->input->post('direccion_sucursal_sigesco',TRUE),
                    $this->input->post('telefono_sucursal_sigesco',TRUE),
                    $this->input->post('email_sucursal_sigesco',TRUE),
                    $this->session->userdata('sigesco_laboral_empresa'),
                    $this->input->post('ciudad_sucursal_sigesco',TRUE)
                    )
                  ){
                    echo $query_suc;
                }else{
                    echo FALSE;
                }
                
            ////////////////////////////////////////////////////////////////////////////////////
    }
    
    public function crear_faena_minera()
	{
        $this->load->model('Empresas','empresa',true);
        ////////////////////////  S U C U R S A L E S   ////////////////////////////////
        $CODIGO = 'FM'.date("dmYHis").rand(1, 99);
              
                if($query_faena_minera = $this->empresa->crear_faena_minera(
                    $CODIGO,
                    $this->input->post('nombre_faena_minera_sigesco',TRUE),
                    $this->input->post('mandante_faena_minera_bodega',TRUE)
                    )
                  ){
                    echo $query_faena_minera;
                }else{
                    echo FALSE;
                }
                
            ////////////////////////////////////////////////////////////////////////////////////
    }
    
    public function crear_empresa_mandante()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Empresas','empresa',true);
            ////////////////////////  S U C U R S A L E S   ////////////////////////////////
            $CODIGO = 'FM'.date("dmYHis").rand(1, 99);

                    if($query_empresa_mandante = $this->empresa->crear_empresa_mandante(
                        $CODIGO,
                        $this->input->post('nombre_empresa_mandante_sigesco',TRUE),
                        $this->input->post('nombre_corto_empresa_mandante_sigesco',TRUE),
                        $this->input->post('direccion_empresa_mandante_sigesco',TRUE),
                        $this->input->post('rut_empresa_mandante_sigesco',TRUE),
                        $this->input->post('telefono_empresa_mandante_sigesco',TRUE),
                        $this->input->post('email_empresa_mandante_sigesco',TRUE),
                        $this->input->post('ciudad_empresa_mandante_sigesco',TRUE),
                        $this->session->userdata('sigesco_laboral_empresa')
                        )
                      ){
                        echo $query_empresa_mandante;
                    }else{
                        echo FALSE;
                    }
        }else {
            redirect('/login/empresa', 'refresh');
        }
                ////////////////////////////////////////////////////////////////////////////////////
    }
    
    public function crear_bodega()
	{
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
            $this->load->model('Empresas','empresa',true);
            ////////////////////////  S U C U R S A L E S   ////////////////////////////////
            if($this->input->post('codigo_bodega_sigesco',TRUE) == ''){$CODIGO = 'BOD'.date("dmYHis").rand(1, 99);} else{$CODIGO = $this->input->post('codigo_bodega_sigesco',TRUE);}

                    if($query_bodega = $this->empresa->crear_bodega(
                        $CODIGO,
                        $this->input->post('nombre_bodega_sigesco',TRUE),
                        $this->input->post('descripcion_bodega_sigesco',TRUE),
                        $this->session->userdata('sigesco_laboral_empresa')
                        )
                      ){
                        echo $query_bodega;
                    }else{
                        echo FALSE;
                    }
                ////////////////////////////////////////////////////////////////////////////////////
        }else {
            redirect('/login/empresa', 'refresh');
        }
    }
    
    
    public function crear_ejecutivo_empresa_contratista(){
        $CODIGO = 'EJE'.date("dmYHis").rand(1, 99);
        $REMPLAZAR = array(".",",","-","_","/","[","]");
        $AUX_PASS = str_replace('-','', $this->input->post('run_ejecutivo_sigesco_laboral'));
        $AUX_PASS = str_replace('.','',$AUX_PASS);
        $PASSWORD =substr($AUX_PASS, 0, 4);  /////// PASSWORD INICIO EJECUTIVO, PRIMEROS 4 DIGITOS DEL RUT //////
        $this->load->model('Empresas','empresa',true);
        if($query = $this->empresa->crear_ejecutivo_empresa_contratista(
            $CODIGO,
            $this->input->post('nombre_ejecutivo_sigesco_laboral',TRUE),
            str_replace($REMPLAZAR,"", $this->input->post('run_ejecutivo_sigesco_laboral',TRUE)),
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
    
    public function subir_documento_trabajador(){
        $CODIGO = date("dmYHis").rand(1, 99);
        $uploadDir = 'archivos/tmp';
            if(isset($_FILES['documento_trabajador']['tmp_name'])){
                $trozos = explode(".", $_FILES['documento_trabajador']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['documento_trabajador']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                
                if(($extension == 'jpg') || ($extension == 'JPG') || ($extension == 'png')|| ($extension == 'PNG')){
                   echo json_encode(array('1',base_url().$filename)); 
                }
                
                if(($extension == 'pdf') || ($extension == 'PDF')){
                     echo json_encode(array('2',base_url().$filename));
                }
            }else{
                echo FALSE;
            }
    }
    
    public function agregar_documento_trabajador(){
        $CODIGO = 'DOC_'.date("dmYHis").rand(1, 99);
        $uploadDir = 'archivos/'.$this->input->post('id_trabajador_busqueda',TRUE);
            if(isset($_FILES['documento_trabajador']['tmp_name'])){
                $trozos = explode(".", $_FILES['documento_trabajador']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['documento_trabajador']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                if(move_uploaded_file($tmpFile,$filename)){
                    ////////  A G R E G A R   E N   B A S E   D E   D A T O S   ///////////
                    $this->load->model('Empresas','empresa',true);
                    if($query = $this->empresa->agregar_documento_trabajador(
                        $CODIGO,
                        $this->input->post('titulo_documento_trabajador',TRUE),
                        $filename,
                        $this->input->post('id_trabajador_busqueda',TRUE),
                        '3'
                    )){
                        if(($extension == 'jpg') || ($extension == 'JPG') || ($extension == 'png')|| ($extension == 'PNG')){
                            echo json_encode(array('1',$this->input->post('titulo_documento_trabajador',TRUE),base_url().$filename,date('d-m-Y'),formatSizeUnits($_FILES['documento_trabajador']['size']))); 
                        }

                        if(($extension == 'pdf') || ($extension == 'PDF')){
                             echo json_encode(array('2',$this->input->post('titulo_documento_trabajador',TRUE),base_url().$filename,date('d-m-Y'),formatSizeUnits($_FILES['documento_trabajador']['size'])));
                        }
                        
                        if(($extension == 'doc') || ($extension == 'docx')){
                             echo json_encode(array('3',$this->input->post('titulo_documento_trabajador',TRUE),base_url().$filename,date('d-m-Y'),formatSizeUnits($_FILES['documento_trabajador']['size'])));
                        }
                        
                    }
                    ///////////////////////////////////////////////////////////////////////
                }else{
                    echo FALSE;
                }
                
            }else{
                echo FALSE;
            }
    }
    
    public function agregar_tipo_documento_empresa(){
        $CODIGO = 'EDOC_'.date("dmYHis").rand(1, 99);
        ////////  A G R E G A R   E N   B A S E   D E   D A T O S   ///////////
        $this->load->model('Empresas','empresa',true);
        $hora = date('H:i:s');
        if($query = $this->empresa->agregar_tipo_documento_empresa(
            $CODIGO,
            $this->input->post('titulo_documento_trabajador',TRUE),
            $this->input->post('descripcion_documento_trabajador',TRUE),
            date('Y-m-d'),
            $hora,
            $this->session->userdata('sigesco_laboral_empresa')
        )){
            $variables = array(
                $this->input->post('titulo_documento_trabajador',TRUE),
                $this->input->post('descripcion_documento_trabajador',TRUE),
                date('d-m-Y'),
                $hora,
                $query
            );  
            
            echo json_encode($variables);
            
        }else{
            echo FALSE;
        }
        ///////////////////////////////////////////////////////////////////////
    }
    
    //////////////////////////////////////////////////////////////////////////////////
    
}
