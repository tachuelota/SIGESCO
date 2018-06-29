<script type="text/javascript" src="<?=base_url()?>js/pdf.js"></script>
<script type="text/javascript">
    PDFJS.workerSrc = "<?=base_url()?>js/pdf.worker.js";
</script>
<style>

input[type="file"]#documento_trabajador {
     width: 0.1px;
     height: 0.1px;
     opacity: 0;
     overflow: hidden;
     position: absolute;
     z-index: -1;
}

    input[type="file"]#documento_pedido_trabajador {
     width: 0.1px;
     height: 0.1px;
     opacity: 0;
     overflow: hidden;
     position: absolute;
     z-index: -1;
}
    
    
    #icono_archivo img{
        margin-right: 23%
    }

</style>
<div id="page-content" class="candidate-profile">
    <div class="header-page-title our-agents-header" style="background:url('<?=base_url()?>img/home-bg2.jpg') center center no-repeat;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="title-overlay"></div>
        <div class="container">
          <div class="title-breadcrumb clearfix">
            <h1><a href="<?=base_url()?>empresa/trabajadores"><i style="color:white" class="fa fa-chevron-left fa-lg" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp; <?=$nombre?></h1>
            <ol class="breadcrumb">
              <li><a href="<?=base_url()?>empresa">Inicio</a></li>
              <li><a href="<?=base_url()?>empresa/trabajadores">Lista</a></li>
              <li class="active">Documentación</li>
            </ol>
          </div> <!-- end .title-breadcrumb -->

        </div> <!-- end .container -->
      </div> <!-- end .header-nav-bar -->
    <div class="container">
        <div id="candidate-profile" style="padding:0px;">
            <div class="row">
                 <div id="" class="col-xl-12">
                    <div class="candidate-description" style="padding:2% 5% 2% 5%">
                        <table id="tabla_documentacion_trabajador" class="table table-bordered hover" style="width:100%">
                            <thead>
                                <tr>
                                        <th></th>
                                        <th>Titulo</th>
                                        <th style="text-align:center" align="center">Fecha de Carga</th>
                                        <th style="text-align:center" align="center">Peso</th>
                                        <th style="text-align:center" align="center">Solicitado Por</th>
                                        <th style="text-align:center" align="center">Acciones</th>
                                    </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    foreach($documentos as $documento){
                                    if($documento->tipo == 1){    
                                ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?=$documento->titulo?></td>
                                        <td align="center"><?=$documento->fecha?></td>
                                        <td align="center"><?php                                  
                                           if($documento->url != ''){
                                               echo formatSizeUnits(filesize($documento->url));
                                           }else{ echo "0 KB";}
                                            ?></td>
                                        <td align="center"> Personal </td>
                                        <td align="center">
                                        <?php                                  
                                           if($documento->url != ''){
                                                $trozos = explode(".", $documento->url); 
                                                $extension = end($trozos);
                                               if(($extension == 'jpg') || ($extension == 'JPG') || ($extension == 'png')|| ($extension == 'PNG')){
                                               echo '<a title="Documento Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:green" class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>';}
                                               
                                               if(($extension == 'pdf') || ($extension == 'PDF')){
                                                   echo '<a title="Documento Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:green" class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>';
                                               }
                                               
                                               if(($extension == 'doc') || ($extension == 'docx')){
                                                   echo '<a title="Documento Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:green" class="fa fa-file-word-o fa-2x" aria-hidden="true"></i></a>';
                                               }
                                               
                                               if(($extension == 'xls') || ($extension == 'xlsx')){
                                                   echo '<a title="Documento Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:green" class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i></a>';
                                               }
                                                   
                                           }
                                        ?>
                                            
                                        </td>
                                    </tr>
                                    
                                <?php
                                    }
                                    
                                    if($documento->tipo == 2){
                                    ?>
                                    
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?=$documento->titulo?></td>
                                        <td align="center"><?=$documento->fecha?></td>
                                        <td align="center"><?php                                  
                                           if($documento->url != ''){
                                               echo formatSizeUnits(filesize($documento->url));
                                           }else{ echo "0 KB";}
                                            ?></td>
                                        <td align="center"> <?=$documento->solicitado?> </td>
                                        <td align="center">
                                        <?php                                  
                                               echo '<input type="file" id="documento_pedido_trabajador'.$documento->id.'" name="documento_pedido_trabajador'.$documento->id.'" style="display:none"  onchange="adjuntar_documento_solicitado('.$documento->id.','.$documento->id_trabajador.',\''.$documento->codigo.'\')"><span style="width:100px;" class="mi_archivo'.$documento->id.'"></span>
                        <label id="label_documento_pedido_trabajador'.$documento->id.'" for="documento_pedido_trabajador'.$documento->id.'">
                            <i style="color:#346abb; cursor:pointer;" class="fa fa-cloud-upload fa-2x" aria-hidden="true"></i>
                        </label';
                                        ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php
                                    }
                                    if($documento->tipo == 3){
                                    ?>
                                    
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?=$documento->titulo?></td>
                                        <td align="center"><?=$documento->fecha?></td>
                                        <td align="center"><?php                                  
                                           if($documento->url != ''){
                                               echo formatSizeUnits(filesize($documento->url));
                                           }else{ echo "0 KB";}
                                            ?></td>
                                        <td align="center"> <?=$documento->solicitado?> </td>
                                        <td align="center">
                                        <?php                                  
                                           if($documento->url != ''){
                                                $trozos = explode(".", $documento->url); 
                                                $extension = end($trozos);
                                               if(($extension == 'jpg') || ($extension == 'JPG') || ($extension == 'png')|| ($extension == 'PNG')){
                                               echo '<a title="Documento No Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:green" class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>';}
                                               
                                               if(($extension == 'pdf') || ($extension == 'PDF')){
                                                   echo '<a title="Documento No Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:red" class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>';
                                               }
                                               
                                               if(($extension == 'doc') || ($extension == 'docx')){
                                                   echo '<a title="Documento No Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:red" class="fa fa-file-word-o fa-2x" aria-hidden="true"></i></a>';
                                               }
                                               
                                               if(($extension == 'xls') || ($extension == 'xlsx')){
                                                   echo '<a title="Documento No Validado" href="'.base_url().$documento->url.'" target="a_blank"><i style="color:red" class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i></a>';
                                               }
                                                   
                                           }
                                        ?>
                                            
                                        </td>
                                    </tr>
                                
                                <?php
                                    }
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
        <h4 class="modal-title" id="myModalLabel">Agregar Documento</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="titulo_documento_trabajador" name="titulo_documento_trabajador" placeholder="Ingrese título para el documento">
                    </div>
                    <div class="col-md-4">
                        <span style="width:100px;" class="mi_archivo">
                            <input type="file" id="documento_trabajador" name="documento_trabajador" style="display:none">
                        </span>
                        <label class="btn btn-default" for="documento_trabajador" style="">
                            <span>Subir Documento</span>
                        </label>
                    </div>
                    <div id="" class="col-md-12" style="margin-top:3%;text-align:center" align="center">
                        <div id="icono_archivo" class="col-md-12  col-centered" style="max-height:300px; width:100%">
                            
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="subir_documentacion" type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Agregar -->

<script>
$( document ).ready(function() { 
            
    $('#tabla_documentacion_trabajador').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Documentos",
            "zeroRecords": "Sin DOcumentación",
            "info": "Mostrando _PAGE_ Página de _PAGES_",
            "infoEmpty": "Informacion no Disponible",
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
    
    $("#botones_tabla").append('<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_agregar">Agregar</button> <button type="button" class="btn btn-info">Pedir</button>');
    $("#tabla_documentacion_trabajador_filter").css("width","100%");
    $("#tabla_documentacion_trabajador_filter label").css("width","100%");
    $("#tabla_documentacion_trabajador_filter label input").css("width","100%");
    $("#tabla_documentacion_trabajador_info").css("width","45%");
    $("#tabla_documentacion_trabajador_paginate").css("width","100%");
    
});
    
    $( "#documento_trabajador" ).change(function() {
        var documento_trabajador = new FormData();
        documento_trabajador.append( "documento_trabajador", $("#documento_trabajador")[0].files[0]);
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
                    $("#icono_archivo").append('<img id="imagen_preview" style="max-height:300px;margin: auto;width: 90%;" src="<?=base_url()?>'+datos[1]+'" >');
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
            }
        });
    });
    
        $("#subir_documentacion").click(function(){
            /*Inicio Titulo */  if(($("#titulo_documento_trabajador").val() != '')){
            $( "#titulo_documento_trabajador" ).css( "border-color","#ccc" );
                
            /*Inicio Titulo */  if(($("#documento_trabajador").val() != '')){
            $( "#documento_trabajador" ).css( "border-color","#ccc" );
            
                var documento_trabajador = new FormData();
                documento_trabajador.append( "documento_trabajador", $("#documento_trabajador")[0].files[0]);
                documento_trabajador.append( "titulo_documento_trabajador", $("#titulo_documento_trabajador").val());
                documento_trabajador.append( "id_trabajador_busqueda", <?=$id_trabajador_busqueda?>);
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>empresa/agregar_documento_trabajador',
                    contentType: false,
                    data: documento_trabajador, 
                    processData: false,
                    cache: false,
                    success: function(data){
                        if(data != false){
                               var datos = JSON.parse(data);
                            if(datos[0] == true){
                                    $('#tabla_documentacion_trabajador').DataTable().row.add( [
                                        '<input type="checkbox">',
                                        datos[1],
                                        datos[3],
                                        datos[4],
                                        '<a href="'+datos[2]+'" target="a_blank"><i class="fa fa-file-image-o fa-2x" aria-hidden="true"></i></a>'

                                    ] ).draw( false );

                                    $("[data-dismiss=modal]").trigger({ type: "click" });
                                    Command: toastr["success"]("Documento agregado correctamente.", "Documento Agregado")
                                    $("#imagen_preview").remove();
                                    $("#the-canvas").remove();
                                    $("#titulo_documento_trabajador").val('');
                                }
                            else{
                                $('#tabla_documentacion_trabajador').DataTable().row.add( [
                                            '<input type="checkbox">',
                                            datos[1],
                                            datos[3],
                                            datos[4],
                                            '<a href="'+datos[2]+'" target="a_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>'

                                        ] ).draw( false );
                                $("[data-dismiss=modal]").trigger({ type: "click" });
                                Command: toastr["success"]("Documento agregado correctamente.", "Documento Agregado")
                                $("#imagen_preview").remove();
                                $("#the-canvas").remove();
                                $("#titulo_documento_trabajador").val('');
                            }
                        } else{ Command: toastr["error"]("Ocurrio un Problema, intente nuevamente por favor.", "Error al subir Logo")}
                    }
                });
                
        }else{
            $( "#documento_trabajador" ).css(  "border-color","red" );
            $( "#documento_trabajador" ).focus();
            Command: toastr["error"]("Primero <strong>'Suba'</strong> un documento por favor.", "Subir Documento")
        }
        }else{
            $( "#titulo_documento_trabajador" ).css(  "border-color","red" );
            $( "#titulo_documento_trabajador" ).focus();
            Command: toastr["error"]("Ingrese el <strong>'Título'</strong> por favor.", "Título")
        }
    });
    
    function adjuntar_documento_solicitado(id_documentacion,id_trabajador,codigo){
        var fd = new FormData();
        fd.append("id_documentacion_trabajador", id_documentacion);
        fd.append("codigo_documentacion_trabajador", codigo);
        fd.append("id_trabajador", id_trabajador);
        fd.append( "documento_pedido_trabajador", $("#documento_pedido_trabajador"+id_documentacion)[0].files[0]);
        
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
                        $("#label_documento_pedido_trabajador"+id_documentacion).empty();
                        $("#label_documento_pedido_trabajador"+id_documentacion).attr('for','');
                        $("#label_documento_pedido_trabajador"+id_documentacion).html('<a href="'+datos[1]+'" target="a_blank"><i class="fa '+datos[2]+' fa-2x" aria-hidden="true"></i></a>');
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
</script>