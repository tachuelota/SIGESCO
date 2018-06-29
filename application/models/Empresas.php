<?php
	class Empresas extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE); 
            
            
		}
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		function crear_empresa_contratista($codigo, $nombre,$razonsocial,$rut,$sector,$cantidad,$presentacion, $user,$pass,$facebook,$twitter,$google, $linkedin,$youtube,$instagram, $ciudad, $direccion, $telefono, $email){
            $this->db_escritura->reconnect();
				$query = $this->db_escritura->query("
                    INSERT INTO `empresa_contratista` (
                        `codigo_empresa_contratista`, 
                        `nombre_empresa_contratista`, 
                        `razon_social_empresa_contratista`, 
                        `sector_empresa_contratista`, 
                        `cantidad_empleados_empresa_contratista`, 
                        `rut_empresa_contratista`, 
                        `direccion_empresa_contratista`, 
                        `telefono_empresa_contratista`, 
                        `email_empresa_contratista`, 
                        `facebook_empresa_contratista`, 
                        `twitter_empresa_contratista`, 
                        `google_empresa_contratista`, 
                        `linkedin_empresa_contratista`, 
                        `youtube_empresa_contratista`, 
                        `instagram_empresa_contratista`, 
                        `ciudad_id_ciudad`,
                        `user_empresa_contratista`,
                        `pass_empresa_contratista`) 
                    VALUES (
                        '".$codigo."', 
                        '".$nombre."', 
                        '".$razonsocial."', 
                        '".$sector."', 
                        '".$cantidad."', 
                        '".$rut."', 
                        '".$direccion."', 
                        '".$telefono."', 
                        '".$email."', 
                        '".$facebook."', 
                        '".$twitter."', 
                        '".$google."', 
                        '".$linkedin."', 
                        '".$youtube."', 
                        '".$instagram."', 
                        '".$ciudad."',
                        '".$user."',
                        '".$pass."')");
            
					return $this->db_escritura->insert_id();
				$query->free_result();
			$this->db_escritura->close();
		}
        
        function crear_sucursal_empresa_contratista($codigo,$nombre,$direccion,$telefono,$email,$empresa,$ciudad){
            $this->db_escritura->reconnect();
            if($query = $this->db_escritura->query("
                INSERT INTO `sucursal_empresa_contratista` (
                    `codigo_sucursal_empresa_contratista`,
                    `nombre_sucursal_empresa_contratista`,
                    `direccion_sucursal_empresa_contratista`, 
                    `telefono_sucursal_empresa_contratista`, 
                    `email_sucursal_empresa_contratista`, 
                    `empresa_contratista_id_empresa_contratista`, 
                    `ciudad_id_ciudad`) 
                VALUES (
                    '".$codigo."',
                    '".$nombre."', 
                    '".$direccion."', 
                    '".$telefono."', 
                    '".$email."', 
                    '".$empresa."', 
                    '".$ciudad."');")
              ){
                return $this->db_escritura->insert_id();
            }else{
                return FALSE;
            }
            
            $this->db_escritura->close();
        }
        
        function crear_faena_minera($codigo,$nombre,$id_mandante){
            $this->db_escritura->reconnect();
            if($query = $this->db_escritura->query("INSERT INTO `faena_minera` (`codigo_faena_minera`, `nombre_faena_minera`, `empresa_mandante_id_empresa_mandante`) VALUES ('".$codigo."', '".$nombre."', '".$id_mandante."');")
              ){
                return $this->db_escritura->insert_id();
            }else{
                return FALSE;
            }
            
            $this->db_escritura->close();
        }
        
        function crear_empresa_mandante($codigo,$nombre,$nombre_corto,$direccion,$rut,$telefono,$email,$id_ciudad,$id_empresa_constratista){
            $this->db_escritura->reconnect();
            if($query = $this->db_escritura->query("
                INSERT INTO `empresa_mandante` (
                    `codigo_empresa_mandante`, 
                    `nombre_corto_empresa_mandante`, 
                    `nombre_empresa_mandante`, 
                    `direccion_empresa_mandante`, 
                    `rut_empresa_mandante`, 
                    `telefono_empresa_mandante`, 
                    `email_empresa_mandante`, 
                    `estado_empresa_mandante`,
                    `ciudad_id_ciudad`) 
                VALUES ('".$codigo."', '".$nombre_corto."', '".$nombre."', '".$direccion."', '".$rut."', '".$telefono."', '".$email."', '1', '".$id_ciudad."');")
              ){
                if($this->db_escritura->insert_id()){
                    $this->db_escritura->query("
                        INSERT INTO `ec_em` (
                            `empresa_mandante_id_empresa_mandante`, 
                            `empresa_contratista_id_empresa_contratista`) 
                        VALUES (
                            '".$this->db_escritura->insert_id()."', 
                            '".$id_empresa_constratista."');");
                    
                        return $this->db_escritura->insert_id();
                } else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }
            
            $this->db_escritura->close();
        }
        
        function actualizar_logo_empresa_contratista($url,$empresa){
            $this->db_escritura->reconnect();
            $this->db_escritura->query("
                UPDATE `empresa_contratista` 
                SET `url_logo_empresa_contratista`='".$url."' 
                WHERE `id_empresa_contratista`='".$empresa."';");
            $this->db_escritura->close();
        }
        
        function actualizar_perfil_ejecutivo($url,$ejecutivo){
            $this->db_escritura->reconnect();
            $this->db_escritura->query("
                UPDATE `ejecutivo_empresa_contratista` 
                SET `url_foto_ejecutivo_empresa_contratista`='".$url."' 
                WHERE `id_ejecutivo_empresa_contratista`='".$ejecutivo."';");
            $this->db_escritura->close();
        }
        
        function actualizar_portada_empresa_contratista($url,$empresa){
            $this->db_escritura->reconnect();
            $this->db_escritura->query("
                UPDATE `empresa_contratista` 
                SET `url_portada_empresa_contratista`='".$url."' 
                WHERE `id_empresa_contratista`='".$empresa."';");
            $this->db_escritura->close();
        }
        
        function validar_empresa($usuario,$pass){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("call validar_empresa('".$usuario."')");
                    if($query->num_rows() > 0){
                        $row = $query->row();
                            if($this->encryption->decrypt($row->passwd) == $pass){
                                $datos = array(
                                    'sigesco_laboral_nombre' => $row->nombre,
                                    'sigesco_laboral_paterno' => $row->apellido,
                                    'sigesco_laboral_id' => $row->id,
                                    'sigesco_laboral_codigo' => $row->codigo,
                                    'sigesco_laboral_foto' => $row->foto_perfil,
                                    'sigesco_laboral_tipo_trabajador' => $row->tipo,
                                    'sigesco_laboral_empresa' => $row->empresa,
                                    'sigesco_laboral_nombre_empresa' => $row->nombre_empresa,
                                    'sigesco_laboral_aviso' => 0,
                                    'sigesco_laboral_menu' => '['.$row->modulo.']',
                                    'sigesco_laboral_conectado' => TRUE
                                );
                                $this->session->set_userdata($datos);

                            echo TRUE;
                            //echo $row->modulo;
                            } else{
                                
                                echo FALSE;
                            }

                    } else {

                    return FALSE;
                    }
                
                $this->db_lectura->close();
            }
        
        function crear_bodega($codigo,$nombre,$descripcion,$id_empresa){
            $this->db_escritura->reconnect();
            if($query = $this->db_escritura->query("INSERT INTO `bodega` (`codigo_bodega`, `nombre_bodega`, `descripcion_bodega`) 
            VALUES ('".$codigo."', '".$nombre."', '".$descripcion."');
")
              ){
                if($this->db_escritura->insert_id()){
                    $this->db_escritura->query("INSERT INTO `empresa_contratista_bodega` (`codigo_empresa_contratista_bodega`, `empresa_contratista_id_empresa_contratista`, `bodega_id_bodega`) VALUES ('BoCo".date("dmYHis").rand(1, 99)."', '".$id_empresa."', '".$this->db_escritura->insert_id()."');");
                        return $this->db_escritura->insert_id();
                }else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }
            
            $this->db_escritura->close();
        }
        
        ////////////////////////////////////////    E J E C U T I V O   ////////////////////////////////////////////////////////////
        
        function crear_ejecutivo_empresa_contratista($codigo, $nombre, $run, $telefono, $email, $tipo, $sucursal, $pass){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query(" CALL crear_ejecutivo('".$codigo."','".$nombre."','".$telefono."','".$email."','".$sucursal."','".$pass."','".$tipo."','".$run."');")->row();
            return $query;
            $this->db_escritura->close();
        }
        
        function datos_ejecutivo($id_ejectivo){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("SELECT * FROM ejecutivo_empresa_contratista WHERE id_ejecutivo_empresa_contratista = '".$id_ejectivo."';")->row();
            return $query;
            $this->db_escritura->close();
        }
        
        function lista_tipo_ejecutivos(){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM .tipo_ejecutivo_ec ORDER BY (nombre_tipo_ejecutivo_ec) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
        }
        
        function lista_empresas_mandantes($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT empresa_mandante.* FROM empresa_mandante,ec_em
                        WHERE empresa_mandante.id_empresa_mandante = ec_em.empresa_mandante_id_empresa_mandante AND
                        ec_em.empresa_contratista_id_empresa_contratista = ".$id_empresa." AND
                        estado_empresa_mandante = 1 ORDER BY(nombre_corto_empresa_mandante) ASC;");
                    return $query->result();
                $this->db_lectura->close();
            }
        
        function lista_faenas_mineras($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM faena_minera,empresa_mandante,ec_em 
                    WHERE faena_minera.empresa_mandante_id_empresa_mandante = empresa_mandante.id_empresa_mandante AND
                    empresa_mandante.id_empresa_mandante = ec_em.empresa_mandante_id_empresa_mandante AND
                    ec_em.empresa_contratista_id_empresa_contratista = ".$id_empresa."
                    ORDER BY (nombre_faena_minera) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
        }
        
        function lista_bodegas_empresa($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT bodega.* 
                    FROM bodega,empresa_contratista_bodega
                    WHERE bodega.id_bodega = empresa_contratista_bodega.bodega_id_bodega AND
                    empresa_contratista_bodega.empresa_contratista_id_empresa_contratista = ".$id_empresa."
                    ORDER BY (nombre_bodega) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function agregar_documento_trabajador($codigo,$titulo,$url,$id_trabajador,$tipo){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("
                INSERT INTO `trabajador_laboral_documentacion` (
                    `codigo_trabajador_laboral_documentacion`, 
                    `titulo_trabajador_laboral_documentacion`, 
                    `fecha_subida_trabajador_laboral_documentacion`, 
                    `url_trabajador_laboral_documentacion`, 
                    `trabajador_laboral_id_trabajador_laboral`,
                    `tipo_documentacion_trabajador_id_tipo_documentacion_trabajador`) 
                VALUES (
                    '".$codigo."', 
                    '".$titulo."', 
                    '".date("Y-m-d")."', 
                    '".$url."', 
                    '".$id_trabajador."',
                    '".$tipo."');");
            return TRUE;
            $this->db_escritura->close();
        }
        
        function agregar_tipo_documento_empresa($codigo,$titulo,$descripcion,$fecha,$hora,$id_empresa){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("
                INSERT INTO `empresa_contratista_documentacion` (
                    `cod_empresa_contratista_documentacion`, 
                    `nombre_empresa_contratista_documentacion`, 
                    `decripcion_empresa_contratista_documentacion`, 
                    `tipo_empresa_contratista_documentacion`, 
                    `fecha_empresa_contratista_documentacion`, 
                    `hora_empresa_contratista_documentacion`, 
                    `empresa_contratista_id_empresa_contratista`) 
                VALUES (
                    '".$codigo."', 
                    '".$titulo."', 
                    '".$descripcion."', 
                    '2', 
                    '".$fecha."',
                    '".$hora."', 
                    '".$id_empresa."');");
            
            return $this->db_escritura->insert_id();
            $this->db_escritura->close();
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
                
        
            function lista_responsables($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT ejecutivo_empresa_contratista.*, CONCAT(COALESCE(nombre_ejecutivo_empresa_contratista,''),' ', COALESCE(paterno_ejecutivo_empresa_contratista,''),' ',COALESCE(materno_ejecutivo_empresa_contratista,'')) as nombre
                    FROM ejecutivo_empresa_contratista, ejecutivo_ec_submodulo,sucursal_empresa_contratista
                    WHERE sucursal_empresa_contratista.id_sucursal_empresa_contratista = 
                    ejecutivo_empresa_contratista.sucursal_empresa_contratista_id_sucursal_empresa_contratista AND
                    ejecutivo_empresa_contratista.id_ejecutivo_empresa_contratista = 
                    ejecutivo_ec_submodulo.ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista AND
                    sucursal_empresa_contratista.empresa_contratista_id_empresa_contratista = ".$id_empresa." AND
                    submodulos_id_submodulos = 752 ORDER BY(nombre_ejecutivo_empresa_contratista) ASC"); ///// 752, modulo de Prestamo
                    return $query->result();
                $this->db_lectura->close();
            }
        
            function lista_retiros($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT ejecutivo_empresa_contratista.*, CONCAT(COALESCE(nombre_ejecutivo_empresa_contratista,''),' ', COALESCE(paterno_ejecutivo_empresa_contratista,''),' ',COALESCE(materno_ejecutivo_empresa_contratista,'')) as nombre
                    FROM ejecutivo_empresa_contratista,sucursal_empresa_contratista
                    WHERE ejecutivo_empresa_contratista.sucursal_empresa_contratista_id_sucursal_empresa_contratista =
                    sucursal_empresa_contratista.id_sucursal_empresa_contratista AND
                    sucursal_empresa_contratista.empresa_contratista_id_empresa_contratista = ".$id_empresa." AND
                    tipo_ejecutivo_ec_id_tipo_ejecutivo_ec IN(2,3,4)
                    ORDER BY(nombre_ejecutivo_empresa_contratista) ASC"); //// PERFIL EJECUTIVO 2 y 3  
                    return $query->result();
                $this->db_lectura->close();
            }
	}
?>