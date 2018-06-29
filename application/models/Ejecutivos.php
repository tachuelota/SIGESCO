<?php
	class Ejecutivos extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE); 
            
            
		}
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function agregar_lista_ejecutivo($codigo,$nombre,$descripcion,$fecha,$id_ejecutivo){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("
                INSERT INTO `lista_ejecutivo` (
                    `codigo_lista_ejecutivo`, 
                    `nombre_lista_ejecutivo`, 
                    `descripcion_lista_ejecutivo`, 
                    `fecha_lista_ejecutivo`, 
                    `ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista`) 
                VALUES (
                    '".$codigo."', 
                    '".$nombre."', 
                    '".$descripcion."', 
                    '".$fecha."', 
                    '".$id_ejecutivo."');
            ");
            
            return $this->db_escritura->insert_id();
            $this->db_escritura->close();
        }
        
        function agregar_trabajador_lista($id_lista,$id_trabajador,$fecha){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("
                INSERT INTO `lista_ejectivo_trabajador_laboral` (
                    `fecha_lista_ejectivo_trabajador_laboral`, 
                    `lista_ejecutivo_id_lista_ejecutivo`, 
                    `trabajador_laboral_id_trabajador_laboral`) 
                VALUES (
                    '".$fecha."', 
                    '".$id_lista."', 
                    '".$id_trabajador."');");
            
            return $this->db_escritura->insert_id();
            $this->db_escritura->close();
        }
        
        
        function enviar_mensaje_ejecutivo_trabajador($codigo,$titulo,$mensaje,$fecha,$hora,$id_trabajador,$id_ejecutivo){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("
                INSERT INTO `mensaje_trabajador` (
                    `codigo_mensaje_trabajador`, 
                    `titulo_mensaje_trabajador`, 
                    `cuerpo_mensaje_trabajador`, 
                    `fecha_mensaje_trabajador`, 
                    `hora_mensaje_trabajador`, 
                    `de_mensaje_trabajador`, 
                    `para_mensaje_trabajador`) 
                VALUES (
                    '".$codigo."', 
                    '".$titulo."', 
                    '".$mensaje."', 
                    '".$fecha."', 
                    '".$hora."', 
                    '".$id_ejecutivo."', 
                    '".$id_trabajador."');
");
            
            return $this->db_escritura->insert_id();
            $this->db_escritura->close();
        }
        
        function crear_documento_solitado($codigo,$titulo,$id_empresa,$id_trabajador){
            $this->db_escritura->reconnect();
            $query = $this->db_escritura->query("
                INSERT INTO `trabajador_laboral_documentacion` (
                    `codigo_trabajador_laboral_documentacion`, 
                    `titulo_trabajador_laboral_documentacion`, 
                    `solicitado_por_trabajador_laboral_documentacion`, 
                    `trabajador_laboral_id_trabajador_laboral`, 
                    `tipo_documentacion_trabajador_id_tipo_documentacion_trabajador`) 
                VALUES (
                    '".$codigo."', 
                    '".$titulo."', 
                    '".$id_empresa."', 
                    '".$id_trabajador."', 
                    '2');
");
            
            return $this->db_escritura->insert_id();
            $this->db_escritura->close();
        }
        
        
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////   L E C T U R A S   ////////////////////////////////////////////////////////
        function recuperar_url($id_documento){
            $this->db_lectura->reconnect();
            $query = $this->db_lectura->query("SELECT url_trabajador_laboral_documentacion FROM trabajador_laboral_documentacion WHERE id_trabajador_laboral_documentacion = '".$id_documento."'")->row();
            return $query->url_trabajador_laboral_documentacion;
            $this->db_lectura->close();
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}
?>