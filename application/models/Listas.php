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
        ////////////////////////////////////////////////////////////////////////////////////////////////////
	}
?>