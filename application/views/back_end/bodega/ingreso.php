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
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title job-registration clearfix" style="background:url('http://www.sigesco.cl/img/ingreso_bodega.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="title-overlay"></div>
                <div class="container">
                  <h1>Ingreso de Artículo a Bodega</h1>

                  <ol class="breadcrumb">
                    <li><a href="#">Bodega</a></li>
                    <li class="active">Ingreso</li>
                  </ol>

                </div> <!-- end .container -->

    </div> <!-- end .header-page-title -->    
    <div class="container">
        <div class="page-content">
            <div class="row">
                <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <div class="row">
                            <div class="col-md-2">
                                <label><span>*</span>Seleccione Bodega</label>
                                <select id="bodega_sigesco" name="bodega_sigesco">
                                    <option name='inicio_option' value="0" readonly>Bodega</option>
                                    <?php
                                            foreach($bodegas as $bodega){
                                    ?>
                                    <option onChange="seleccionar_faena(this.id)" value="<?=$bodega->id_bodega?>"><?=$bodega->nombre_bodega?></option>
                                    <?php   } ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label><span>*</span>Seleccione Artículo</label>
                                <select id="producto_bodega_sigesco" name="producto_bodega_sigesco" style="">
                                    <option name='inicio_option' value="0" readonly>Artículo</option>
                                    <?php
                                            foreach($productos as $producto){
                                    ?>
                                        <option value="<?=$producto->id_producto?>" ><?=$producto->nombre_producto?></option>
                                    <?php   } ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label title="Fecha de Ingreso a Bodega"><span>*</span>Fecha Ingreso</label>
                                <input name="fecha_ingreso_bodega" id="fecha_ingreso_bodega" max="<?=date('Y-m-d')?>" type="date" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label><span>*</span>Cantidad</label>
                                <input id="cantidad_bodega_sigesco" name="cantidad_bodega_sigesco" onchange="validar_numero(this.id)" class="form-control" type="text" placeholder="Cantidad">
                            </div>
                            <div class="col-md-2">
                                <label title="Precio Unitario Neto"><span>*</span>P.U.N</label>
                                <input id="precio_producto_bodega_sigesco" name="precio_producto_bodega_sigesco"  onchange="validar_numero(this.id)" class="form-control" type="text" placeholder="Precio Unit. Neto">
                            </div>
                            
                            <div class="col-md-1">
                                <label></label>
                                <a onClick="ingreso_bodega()" class="btn btn-default"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Artículo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%; border-bottom:5px solid #f3f3f3">
                        <table id="tabla_lista_ingresos" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Bodega</th>
                                    <th>Producto</th>
                                    <th>Fecha Prestamo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unit. Neto</th>
                                    <th align="center">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div> <!-- end .candidate-description -->
                </div> <!-- end .9col grid layout -->
                <div>
                    <form id="lineas_ingresos" style="display:none">
                        <input id="cantidad_ingresos" name="cantidad_ingresos" value="1">
                        <input id="cantidad_ingresos_total" name="cantidad_ingresos" value="1">
                    
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

<!-- Inicio Modal Crear Artículo -->
<div class="modal fade" id="modal_crear_producto" tabindex="-1" role="dialog" aria-labelledby="Agregar Artículo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Nuevo Artículo</h4>
      </div>
      <div class="modal-body">
          <form id="form_crear_producto">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nombre_producto_sigesco" name="nombre_producto_sigesco" placeholder="Ingrese Nombre para el Artículo">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <textarea rows="5" cols="50" id="descripcion_producto_sigesco" name="descripcion_producto_sigesco" placeholder="Ingrese descripción para el Artículo"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <input type="text" class="form-control" id="medida_producto_sigesco" name="medida_producto_sigesco" placeholder="Ingrese Unidad de Medida para el Artículo">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-md-6" style="margin-top:2%">
                                <input type="text" class="form-control" id="marca_producto_sigesco" name="marca_producto_sigesco" placeholder="Ingrese Marca del Artículo">
                            </div>
                            <div class="col-md-6" style="margin-top:2%">
                                <input type="text" class="form-control" id="modelo_producto_sigesco" name="modelo_producto_sigesco" placeholder="Ingrese Modelo del Artículo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <div class="row">
                            <div class="col-md-11">
                                <select id="subcategoria_producto_bodega" name="subcategoria_producto_bodega">
                                        <option name='inicio_option' value="0" readonly>Seleccione Subcategoria</option>
                                    <?php
                                            foreach($subcategorias as $subcategoria){
                                    ?>
                                        <option value="<?=$subcategoria->id_subcategoria_producto?>"><?=$subcategoria->nombre_subcategoria_producto?></option>
                                    <?php   } ?>

                                </select>
                            </div>
                            <div class="col-md-1" style="padding:0px">
                                <button type="button" data-toggle="modal" data-target="#modal_crear_subcategoria" class="btn btn-success btn-circle btn-lg" style="margin-bottom: 0;margin-top: 0;"><i class="fa fa-plus fa-4x"></i></button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button onclick="crear_producto()" type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Crear Artículo -->

<!-- Inicio Modal Crear Subcategoria -->
<div class="modal fade" id="modal_crear_subcategoria" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Nueva Subcategoria</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nombre_subcategoria_sigesco" name="nombre_subcategoria_sigesco" placeholder="Ingrese Nombre para Subcategoria">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <textarea rows="5" cols="50" id="descripcion_subcategoria_sigesco" name="descripcion_subcategoria_sigesco" placeholder="Ingrese descripción para Subcategoria"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <select id="categoria_producto_bodega" name="categoria_producto_bodega">
                                <option name='inicio_option' value="0" readonly>Seleccione Categoria</option>
                                    <?php
                                        foreach($categorias as $categoria){
                                    ?>
                                    <option value="<?=$categoria->id_categoria_producto?>"><?=$categoria->nombre_categoria_producto?></option>
                                    <?php   } ?>

                            </select>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button onclick="crear_subcategoria()" type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Crear Subcategoria -->

<script>

$( document ).ready(function() { 
    $('#tabla_lista_ingresos').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Ingresos",
            "zeroRecords": "Sin Ingresos Aun - Lo Siento",
            "info": "Mostrando _PAGE_ Página de _PAGES_",
            "infoEmpty": "Sin Ingresos",
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
    
    $("#botones_tabla").append('<button type="button" data-toggle="modal" data-target="#modal_crear_producto" class="btn btn-info"><i class="fa fa-plus fa-4x"></i> Crear Artículo</button><button onClick="finalizar_ingreso()" style="margin-left:1%;" type="button" class="btn btn-success"><i class="fa fa-cubes fa-4x"></i> Finalizar</button>');
    $("#tabla_lista_ingresos_filter").css("width","100%");
    $("#tabla_lista_ingresos_filter label").css("width","100%");
    $("#tabla_lista_ingresos_filter label input").css("width","100%");
    $("#tabla_lista_ingresos_info").css("width","45%");
    $("#tabla_lista_ingresos_paginate").css("width","100%");    
});

    function ingreso_bodega(){
         if($("#input_producto_bodega_sigesco").val().length > 0){
            $("#input_producto_bodega_sigesco").css( "border-color","#ccc" );
        if($("#cantidad_bodega_sigesco").val().length > 0){
            $("#cantidad_bodega_sigesco").css( "border-color","#ccc" );
        if($("#precio_producto_bodega_sigesco").val().length > 0){
            $("#precio_producto_bodega_sigesco").css( "border-color","#ccc" );
        if(($("#fecha_ingreso_bodega").val().length > 0)){
            $("#fecha_ingreso_bodega").css( "border-color","#ccc" );
        if((comparar_fechas('<?=date('d-m-Y');?>',$("#fecha_ingreso_bodega").val().replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3-$2-$1')) == false) ){
            $("#fecha_ingreso_bodega").css( "border-color","#ccc" );
        if($("#input_bodega_sigesco").val().length > 0){
            $("#input_bodega_sigesco").css( "border-color","#ccc" );
            
                  $('#tabla_lista_ingresos').DataTable().row.add( [
                    $("#input_bodega_sigesco").val(),
                    $("#input_producto_bodega_sigesco").val(),
                    $("#fecha_ingreso_bodega").val(),
                    $("#cantidad_bodega_sigesco").val(),
                    $("#precio_producto_bodega_sigesco").val(),
                    '<a onclick="eliminar_linea('+$("#cantidad_ingresos").val()+', '+$("#input_producto_bodega_sigesco").attr('valor')+',\''+$("#input_producto_bodega_sigesco").val()+'\')" title="Eliminar"><i style="color:#346abb; text-align:center; cursor:pointer" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>'
                  ] ).draw( false )
                     .node()
                     .id = ('linea_ingreso'+$("#cantidad_ingresos").val());
                    /////////////////////////////// Q U I T A R   D E   L A   L I S T A   /////////////////////////////////
                        $("#select_producto_bodega_sigesco li[data-value='"+$("#input_producto_bodega_sigesco").attr("valor")+"']" ).remove();
                    ///////////////////////////////////////////////////////////////////////////////////////////////////////
                    $("#lineas_ingresos").append("<div name='div_linea_ingreso"+$("#cantidad_ingresos").val()+"'><input name='id_bodega"+$("#cantidad_ingresos").val()+"' value='"+$("#input_bodega_sigesco").attr('valor')+"'><input name='id_producto"+$("#cantidad_ingresos").val()+"' value='"+$("#input_producto_bodega_sigesco").attr('valor')+"'><input name='cantidad"+$("#cantidad_ingresos").val()+"' value='"+$("#cantidad_bodega_sigesco").val()+"'><input name='precio"+$("#cantidad_ingresos").val()+"' value='"+$("#precio_producto_bodega_sigesco").val()+"'><input name='fecha_ingreso"+$("#cantidad_ingresos").val()+"' value='"+$("#fecha_ingreso_bodega").val()+"'></div>");
                    $("#input_producto_bodega_sigesco").attr('valor',0);
                    $("#input_producto_bodega_sigesco").val('');
                    $("#cantidad_bodega_sigesco").val('');
                    $("#precio_producto_bodega_sigesco").val('');
                    $("#cantidad_ingresos").val(parseInt($("#cantidad_ingresos").val())+1);
                    $("#cantidad_ingresos_total").val(parseInt($("#cantidad_ingresos_total").val())+1);
        }else{
            $("#input_bodega_sigesco").css(  "border-color","red" );
            $("#input_bodega_sigesco").focus();
            Command: toastr["error"]("Seleccione el campo <strong>'Bodega'</strong> por favor.", "Bodega")
        }
        }else{
            $("#fecha_ingreso_bodega").css(  "border-color","red" );
            $("#fecha_ingreso_bodega").focus();
            Command: toastr["error"]("El campo <strong>'Fecha de Ingreso'</strong> es Mayor a hoy o incorrecta.", "Fecha de Ingreso")
        }
        }else{
            $("#fecha_ingreso_bodega").css(  "border-color","red" );
            $("#fecha_ingreso_bodega").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Ingreso'</strong> por favor.", "Fecha de Ingreso")
        }    
        
        }else{
            $("#precio_producto_bodega_sigesco").css(  "border-color","red" );
            $("#precio_producto_bodega_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Valor Unitario'</strong> por favor.", "Valor Unitario")
        }
        
        }else{
            $("#cantidad_bodega_sigesco").css(  "border-color","red" );
            $("#cantidad_bodega_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Cantidad'</strong> por favor.", "Cantidad")
        }
        }else{
            $("#input_producto_bodega_sigesco").css(  "border-color","red" );
            $("#input_producto_bodega_sigesco").focus();
            Command: toastr["error"]("Seleccione el campo <strong>'Artículo'</strong> por favor.", "Artículo")
        }
    }
    
    function crear_producto(){
         if($("#nombre_producto_sigesco").val().length > 0){
            $("#nombre_producto_sigesco").css( "border-color","#ccc" );
        if($("#medida_producto_sigesco").val().length > 0){
            $("#medida_producto_sigesco").css( "border-color","#ccc" );
        if($("#input_subcategoria_producto_bodega").val().length > 0){
            $("#input_subcategoria_producto_bodega").css( "border-color","#ccc" );
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>producto/crear_producto',
                    data: {nombre_producto_sigesco:$("#nombre_producto_sigesco").val(), 
                           descripcion_producto_sigesco: $("#descripcion_producto_sigesco").val(), 
                           medida_producto_sigesco: $("#medida_producto_sigesco").val(),
                           marca_producto_sigesco: $("#marca_producto_sigesco").val(),
                           modelo_producto_sigesco: $("#modelo_producto_sigesco").val(),
                           subcategoria_producto_bodega: $("#input_subcategoria_producto_bodega").attr("valor")},
                    success: function(data){
                        if(data != false){
                            var datos = JSON.parse(data);
                            Command: toastr["success"]("Artículo <strong>Creado</strong> Correctamente.", "Artículo Creado");
                            $("#nombre_producto_sigesco").val('');
                            $("#descripcion_producto_sigesco").val('');
                            $("#medida_producto_sigesco").val('');
                            $("#input_subcategoria_producto_bodega").val('');
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            $("#select_producto_bodega_sigesco").append('<li data-value="'+datos[2]+'">'+datos[1]+'</li>');
                            $("#input_producto_bodega_sigesco").val(datos[1]);
                            $("#input_producto_bodega_sigesco").attr('valor',datos[2]);
                            //setTimeout(function(){redireccionarPagina('<?=base_url()?>producto/crear');}, 4000);

                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                        }
                    }
                }); 
        
        }else{
            $("#input_subcategoria_producto_bodega").css(  "border-color","red" );
            $("#input_subcategoria_producto_bodega").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Subcategoria'</strong> por favor.", "Subcategoria")
        }    
        
        
        }else{
            $("#medida_producto_sigesco").css(  "border-color","red" );
            $("#medida_producto_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Unidad de Medidad'</strong> por favor.", "Unidad de Medidad")
        }
        
        }else{
            $("#nombre_producto_sigesco").css(  "border-color","red" );
            $("#nombre_producto_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
        }
    }
    
    function crear_subcategoria(){
         if($("#nombre_subcategoria_sigesco").val().length > 0){
            $("#nombre_subcategoria_sigesco").css( "border-color","#ccc" );
        if($("#descripcion_subcategoria_sigesco").val().length > 0){
            $("#descripcion_subcategoria_sigesco").css( "border-color","#ccc" );
        if($("#input_categoria_producto_bodega").val().length > 0){
            $("#input_categoria_producto_bodega").css( "border-color","#ccc" );
            
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>producto/crear_subcategoria',
                    data: {nombre_subcategoria :$("#nombre_subcategoria_sigesco").val(),descripcion_subcategoria :$("#descripcion_subcategoria_sigesco").val(),id_categoria : $("#input_categoria_producto_bodega").attr("valor")},
                    success: function(data){
                        
                        if(data != false){
                            var datos = JSON.parse(data);
                            Command: toastr["success"]("Subcategoria <strong>Creada</strong> Correctamente.", "Subcategoria Creada");
                            $("#modal_crear_subcategoria").trigger({ type: "click" });
                            $("#select_subcategoria_producto_bodega").append('<li data-value="'+datos[2]+'">'+datos[1]+'</li>');
                            $("#input_subcategoria_producto_bodega").val(datos[1]);
                            $("#input_subcategoria_producto_bodega").attr('valor',datos[2]);
                            $("#nombre_subcategoria_sigesco").val('');
                            $("#descripcion_subcategoria_sigesco").val('');
                            $("#input_categoria_producto_bodega").val('');

                        }else{
                            Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                        }
                    }
                });
        
        }else{
            $("#input_categoria_producto_bodega").css(  "border-color","red" );
            $("#input_categoria_producto_bodega").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Categoria'</strong> por favor.", "Categoria")
        }    

        
        }else{
            $("#descripcion_subcategoria_sigesco").css(  "border-color","red" );
            $("#descripcion_subcategoria_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de Subcategoria'</strong> por favor.", "Descripción Subcategoria")
        }
        }else{
            $("#nombre_subcategoria_sigesco").css(  "border-color","red" );
            $("#nombre_subcategoria_sigesco").focus();
            Command: toastr["error"]("Ingrese el campo <strong>'Nombre de Subcategoria'</strong> por favor.", "Nombre Subcategoria")
        }
    }
    
    function finalizar_ingreso(){
        if($("#cantidad_ingresos_total").val() > 1){
            $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>bodega/ingreso_bodega',
                    data: $('#lineas_ingresos').serialize(), 
                    success: function(data){
                        if(data == true){
                                Command: toastr["success"]("Artículo(s) <strong>Ingresado(s)</strong> Correctamente.", "Artículo(s) Ingresados");
                                setTimeout(function(){redireccionarPagina('<?=base_url()?>bodega/ingreso');}, 4000);
                           }else{
                                Command: toastr["error"]("Ocurrio un Problema, por favor Intentar Nuevamente.", "Error")
                                setTimeout(function(){redireccionarPagina('<?=base_url()?>bodega/ingreso');}, 4000);
                           }
                    }
                });
        }else{
            Command: toastr["info"]("No ha ingresado ningun Artículo.", "Ingrese Artículo")
        }
    }
    
    function eliminar_linea(id_linea,id_producto,nombre_producto){
        $("#div_linea_ingreso"+id_linea).remove();
        $('#tabla_lista_ingresos').DataTable().row('#linea_ingreso'+id_linea).remove().draw( false );
        $("#cantidad_ingresos_total").val(parseInt($("#cantidad_ingresos_total").val()) - 1);
        $("#select_producto_bodega_sigesco").append('<li onClick="copiar_data('+id_producto+',\''+nombre_producto+'\')" data-value="'+id_producto+'">'+nombre_producto+'</li>');
    }
    
</script>
