<?php
	class Personal_MO extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE); 
            
            
		}
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function agregar_modulo($id_modulo,$id_trabajador){
            $this->db_escritura->reconnect();
            if($this->db_escritura->query("")){
                return TRUE;
            }else{
                return FALSE;
            }
            
            $this->db_escritura->close();
        }
        
        function eliminar_modulo($id_modulo,$id_trabajador){
            $this->db_escritura->reconnect();
            if($this->db_escritura->query("")){
                return TRUE;
            }else{
                return FALSE;
            }
            
            $this->db_escritura->close();
        }
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////   L E C T U R A S   ////////////////////////////////////////////////////////
        function lista_personal($id_empresa){
            $this->db_lectura->reconnect();
            $query = $this->db_lectura->query("
                SELECT ejecutivo_empresa_contratista.*,nombre_ciudad as nombre_sucursal, nombre_tipo_ejecutivo_ec,
                IF(estado_ejecutivo_empresa_contratista = 1,'Activo','Suspendido') as estado
                FROM ejecutivo_empresa_contratista,sucursal_empresa_contratista,ciudad,tipo_ejecutivo_ec
                WHERE ejecutivo_empresa_contratista.sucursal_empresa_contratista_id_sucursal_empresa_contratista =
                sucursal_empresa_contratista.id_sucursal_empresa_contratista AND
                ejecutivo_empresa_contratista.tipo_ejecutivo_ec_id_tipo_ejecutivo_ec = tipo_ejecutivo_ec.id_tipo_ejecutivo_ec AND
                sucursal_empresa_contratista.ciudad_id_ciudad = ciudad.id_ciudad AND
                sucursal_empresa_contratista.empresa_contratista_id_empresa_contratista = '".$id_empresa."'
                ORDER BY nombre_ejecutivo_empresa_contratista ASC, paterno_ejecutivo_empresa_contratista asc");
            return $query->result();
            $this->db_lectura->close();
        }
        
        function lista_privilegios($id_personal,$id_empresa){
            $this->db_lectura->reconnect();
            $query = $this->db_lectura->query('
            SELECT CONCAT(\'[\',(
                select group_concat(\'{"modulo":"\',nombre_modulo,\'","id_modulo":"\',id_modulo,\'","submodulos":\',
                        IF(url_modulo = "#",(CONCAT(\'[\',(
                            select group_concat(\'{"nombre":"\',nombre_submodulos,\'","id_submodulo":"\',id_submodulos,\'","valido":"\',(if(ejecutivo_ec_submodulo.ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista = '.$id_personal.',"SI","NO")),\'"}\') 
                            FROM submodulos
                            LEFT JOIN ejecutivo_ec_submodulo
                            ON submodulos.id_submodulos = ejecutivo_ec_submodulo.submodulos_id_submodulos
                            WHERE submodulos.modulo_id_modulo = id_modulo),\']\')),"\"\"")
                            ,\',"valido":"\',(if(ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista = '.$id_personal.',"SI","NO")),\'"}\'  
                ORDER BY (id_modulo))),\']\') as modulo
                FROM empresa_contratista_modulo
                LEFT JOIN ejecutivo_ec_modulo
                ON empresa_contratista_modulo.modulo_id_modulo = ejecutivo_ec_modulo.modulo_id_modulo
                LEFT JOIN modulo
                ON empresa_contratista_modulo.modulo_id_modulo = modulo.id_modulo
                WHERE empresa_contratista_id_empresa_contratista = '.$id_empresa.';')->row();
            return $query->modulo;
            $this->db_lectura->close();
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}
?>