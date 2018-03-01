<?php
	class Trabajador_laboral_MO extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE);
            
            
            
		}
        
		
		//////////////////////////////  Q U E R Y S   D E   E S C R I T U R A   //////////////////////////////
            function registro_trabajador_laboral($nombre,$codigo,$paterno,$run,$ciudad,$celular,$email,$password){
                
                    $this->db_lectura->reconnect();
                    $cantidad_run = $this->db_lectura->query("SELECT count(*) as cantidad FROM trabajador_laboral WHERE rut_trabajador_laboral = '".$run."'")->row();
                    $this->db_lectura->close();
                    
                    if($cantidad_run->cantidad == 0){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("call registro_trabajador_laboral('".$run."','".$codigo."','".ucfirst(strtolower( $nombre))."','".ucfirst(strtolower($paterno))."','".$celular."','".ucfirst(strtolower($email))."','".$ciudad."','".$password."')")){
                                return true;

                            }
                            else{
                                return false;
                            }

                            $query->free_result(); 
                        
                    } else {
                        return "run";
                    }
                    ////////////// SI EXISTE EL RUT ////////////
                    
                /////// LA CIUDAD ESTA MAL ESCRITA /////////////
                $this->db_escritura->close();
            }
        
            function modificar_trabajador_laboral($id_trabajador,$a1,$a2,$a3,$a4,$a5,$b,$c,$d,$celular,$celular_referencia, $ciudad,$direccion,$email,$materno,$nacimiento,$nombre,$nombre2,$objetivo,$paterno,$presentacion,$nacionalidad,$discapacidad,$pretencion, $genero,$estado_civil){

                $this->db_escritura->reconnect();
                    
                    if($query = $this->db_escritura->query("
                    UPDATE `trabajador_laboral` SET 
                        `nombre_trabajador_laboral`='".$nombre."', 
                        `nombre2_trabajador_laboral`='".$nombre2."', 
                        `paterno_trabajador_laboral`='".$paterno."', 
                        `materno_trabajador_laboral`='".$materno."', 
                        `fecha_nacimiento_trabajador_laboral`= DATE_FORMAT(STR_TO_DATE('".$nacimiento."','%d-%m-%Y'),'%Y-%m-%d'), 
                        `direccion_trabajador_laboral`= '".$direccion."', 
                        `celular_trabajador_laboral`= '".$celular."', 
                        `celular_referencia_trabajador_laboral`= '".$celular_referencia."', 
                        `email_trabajador_laboral`= '".$email."', 
                        `pretencion_salarial_trabajador_laboral`='".$pretencion."', 
                        `nacionalidad_trabajador_laboral`='".$nacionalidad."', 
                        `estado_civil_trabajador_laboral`='".$estado_civil."', 
                        `discapacidad_trabajador_laboral`='".$discapacidad."', 
                        `presentacion_trabajador_laboral`='".$presentacion."', 
                        `objetivo_laboral_trabajador_laboral`='".$objetivo."', 
                        `genero_trabajador_laboral`='".$genero."', 
                        `a1_licencia_conducir_trabajador_laboral`='".$a1."', 
                        `a2_licencia_conducir_trabajador_laboral`='".$a2."', 
                        `a3_licencia_conducir_trabajador_laboral`='".$a3."', 
                        `a4_licencia_conducir_trabajador_laboral`='".$a4."', 
                        `a5_licencia_conducir_trabajador_laboral`='".$a5."', 
                        `b_licencia_conducir_trabajador_laboral`='".$b."', 
                        `c_licencia_conducir_trabajador_laboral`='".$c."', 
                        `d_licencia_conducir_trabajador_laboral`='".$d."', 
                        `ciudad_id_ciudad`='".$ciudad."' 
                    WHERE `id_trabajador_laboral`= '".$id_trabajador."';")){
                        echo TRUE;
                    }
                    else{
                        echo FALSE;
                    }                                            

                /////// LA CIUDAD ESTA MAL ESCRITA /////////////
                $this->db_escritura->close();
            }
        
            function activar_trabajador_laboral($token){
                $codigo = $this->encryption->decrypt($token);
                $this->db_escritura->reconnect();
                    $this->db_escritura->query("UPDATE trabajador_laboral SET estado_trabajador_laboral_id_estado_trabajador_laboral = 1 WHERE codigo_trabajador_laboral = '".$codigo."'");
                $this->db_escritura->close();
            }
                
                //////////////////////////////////////  E D U C A C I O N   /////////////////////////////////////////////////////
                function agregar_estudio($tipo,$codigo,$id,$institucion,$mes_inicio,$anno_inicio,$mes_termino,$anno_termino,$situacion,$especialidad,$alpresente,$url,$posterior,$nota,$horas){
                    $this->db_escritura->reconnect();
                    switch ($tipo) {
                        case 1:
                            if($this->db_escritura->query("INSERT INTO `trabajador_laboral_educacion_basica` (`codigo_trabajador_laboral_educacion_basica`, `mes_inicio_trabajador_laboral_educacion_basica`, `anno_inicio_trabajador_laboral_educacion_basica`, `mes_termino_trabajador_laboral_educacion_basica`, `anno_termino_trabajador_laboral_educacion_basica`, `educacion_basica_id_educacion_basica`, `trabajador_laboral_id_trabajador_laboral`,`situacion_trabajador_laboral_educacion_basica`,`alpresente_trabajador_laboral_educacion_basica`) VALUES ('".$codigo."', '".$mes_inicio."', '".$anno_inicio."', '".$mes_termino."', '".$anno_termino."', '".$institucion."', '".$id."', '".$situacion."', '".$alpresente."');")){
                                return TRUE.",".$this->db_escritura->insert_id();
                            }else{
                                echo FALSE;
                            }
                    
                            break;
                        case 2:
                            if($this->db_escritura->query("INSERT INTO `trabajador_laboral_educacion_media` (`codigo_trabajador_laboral_educacion_media`, `educacion_media_id_educacion_media`, `trabajador_laboral_id_trabajador_laboral`, `mes_inicio_trabajador_laboral_educacion_media`, `anno_inicio_trabajador_laboral_educacion_media`, `mes_termino_trabajador_laboral_educacion_media`, `anno_termino_trabajador_laboral_educacion_media`, `especialidad_trabajador_laboral_educacion_media`, `situacion_trabajador_laboral_educacion_media`,`alpresente_trabajador_laboral_educacion_media`) VALUES ('".$codigo."', '".$institucion."', '".$id."', '".$mes_inicio."', '".$anno_inicio."', '".$mes_termino."', '".$anno_termino."', '".$especialidad."', '".$situacion."', '".$alpresente."');")){
                                return TRUE.",".$this->db_escritura->insert_id();
                            }else{
                                echo FALSE;
                            }
                            break;
                        case 3:
                            if($this->db_escritura->query("INSERT INTO `trabajador_laboral_educacion_universitaria` (`codigo_trabajador_laboral_educacion_universitaria`, `mes_inicio_trabajador_laboral_educacion_universitaria`, `anno_inicio_trabajador_laboral_educacion_universitaria`, `mes_termino_trabajador_laboral_educacion_universitaria`, `anno_termino_trabajador_laboral_educacion_universitaria`, `alpresente_trabajador_laboral_educacion_universitaria`, `especialidad_trabajador_laboral_educacion_universitaria`, `educacion_universitaria_id_educacion_universitaria`, `trabajador_laboral_id_trabajador_laboral`, `situacion_trabajador_laboral_educacion_universitaria`, `url_titulo_trabajador_laboral_educacion_universitaria`) 
                            VALUES ('".$codigo."', '".$mes_inicio."', '".$anno_inicio."', '".$mes_termino."', '".$anno_termino."', '".$alpresente."', '".$especialidad."','".$institucion."','".$id."','".$situacion."','".$url."');")){
                                return TRUE.",".$this->db_escritura->insert_id();
                            }else{
                                echo FALSE;
                            }
                            break;
                        case 4:
                            if($this->db_escritura->query("INSERT INTO `educacion_posterior` (`codigo_educacion_posterior`, `mes_inicio_educacion_posterior`, `anno_inicio_educacion_posterior`, `mes_termino_educacion_posterior`, `anno_termino_educacion_posterior`, `alpresente_educacion_posterior`, `situacion_educacion_posterior`, `especialidad_educacion_posterior`, `cantidad_horas_educacion_posterior`, `nota_educacion_posterior`, `url_certificado_educacion_posterior`, `educacion_universitaria_id_educacion_universitaria`, `tipo_educacion_posterior_id_tipo_educacion_posterior`, `trabajador_laboral_id_trabajador_laboral`) VALUES ('".$codigo."', '".$mes_inicio."', '".$anno_inicio."', '".$mes_termino."', '".$anno_termino."', '".$alpresente."', '".$situacion."', '".$especialidad."', '".$horas."', '".$nota."', '".$url."', '".$institucion."', '".$posterior."', '".$id."');
")){
                                return TRUE.",".$this->db_escritura->insert_id();
                            }else{
                                echo FALSE;
                            }
                            break;
                    }
                  $this->db_escritura->close();      
                }
                
                function eliminar_educacion_basica($id){
                    $this->db_escritura->reconnect();
                        if($this->db_escritura->query("DELETE FROM `trabajador_laboral_educacion_basica` WHERE `id_trabajador_laboral_educacion_basica`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    $this->db_escritura->close();
                }
                
                function editar_estudio_basica($id,$nombre_institucion,$institucion,$mes_inicio,$anno_inicio,$mes_termino,$anno_termino, $situacion, $alpresente){
                    
                    if($this->db_escritura->query("UPDATE `trabajador_laboral_educacion_basica` SET
                        `mes_inicio_trabajador_laboral_educacion_basica`='".$mes_inicio."', `anno_inicio_trabajador_laboral_educacion_basica`='".$anno_inicio."', `mes_termino_trabajador_laboral_educacion_basica`='".$mes_termino."', `anno_termino_trabajador_laboral_educacion_basica`='".$anno_termino."', `alpresente_trabajador_laboral_educacion_basica`='".$alpresente."', `situacion_trabajador_laboral_educacion_basica`='".$situacion."', 
                        `educacion_basica_id_educacion_basica`='".$institucion."' 
                    WHERE `id_trabajador_laboral_educacion_basica`='".$id."';
")){
                        return TRUE;
                    }else{
                        return FALSE;
                    }
                    
                }
        
                function editar_estudio_media($id,$nombre_institucion,$institucion,$mes_inicio,$anno_inicio,$mes_termino,$anno_termino, $situacion, $especialidad,$alpresente){
                    if($this->db_escritura->query("UPDATE `trabajador_laboral_educacion_media` SET `mes_inicio_trabajador_laboral_educacion_media`='".$mes_inicio."', `anno_inicio_trabajador_laboral_educacion_media`='".$anno_inicio."', `mes_termino_trabajador_laboral_educacion_media`='".$mes_termino."', `anno_termino_trabajador_laboral_educacion_media`='".$anno_termino."', `alpresente_trabajador_laboral_educacion_media`='".$alpresente."', `especialidad_trabajador_laboral_educacion_media`='".$especialidad."', `situacion_trabajador_laboral_educacion_media`='".$situacion."', 
                    `educacion_media_id_educacion_media`='".$institucion."' WHERE `id_trabajador_laboral_educacion_media`='".$id."';")){
                        return TRUE;
                    }else{
                        return FALSE;
                    }
                    
                }
        
                function editar_estudio_universitaria($id,$nombre_institucion,$institucion,$mes_inicio,$anno_inicio,$mes_termino,$anno_termino, $situacion, $especialidad,$alpresente,$url){
                    
                    if($url == ''){
                        if($this->db_escritura->query("UPDATE `trabajador_laboral_educacion_universitaria` SET `mes_inicio_trabajador_laboral_educacion_universitaria`='".$mes_inicio."', `anno_inicio_trabajador_laboral_educacion_universitaria`='".$anno_inicio."', `mes_termino_trabajador_laboral_educacion_universitaria`='".$mes_termino."', `anno_termino_trabajador_laboral_educacion_universitaria`='".$anno_termino."', `alpresente_trabajador_laboral_educacion_universitaria`='".$alpresente."', `especialidad_trabajador_laboral_educacion_universitaria`='".$especialidad."', `situacion_trabajador_laboral_educacion_universitaria`='".$situacion."', `educacion_universitaria_id_educacion_universitaria`='".$institucion."' WHERE `id_trabajador_laboral_educacion_universitaria`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                        
                    }else{
                        if($this->db_escritura->query("UPDATE `trabajador_laboral_educacion_universitaria` SET `mes_inicio_trabajador_laboral_educacion_universitaria`='".$mes_inicio."', `anno_inicio_trabajador_laboral_educacion_universitaria`='".$anno_inicio."', `mes_termino_trabajador_laboral_educacion_universitaria`='".$mes_termino."', `anno_termino_trabajador_laboral_educacion_universitaria`='".$anno_termino."', `alpresente_trabajador_laboral_educacion_universitaria`='".$alpresente."', `especialidad_trabajador_laboral_educacion_universitaria`='".$especialidad."', `url_titulo_trabajador_laboral_educacion_universitaria`='".$url."', `situacion_trabajador_laboral_educacion_universitaria`='".$situacion."', `educacion_universitaria_id_educacion_universitaria`='".$institucion."' WHERE `id_trabajador_laboral_educacion_universitaria`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    }
                    
                }
        
                function editar_estudio_posterior($id,$nombre_institucion,$institucion,$mes_inicio,$anno_inicio,$mes_termino,$anno_termino, $situacion, $especialidad,$alpresente,$url,$horas,$nota,$tipo_posterior){
                    
                    if($url == ''){
                        if($this->db_escritura->query("UPDATE `educacion_posterior` SET `mes_inicio_educacion_posterior`='".$mes_inicio."', `anno_inicio_educacion_posterior`='".$anno_inicio."', `mes_termino_educacion_posterior`='".$mes_termino."', `anno_termino_educacion_posterior`='".$anno_termino."', `alpresente_educacion_posterior`='".$alpresente."', `situacion_educacion_posterior`='".$situacion."', `especialidad_educacion_posterior`='".$especialidad."', `cantidad_horas_educacion_posterior`='".$horas."', `nota_educacion_posterior`='".$nota."', `educacion_universitaria_id_educacion_universitaria`='".$institucion."', `tipo_educacion_posterior_id_tipo_educacion_posterior`='".$tipo_posterior."' WHERE `id_educacion_posterior`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                        
                    }else{
                        if($this->db_escritura->query("UPDATE `educacion_posterior` SET `mes_inicio_educacion_posterior`='".$mes_inicio."', `anno_inicio_educacion_posterior`='".$anno_inicio."', `mes_termino_educacion_posterior`='".$mes_termino."', `anno_termino_educacion_posterior`='".$anno_termino."', `alpresente_educacion_posterior`='".$alpresente."', `situacion_educacion_posterior`='".$situacion."', `especialidad_educacion_posterior`='".$especialidad."', `cantidad_horas_educacion_posterior`='".$horas."', `nota_educacion_posterior`='".$nota."', `url_certificado_educacion_posterior`='".$url."', `educacion_universitaria_id_educacion_universitaria`='".$institucion."', `tipo_educacion_posterior_id_tipo_educacion_posterior`='".$tipo_posterior."' WHERE `id_educacion_posterior`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    }
                    
                }
                
                function buscar_educacion_basica($id){
                    $this->db_lectura->reconnect();
                        if($query = $this->db_lectura->query("SELECT trabajador_laboral_educacion_basica.*,nombre_educacion_basica,nombre_ciudad,id_ciudad
                        FROM trabajador_laboral_educacion_basica, educacion_basica,ciudad
                        WHERE educacion_basica.id_educacion_basica = trabajador_laboral_educacion_basica.educacion_basica_id_educacion_basica AND
                        educacion_basica.ciudad_id_ciudad = ciudad.id_ciudad AND 
                        id_trabajador_laboral_educacion_basica = '".$id."';")){
                            return $query->result();                        
                        }else{
                            return FALSE;
                        }
                    $this->db_lectura->close();
                }
        
                function eliminar_educacion_media($id){
                    $this->db_escritura->reconnect();
                        if($this->db_escritura->query("DELETE FROM `trabajador_laboral_educacion_media` WHERE `id_trabajador_laboral_educacion_media`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    $this->db_escritura->close();
                }
                
                function buscar_educacion_media($id){
                    $this->db_lectura->reconnect();
                        if($query = $this->db_lectura->query("SELECT trabajador_laboral_educacion_media.*,nombre_educacion_media ,nombre_ciudad,id_ciudad
                        FROM trabajador_laboral_educacion_media, educacion_media,ciudad
                        WHERE educacion_media.ciudad_id_ciudad = ciudad.id_ciudad AND educacion_media.id_educacion_media = trabajador_laboral_educacion_media.educacion_media_id_educacion_media
                        AND id_trabajador_laboral_educacion_media = '".$id."';")){
                            return $query->result();                        
                        }else{
                            return FALSE;
                        }
                    $this->db_lectura->close();
                }
        
                function eliminar_educacion_universitaria($id){
                    $this->db_escritura->reconnect();
                        if($this->db_escritura->query("DELETE FROM `trabajador_laboral_educacion_universitaria` WHERE `id_trabajador_laboral_educacion_universitaria`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    $this->db_escritura->close();
                }
                
                function buscar_educacion_universitaria($id){
                    $this->db_lectura->reconnect();
                        if($query = $this->db_lectura->query("SELECT trabajador_laboral_educacion_universitaria.*,nombre_educacion_universitaria ,nombre_ciudad,id_ciudad
                        FROM trabajador_laboral_educacion_universitaria, educacion_universitaria,ciudad
                        WHERE educacion_universitaria.ciudad_id_ciudad = ciudad.id_ciudad AND educacion_universitaria.id_educacion_universitaria = trabajador_laboral_educacion_universitaria.educacion_universitaria_id_educacion_universitaria
                        AND id_trabajador_laboral_educacion_universitaria = '".$id."';")){
                            return $query->result();                        
                        }else{
                            return FALSE;
                        }
                    $this->db_lectura->close();
                }
                
                function eliminar_educacion_posterior($id){
                    $this->db_escritura->reconnect();
                        if($this->db_escritura->query("DELETE FROM `educacion_posterior` WHERE `id_educacion_posterior`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    $this->db_escritura->close();
                }
        
                function buscar_educacion_posterior($id){
                    $this->db_lectura->reconnect();
                        if($query = $this->db_lectura->query("SELECT educacion_posterior.*,nombre_ciudad,id_ciudad,nombre_tipo_educacion_posterior,nombre_educacion_universitaria
                        FROM educacion_posterior,educacion_universitaria,ciudad,tipo_educacion_posterior
                        WHERE educacion_posterior.educacion_universitaria_id_educacion_universitaria = educacion_universitaria.id_educacion_universitaria AND
                        educacion_posterior.tipo_educacion_posterior_id_tipo_educacion_posterior = tipo_educacion_posterior.id_tipo_educacion_posterior and educacion_universitaria.ciudad_id_ciudad = ciudad.id_ciudad AND id_educacion_posterior = '".$id."';")){
                            return $query->result();                        
                        }else{
                            return FALSE;
                        }
                    $this->db_lectura->close();
                }
        
                function nueva_educacion_basica($nombre,$ciudad){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("Select nueva_educacion_basica('".$nombre."','".$ciudad."') as id_educacion_basica")->row()){
                                return $query->id_educacion_basica;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                }  
                
                function nueva_educacion_media($nombre,$ciudad){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("Select nueva_educacion_media('".$nombre."','".$ciudad."') as id_educacion_media")->row()){
                                return $query->id_educacion_media;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                }
        
                function nueva_educacion_universitaria($nombre,$ciudad){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("Select nueva_educacion_universitaria('".$nombre."','".$ciudad."') as id_educacion_universitaria")->row()){
                                return $query->id_educacion_universitaria;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                }
            
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                /////////////////////////////////  E X P E R I E N C I A   L A B O R A L   ////////////////////////////////////////
                function agregar_experiencia_laboral($codigo,$id,$ciudad,$empresa,$cargo,$tipo_cargo,$sueldo, $fecha_inicio, $fecha_termino, $alpresente,$descripcion,$referencia,$url){
                    $meses = 0;
                    
                    if($this->db_escritura->query("
                    INSERT INTO `experiencia_laboral` (
                        `codigo_experiencia_laboral`,
                        `cargo_experiencia_laboral`, 
                        `empresa_experiencia_laboral`, 
                        `descripcion_experiencia_laboral`, 
                        `fecha_inicio_experiencia_laboral`, 
                        `fecha_fin_experiencia_laboral`, 
                        `alpresente_experiencia_laboral`, 
                        `sueldo_bruto_experiencia_laboral`, 
                        `meses_experiencia_laboral`, 
                        `nombre_referencia_experiencia_laboral`, 
                        `url_referencia_experiencia_laboral`, 
                        `tipo_cargo_experiencia_laboral`, 
                        `trabajador_laboral_id_trabajador_laboral`, 
                        `ciudad_id_ciudad`) 
                    VALUES (
                        '".$codigo."',
                        '".$cargo."', 
                        '".$empresa."', 
                        '".$descripcion."',
                        '".$fecha_inicio."',
                        '".$fecha_termino."', 
                        '".$alpresente."', 
                        '".$sueldo."', 
                        '".$meses."', 
                        '".$referencia."', 
                        '".$url."', 
                        '".$tipo_cargo."', 
                        '".$id."', 
                        '".$ciudad."');")){
                        return TRUE.",".$this->db_escritura->insert_id();
                    }else{
                        echo FALSE;
                    }
                }
                
                function eliminar_experiencia_laboral($id){
                    $this->db_escritura->reconnect();
                        if($this->db_escritura->query("DELETE FROM `experiencia_laboral` WHERE `id_experiencia_laboral`='".$id."';")){
                            return TRUE;
                        }else{
                            return FALSE;
                        }
                    $this->db_escritura->close();
                }
        
                function buscar_experiencia_laboral($id){
                    $this->db_lectura->reconnect();
                     if($query = $this->db->query("SELECT experiencia_laboral.*,nombre_ciudad,DATE_FORMAT(STR_TO_DATE(fecha_inicio_experiencia_laboral,'%Y-%m-%d'),'%d/%m/%Y') as fecha_inicio,DATE_FORMAT(STR_TO_DATE(fecha_fin_experiencia_laboral,'%Y-%m-%d'),'%d/%m/%Y') as fecha_termino FROM experiencia_laboral,ciudad WHERE experiencia_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND id_experiencia_laboral = '".$id."';")){
                         return $query->row();
                        } else {
                        return FALSE;
                        }
                    $this->db_lectura->close();
                }
                
                function editar_experiencia_laboral($id,$ciudad,$empresa,$cargo,$tipo_cargo,$sueldo,$fecha_inicio,$fecha_termino, $alpresente,$descripcion,$referencia,$url){
                    
                    $meses = 0;
                    
                    if($url == ''){
                        if($this->db_escritura->query("UPDATE `experiencia_laboral` SET `cargo_experiencia_laboral`='".$cargo."', `empresa_experiencia_laboral`='".$empresa."', `descripcion_experiencia_laboral`='".$descripcion."', `fecha_inicio_experiencia_laboral`=DATE_FORMAT(STR_TO_DATE('".$fecha_inicio."','%d/%m/%Y'),'%Y-%m-%d'), `fecha_fin_experiencia_laboral`=DATE_FORMAT(STR_TO_DATE('".$fecha_termino."','%d/%m/%Y'),'%Y-%m-%d'), `alpresente_experiencia_laboral`='".$alpresente."', `sueldo_bruto_experiencia_laboral`='".$sueldo."', `nombre_referencia_experiencia_laboral`='".$referencia."', `tipo_cargo_experiencia_laboral`='".$tipo_cargo."', `ciudad_id_ciudad`='".$ciudad."', `meses_experiencia_laboral`='".$meses."' WHERE `id_experiencia_laboral`='".$id."';")){
                        return TRUE;
                    }else{
                        echo FALSE;
                    }
                    }else{
                        if($this->db_escritura->query("UPDATE `experiencia_laboral` SET `cargo_experiencia_laboral`='".$cargo."', `empresa_experiencia_laboral`='".$empresa."', `descripcion_experiencia_laboral`='".$descripcion."', `fecha_inicio_experiencia_laboral`=DATE_FORMAT(STR_TO_DATE('".$fecha_inicio."','%d/%m/%Y'),'%Y-%m-%d'), `fecha_fin_experiencia_laboral`=DATE_FORMAT(STR_TO_DATE('".$fecha_termino."','%d/%m/%Y'),'%Y-%m-%d'), `alpresente_experiencia_laboral`='".$alpresente."', `sueldo_bruto_experiencia_laboral`='".$sueldo."', `nombre_referencia_experiencia_laboral`='".$referencia."', `url_referencia_experiencia_laboral`='".$url."', `tipo_cargo_experiencia_laboral`='".$tipo_cargo."', `ciudad_id_ciudad`='".$ciudad."', `meses_experiencia_laboral`='".$meses."' WHERE `id_experiencia_laboral`='".$id."';")){
                        return TRUE;
                    }else{
                        echo FALSE;
                    }
                    }
                }
                
                function nueva_empresa_experiencia($nombre,$ciudad){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("Select nueva_empresa_experiencia('".$nombre."','".$ciudad."') as id_empresa_experiencia")->row()){
                                return $query->id_empresa_experiencia;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                }
        
                function nuevo_cargo_experiencia($nombre,$codigo){
                    
                        $this->db_escritura->reconnect();
                            if($this->db_escritura->query("Select nuevo_cargo_experiencia('".$nombre."','".$codigo."') as cargo_experiencia")){
                                return TRUE;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                }
        
        
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //////////////////////////////////////      C O N O C I M I E N T O   /////////////////////////////////////////////        
                    function agregar_conocimiento($id,$nombre,$descripcion,$porcentaje,$conocimiento){                        
                        $this->db_lectura->reconnect();
                            if($query=$this->db_escritura->query("SELECT count(*) as cantidad FROM trabajador_laboral_conocimiento 
                            WHERE conocimiento_id_conocimiento = '".$conocimiento."' AND trabajador_laboral_id_trabajador_laboral = '".$id."';")->row()){
                                $this->db_lectura->close();
                                if($query->cantidad == 0){
                                    $this->db_escritura->reconnect();
                                        if($this->db_escritura->query("INSERT INTO `trabajador_laboral_conocimiento` (`nivel_trabajador_laboral_conocimiento`, `trabajador_laboral_id_trabajador_laboral`, `conocimiento_id_conocimiento`) VALUES ('".$porcentaje."', '".$id."', '".$conocimiento."');")){
                                            return TRUE.",".$this->db_escritura->insert_id();
                                        } else {
                                            return FALSE;
                                        }
                                    $this->db_escritura->close();
                            }else{
                                return "3,0"; /////// EXISTE////////
                                }
                        }else{
                                $this->db_lectura->close();
                            }
                        
                    }
        
                    function nuevo_conocimiento($nombre){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("Select nuevo_conocimiento('".$nombre."') as id_conocimiento")->row()){
                                return $query->id_conocimiento;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                    }
        
                    function eliminar_conocimiento($fila_conocimiento,$id_conocimiento,$id_trabajador){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("DELETE FROM `trabajador_laboral_conocimiento` WHERE `id_trabajador_laboral_conocimiento`='".$fila_conocimiento."';")){
                                if($query = $this->db_escritura->query("DELETE FROM `trabajador_laboral_conocimiento` WHERE `conocimiento_id_conocimiento`='".$id_conocimiento."' AND `trabajador_laboral_id_trabajador_laboral`='".$id_trabajador."';")){
                                    return TRUE;
                                } else {
                                    return FALSE;
                                }
                            } else {
                                return FALSE;
                            }

                        $this->db_escritura->close();
                    }
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                ///////////////////////////////////////////      I D I O M A   ////////////////////////////////////////////////////        
                    function agregar_idioma($id,$nombre,$porcentaje_oral,$porcentaje_escrito,$idioma){                        
                        $this->db_lectura->reconnect();
                            if($query=$this->db_escritura->query("SELECT count(*) as cantidad FROM trabajador_laboral_idioma 
                            WHERE idioma_id_idioma = '".$idioma."' AND trabajador_laboral_id_trabajador_laboral = '".$id."';")->row()){
                                $this->db_lectura->close();
                                if($query->cantidad == 0){
                                    $this->db_escritura->reconnect();
                                        if($this->db_escritura->query("INSERT INTO `trabajador_laboral_idioma` (`porcentaje_oral_trabajador_laboral_conocimiento`, `porcentaje_escrito_trabajador_laboral_conocimiento`, `trabajador_laboral_id_trabajador_laboral`, `idioma_id_idioma`) VALUES ('".$porcentaje_oral."', '".$porcentaje_escrito."', '".$id."', '".$idioma."');")){
                                            return TRUE.",".$this->db_escritura->insert_id();
                                        } else {
                                            return FALSE;
                                        }
                                    $this->db_escritura->close();
                            }else{
                                return "3,0"; /////// EXISTE////////
                                }
                        }else{
                                $this->db_lectura->close();
                            }
                    }
        
                    function eliminar_idioma($fila_idioma){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("DELETE FROM `trabajador_laboral_idioma` WHERE `id_trabajador_laboral_idioma`='".$fila_idioma."';")){
                                return TRUE;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                    }
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
                ///////////////////////////////////////////      I D I O M A   ////////////////////////////////////////////////////        
                    function agregar_documentacion($id,$codigo,$fecha,$titulo,$url){                        
                        $this->db_escritura->reconnect();
                            if($this->db_escritura->query("INSERT INTO `trabajador_laboral_documentacion` (`codigo_trabajador_laboral_documentacion`, `titulo_trabajador_laboral_documentacion`, `fecha_subida_trabajador_laboral_documentacion`, `url_trabajador_laboral_documentacion`, `trabajador_laboral_id_trabajador_laboral`) VALUES ('".$codigo."', '".$titulo."', '".$fecha."', '".$url."', '".$id."');")){
                                return TRUE.",".$this->db_escritura->insert_id();
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                    }
        
                    function eliminar_documentacion($fila_documento,$url_documento){
                        $this->db_escritura->reconnect();
                            if($query = $this->db_escritura->query("DELETE FROM `trabajador_laboral_documentacion` WHERE `id_trabajador_laboral_documentacion`='".$fila_documento."';")){
                                unlink($url_documento);
                                return TRUE;
                            } else {
                                return FALSE;
                            }
                        $this->db_escritura->close();
                    }
                ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        
        //////////////////////////////  Q U E R Y S   D E   L E C T U R A   //////////////////////////////
            function validad_trabajador_laboral($usuario,$pass){
                $this->db_escritura->reconnect();
                    $query = $this->db->query("call validar_trabajador_laboral('".$usuario."')");
                    if($query->num_rows() > 0){
                        $row = $query->row();
                            if($this->encryption->decrypt($row->password_trabajador_laboral) == $pass){
                                $datos = array(
                                    'sigesco_laboral_nombre' => $row->nombre_trabajador_laboral,
                                    'sigesco_laboral_paterno' => $row->paterno_trabajador_laboral,
                                    'sigesco_laboral_id' => $row->id_trabajador_laboral,
                                    'sigesco_laboral_id' => $row->id_trabajador_laboral,
                                    'sigesco_laboral_foto' => $row->foto_perfil_trabajador_laboral,
                                    'sigesco_laboral_aviso' => 0,
                                    'sigesco_laboral_conectado' => TRUE
                                );
                                $this->session->set_userdata($datos);

                            return TRUE;

                            } else{
                                
                                return FALSE;
                            }

                    } else {

                    return FALSE;
                    }
                
                $this->db_escritura->close();
            }        
        
            function datos_trabajador_laboral($id_trabajador){
                $this->db_lectura->reconnect();
                 if($query = $this->db->query("SELECT trabajador_laboral.*, nombre_ciudad,DATE_FORMAT(fecha_nacimiento_trabajador_laboral,'%d-%m-%Y') as nacimiento, (replace(replace(concat(if(a1_licencia_conducir_trabajador_laboral !='','A1*',''),
                 if(a2_licencia_conducir_trabajador_laboral !='','*A2*',''),
                 if(a3_licencia_conducir_trabajador_laboral !='','*A3*',''),
                 if(a4_licencia_conducir_trabajador_laboral !='','*A4*',''),
                 if(a5_licencia_conducir_trabajador_laboral !='','*A5*',''),
                 if(b_licencia_conducir_trabajador_laboral !='','*B',''),
                 if(c_licencia_conducir_trabajador_laboral !='','*C',''),
                 if(d_licencia_conducir_trabajador_laboral !='','*D','')),'**',' - '),'*','')) as licencia FROM trabajador_laboral,ciudad where trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND trabajador_laboral.id_trabajador_laboral ='".$id_trabajador."';")){
                     return $query->row();
                    } else {

                    return FALSE;
                    }
                $this->db_lectura->close();
            }
        
            function experiencia_laboral($id_trabajador){
                $this->db_lectura->reconnect();
                 if($query = $this->db->query("SELECT experiencia_laboral.*,nombre_ciudad,DATE_FORMAT(STR_TO_DATE(fecha_inicio_experiencia_laboral,'%Y-%m-%d'),'%d/%m/%Y') as fecha_inicio,DATE_FORMAT(STR_TO_DATE(fecha_fin_experiencia_laboral,'%Y-%m-%d'),'%d/%m/%Y') as fecha_termino FROM experiencia_laboral,ciudad WHERE experiencia_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."';")){
                     return $query->result();
                    } else {
                    return FALSE;
                    }
                $this->db_lectura->close();
            }
        
            function conocimientos_trabajador($id_trabajador){
                $this->db_lectura->reconnect();
                 if($query = $this->db_lectura->query("SELECT trabajador_laboral_conocimiento.*,conocimiento.nombre_conocimiento 
                 FROM trabajador_laboral_conocimiento,conocimiento 
                 WHERE trabajador_laboral_conocimiento.conocimiento_id_conocimiento = conocimiento.id_conocimiento AND
                 trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."' ORDER BY nivel_trabajador_laboral_conocimiento desc,nombre_conocimiento asc;")){
                     return $query->result();
                } else {
                    return FALSE;
                }
                $this->db_lectura->close();
            }
        
            function idiomas_trabajador($id_trabajador){
                $this->db_lectura->reconnect();
                 if($query = $this->db_lectura->query("SELECT trabajador_laboral_idioma.*,nombre_idioma 
                 FROM trabajador_laboral_idioma,idioma 
                 WHERE trabajador_laboral_idioma.idioma_id_idioma = idioma.id_idioma AND
                 trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."' ORDER BY nombre_idioma asc;")){
                     return $query->result();
                } else {
                    return FALSE;
                }
                $this->db_lectura->close();
            }
        
            function documentos_trabajador($id_trabajador){
                $this->db_lectura->reconnect();
                 if($query = $this->db_lectura->query("SELECT trabajador_laboral_documentacion.*, DATE_FORMAT(STR_TO_DATE(fecha_subida_trabajador_laboral_documentacion,'%Y-%m-%d'),'%d/%m/%Y') as fecha FROM sigesco_laborum.trabajador_laboral_documentacion where trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."' ORDER BY(titulo_trabajador_laboral_documentacion) ASC;")){
                     return $query->result();
                } else {
                    return FALSE;
                }
                $this->db_lectura->close();
            }
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        
	}
?>