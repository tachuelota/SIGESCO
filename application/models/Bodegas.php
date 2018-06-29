<?php
	class Bodegas extends CI_Model {
        
        private $db_escritura;
        private $db_lectura;
                
		public function __construct()
		{
			parent::__construct();
            $this->db_escritura = $this->load->database('escritura', TRUE); 
            $this->db_lectura = $this->load->database('lectura', TRUE);             
		}
        /////////////////////////////////////////////// E S C R I T U R A ///////////////////////////////////////////////////////////////////////
            function ingreso_bodega($fecha_ingreso,$hora_ingreso,$valor_neto,$cantidad,$id_producto,$id_bodega){
                $this->db_escritura->reconnect();
                    if($this->db_escritura->query("INSERT INTO `en_bodega` (`fecha_ingreso_en_bodega`, `hora_ingreso_en_bodega`, `valor_neto_en_bodega`, `cantidad_en_bodega`, `producto_id_producto`, `bodega_id_bodega`) VALUES ('".$fecha_ingreso."', '".$hora_ingreso."', '".$valor_neto."', '".$cantidad."', '".$id_producto."', '".$id_bodega."');")){
                       return TRUE; 
                    }else{
                        return FALSE;
                    }
                    
                $this->db_escritura->close();
            }
        
            function prestar_bodega($id_producto,$cantidad,$fecha_prestamo,$fecha_devolucion,$id_faena,$id_responsable,$id_quien_retira,$hora,$estado,$id_bodega){
                
                $this->db_lectura->reconnect();
                    $DIFERENCIA = 0.00; //////// CUENTA LO QUE QUEDA ///////
                    $AUXILIAR = 0.00;
                    $CANTIDAD_LINEA = 0.00;
                    $AUXILIAR = $cantidad; //////// CUENTA LO QUE FALTA POR RESTAR ///////////
                    $LISTAS = $this->cantidad_articulos_en_bodega($id_producto,$id_bodega);
                
                    foreach ($LISTAS as $LISTA)
                    {
                        $CANTIDAD_LINEA = $LISTA->cantidad_en_bodega;
                        if(($CANTIDAD_LINEA >= $AUXILIAR) && ($AUXILIAR >0)){
                            ///////////////////// HAY MAS EN BODEGA QUE LA SOLICITUD //////////
                            $DIFERENCIA = number_format(round((float)($CANTIDAD_LINEA-$AUXILIAR),2),2);
                            $AUXILIAR = 0;
                            /////////////////   A C T U A L I Z A R  I N V E N T A R I O   B O D E G A    ///////////////////////
                            $this->db_escritura->reconnect();
                               if($this->db_escritura->query("
                                    UPDATE `en_bodega` 
                                    SET `cantidad_en_bodega`='".$DIFERENCIA."'
                                    WHERE `id_en_bodega`='".$LISTA->id_en_bodega."';")){
                                   return TRUE; 
                                }else{
                                    return FALSE;
                                }
                            $this->db_escritura->close();
                            /////////////////////////////////////////////////////////////////////////////////////////////////////
                        }else{
                            
                            $AUXILIAR = number_format(round((float)($AUXILIAR - $CANTIDAD_LINEA),2),2);
                            
                            /////////////////   A C T U A L I Z A R  I N V E N T A R I O   B O D E G A    ///////////////////////
                            $this->db_escritura->reconnect();
                               if($this->db_escritura->query("
                                    UPDATE `en_bodega` 
                                    SET `cantidad_en_bodega`='0.00'
                                    WHERE `id_en_bodega`='".$LISTA->id_en_bodega."';")){
                                }
                            $this->db_escritura->close();
                            /////////////////////////////////////////////////////////////////////////////////////////////////////
                        }
                        
                    }
                $this->db_lectura->close();
                
                $this->db_escritura->reconnect();
                    if($this->db_escritura->query("
                    INSERT INTO `prestamo_bodega` (
                        `cantidad_prestamo_bodega`, 
                        `fecha_prestamo_bodega`, 
                        `hora_prestamo_bodega`, 
                        `fecha_prevista_devolucion_prestamo_bodega`, 
                        `estado_prestamo_bodega`, 
                        `producto_id_producto`,
                        `faena_minera_id_faena_minera`, 
                        `ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista`, `ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista1`,
                        `bodega_id_bodega`) 
                    VALUES (
                        '".$cantidad."', 
                        '".$fecha_prestamo."', 
                        '".$hora."', 
                        '".$fecha_devolucion."', 
                        ".$estado.",
                        ".$id_producto.",
                        ".$id_faena.",
                        ".$id_responsable.", 
                        ".$id_quien_retira.",
                        ".$id_bodega.");")){
                       return TRUE; 
                    }else{
                        return FALSE;
                    }
            
                $this->db_escritura->close();
                
            }
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////// L E C T U R A //////////////////////////////////////////////////////////////////
        
            function lista_prestamos_bodega($id_bodega){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT prestamo_bodega.*,
                        (SELECT CONCAT(COALESCE(nombre_ejecutivo_empresa_contratista,''),' ', COALESCE(paterno_ejecutivo_empresa_contratista,''),' ',COALESCE(materno_ejecutivo_empresa_contratista,'')) 
                        FROM ejecutivo_empresa_contratista
                        WHERE id_ejecutivo_empresa_contratista = ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista) as responsable,
                        (SELECT CONCAT(COALESCE(nombre_ejecutivo_empresa_contratista,''),' ', COALESCE(paterno_ejecutivo_empresa_contratista,''),' ',COALESCE(materno_ejecutivo_empresa_contratista,'')) 
                        FROM ejecutivo_empresa_contratista
                        WHERE id_ejecutivo_empresa_contratista = ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista1) as quien_retira,
                        DATE_FORMAT(fecha_prestamo_bodega,'%d-%m-%Y') as fecha_prestamos,
                        DATE_FORMAT(fecha_prevista_devolucion_prestamo_bodega,'%d-%m-%Y') as fecha_prevista_devolucion,
                        DATE_FORMAT(fecha_efectiva_devolucion_prestamo_bodega,'%d-%m-%Y') as fecha_efectiva_devolucion,
                        nombre_producto,cantidad_prestamo_bodega
                        FROM prestamo_bodega,ejecutivo_empresa_contratista,sucursal_empresa_contratista,producto
                        WHERE prestamo_bodega.ejecutivo_empresa_contratista_id_ejecutivo_empresa_contratista = 
                        ejecutivo_empresa_contratista.id_ejecutivo_empresa_contratista AND
                        prestamo_bodega.producto_id_producto = producto.id_producto AND
                        ejecutivo_empresa_contratista.sucursal_empresa_contratista_id_sucursal_empresa_contratista =
                        sucursal_empresa_contratista.id_sucursal_empresa_contratista AND
                        bodega_id_bodega = ".$id_bodega."
                        ORDER BY (id_prestamo_bodega) ASC");
                    return $query->result();
                $this->db_lectura->close();
            }
        
            function lista_bodegas($id_empresa){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT * FROM bodega,empresa_contratista_bodega
                        WHERE bodega.id_bodega = empresa_contratista_bodega.bodega_id_bodega AND
                        empresa_contratista_bodega.empresa_contratista_id_empresa_contratista = ".$id_empresa."
                        ORDER BY (nombre_bodega) ASC");
                    return $query->result();
                $this->db_lectura->close();
            }
        
            function lista_productos_bodega($id_bodega){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT distinct(id_producto),producto.nombre_producto,unidad_medida_producto,estado_producto,marca_producto, modelo_producto ,valor_neto_en_bodega,valor_total_neto_en_bodega,cantidad_en_bodega,ubicacion_en_bodega,nombre_bodega, DATE_FORMAT(fecha_ingreso_en_bodega,'%d-%m-%Y') as fecha_ingreso
                    FROM producto, en_bodega,bodega
                    WHERE en_bodega.producto_id_producto = producto.id_producto AND
                    en_bodega.bodega_id_bodega = bodega.id_bodega AND
                    en_bodega.bodega_id_bodega = ".$id_bodega." and
                    estado_producto = 1
                    ORDER BY (nombre_producto) ASC");
                    return $query->result();
                $this->db_lectura->close();
            }
        
            function lista_productos_en_bodega($id_bodega){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("SELECT distinct(id_producto),producto.nombre_producto
                    FROM producto, en_bodega,bodega
                    WHERE en_bodega.producto_id_producto = producto.id_producto AND
                    en_bodega.bodega_id_bodega = bodega.id_bodega AND
                    en_bodega.bodega_id_bodega = ".$id_bodega." and
                    estado_producto = 1
                    ORDER BY (nombre_producto) ASC");
                    return $query->result();
                $this->db_lectura->close();
            }
        
            function chequear_cantidad_articulo($cantidad,$id_producto,$id_bodega){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("select chequear_cantidad_articulo(".$cantidad.",".$id_producto.",".$id_bodega.") as cantidad;")->row();
                    return $query->cantidad;
                $this->db_lectura->close();
            }
        
            function cantidad_articulos_en_bodega($id_producto,$id_bodega){
                $this->db_lectura->reconnect();
                    $query = $this->db_lectura->query("
                        SELECT id_en_bodega,cantidad_en_bodega,fecha_ingreso_en_bodega,valor_neto_en_bodega FROM sigesco_laborum.en_bodega
                        WHERE bodega_id_bodega = ".$id_bodega." AND producto_id_producto = ".$id_producto."
                        ORDER BY (fecha_ingreso_en_bodega) ASC;");
                    return $query->result();
                $this->db_lectura->close();
            }
        
        
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}
?>