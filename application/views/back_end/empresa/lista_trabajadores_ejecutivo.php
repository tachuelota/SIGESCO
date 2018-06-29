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
    
    @media screen and (min-width: 600px) {
        #modal_enviar_mensaje{
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:50%;
        }
        
        #modal_solicitar_documento{
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:70%;
            z-index: 1080;
        }
    }
    
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="title-overlay"></div>
        <div class="container">
          <div class="title-breadcrumb clearfix">
            <h1>Lista de Trabajadores</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>empresa">Inicio</a></li>
              <li class="active">Trabajadores</li>
            </ol>
          </div> <!-- end .title-breadcrumb -->

        </div> <!-- end .container -->
      </div> <!-- end .header-nav-bar -->
    <div class="container" style="width:100%">
        <div id="candidate-profile" style="padding:0px;">
            <div class="row">
                  <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <table id="tabla_trabajadores_ejecutivo" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                        <th>Nombre</th>
                                        <th>Profesión</th>
                                        <th>Codición</th>
                                        <th>Edad</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Pretención Salarial</th>
                                    </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    foreach($trabajadores as $trabajador){
                                        $nombre = $trabajador->nombre_trabajador_laboral." ".$trabajador->paterno_trabajador_laboral." ".$trabajador->materno_trabajador_laboral;
                                ?>
                                    <tr style="cursor:pointer" onmouseover="this.style.backgroundColor='#66ABE2',this.style.color= 'white'"  onmouseout="this.style.backgroundColor='transparent',this.style.color= 'black'" id="trabajador_<?=$trabajador->id_trabajador_laboral?>" style ="cursor:pointer;" onclick="enviar_trabajador(<?=$trabajador->id_trabajador_laboral?>,'<?=$nombre?>')">
                                        <td><?=$trabajador->nombre_trabajador_laboral." ".$trabajador->paterno_trabajador_laboral." ".$trabajador->materno_trabajador_laboral?></td>
                                        <td>-</td>
                                        <td><?=$trabajador->condicion_trabajador_laboral?></td>
                                        <td><?=$trabajador->edad?></td>
                                        <td>2011/04/25</td>
                                        <td><?=$trabajador->pretencion_salarial_trabajador_laboral?></td>
                                        <form action="<?=base_url()?>empresa/trabajador" method="post" id="form_trabajador_<?=$trabajador->id_trabajador_laboral?>"></form>
                                    </tr>
                                
                                <?php
                                    }
                                ?>  
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

<div id="modal_enviar_mensaje" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Enviar Mensaje a la Lista</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_editar_basica" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-12">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="titulo_mensaje_ejecutivo" name="titulo_mensaje_ejecutivo" type="text" class="form-control validate" placeholder="Ingrese Asunto del Mensaje" aria-label="Ingrese Asunto del Mensaje">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-12">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <textarea rows="7" cols="50" id="mensaje_ejecutivo" name="mensaje_ejecutivo" placeholder="Ingrese descripción de la Experiencia Laboral"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="enviar_mensaje(<?=$id_lista?>)" type="button" class="btn btn-success"> Enviar </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->

