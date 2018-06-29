<link type="text/css" href="<?=base_url()?>css/dataTables.checkboxes.css" rel="stylesheet" />
<script type="text/javascript" src="<?=base_url()?>js/dataTables.checkboxes.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pdf.js"></script>
<script type="text/javascript">
    PDFJS.workerSrc = "<?=base_url()?>js/pdf.worker.js";
</script>
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
    
    input[type="file"]#documento_pedido_trabajador {
     width: 0.1px;
     height: 0.1px;
     opacity: 0;
     overflow: hidden;
     position: absolute;
     z-index: -1;
    }
    
    .fa:hover{
       text-shadow: 1px 1px 1px white;
    }
    
    @media screen and (min-width: 600px) {
        #modal_informacion_personal, #modal_experiencia_laboral,#modal_experiencia_laboral_editar {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:90%;
        }
    
</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="title-overlay"></div>
        <div class="container">
          <div class="title-breadcrumb clearfix">
            <h1>Documentación</h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>empresa">Inicio</a></li>
              <li class="active">Documentación</li>
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
                        <table id="tabla_listas_documentos" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Tipo</th>
                                    <th>Trabajador</th>
                                    <th>Título</th>
                                    <th>Fecha Subida</th>
                                    <th>Solicitado Por</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($documentos as $documento){
                                        $ACCIONES = '';
                                        if($documento->tipo_documentacion_trabajador_id_tipo_documentacion_trabajador == 1){
                                            if($documento->url_trabajador_laboral_documentacion != ''){
                                                $trozos = explode(".", $documento->url_trabajador_laboral_documentacion); 
                                                $extension = end($trozos);
                                                if((strtolower ($extension) == 'jpg') || (strtolower($extension) == 'png')|| (strtolower($extension) == 'jpeg')){
                                                    $ACCIONES = '<a href="'.base_url().$documento->url_trabajador_laboral_documentacion.'" target="a_blank"><i style="color:green" class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>';
                                                }

                                                if((strtolower ($extension) == 'pdf')){
                                                    $ACCIONES = '<a href="'.base_url().$documento->url_trabajador_laboral_documentacion.'" target="a_blank"><i style="color:green" class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>';
                                                }
                                                
                                                if((strtolower ($extension) == 'doc')||(strtolower ($extension) == 'docx')){
                                                    $ACCIONES = '<a href="'.base_url().$documento->url_trabajador_laboral_documentacion.'" target="a_blank"><i style="color:green" class="fa fa-file-word-o fa-2x" aria-hidden="true"></i></a>';
                                                }
                                            }else{
                                                $ACCIONES = '<a href="'.base_url().$documento->url_trabajador_laboral_documentacion.'" target="a_blank"><i style="color:green,cursor:pointer;" class="fa fa-cloud-upload fa-2x" aria-hidden="true"></i></a>';
                                            }
                                        }
                                        
                                        if($documento->tipo_documentacion_trabajador_id_tipo_documentacion_trabajador == 2){
                                            $ACCIONES = '<input type="file" id="documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'" name="documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'" style="display:none"  onchange="adjuntar_documento_solicitado('.$documento->id_trabajador_laboral_documentacion.','.$documento->trabajador_laboral_id_trabajador_laboral.',\''.$documento->codigo_trabajador_laboral_documentacion.'\')"><span style="width:100px;" class="mi_archivo'.$documento->id_trabajador_laboral_documentacion.'"></span>
                        <label id="label_documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'" for="documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'">
                            <i style="color:#346abb; cursor:pointer;" class="fa fa-cloud-upload fa-2x" aria-hidden="true"></i>
                        </label>';
                                        }
                                        
                                        if($documento->tipo_documentacion_trabajador_id_tipo_documentacion_trabajador == 3){
                                            $trozos = explode(".", $documento->url_trabajador_laboral_documentacion); 
                                            $extension = end($trozos);
                                            if((strtolower ($extension) == 'jpg') || (strtolower($extension) == 'png')|| (strtolower($extension) == 'jpeg')){
                                                $ACCIONES = '<label id="label_documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'"><a target="a_blank" href="'.base_url().$documento->url_trabajador_laboral_documentacion.'"><i style="color:red;cursor:pointer;" class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a> <i id="label_check'.$documento->id_trabajador_laboral_documentacion.'" onCLick="validar_archivo('.$documento->id_trabajador_laboral_documentacion.')" style="color:green;cursor:pointer;" class="fa fa-check fa-2x" aria-hidden="true"></i></label>';
                                            }
                                            
                                            if((strtolower ($extension) == 'pdf')){
                                                $ACCIONES = '<label id="label_documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'"><a target="a_blank" href="'.base_url().$documento->url_trabajador_laboral_documentacion.'"><i style="color:red;cursor:pointer;" class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a> <i id="label_check'.$documento->id_trabajador_laboral_documentacion.'" onCLick="validar_archivo('.$documento->id_trabajador_laboral_documentacion.')" style="color:green;cursor:pointer;" class="fa fa-check fa-2x" aria-hidden="true"></i></label>';
                                            }
                                            
                                            if((strtolower ($extension) == 'doc')||(strtolower ($extension) == 'docx')){
                                                    $ACCIONES = '<label id="label_documento_pedido_trabajador'.$documento->id_trabajador_laboral_documentacion.'"><a target="a_blank" href="'.base_url().$documento->url_trabajador_laboral_documentacion.'"><i onCLick="validar_archivo('.$documento->id_trabajador_laboral_documentacion.')" style="color:red;cursor:pointer;" class="fa fa-file-word-o fa-2x" aria-hidden="true"></i></a> <i id="label_check'.$documento->id_trabajador_laboral_documentacion.'" style="color:green;cursor:pointer;" class="fa fa-check fa-2x" aria-hidden="true"></i></label>';
                                                }
                                        }
                                        
                                        
                                ?>
                                
                                    <tr style="cursor:pointer" onmouseover="this.style.backgroundColor='#66ABE2',this.style.color= 'white'"  onmouseout="this.style.backgroundColor='transparent',this.style.color= 'black'" id="trabajador_" style ="cursor:pointer;">
                                        <td><?=$documento->id_trabajador_laboral_documentacion?></td>
                                        <td><?=$documento->tipo_documentacion_trabajador_id_tipo_documentacion_trabajador?></td>
                                        <td><?=$documento->nombre?></td>
                                        <td><?=$documento->titulo_trabajador_laboral_documentacion?></td>
                                        <td><?=$documento->fecha?></td>
                                        <td><?=$documento->solicitado_por_trabajador_laboral_documentacion?></td>
                                        <td><?=$ACCIONES?></td>
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

<!-- Inicio Modal Agregar -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Tipo de Documento</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="titulo_documento_trabajador" name="titulo_documento_trabajador" placeholder="Ingrese título para Tipo de Documento">
                    </div>
                    <div class="col-md-12" style="margin-top:2%">
                        <div class="input-group input-group-lg" style="width:100%">
                            <textarea rows="7" cols="50" id="descripcion_documento_trabajador" name="descripcion_documento_trabajador" placeholder="Ingrese descripción del Tipo de Documento"></textarea>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="crear_tipo_documentacion" type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Agregar -->
<!-- Inicio Modal Agregar Documento Solicitado -->
<div class="modal fade" id="modal_agregar_documento_solicitado" tabindex="-1" role="dialog" aria-labelledby="Agregar Documento Solicitado">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Documento Solicitado</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="fecha_documento_solicitado" name="fecha_documento_solicitado" placeholder="Ingrese Fecha de Caducidad del Documento, si la tuviese.">
                        <input type="text" id="id_trabajador_documento_solicitado" name="id_trabajador_documento_solicitado" style="display:none">
                        <input type="text" id="id_documento_solicitado" name="id_documento_solicitado" style="display:none">
                        <input type="text" id="codigo_documento_solicitado" name="codigo_documento_solicitado" style="display:none">
                    </div>
                    <div class="col-md-12" style="margin-top:3%;text-align:center" align="center">
                        <div id="icono_archivo" class="col-md-12  col-centered" style="max-height:300px; width:100%">
                            
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="subir_documentacion_solicitada" type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Agregar  Documento Solicitado-->
<!-- Inicio Modal Validar -->
<div id="modal_validar_documento" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">¿Esta seguro de Validar el Documento?</h4>
            <input style="display:none" id="id_documento_validar" value="">
          </div>
          <div class="modal-footer">
            <button onClick="enviar_validar_documento()" type="button" class="btn btn-success">Validar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- Fin Modal Validar -->
<script>
$( document ).ready(function() { 
        
    $('#tabla_listas_documentos').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        'initComplete': function(settings){
         var api = this.api();

         api.cells(
            api.rows(function(idx, data, node){
               return (data[1] === '2') ? true : false;
            }).indexes(),
            0
         ).checkboxes.disable();
      },
        'columnDefs': [
          {
             'targets': 0,
             'checkboxes': {
                'selectRow': true
             }
          },
            {
                "targets": [ 1 ],
                "visible": false,
                "searchable": false
            }
            
   ],
   'select': {
      'style': 'multi'
   },
        "language": {
            "lengthMenu": "Mostrar _MENU_ Trabajadores",
            "zeroRecords": "Sin Resultados - Lo Siento",
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
        },

    });
    
    $("#botones_tabla").append('<button onClick="descargar_documentacion()" type="button" class="btn btn-success">Descargar</button>');
    $("#tabla_listas_documentos_filter").css("width","100%");
    $("#tabla_listas_documentos_filter label").css("width","100%");
    $("#tabla_listas_documentos_filter label input").css("width","100%");
    $("#tabla_listas_documentos_info").css("width","45%");
    $("#tabla_listas_documentos_paginate").css("width","100%");
    
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
                            $('#tabla_listas_documentos').DataTable().row.add( [
                                datos[0],
                                datos[1],
                                datos[2],
                                '<a style="text-align:center;" onClick="eliminar_tipo_documento('+datos[4]+')"><i class="fa fa fa-trash fa-2x" aria-hidden="true"></i></a>'
                            ] ).draw( false );
                        
                            $("#titulo_documento_trabajador").val('');
                            $("#descripcion_documento_trabajador").val('');

                            Command: toastr["success"]("Se ingreso Correctamente el Tipo Documentación.", "Agregada Tipo Documentación");
                            $("[data-dismiss=modal]").trigger({ type: "click" });                   
                                            
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
    
    function adjuntar_documento_solicitado(id_documentacion,id_trabajador,codigo){
        var documento_trabajador = new FormData();
        documento_trabajador.append( "documento_trabajador", $("#documento_pedido_trabajador"+id_documentacion)[0].files[0]);
        documento_trabajador.append( "titulo_documento_trabajador", $("#titulo_documento_trabajador").val());
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>empresa/subir_documento_trabajador',
            contentType: false,
            data: documento_trabajador, 
            processData: false,
            cache: false,
            success: function(data){
                var datos = JSON.parse(data);
                if(datos[0] == '1'){
                    $("#imagen_preview").remove();
                    $("#the-canvas").remove();
                    $("#icono_archivo").append('<img id="imagen_preview" style="max-height:300px;margin: auto;width: 90%;" src="'+datos[1]+'" >');
                }else{
                    $("#imagen_preview").remove();
                    $("#the-canvas").remove();
                    $("#icono_archivo").append('<canvas style="max-height:300px;margin: auto;" id="the-canvas" height="300" width="230"></canvas>');
                    var url = datos[1];

                    // Asynchronous download PDF
                    PDFJS.getDocument(url)
                    .then(function(pdf) {
                                    return pdf.getPage(1);
                                  })
                    .then(function(page) {
                                    // Set scale (zoom) level
                                    var desiredWidth = 230;
                                    var viewport = page.getViewport(1);
                                    var scale = desiredWidth / viewport.width;
                                    var scaledViewport = page.getViewport(scale);

                                    // Get viewport (dimensions)
                                    var viewport = page.getViewport(scale);

                                    // Get canvas#the-canvas
                                    var canvas = document.getElementById('the-canvas');

                                    // Fetch canvas' 2d context
                                    var context = canvas.getContext('2d');

                                    // Prepare object needed by render method
                                    var renderContext = {
                                      canvasContext: context,
                                      viewport: viewport
                                    };

                                    // Render PDF page
                                    page.render(renderContext);
                                  });
                }
                $("#id_trabajador_documento_solicitado").val(id_trabajador);
                $("#id_documento_solicitado").val(id_documentacion);
                $("#codigo_documento_solicitado").val(codigo);
                $('#modal_agregar_documento_solicitado').modal('show');
            }
        });
       
    }
    
    function validar_archivo(id_archivo){
        $("#id_documento_validar").val(id_archivo);
        $('#modal_validar_documento').modal('show');
    }
    
    function enviar_validar_documento(){
        $.ajax({
                type: 'POST',
                url: '<?=base_url()?>trabajador_laboral/validar_documento',
                data: {id_documento : $("#id_documento_validar").val()}, 
                success: function(data){
                    if(data == true){
                        $("#label_documento_pedido_trabajador"+$("#id_documento_validar").val()+" a i").css('color','green');
                        $("#label_check"+$("#id_documento_validar").val()).remove();
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["success"]("Se Adjunto Correctamente el Documento.", "Documento Adjuntado")
                        //redireccionarPagina('<?=base_url()?>laboral');
                    }else{
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                    }
                }
            });
        
        
    }
    
    $( "#subir_documentacion_solicitada" ).click(function() {
        var fd = new FormData();
        fd.append("id_documentacion_trabajador", $("#id_documento_solicitado").val());
        fd.append("codigo_documentacion_trabajador", $("#codigo_documento_solicitado").val());
        fd.append("id_trabajador", $("#id_trabajador_documento_solicitado").val());
        fd.append( "documento_pedido_trabajador", $("#documento_pedido_trabajador"+$("#id_documento_solicitado").val())[0].files[0]);
        
        $.ajax({
                type: 'POST',
                url: '<?=base_url()?>trabajador_laboral/adjuntar_documento_solicitado',
                contentType: false,
                data: fd, 
                processData: false,
                cache: false,
                success: function(data){
                    var datos = JSON.parse(data);
                    if(datos[0] == true){
                        $("#label_documento_pedido_trabajador"+$("#id_documento_solicitado").val()).empty();
                        $("#label_documento_pedido_trabajador"+$("#id_documento_solicitado").val()).attr('for','');
                        $("#label_documento_pedido_trabajador"+$("#id_documento_solicitado").val()).html('<a href="'+datos[1]+'" target="a_blank"><i style="color:red" class="fa '+datos[2]+' fa-2x" aria-hidden="true"></i></a> <i onCLick="validar_archivo('+$("#id_documento_solicitado").val()+')" style="color:green;cursor:pointer;" class="fa fa-check fa-2x" aria-hidden="true"></i>');
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["success"]("Se Adjunto Correctamente el Documento.", "Documento Adjuntado")
                        //redireccionarPagina('<?=base_url()?>laboral');
                    }else{
                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                    }
                }
            });
    });
    
    function descargar_documentacion(){
     
      var rows_selected = $('#tabla_listas_documentos').DataTable().column(0).checkboxes.selected();
      var documentos = [];
      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element
         documentos.push(rowId);
      });
        
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>ejecutivo/descargar_documentos',
            data: {id_documentos : documentos.toString()}, 
            success: function(data){
                $("#download_file").attr('href', data);
                document.getElementById("download_file").click();
            }
        });
    }
    
</script>