<?php
	class Productos extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE);             
		}
        /////////////////////////////////////////////// E S C R I T U R A ///////////////////////////////////////////////////////////////////////
            function crear_producto($codigo,$nombre,$descripcion,$unidad,$id_subcategoria,$id_empresa,$marca,$modelo){
                $this->db_escritura->reconnect();
                    if($query = $this->db_escritura->query("call crear_producto('".$codigo."','".$nombre."', '".$unidad."','".$descripcion."',".$id_subcategoria.",".$id_empresa.", '".$marca."','".$modelo."');")){
                       return $query; 
                    }else{
                        return FALSE;
                    }
                    
                $this->db_escritura->close();
            }
        
            function crear_subcategoria($codigo,$nombre,$descripcion,$id_categoria,$id_empresa){
                $this->db_escritura->reconnect();
                    if($query=$this->db_escritura->query("call crear_subcategoria('".$codigo."','".$nombre."','".$descripcion."',".$id_categoria.",".$id_empresa.");")){
                       return $query; 
                    }else{
                        return FALSE;
                    }
                    
                $this->db_escritura->close();
            }
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////// L E C T U R A /////////////////////////////////////////////////////////////////////////////
        
            function lista_categorias_empresa($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT * FROM categoria_producto ORDER BY (nombre_categoria_producto) ASC;
                        ");
                    return $query->result();
                $this->db_lectura->close();
            }
            
            function lista_subcategorias_empresa($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT subcategoria_producto.* 
                        FROM subcategoria_producto,subcategoria_empresa_contratista
                        WHERE subcategoria_producto.id_subcategoria_producto = subcategoria_empresa_contratista.subcategoria_producto_id_subcategoria_producto AND
                        subcategoria_empresa_contratista.empresa_contratista_id_empresa_contratista = ".$id_empresa." AND
                        estado_subcategoria_producto = 1
                        ORDER BY (nombre_subcategoria_producto);");
                    return $query->result();
                $this->db_lectura->close();
            }
        
            function lista_productos($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT * FROM producto WHERE estado_producto = 1 ORDER BY (nombre_producto) ASC;");
                    return $query->result();
                $this->db_lectura->close();
            }
        
            
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}
?>