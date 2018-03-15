<?php
	class Listas extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE); 
            
            
		}
		
		function lista_ciudades(){
            $this->db_lectura->reconnect();
				$query = $this->db_lectura->query("SELECT * FROM ciudad ORDER BY (nombre_ciudad) ASC;");
					return $query->result();
				$query->free_result();
			$this->db_lectura->close();
		}
        
        function lista_trabajadores($palabra,$ciudad){
            $this->db_lectura->reconnect();
				$query = $this->db_lectura->query("
                    Select trabajador_laboral.*,nombre_ciudad
                    FROM trabajador_laboral,ciudad
                    WHERE trabajador_laboral.ciudad_id_ciudad = '".$ciudad."' AND
                    trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND
                    Match(presentacion_trabajador_laboral) AGAINST ('*".$palabra."*')

                    UNION

                    Select trabajador_laboral.*,nombre_ciudad
                    FROM trabajador_laboral,trabajador_laboral_educacion_media,ciudad
                    WHERE 
                    trabajador_laboral.id_trabajador_laboral = trabajador_laboral_educacion_media.trabajador_laboral_id_trabajador_laboral AND
                    trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND
                    trabajador_laboral.ciudad_id_ciudad = '".$ciudad."' AND
                    Match(especialidad_trabajador_laboral_educacion_media) AGAINST ('*".$palabra."*')
                    
                    UNION

                    Select trabajador_laboral.*,nombre_ciudad
                    FROM trabajador_laboral,trabajador_laboral_educacion_universitaria,ciudad
                    WHERE 
                    trabajador_laboral.id_trabajador_laboral = trabajador_laboral_educacion_universitaria.trabajador_laboral_id_trabajador_laboral AND
                    trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND
                    trabajador_laboral.ciudad_id_ciudad = '".$ciudad."' AND
                    Match(especialidad_trabajador_laboral_educacion_universitaria) AGAINST ('*".$palabra."*')

                    UNION

                    Select trabajador_laboral.*,nombre_ciudad
                    FROM trabajador_laboral,educacion_posterior,ciudad
                    WHERE 
                    trabajador_laboral.id_trabajador_laboral = educacion_posterior.trabajador_laboral_id_trabajador_laboral AND
                    trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND
                    trabajador_laboral.ciudad_id_ciudad = '".$ciudad."' AND
                    Match(especialidad_educacion_posterior) AGAINST ('*".$palabra."*')

                    UNION

                    Select trabajador_laboral.*,nombre_ciudad
                    FROM trabajador_laboral,experiencia_laboral,ciudad
                    WHERE 
                    trabajador_laboral.id_trabajador_laboral = experiencia_laboral.trabajador_laboral_id_trabajador_laboral AND
                    trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND
                    trabajador_laboral.ciudad_id_ciudad = '".$ciudad."' AND
                    Match(descripcion_experiencia_laboral) AGAINST ('*".$palabra."*')

                    UNION
					
                    Select trabajador_laboral.*,nombre_ciudad
                    FROM trabajador_laboral,educacion_posterior,ciudad
                    WHERE 
                    trabajador_laboral.id_trabajador_laboral = educacion_posterior.trabajador_laboral_id_trabajador_laboral AND
                    trabajador_laboral.ciudad_id_ciudad = ciudad.id_ciudad AND
                    trabajador_laboral.ciudad_id_ciudad = '".$ciudad."' AND
                    Match(especialidad_educacion_posterior) AGAINST ('*".$palabra."*')");
					return $query->result();
				$query->free_result();
			$this->db_lectura->close();
		}
        
        
        /////////////////////////     B A C K - E N D    I N S T I T U C I O N   ///////////////////////////
            function lista_instituciones_basicas(){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM educacion_basica order by (nombre_educacion_basica) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
            
            function lista_instituciones_medias(){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM educacion_media order by (nombre_educacion_media) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        
        /////////////////////////     B A C K - E N D    E D U C A C I O N  ////////////////////////////////
            function lista_educacion_basica($id_trabajador){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT trabajador_laboral_educacion_basica.*,nombre_educacion_basica FROM trabajador_laboral_educacion_basica, educacion_basica WHERE educacion_basica.id_educacion_basica = trabajador_laboral_educacion_basica.educacion_basica_id_educacion_basica AND trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."';");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function lista_educacion_media($id_trabajador){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT trabajador_laboral_educacion_media.*,nombre_educacion_media 
                    FROM trabajador_laboral_educacion_media, educacion_media 
                    WHERE educacion_media.id_educacion_media = trabajador_laboral_educacion_media.educacion_media_id_educacion_media AND trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."';");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function lista_educacion_universitaria($id_trabajador){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT trabajador_laboral_educacion_universitaria.*,nombre_educacion_universitaria 
                    FROM trabajador_laboral_educacion_universitaria, educacion_universitaria 
                    WHERE educacion_universitaria.id_educacion_universitaria = trabajador_laboral_educacion_universitaria.educacion_universitaria_id_educacion_universitaria AND trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."';");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function lista_educacion_posterior($id_trabajador){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT educacion_posterior.*, nombre_educacion_universitaria,nombre_tipo_educacion_posterior,replace(nota_educacion_posterior,'.',',') as nota
                    FROM educacion_posterior,educacion_universitaria ,tipo_educacion_posterior
                    WHERE educacion_posterior.educacion_universitaria_id_educacion_universitaria = educacion_universitaria.id_educacion_universitaria AND
                    educacion_posterior.tipo_educacion_posterior_id_tipo_educacion_posterior = tipo_educacion_posterior.id_tipo_educacion_posterior AND
                    trabajador_laboral_id_trabajador_laboral = '".$id_trabajador."';");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function buscar_institucion_basica($id_ciudad){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT  id_educacion_basica as id, nombre_educacion_basica as name, id_educacion_basica as value  FROM educacion_basica WHERE ciudad_id_ciudad = '".$id_ciudad."' ORDER BY (nombre_educacion_basica) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function buscar_institucion_media($id_ciudad){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT  id_educacion_media as id, nombre_educacion_media as name, id_educacion_media as value  FROM educacion_media WHERE ciudad_id_ciudad = '".$id_ciudad."' ORDER BY (nombre_educacion_media) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
            
            function buscar_institucion_universitaria($id_ciudad){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT  id_educacion_universitaria as id, nombre_educacion_universitaria as name, id_educacion_universitaria as value  FROM educacion_universitaria WHERE ciudad_id_ciudad = '".$id_ciudad."' ORDER BY (nombre_educacion_universitaria) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function buscar_institucion_posterior($id_ciudad){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT  id_educacion_universitaria as id, nombre_educacion_universitaria as name, id_educacion_universitaria as value  FROM educacion_universitaria WHERE ciudad_id_ciudad = '".$id_ciudad."' ORDER BY (nombre_educacion_universitaria) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////     B A C K - E N D    E X P   L A B O R A L  ////////////////////////////////
            function lista_conocimiento(){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM conocimiento order by (nombre_conocimiento) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function lista_empresas_experiencia($id_ciudad){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT nombre_empresa_experiencia_laboral as name
                        FROM empresa_experiencia_laboral 
                        WHERE ciudad_id_ciudad = ".$id_ciudad."
                        ORDER BY (nombre_empresa_experiencia_laboral) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
            function lista_cargos_experiencia_laboral(){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT * 
                        FROM cargo_experiencia_laboral 
                        ORDER BY (nombre_cargo_experiencia_laboral) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////     B A C K - E N D    I D I O M A   ///////////////////////////////////
            function lista_idiomas(){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM idioma order by (nombre_idioma) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////     B A C K - E N D    E J E C U T I V O   ///////////////////////////////////
            function lista_trabajadores_empresa_contratista($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT ejecutivo_empresa_contratista.*, nombre_ciudad,nombre_tipo_ejecutivo_ec 
                        FROM ejecutivo_empresa_contratista,sucursal_empresa_contratista,ciudad, tipo_ejecutivo_ec
                        WHERE  ejecutivo_empresa_contratista.sucursal_empresa_contratista_id_sucursal_empresa_contratista = sucursal_empresa_contratista.id_sucursal_empresa_contratista AND
                        sucursal_empresa_contratista.ciudad_id_ciudad = ciudad.id_ciudad AND
                        ejecutivo_empresa_contratista.tipo_ejecutivo_ec_id_tipo_ejecutivo_ec = tipo_ejecutivo_ec.id_tipo_ejecutivo_ec AND
                        empresa_contratista_id_empresa_contratista = '".$id_empresa."'
                        ORDER BY(nombre_ejecutivo_empresa_contratista) ASC;");
                        return $query->result();
                    $query->free_result();
                $this->db_lectura->close();
            }
        ////////////////////////////////////////////////////////////////////////////////////////////////////
	}
?>