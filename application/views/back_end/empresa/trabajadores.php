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
                                        <th>Salario</th>
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
                                        <td>$320,800</td>
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

<script>
$( document ).ready(function() { 
        
    $('#tabla_trabajadores_ejecutivo').DataTable({
        "dom": '<"row separar"<"col-md-12 col-xs-12"<"row"<"col-md-3 col-xs-6" l><"col-md-5 col-xs-6" f><"#botones_tabla.col-md-4 col-xs-12">>>>t<"row"<"col-md-4 col-xs-4" i><"col-md-8 col-xs-8" p>>',
        "pagingType": "full_numbers",
        "language": {
            "lengthMenu": "Mostrar _MENU_ Trabajadores",
            "zeroRecords": "Nothing found - sorry",
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
    
    //$("#botones_tabla").append('<button type="button" class="btn btn-success">Success</button>');
    $("#tabla_trabajadores_ejecutivo_filter").css("width","100%");
    $("#tabla_trabajadores_ejecutivo_filter label").css("width","100%");
    $("#tabla_trabajadores_ejecutivo_filter label input").css("width","100%");
    $("#tabla_trabajadores_ejecutivo_info").css("width","45%");
    $("#tabla_trabajadores_ejecutivo_paginate").css("width","100%");
    
});
    
    function enviar_trabajador(id,nombre){
        $("#form_trabajador_"+id).append('<input id="id_trabajador" name="id_trabajador"  type="text" value="'+id+'" style="display:none"><input id="nombre_trabajador" name="nombre_trabajador"  type="text" value="'+nombre+'" style="display:none">');
        $("#form_trabajador_"+id).submit();
    }
</script>