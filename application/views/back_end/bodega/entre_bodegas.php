<style>
    a{
        cursor: pointer;
    }
    
    .btn-circle.btn-lg {
      width: 40px;
      height: 40px;
      padding: 0px 14px;
      font-size: 18px;
      line-height: 1.33;
      border-radius: 25px;
      margin-bottom: 10px;
      margin-top: 10px;
    }
    
    .btn-circle.btn-lg2 {
        width: 30px;
        height: 30px;
        padding: 0px 10px;
        font-size: 18px;
        line-height: 1.33;
        border-radius: 25px;
        margin-bottom: 5px;
        margin-top: 5px;
    }
    
    .dropdown-menu {
        
        margin-left :0;
        margin-top: 0;
            
    }
    
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title job-registration clearfix" style="background:url('http://www.sigesco.cl/img/ingreso_bodega.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="title-overlay"></div>
                <div class="container">
                  <h1>Prestamos de Artículo de Bodega</h1>

                  <ol class="breadcrumb">
                    <li><a href="#">Bodega</a></li>
                    <li class="active">Prestar</li>
                  </ol>

                </div> <!-- end .container -->

    </div> <!-- end .header-page-title -->    
    <div class="container">
        <div class="page-content">
            <div class="row">
                <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%; border-bottom:5px solid #f3f3f3">
                        <div id="" class="col-xl-12">
                            <div class="candidate-description" style="padding:2% 5% 2% 5%">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-2">
                                        <label>Seleccione Bodega Origen</label>
                                        <select id="bodega_origen_sigesco" name="bodega_sigesco">
                                            <option name='inicio_option' value="0" readonly>Bodega</option>
                                            <?php
                                                    foreach($bodegas as $bodega){
                                            ?>
                                            <option onChange="seleccionar_faena_origen(this.id)" value="<?=$bodega->id_bodega?>"><?=$bodega->nombre_bodega?></option>
                                            <?php   } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Seleccione Bodega Destino</label>
                                        <select id="bodega_destino_sigesco" name="bodega_sigesco">
                                            <option name='inicio_option' value="0" readonly>Bodega</option>
                                            <?php
                                                    foreach($bodegas as $bodega){
                                            ?>
                                            <option onChange="seleccionar_faena_destino(this.id)" value="<?=$bodega->id_bodega?>"><?=$bodega->nombre_bodega?></option>
                                            <?php   } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label><span>*</span>Seleccione Artículo</label>
                                <select id="producto_bodega_sigesco" name="producto_bodega_sigesco">
                                    <option id="inicio_producto_bodega_sigesco" name='inicio_option' value="0" readonly>Artículo</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label title="Fecha de Ingreso a Bodega"><span>*</span>Fecha Prestamo</label>
                                <input name="fecha_prestamo_producto_sigesco" id="fecha_prestamo_producto_sigesco" max="<?=date('Y-m-d')?>"  min="<?=date("Y-m-d", strtotime("now - 1 month"))?>" type="date" class="form-control">
                            </div>
                             <div class="col-md-2">
                                <label><span>*</span>Cantidad</label>
                                <input id="cantidad_producto_sigesco" name="cantidad_producto_sigesco" onchange="validar_numero(this.id)" class="form-control" type="text" placeholder="Cantidad">
                            </div>
                            <div class="col-md-1">
                                <label></label>
                                <a onClick="prestar_producto()" class="btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Enviar</a>
                            </div>
                            <div class="col-md-1" style="margin-left:2%">
                                <label></label>
                                <a onClick="prestar_producto()" class="btn btn-success"><i class="fa fa-truck" aria-hidden="true"></i> Finalizar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <table id="tabla_lista_prestamos" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Bodega</th>
                                    <th>Producto</th>
                                    <th>Fecha Prestamo</th>
                                    <th>Fecha Devolución</th>
                                    <th>Cantidad</th>
                                    <th>Faena</th>
                                    <th>Responsable</th>
                                    <th>¿Quien Retira?</th>
                                    <th align="center">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div> <!-- end .candidate-description -->
                </div> <!-- end .9col grid layout -->
                <div>
                    <form id="lineas_prestamos" style="display:none">
                        <input id="cantidad_prestamos" name="cantidad_prestamos" value="1">
                        <input id="cantidad_prestamos_total" name="cantidad_prestamos" value="1">
                    
                    </form>
                </div>
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
        </div> <!-- end .page-content -->
    </div>
</div> <!-- end #page-content -->

<script>

$( document ).ready(function() { 
    $('#tabla_lista_prestamos').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Prestamos",
            "zeroRecords": "Sin Ingresos Aun - Lo Siento",
            "info": "Mostrando _PAGE_ Página de _PAGES_",
            "infoEmpty": "Sin Prestamos",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search":"",
            "paginate": {
                "previous": "Anterior",
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente"
            }
        },

    });
    
    $("#botones_tabla").append('<button onClick="finalizar_prestamo()" style="margin-left:1%;" type="button" class="btn btn-success"><i class="fa fa-cubes fa-4x"></i> Finalizar</button>');
    $("#tabla_lista_prestamos_filter").css("width","100%");
    $("#tabla_lista_prestamos_filter label").css("width","100%");
    $("#tabla_lista_prestamos_filter label input").css("width","100%");
    $("#tabla_lista_prestamos_info").css("width","45%");
    $("#tabla_lista_prestamos_paginate").css("width","100%"); 
    
    $( "#select_bodega_sigesco" ).click(function() {
        
        $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>bodega/lista_productos_bodega',
                    data: { id_bodega: $("#input_bodega_sigesco").attr('valor')},
                    success: function(data){
                        if(data != false){
                           var datos = JSON.parse(data);
                             $("#select_producto_bodega_sigesco li").remove();
                            $.each(datos, function( index, value ) {
                                $("#select_producto_bodega_sigesco").append('<li onClick="copiar_data('+datos[index].id_producto+',\''+datos[index].nombre_producto+'\')" data-value="'+datos[index].id_producto+'">'+datos[index].nombre_producto+'</li>'); 
                                
                            });
                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                });
    });
    
    $( "#check_devolucion" ).change(function() {
        if ($("#check_devolucion").prop('checked')){
            $( "#fecha_devolucion_producto_sigesco" ).prop("readonly",false);
        }else{
            $( "#fecha_devolucion_producto_sigesco" ).prop("readonly",true);
        }
    });
    
    $("#responsable_faena_minera_bodega").typeahead({
            displayKey: "id",  
            source: [
                <?php
                    $i=1;
                    foreach ($responsables as $responsable){
                        if($i>1){echo ",";};
                        echo '{id: "'.$responsable->nombre.'", name: "'.$responsable->run_ejecutivo_empresa_contratista.'", value: "'.$responsable->id_ejecutivo_empresa_contratista.'"}';
                    $i++; 
                    }
                ?>
              ]
});
    var $input = $("#responsable_faena_minera_bodega");
    $input.change(function() {
      var current = $input.typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $input.val()) {
            $("#responsable_faena_minera_bodega").val(current.id);
            $("#responsable_faena_minera_bodega").attr("valor",current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
            $("#responsable_faena_miera_bodega").val('');
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
          $("#responsable_faena_minera_bodega").val('');
          Command: toastr["error"]("Registro <strong>'NO'</strong>encoentrado, reingrese por favor.", "Error RUT/PASAPORTE")
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
    $("#quien_retira_bodega_sigesco").typeahead({
            displayKey: "id",  
            source: [
                <?php
                    $i=1;
                    foreach ($retiros as $retiro){
                        if($i>1){echo ",";};
                        echo '{id: "'.$retiro->nombre.'", name: "'.$retiro->run_ejecutivo_empresa_contratista.'", value: "'.$retiro->id_ejecutivo_empresa_contratista.'"}';
                    $i++; 
                    }
                ?>
              ]
});
    var $input2 = $("#quien_retira_bodega_sigesco");
    $input2.change(function() {
      var current2 = $input2.typeahead("getActive");
      if (current2) {
        // Some item from your model is active!
        if (current2.name == $input2.val()) {
            $("#quien_retira_bodega_sigesco").val(current2.id);
            $("#quien_retira_bodega_sigesco").attr("valor",current2.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
            $("#quien_retira_bodega_sigesco").val('');
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
          $("#quien_retira_bodega_sigesco").val('');
          Command: toastr["error"]("Registro <strong>'NO'</strong>encoentrado, reingrese por favor.", "Error RUT/PASAPORTE")
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
});
    function prestar_producto(){
         if($("#input_producto_bodega_sigesco").val().length > 0){
            $("#input_producto_bodega_sigesco").css( "border-color","#ccc" );
        if($("#fecha_prestamo_producto_sigesco").val().length > 0){
            $("#fecha_prestamo_producto_sigesco").css( "border-color","#ccc" );
        if($("#cantidad_producto_sigesco").val().length > 0){
            $("#cantidad_producto_sigesco").css( "border-color","#ccc" );
        if($("#responsable_faena_minera_bodega").val().length > 0){
            $("#responsable_faena_minera_bodega").css( "border-color","#ccc" );
        if($("#quien_retira_bodega_sigesco").val().length > 0){
            $("#quien_retira_bodega_sigesco").css( "border-color","#ccc" );
            
            $('#tabla_lista_prestamos').DataTable().row.add( [
                    $("#input_bodega_sigesco").val(),
                    $("#input_producto_bodega_sigesco").val(),
                    $("#fecha_prestamo_producto_sigesco").val(),
                    $("#fecha_devolucion_producto_sigesco").val(),
                    $("#cantidad_producto_sigesco").val(),
                    $("#input_faena_minera_bodega_sigesco").val(),
                    $("#responsable_faena_minera_bodega").val(),
                    $("#quien_retira_bodega_sigesco").val(),
                    '<a onclick="eliminar_linea('+$("#cantidad_prestamos").val()+')" title="Eliminar"><i style="color:#346abb; text-align:center; cursor:pointer" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>'
                  ] ).draw( false )
                     .node()
                     .id = ('linea_prestamo'+$("#cantidad_prestamos").val());
                    $("#lineas_prestamos").append("<div name='div_linea_prestamo"+$("#cantidad_prestamos").val()+"'><input name='id_bodega"+$("#cantidad_prestamos").val()+"' value='"+$("#input_bodega_sigesco").attr('valor')+"'><input name='id_producto"+$("#cantidad_prestamos").val()+"' value='"+$("#input_producto_bodega_sigesco").attr('valor')+"'><input name='fecha_prestamo"+$("#cantidad_prestamos").val()+"' value='"+$("#fecha_prestamo_producto_sigesco").val()+"'><input name='fecha_devolucion"+$("#cantidad_prestamos").val()+"' value='"+$("#fecha_devolucion_producto_sigesco").val()+"'><input name='cantidad"+$("#cantidad_prestamos").val()+"' value='"+$("#cantidad_producto_sigesco").val()+"'><input name='responsable"+$("#cantidad_prestamos").val()+"' value='"+$("#responsable_faena_minera_bodega").attr('valor')+"'><input name='quien_retira"+$("#cantidad_prestamos").val()+"' value='"+$("#quien_retira_bodega_sigesco").attr('valor')+"'><input name='faena_minera"+$("#cantidad_prestamos").val()+"' value='"+$("#input_faena_minera_bodega_sigesco").attr('valor')+"'></div>");
            
                        $("#input_producto_bodega_sigesco").attr('valor',0);
                        $("#input_producto_bodega_sigesco").val('');
                        $("#cantidad_producto_sigesco").val('');
                        $("#check_devolucion" ).prop("checked",false);
                        $("#fecha_devolucion_producto_sigesco" ).prop("readonly",true);
                        $("#fecha_devolucion_producto_sigesco" ).val('');
            
                $("#cantidad_prestamos").val(parseInt($("#cantidad_prestamos").val())+1);
                $("#cantidad_prestamos_total").val(parseInt($("#cantidad_prestamos_total").val())+1);
            
        }else{
            $("#quien_retira_bodega_sigesco").css(  "border-color","red" );
            $("#quien_retira_bodega_sigesco").focus();
            Command: toastr["error"]("Seleccione el campo <strong>'¿Quien Retira?'</strong> por favor.", "¿Quien Retira?")
        }
        
        }else{
            $("#responsable_faena_minera_bodega").css(  "border-color","red" );
            $("#responsable_faena_minera_bodega").focus();
            Command: toastr["error"]("Seleccione el campo <strong>'Responsable'</strong> por favor.", "Responsable")
        } 
        
        }else{
            $("#cantidad_producto_sigesco").css(  "border-color","red" );
            $("#cantidad_producto_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Cantidad'</strong> por favor.", "Cantidad")
        }
            
        }else{
            $("#fecha_prestamo_producto_sigesco").css(  "border-color","red" );
            $("#fecha_prestamo_producto_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Prestamo'</strong> por favor.", "Fecha de Prestamo")
        }
        
        }else{
            $("#input_producto_bodega_sigesco").css(  "border-color","red" );
            $("#input_producto_bodega_sigesco").focus();
            Command: toastr["error"]("Seleccione el campo <strong>'Artículo'</strong> por favor.", "Artículo")
        }
    }

    function finalizar_prestamo(){
        if($("#cantidad_prestamos_total").val() > 1){
            $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>bodega/prestar_bodega',
                    data: $('#lineas_prestamos').serialize(), 
                    success: function(data){
                        if(data == true){
                                Command: toastr["success"]("Artículo(s) <strong>Prestado(s)</strong> Correctamente.", "Artículo(s) Prestado(s)");
                                setTimeout(function(){redireccionarPagina('<?=base_url()?>bodega/prestamo');}, 4000);
                           }else{
                                Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                                setTimeout(function(){redireccionarPagina('<?=base_url()?>bodega/prestamo');}, 4000);
                           }
                    }
                });
        }else{
            Command: toastr["info"]("No ha ingresado ningun Artículo.", "Ingrese Artículo")
        }
    }
        
    function eliminar_linea(id_linea){
        $("#div_linea_prestamo"+id_linea).remove();
        $('#tabla_lista_prestamos').DataTable().row('#linea_prestamo'+id_linea).remove().draw( false );
        $("#cantidad_prestamos_total").val(parseInt($("#cantidad_prestamos_total").val()) - 1);
    }
    
    function copiar_data(id,nombre){
        $("#input_producto_bodega_sigesco").val(nombre);
        $("#input_producto_bodega_sigesco").attr("valor",id);
        
    }

    
    
</script>
