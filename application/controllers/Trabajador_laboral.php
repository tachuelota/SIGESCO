<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajador_laboral extends CI_Controller {

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
        if($this->session->userdata('sigesco_laboral_conectado') == TRUE){
			$this->load->view('back_end/header/principal');
			$this->load->view('back_end/menu_top/trabajador_laboral');
            $this->load->model('trabajador_laboral','trabajador',TRUE);
            $this->load->model('listas','ciudad',TRUE); 
            $datos['ciudades'] = $this->ciudad->lista_ciudades();
            $datos['perfil'] = $this->trabajador->datos_trabajador_laboral($this->session->userdata('sigesco_laboral_id'));
            $this->load->view('back_end/laboral/trabajador_laboral',$datos);
			$this->load->view('back_end/footer/principal');
        } else {redirect('/login', 'refresh');}
	}*/
    
    ///////////////////////////////////////////////////////////////////////////
    
    //////////////////////////////  F U N C I O N E S   //////////////////////////////
    
    public function modificar_trabajador_laboral(){
        $this->load->model('Trabajador_laboral_MO','trabajador',true);
        $query = $this->trabajador->modificar_trabajador_laboral(
            $this->session->userdata('sigesco_laboral_id'),
            $this->input->post('a1_editar_sigesco_laboral',TRUE),
            $this->input->post('a2_editar_sigesco_laboral',TRUE),
            $this->input->post('a3_editar_sigesco_laboral',TRUE),
            $this->input->post('a4_editar_sigesco_laboral',TRUE),
            $this->input->post('a5_editar_sigesco_laboral',TRUE),
            $this->input->post('b_editar_sigesco_laboral',TRUE),
            $this->input->post('c_editar_sigesco_laboral',TRUE),
            $this->input->post('d_editar_sigesco_laboral',TRUE),
            $this->input->post('celular_editar_sigesco_laboral',TRUE),
            $this->input->post('celular_referencia_editar_sigesco_laboral',TRUE),
            $this->input->post('ciudad_editar_sigesco_laboral',TRUE),
            $this->input->post('direccion_editar_sigesco_laboral',TRUE),
            $this->input->post('email_editar_sigesco_laboral',TRUE),
            $this->input->post('materno_editar_sigesco_laboral',TRUE),
            $this->input->post('nacimiento_editar_sigesco_laboral',TRUE),
            $this->input->post('nombre_editar_sigesco_laboral',TRUE),
            $this->input->post('nombre2_editar_sigesco_laboral',TRUE),
            $this->input->post('objetivo_editar_sigesco_laboral',TRUE),
            $this->input->post('paterno_editar_sigesco_laboral',TRUE),
            $this->input->post('presentacion_editar_sigesco_laboral',TRUE),
            $this->input->post('nacionalidad_editar_sigesco_laboral',TRUE),
            $this->input->post('discapacidad_editar_sigesco_laboral',TRUE),
            $this->input->post('pretencion_editar_sigesco_laboral',TRUE),
            $this->input->post('genero_editar_sigesco_laboral',TRUE),
            $this->input->post('estado_civil_editar_sigesco_laboral',TRUE)
        );    
            echo $query;
        
    }
    
    public function agregar_estudio(){
        
        switch ($this->input->post('tipo_estudio',TRUE)) {
            case 1:
                $CODIGO = 'EDB'.date("dmYHis").rand(1, 99);
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
                $query = $this->trabajador->agregar_estudio(
                    '1',
                    $CODIGO,
                    $this->session->userdata('sigesco_laboral_id'),
                    $this->input->post('institucion_educacion_basica_sigesco_laboral',TRUE),
                    $this->input->post('mes_inicio_educacion_basica_sigesco_laboral',TRUE),
                    $this->input->post('anno_inicio_educacion_basica_sigesco_laboral',TRUE),
                    $this->input->post('mes_fin_educacion_basica_sigesco_laboral',TRUE),
                    $this->input->post('anno_fin_educacion_basica_sigesco_laboral',TRUE),
                    $this->input->post('situacion_educacion_basica_sigesco_laboral',TRUE),
                    '',////// ESPECIALIDAD
                    $this->input->post('check_presente_basica_sigesco_laboral',TRUE),
                    '',/////URL
                    '',/////TIPO
                    '',///NOTAS
                    ''/////HORAS
                    );

                $query = explode(",",$query);
                $datos = array(
                        $query[0],
                        $query[1],
                        $this->input->post('institucion_educacion_basica_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_basica_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_basica_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_basica_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_basica_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_basica_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_basica_sigesco_laboral',TRUE),
                        '',
                        $this->input->post('check_presente_basica_sigesco_laboral',TRUE)
                );

                    echo json_encode($datos);
                break;
            case 2:
                $CODIGO = 'EDM'.date("dmYHis").rand(1, 99);
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
                $query = $this->trabajador->agregar_estudio(
                    '2',
                    $CODIGO,
                    $this->session->userdata('sigesco_laboral_id'),
                    $this->input->post('institucion_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('mes_inicio_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('anno_inicio_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('mes_fin_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('anno_fin_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('situacion_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('especialidad_educacion_media_sigesco_laboral',TRUE),
                    $this->input->post('check_presente_media_sigesco_laboral',TRUE),
                    '',/////URL
                    '',/////TIPO
                    '',///NOTAS
                    ''/////HORAS
                     ); 

                $query = explode(",",$query);
                $datos = array(
                        $query[0],
                        $query[1],
                        $this->input->post('institucion_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('especialidad_educacion_media_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_media_sigesco_laboral',TRUE)
                );

                    echo json_encode($datos);
                break;
            case 3:
                $CODIGO = 'EDU'.date("dmYHis").rand(1, 99);
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
                $codigo_titulo = date("dmYGis").rand(1,100);
                    
                $uploadDir = 'archivos/'.$this->session->userdata('sigesco_laboral_id');
                if (!file_exists($uploadDir)) {
                       mkdir($uploadDir, 0777, true);
                }
                
                if(isset($_FILES['titulo_sigesco_laboral']['tmp_name'])){
                $trozos = explode(".", $_FILES['titulo_sigesco_laboral']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['titulo_sigesco_laboral']['tmp_name'];
                $filename = $uploadDir."/".$codigo_titulo.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                }else{
                    $filename = '';
                }
                
                $query = $this->trabajador->agregar_estudio(
                    '3',
                    $CODIGO,
                    $this->session->userdata('sigesco_laboral_id'),
                    $this->input->post('institucion_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('mes_inicio_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('anno_inicio_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('mes_fin_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('anno_fin_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('situacion_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('especialidad_educacion_universitaria_sigesco_laboral',TRUE),
                    $this->input->post('check_presente_universitaria_sigesco_laboral',TRUE),
                    $filename,
                    '',/////TIPO
                    '',///NOTAS
                    ''/////HORAS
                    );

                $query = explode(",",$query);
                $datos = array(
                        $query[0],
                        $query[1],
                        $this->input->post('institucion_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('especialidad_educacion_universitaria_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_universitaria_sigesco_laboral',TRUE),
                        $filename
                );

                    echo json_encode($datos);
                break;
            case 4:
                $CODIGO = 'EDP'.date("dmYHis").rand(1, 99);
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
        
                $uploadDir = 'archivos/'.$this->session->userdata('sigesco_laboral_id');
                if (!file_exists($uploadDir)) {
                       mkdir($uploadDir, 0777, true);
                }

                if(isset($_FILES['titulo_sigesco_laboral']['tmp_name'])){
                $trozos = explode(".", $_FILES['titulo_sigesco_laboral']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['titulo_sigesco_laboral']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                }else{
                    $filename = '';
                }
                
                $query = $this->trabajador->agregar_estudio(
                    '4',
                    $CODIGO,
                    $this->session->userdata('sigesco_laboral_id'),
                    $this->input->post('institucion_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('mes_inicio_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('anno_inicio_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('mes_fin_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('anno_fin_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('situacion_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('especialidad_educacion_posterior_sigesco_laboral',TRUE),
                    $this->input->post('check_presente_posterior_sigesco_laboral',TRUE),
                    $filename,
                    $this->input->post('tipo_posterior_educacion_posterior_sigesco_laboral',TRUE),
                    str_replace(',', ".", $this->input->post('nota_educacion_posterior_sigesco_laboral',TRUE)),
                    $this->input->post('horas_educacion_posterior_sigesco_laboral',TRUE)
                );    

                $query = explode(",",$query);
                $datos = array(
                        $query[0],
                        $query[1],
                        $this->input->post('institucion_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('especialidad_educacion_posterior_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_posterior_sigesco_laboral',TRUE),
                        $filename,
                        $this->input->post('tipo_posterior_educacion_posterior_sigesco_laboral',TRUE),
                        str_replace('.', ",", $this->input->post('nota_educacion_posterior_sigesco_laboral',TRUE)),
                        $this->input->post('horas_educacion_posterior_sigesco_laboral',TRUE)
                );
                    echo json_encode($datos);
                break;
        }
        
        
    }

        /////////////////////////////////// S E C C I O N   E D U C A C I O N   //////////////////////////////

           ////////// ELIMINAR //////
            public function eliminar_educacion_basica(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->eliminar_educacion_basica(
                        $this->input->post('id_educacion',TRUE)
                    ); 
                     echo $query;
                }

            public function eliminar_educacion_media(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->eliminar_educacion_media(
                        $this->input->post('id_educacion',TRUE)
                    ); 
                     echo $query;
            }
    
            public function eliminar_educacion_universitaria(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->eliminar_educacion_universitaria(
                        $this->input->post('id_educacion',TRUE)
                    ); 
                     echo $query;
            }
        
            public function eliminar_educacion_posterior(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->eliminar_educacion_posterior(
                        $this->input->post('id_educacion',TRUE)
                    ); 
                     echo $query;
            }
            /////////////////////////////
            ///////// BUSCAR ///////////
                public function buscar_educacion_basica(){
                        $this->load->model('Trabajador_laboral_MO','trabajador',true);
                        $query = $this->trabajador->buscar_educacion_basica(
                            $this->input->post('id_educacion',TRUE)
                        ); 
                        $this->output->set_content_type('application/json');
                        $this->output->set_output(json_encode($query));
                        return $query;
                }

                public function buscar_educacion_media(){
                        $this->load->model('Trabajador_laboral_MO','trabajador',true);
                        $query = $this->trabajador->buscar_educacion_media(
                            $this->input->post('id_educacion',TRUE)
                        ); 
                        $this->output->set_content_type('application/json');
                        $this->output->set_output(json_encode($query));
                        return $query;
                }

                public function buscar_educacion_universitaria(){
                        $this->load->model('Trabajador_laboral_MO','trabajador',true);
                        $query = $this->trabajador->buscar_educacion_universitaria(
                            $this->input->post('id_educacion',TRUE)
                        ); 
                        $this->output->set_content_type('application/json');
                        $this->output->set_output(json_encode($query));
                        return $query;
                }
    
                public function buscar_educacion_posterior(){
                        $this->load->model('Trabajador_laboral_MO','trabajador',true);
                        $query = $this->trabajador->buscar_educacion_posterior(
                            $this->input->post('id_educacion',TRUE)
                        ); 
                        $this->output->set_content_type('application/json');
                        $this->output->set_output(json_encode($query));
                        return $query;
                }
            ////////////////////////////
            ///////// B U S C A R   I N S T I T U C I O N //////////////
                public function buscar_institucion_basica(){
                    $this->load->model('Listas','institucion',true);
                    $query = $this->institucion->buscar_institucion_basica(
                        $this->input->get('id_ciudad',TRUE)
                    ); 
                    $this->output->set_content_type('application/json');
                    $this->output->set_output(json_encode($query));
                    return $query;
                }

                public function buscar_institucion_media(){
                    $this->load->model('Listas','institucion',true);
                    $query = $this->institucion->buscar_institucion_media(
                        $this->input->get('id_ciudad',TRUE)
                    ); 
                    $this->output->set_content_type('application/json');
                    $this->output->set_output(json_encode($query));
                    return $query;
                }
                
                public function buscar_institucion_universitaria(){
                    $this->load->model('Listas','institucion',true);
                    $query = $this->institucion->buscar_institucion_universitaria(
                        $this->input->get('id_ciudad',TRUE)
                    ); 
                    $this->output->set_content_type('application/json');
                    $this->output->set_output(json_encode($query));
                    return $query;
                }
    
                public function buscar_institucion_posterior(){
                    $this->load->model('Listas','institucion',true);
                    $query = $this->institucion->buscar_institucion_posterior(
                        $this->input->get('id_ciudad',TRUE)
                    ); 
                    $this->output->set_content_type('application/json');
                    $this->output->set_output(json_encode($query));
                    return $query;
                }
            /////////////////////////////////////////////////////////////////////////
                
            ///////// E D I T A R  E S T U D I O S   A S I G N A D O S //////////////
                public function editar_estudio_basica(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->editar_estudio_basica(
                        $this->input->post('id_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_basica_editar_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_basica_editar_sigesco_laboral',TRUE)
                    ); 
                     echo $query;
                }
    
                public function editar_estudio_media(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->editar_estudio_media(
                        $this->input->post('id_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('especialidad_educacion_media_editar_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_media_editar_sigesco_laboral',TRUE)
                    ); 
                     echo $query;
                }
    
                public function editar_estudio_universitaria(){
                    $CODIGO = 'EDU'.date("dmYHis").rand(1, 99);
                    $uploadDir = 'archivos/'.$this->session->userdata('sigesco_laboral_id');
                    if(isset($_FILES['titulo_sigesco_editar_laboral']['tmp_name'])){
                        $trozos = explode(".", $_FILES['titulo_sigesco_editar_laboral']['name']); 
                        $extension = end($trozos);
                        $tmpFile = $_FILES['titulo_sigesco_editar_laboral']['tmp_name'];
                        $filename = $uploadDir."/".$CODIGO.".".$extension;
                        move_uploaded_file($tmpFile,$filename);
                        }else{
                            $filename = '';
                    }
                                                            
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->editar_estudio_universitaria(
                        $this->input->post('id_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('especialidad_educacion_universitaria_editar_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_universitaria_editar_sigesco_laboral',TRUE),
                        $filename
                    ); 
                     echo $query;
                }
                
                public function editar_estudio_posterior(){
                    $CODIGO = 'EDP'.date("dmYHis").rand(1, 99);
                    $uploadDir = 'archivos/'.$this->session->userdata('sigesco_laboral_id');
                    if(isset($_FILES['titulo_sigesco_editar_laboral']['tmp_name'])){
                        $trozos = explode(".", $_FILES['titulo_sigesco_editar_laboral']['name']); 
                        $extension = end($trozos);
                        $tmpFile = $_FILES['titulo_sigesco_editar_laboral']['tmp_name'];
                        $filename = $uploadDir."/".$CODIGO.".".$extension;
                        move_uploaded_file($tmpFile,$filename);
                        }else{
                            $filename = '';
                    }
                                                            
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->editar_estudio_posterior(
                        $this->input->post('id_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_buscar_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('institucion_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_inicio_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_inicio_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('mes_fin_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('anno_fin_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('situacion_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('especialidad_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('check_presente_posterior_editar_sigesco_laboral',TRUE),
                        $filename,
                        $this->input->post('horas_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('nota_educacion_posterior_editar_sigesco_laboral',TRUE),
                        $this->input->post('tipo_posterior_educacion_posterior_sigesco_laboral',TRUE)
                    ); 
                     echo $query;
                }
            ////////////////////////////////////////////////////////////////
        /////////////////////////////////// S E C C I O N   E X P   L A B O R A L    /////////////////////////
                public function agregar_experiencia_laboral(){
                $CODIGO = 'EXP'.date("dmYHis").rand(1, 99);
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
        
                $uploadDir = 'archivos/'.$this->session->userdata('sigesco_laboral_id');
                if (!file_exists($uploadDir)) {
                       mkdir($uploadDir, 0777, true);
                }
                
                if(isset($_FILES['titulo_sigesco_laboral']['tmp_name'])){
                $trozos = explode(".", $_FILES['titulo_sigesco_laboral']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['titulo_sigesco_laboral']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                }else{
                    $filename = '';
                }
                
                $query = $this->trabajador->agregar_experiencia_laboral(
                    $CODIGO,
                    $this->session->userdata('sigesco_laboral_id'),
                    $this->input->post('ciudad_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('empresa_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('cargo_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('tipo_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('sueldo_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('fecha_inicio_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('fecha_termino_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('check_presente_experiencia_sigesco_laboral',TRUE),
                    $this->input->post('descripcion_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('referencia_experiencia_laboral_sigesco_laboral',TRUE),
                    $filename
                );    

                $query = explode(",",$query);
                $datos = array(
                    $query[0],
                    $query[1],
                    $this->input->post('ciudad_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('empresa_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('cargo_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('tipo_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('sueldo_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('fecha_inicio_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('fecha_termino_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('check_presente_experiencia_sigesco_laboral',TRUE),
                    $this->input->post('descripcion_experiencia_laboral_sigesco_laboral',TRUE),
                    $this->input->post('referencia_experiencia_laboral_sigesco_laboral',TRUE),
                );
                    echo json_encode($datos); 
            }
            
                public function eliminar_experiencia_laboral(){
                    $this->load->model('Trabajador_laboral_MO','trabajador',true);
                    $query = $this->trabajador->eliminar_experiencia_laboral(
                        $this->input->post('id_experiencia_laboral',TRUE)
                    ); 
                     echo $query;
            }
    
                public function buscar_experiencia_laboral(){
                        $this->load->model('Trabajador_laboral_MO','trabajador',true);
                        $query = $this->trabajador->buscar_experiencia_laboral(
                            $this->input->post('id_experiencia_laboral',TRUE)
                        ); 
                        $this->output->set_content_type('application/json');
                        $this->output->set_output(json_encode($query));
                        return $query;
                }
    
                public function editar_experiencia_laboral(){
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
        
                $uploadDir = 'archivos/'.$this->session->userdata('sigesco_laboral_id');
                if (!file_exists($uploadDir)) {
                       mkdir($uploadDir, 0777, true);
                }
                
                if(isset($_FILES['titulo_sigesco_laboral']['tmp_name'])){
                $trozos = explode(".", $_FILES['titulo_sigesco_laboral']['name']); 
                $extension = end($trozos);
                $tmpFile = $_FILES['titulo_sigesco_laboral']['tmp_name'];
                $filename = $uploadDir."/".$CODIGO.".".$extension;
                move_uploaded_file($tmpFile,$filename);
                }else{
                    $filename = '';
                }
                
                $query = $this->trabajador->editar_experiencia_laboral(
                    $this->input->post('id_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('ciudad_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('empresa_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('cargo_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('tipo_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('sueldo_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('fecha_inicio_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('fecha_termino_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('check_presente_experiencia_labora_edita_sigesco_laboral',TRUE),
                    $this->input->post('descripcion_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $this->input->post('referencia_experiencia_laboral_editar_sigesco_laboral',TRUE),
                    $filename
                );    

                    echo $query; 
            }
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////// S E C C I O N   C O N O C I M I E N T O    ///////////////////////
            public function agregar_conocimiento(){
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
                $query = $this->trabajador->agregar_conocimiento(
                    $this->session->userdata('sigesco_laboral_id'),
                    $this->input->post('nombre_conocimiento',TRUE),
                    '',
                    $this->input->post('slider_conocimiento',TRUE),
                    $this->input->post('id_conocimiento',TRUE)
                );
                
                $query = explode(",",$query);
                $datos = array(
                    $query[0],
                    $query[1],
                    $this->input->post('nombre_conocimiento',TRUE),
                    $this->input->post('slider_conocimiento',TRUE),
                    $this->input->post('id_conocimiento',TRUE)
                );
                    echo json_encode($datos); 
 
            }
    
            public function nuevo_conocimiento(){
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
                $query = $this->trabajador->nuevo_conocimiento(
                    $this->input->post('nombre_conocimiento',TRUE)
                );    
                echo $query;
            }
    
            public function eliminar_conocimiento(){
                $this->load->model('Trabajador_laboral_MO','trabajador',true);
                $query = $this->trabajador->eliminar_conocimiento(
                    $this->input->post('fila_conocimiento',TRUE),
                    $this->input->post('id_conocimiento',TRUE),
                    $this->session->userdata('sigesco_laboral_id')
                );    
                echo $query;
            }
    
        //////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////
    
    
}
