<style>
    input[type="search"] {
        height:30px;
        width: 100%;
    }
    
    .input-sm{
        width: 100%;
    }
    .separar{
        margin-bottom: 15px;
    }
    
    .fa{
        color:#2a6496;
    }
    
    
    .fa:hover{
       text-shadow: 1px 1px 1px white;
    }

    
    .fa{
        color:white;
    }
    
    
</style>

<div id="page-content" class="candidate-profile">
    <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="title-overlay"></div>
        <div class="container">
          <div class="title-breadcrumb clearfix">
            <h1>Lista de Artículos en Bodega</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>empresa">Inicio</a></li>
              <li class="active">Bodega/Lista en Bodega</li>
            </ol>
          </div> <!-- end .title-breadcrumb -->
        </div> <!-- end .container -->
      </div> <!-- end .header-nav-bar -->
    <div class="container" style="width:100%">
        <a id="download_file" href="#" download></a>
        <div id="candidate-profile" style="padding:0px;">
            <div class="row">
                  <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <label>Seleccione Bodega</label>
                                <select id="bodega_sigesco" name="bodega_sigesco">
                                    <option name='inicio_option' value="0" readonly>Bodega</option>
                                    <?php
                                            foreach($bodegas as $bodega){
                                    ?>
                                    <option onChange="seleccionar_faena(this.id)" value="<?=$bodega->id_bodega?>"><?=$bodega->nombre_bodega?></option>
                                    <?php   } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                  <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <table id="tabla_lista_en_bodega" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Unidad</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Cantidad</th>
                                    <th>Precio Neto</th>
                                    <th>Total Neto</th>
                                    <th>Ubicación</th>
                                    <th>Bodega</th>
                                </tr>
                            </thead>
                            <tbody>
                                 
                            </tbody>
                        </table>
                    </div> <!-- end .candidate-description -->
                  </div> <!-- end .9col grid layout -->
                <script>
                    if(($( window ).width()) > 480){
                        $(".datos_candidato").css('min-height',($('.motijob-sidebar').height()+40));
                        $(".datos_candidato").css('max-height',($('.motijob-sidebar').height()+40));
                        $(".tab-content").css('height','840');
                        $(".tab-content").css('overflow-y','scroll');
                        $(".tab-content").css('overflow-x','hidden');                            
                   }else{
                        $("h3").css('font-size','16px');
                   }
                </script>
            </div> <!-- end .row -->
        </div> <!-- end .tabe pane -->
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

<script>
$( document ).ready(function() { 
        
    $('#tabla_lista_en_bodega').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Artículos",
            "zeroRecords": "Sin Resultados - Lo Siento",
            "info": "Mostrando _PAGE_ Página de _PAGES_",
            "infoEmpty": "Sin Artículos",
            "infoFiltered": "(Filtrado de _MAX_ total Artículos)",
            "search":"",
            "paginate": {
                "previous": "Anterior",
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente"
            }
        },

    });
    
    //$("#botones_tabla").append('<button onClick="descargar_documentacion()" type="button" class="btn btn-success">Descargar</button>');
    $("#tabla_lista_en_bodega_filter").css("width","100%");
    $("#tabla_lista_en_bodega_filter label").css("width","100%");
    $("#tabla_lista_en_bodega_filter label input").css("width","100%");
    $("#tabla_lista_en_bodega_info").css("width","45%");
    $("#tabla_lista_en_bodega_paginate").css("width","100%");
    
    $( "#select_bodega_sigesco" ).click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>bodega/lista_productos_bodega',
                    data: { id_bodega: $("#input_bodega_sigesco").attr('valor')},
                    success: function(data){
                        if(data != false){
                           var datos = JSON.parse(data);
                             //$("#select_producto_bodega_sigesco li").remove();
                            $.each(datos, function( index, value ) {
                               
                            $('#tabla_lista_en_bodega').DataTable().row.add( [
                                datos[index].nombre_producto,
                                datos[index].unidad_medida_producto,
                                datos[index].marca_producto,
                                datos[index].modelo_producto,
                                datos[index].fecha_ingreso,
                                "$"+formatNumber.new(parseFloat((datos[index].cantidad_en_bodega)).toFixed(2)),
                                "$"+formatNumber.new(parseFloat((datos[index].valor_neto_en_bodega)).toFixed(2)),
                                "$"+formatNumber.new(parseFloat((datos[index].valor_total_neto_en_bodega)).toFixed(2)),
                                datos[index].ubicacion_en_bodega,
                                datos[index].nombre_bodega,
                                
                              ] ).draw( false )
                                 .node()
                                 .id = ('linea_prestamo'+index);
                            });
                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                });
    });
    
});
    
    

    
</script>