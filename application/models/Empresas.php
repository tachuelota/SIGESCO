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
        
        function crear_sucursal_empresa_contratista($codigo,$direccion,$telefono,$email,$empresa,$ciudad){
            $this->db_escritura->reconnect();
            if($query = $this->db_escritura->query("
                INSERT INTO `sucursal_empresa_contratista` (
                    `codigo_sucursal_empresa_contratista`, 
                    `direccion_sucursal_empresa_contratista`, 
                    `telefono_sucursal_empresa_contratista`, 
                    `email_sucursal_empresa_contratista`, 
                    `empresa_contratista_id_empresa_contratista`, 
                    `ciudad_id_ciudad`) 
                VALUES (
                    '".$codigo."', 
                    '".$direccion."', 
                    '".$telefono."', 
                    '".$email."', 
                    '".$empresa."', 
                    '".$ciudad."');")
              ){
                return TRUE;
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
                $this->db_escritura->reconnect();
                    $query = $this->db->query("call validar_empresa('".$usuario."')");
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
                                    'sigesco_laboral_aviso' => 0,
                                    'sigesco_laboral_conectado' => TRUE
                                );
                                $this->session->set_userdata($datos);

                            echo TRUE;

                            } else{
                                
                                echo FALSE;
                            }

                    } else {

                    return FALSE;
                    }
                
                $this->db_escritura->close();
            }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        function crear_ejecutivo_empresa_contratista($codigo, $nombre, $run, $telefono, $email, $tipo, $sucursal, $pass){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query(" CALL crear_ejecutivo('".$codigo."','".$nombre."','".$telefono."','".$email."','".$sucursal."','".$pass."','".$tipo."','".$run."');")->row();
            return $query;
            $this->db_escritura->close();
        }
	}
?>