<script>
$( document ).ready(function() { 
        
    $('#tabla_trabajadores_ejecutivo').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Trabajadores",
            "zeroRecords": "Sin Resultado - Lo siento",
            "info": "Mostrando _PAGE_ Página de _PAGES_",
            "infoEmpty": "Sin trabajadores",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search":"",
            "paginate": {
                "previous": "Anterior",
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente"
            }
        }
    });
    
    $("#botones_tabla").append('<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_enviar_mensaje"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar Mensaje</button> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_solicitar_documento"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Solicitar Documento</button>');
    $("#tabla_trabajadores_ejecutivo_filter").css("width","100%");
    $("#tabla_trabajadores_ejecutivo_filter label").css("width","100%");
    $("#tabla_trabajadores_ejecutivo_filter label input").css("width","100%");
    $("#tabla_trabajadores_ejecutivo_info").css("width","45%");
    $("#tabla_trabajadores_ejecutivo_paginate").css("width","100%");
    
    $( "#solicitar_documento_trabajador" ).click(function() {
        /*Inicio TIPO */  if($("#input_tipo_documento_solicitar").val() != ''){
                            $( "#input_tipo_documento_solicitar" ).css( "border-color","#ccc" );    
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>ejecutivo/solicitar_documento_ejecutivo_lista',
                data: {nombre_tipo: $("#input_tipo_documento_solicitar").val(),id_tipo: $("#input_tipo_documento_solicitar").attr('valor'),id_lista: $("#lista_tipo_documento_solicitar").val()}, 
                success: function(data){
                    
                    if(data == true){
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["success"]("Se envio la petición Correctamente.", "Petición Enviada")
                    }else{
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                    }
                    
                    /*
                    var datos = JSON.parse(data);
                    if(datos[0] == true){
                        $('#tabla_listas_ejecutivo').DataTable().row.add( [
                            datos[1],
                            datos[2],
                            datos[3],
                            '<a style="text-align:center;" href="'+datos[4]+'"><i class="fa fa fa-trash fa-2x" aria-hidden="true"></i></a>'
                        ] ).draw( false );
                        
                        $("#nombre_lista").val('');
                        $("#descripcion_lista").val('');
                        
                        Command: toastr["success"]("Se ingreso Correctamente Educación Basica.", "Registro Realizado");
                        $("[data-dismiss=modal]").trigger({ type: "click" });                   
                                            
                    }else{
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                    }
                    
                    */
                }
            });
            
            
        /* Fin TIPO */   }else{
                            $( "#input_tipo_documento_solicitar" ).css(  "border-color","red" );
                            $( "#input_tipo_documento_solicitar" ).focus();
                            Command: toastr["error"]("Seleccione el campo <strong>'Tipo Documento'</strong> por favor.", "Tipo de Documentación")
                        }
    });
    
    
    /*  MISMA FUNCION DE CREAR TIPO DOCUMENTACION, PERO DESDE MODAL   */
       $( "#crear_tipo_documentacion" ).click(function() {
        /*Inicio Nombre */  if($("#titulo_documento_trabajador").val() != ''){
                            $( "#titulo_documento_trabajador" ).css( "border-color","#ccc" );
            
        /*Inicio Descripcion */  if($("#descripcion_documento_trabajador").val() != ''){
                            $( "#descripcion_documento_trabajador" ).css( "border-color","#ccc" );
            
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>empresa/agregar_tipo_documento_empresa',
                data: {
                    titulo_documento_trabajador: $("#titulo_documento_trabajador").val(), descripcion_documento_trabajador:$("#descripcion_documento_trabajador").val()}, 
                success: function(data){
                    if(data != false){
                           var datos = JSON.parse(data);
                            $(".select-clone").append('<li data-value="'+datos[4]+'">'+datos[0]+'</li>');
                            $("#input_tipo_documento_solicitar").val(datos[0]);
                            $("#input_tipo_documento_solicitar").attr('valor',datos[4]);
                            $("#titulo_documento_trabajador").val('');
                            $("#descripcion_documento_trabajador").val('');

                            Command: toastr["success"]("Se ingreso Correctamente el Tipo Documentación.", "Agregada Tipo Documentación");
                            $('#modal_agregar_tipo_documento').modal('hide');                   
                                            
                        }else{
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")    
                        }
                }
            });
            
        /* Fin Descripcion */   }else{
                            $( "#descripcion_documento_trabajador" ).css(  "border-color","red" );
                            $( "#descripcion_documento_trabajador" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de la Lista'</strong> por favor.", "Descripción Lista")
                        }
            
        /* Fin Nombre */   }else{
                            $( "#titulo_documento_trabajador" ).css(  "border-color","red" );
                            $( "#titulo_documento_trabajador" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Título tipo Documento'</strong> por favor.", "Nombre Lista")
                        }
    });
    
});
    
    function enviar_trabajador(id,nombre){
        $("#form_trabajador_"+id).append('<input id="id_trabajador" name="id_trabajador"  type="text" value="'+id+'" style="display:none"><input id="nombre_trabajador" name="nombre_trabajador"  type="text" value="'+nombre+'" style="display:none">');
        $("#form_trabajador_"+id).submit();
    }
    
    function enviar_mensaje(id_lista){
        /*Inicio Titulo */  if($("#titulo_mensaje_ejecutivo").val() != ''){
                            $( "#titulo_mensaje_ejecutivo" ).css( "border-color","#ccc" );
            
        /*Inicio Mensaje */  if($("#mensaje_ejecutivo").val() != ''){
                            $( "#mensaje_ejecutivo" ).css( "border-color","#ccc" );
            
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>ejecutivo/enviar_mensaje_ejecutivo_trabajador',
                data: {titulo: $("#titulo_mensaje_ejecutivo").val(), mensaje: $("#mensaje_ejecutivo").val(), id_lista : id_lista}, 
                success: function(data){
                    if(data == true){
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["success"]("Su Mensaje a sido enviado Correctamente", "Mensaje Enviado")
                    }else{
                        Command: toastr["error"]("Ocurrio un problema, intente nuevamente por favor.", "Error")
                    }
                }
            });
            
        /* Fin Mensaje */   }else{
                            $( "#mensaje_ejecutivo" ).css(  "border-color","red" );
                            $( "#mensaje_ejecutivo" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de la Lista'</strong> por favor.", "Descripción Lista")
                        }
            
        /* Fin Titulo */   }else{
                            $( "#titulo_mensaje_ejecutivo" ).css(  "border-color","red" );
                            $( "#titulo_mensaje_ejecutivo" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Asunto del Mensaje'</strong> por favor.", "Asunto")
                        }
    }
    
    function enviar_mensaje(id_lista){
        /*Inicio Titulo */  if($("#titulo_mensaje_ejecutivo").val() != ''){
                            $( "#titulo_mensaje_ejecutivo" ).css( "border-color","#ccc" );
            
        /*Inicio Mensaje */  if($("#mensaje_ejecutivo").val() != ''){
                            $( "#mensaje_ejecutivo" ).css( "border-color","#ccc" );
            
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>ejecutivo/enviar_mensaje_ejecutivo_trabajador',
                data: {titulo: $("#titulo_mensaje_ejecutivo").val(), mensaje: $("#mensaje_ejecutivo").val(), id_lista : id_lista}, 
                success: function(data){
                    if(data == true){
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["success"]("Su Mensaje a sido enviado Correctamente", "Mensaje Enviado")
                    }else{
                        Command: toastr["error"]("Ocurrio un problema, intente nuevamente por favor.", "Error")
                    }
                }
            });
            
        /* Fin Mensaje */   }else{
                            $( "#mensaje_ejecutivo" ).css(  "border-color","red" );
                            $( "#mensaje_ejecutivo" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Descripción de la Lista'</strong> por favor.", "Descripción Lista")
                        }
            
        /* Fin Titulo */   }else{
                            $( "#titulo_mensaje_ejecutivo" ).css(  "border-color","red" );
                            $( "#titulo_mensaje_ejecutivo" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Asunto del Mensaje'</strong> por favor.", "Asunto")
                        }
    }
</script>