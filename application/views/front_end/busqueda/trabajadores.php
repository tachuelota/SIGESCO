<style>

    @media screen and (min-width: 600px) {
        #modal_agregar_lista {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:50%;
        }
    }
    
    .number a{
        text-decoration: none;
        background-color: #346abb;
        position: relative;
        top: 2px;
        padding: 6px 10px;
        background-color: #ddd;
        border-radius: 0;
        color: #fff;
    }
    
    .previo a{
        color: #4c4c4c important;
        font-size: 13px;
        padding: 5px 15px;
        border-bottom: 0;
        margin-right: 5px;
    }
    
    .next a{
        color: #4c4c4c important;
        font-size: 13px;
        padding: 5px 15px;
        border-bottom: 0;
        margin-left: 5px;
    }
    
    .fa-times-circle-o:hover{
        color:red;
    }
    
    .btn-circle.btn-lg {
      width: 40px;
      height: 40px;
      padding: 0px 14px;
      font-size: 18px;
      line-height: 1.33;
      border-radius: 25px;
      margin-bottom: 15px;
      margin-top: 15px;
    }
    

    
</style>
<!--     <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Professionals</h1>

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Professionals</li>
          </ol>

        </div> 
      </div> --> <!-- end .header-page-title -->
    

      <!-- Page Content -->

      <div id="page-content" class="page-content pt60">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 page-sidebar">
              <aside>
                <div class="white-container mb0">
                   <div class="widget sidebar-widget jobs-search-widget">
                    <h5 class="widget-title">Palabras Claves</h5>
                    <div class="row">
                        <div class="col-md-10 col-xs-10">
                          <input id="palabra_clave_sigesco"  name="palabra_clave_sigesco" type="text" class="form-control mt15 mb15" placeholder="Escribir Palabra Clave">
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <button onClick="agregar_palabra()" type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-plus fa-4x"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                          <div class=" additional-skills">
                            <ul id="palabras_claves_busqueda_sigesco" name="palabras_claves_busqueda_sigesco" class="list-inline">
                                <?php                                 
                                    if($this->session->userdata('palabra_busqueda_sigesco') != ''){
                                    $palabras_claves = explode(",", $this->session->userdata('palabra_busqueda_sigesco'));
                                    foreach ($palabras_claves as $palabra_clave) {
                                ?>
                                <li class="<?=str_replace(' ','',trim($palabra_clave))?>"><a><?=$palabra_clave?> 
                                  <span class="new-notification"> 
                                      <i onmouseover="this.style.color='red'"  onmouseout="this.style.color= 'white'" onClick="eliminar_palabra('<?=$palabra_clave?>')" style="color:white;cursor:pointer" class="fa fa-times-circle-o fa-lg" aria-hidden="true"></i>
                                    </span></a>
                                </li>
                                <? }}?>
                            </ul>
                        </div>
                        </div>
                    </div>
                        
                        
                  <!--
                  <div class="widget sidebar-widget jobs-search-widget">
                    <h5 class="widget-title">Palabras Claves</h5>

                    <div class="widget-content">
                      <span class="search-tex">I'm looking for a ...</span>

                      <select class="form-control mt10 mb10">
                        <option value="0">Job</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                      </select>

                      <span class="search-tex">in</span>

                      <input type="text" class="form-control mt10" placeholder="Location">

                      <input type="text" class="form-control mt15 mb15" placeholder="Industry / Role">

                      <input type="submit" class="btn btn-default" value="Search">
                    </div>
                  </div>

                  <div class="widget sidebar-widget jobs-filter-widget">
                    <h5 class="widget-title">Filter Results</h5>

                    <div class="widget-content">
                      <h6>By Region</h6>

                      <div>
                        <ul class="filter-list">
                          <li>
                            <a href="#">Asia <span>(1234)</span></a>
                            <ul>
                              <li>
                                <a href="#">Asia <span>(1234)</span></a>
                                <ul>
                                  <li><a href="#">Asia <span>(1234)</span></a></li>
                                  <li><a href="#">Africa <span>(5678)</span></a></li>
                                  <li><a href="#">Europe <span>(910)</span></a></li>
                                  <li><a href="#">North America <span>(347)</span></a></li>
                                  <li><a href="#">Central America <span>(52)</span></a></li>
                                  <li><a href="#">South America <span>(117)</span></a></li>
                                  <li><a href="#">Oceania <span>(736)</span></a></li>
                                </ul>
                              </li>
                              <li><a href="#">Africa <span>(5678)</span></a></li>
                              <li><a href="#">Europe <span>(910)</span></a></li>
                              <li><a href="#">North America <span>(347)</span></a></li>
                              <li><a href="#">Central America <span>(52)</span></a></li>
                              <li><a href="#">South America <span>(117)</span></a></li>
                              <li><a href="#">Oceania <span>(736)</span></a></li>
                            </ul>
                          </li>
                          <li><a href="#">Africa <span>(5678)</span></a></li>
                          <li><a href="#">Europe <span>(910)</span></a></li>
                          <li><a href="#">North America <span>(347)</span></a></li>
                          <li><a href="#">Central America <span>(52)</span></a></li>
                          <li><a href="#">South America <span>(117)</span></a></li>
                          <li><a href="#">Oceania <span>(736)</span></a></li>
                        </ul>

                        <a href="#" class="toggle"></a>
                      </div>

                      <h6>By Industry</h6>

                      <div>
                        <ul class="filter-list">
                          <li><a href="#">Administration <span>(75)</span></a></li>
                          <li><a href="#">Manufactoring <span>(3741)</span></a></li>
                          <li><a href="#">Healthcare &amp; Science <span>(115)</span></a></li>
                          <li><a href="#">Media &amp; Creative <span>(347)</span></a></li>
                          <li><a href="#">Transportation <span>(52)</span></a></li>
                        </ul>

                        <a href="#" class="toggle"></a>
                      </div>

                      <h6>By Type</h6>

                      <div>
                        <ul class="filter-list">
                          <li><a href="#">Banking/Finance <span>(300)</span></a></li>
                          <li><a href="#">Administration <span>(758)</span></a></li>
                          <li><a href="#">Art/Design/Creative <span>(20)</span></a></li>
                          <li><a href="#">Customer Service <span>(165)</span></a></li>
                          <li><a href="#">Education/Training <span>(11)</span></a></li>
                          <li><a href="#">Banking/Finance <span>(9)</span></a></li>
                        </ul>

                        <a href="#" class="toggle"></a>
                      </div>

                      <h6>Type of Contract</h6>

                      <div class="checkbox"><label><input type="checkbox"> Full-Time</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Part-Time</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Freelance</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Internship</label></div>

                      <h6>Work Experience</h6>

                      <div class="checkbox"><label><input type="checkbox"> Not Applicable</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Mid-Senior Level</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Entry Level</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Associate</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Director</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Internship</label></div>
                      <div class="checkbox"><label><input type="checkbox"> Executive</label></div>

                      <h6>Work Permit</h6>

                      <div class="radio"><label><input type="radio"> Full-Time</label></div>
                      <div class="radio"><label><input type="radio"> Part-Time</label></div>
                      <div class="radio"><label><input type="radio"> Freelance</label></div>

                      <h6>Date Posted</h6>

                      <div class="range-slider clearfix">
                        <div class="slider" data-min="1" data-max="60"></div>
                        <div class="first-value"><span>1</span> days</div>
                        <div class="last-value"><span>60</span> days</div>
                      </div>

                      <h6>Salary Range</h6>

                      <div class="range-slider clearfix">
                        <div class="slider" data-min="1" data-max="100000"></div>
                        <div class="first-value">$ <span>1</span></div>
                        <div class="last-value">$ <span>100000</span></div>
                      </div>

                      <input type="submit" class="btn btn-default mt30" value="Filter">
                    </div>
                  </div>
                    -->
                </div>
              </aside>
            </div> <!-- end .page-sidebar -->

            <div class="col-sm-8 page-content">                
                 <?php
                    $i=0;
                    foreach ($trabajadores as $trabajador){
                ?>
                    <div class="candidate-description client-description applicants-content">
                <div class="language-print client-des clearfix">
                  <div class="aplicants-pic pull-left">
                    <img src="<?=base_url().$trabajador->foto_perfil_trabajador_laboral?>" alt="">

                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-eye"></i></a></li>
                      <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                      <li><a href="#"><i class="fa fa-trash"></i></a></li>


                    </ul>
                  </div>
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                      <h5><?=$trabajador->nombre_trabajador_laboral." ".$trabajador->paterno_trabajador_laboral?></h5>
                      <a href="#">Web Developer at Highest Dreams Inc</a>
                    </div>
                    <ul class="list-inline pull-right">
                      <!--<li class="star-rating">7.9</li>-->
                    </ul>

                  </div>

                  <div class="aplicant-details-show clearfix">
                    <ul class="list-unstyled pull-left">
                      <li><span>Dirección: <b class="aplicant-detail"><?=$trabajador->direccion_trabajador_laboral.", ".$trabajador->nombre_ciudad?></b></span></li>

                      <li><span>Nacionalidad: <b class="aplicant-detail"><?=$trabajador->nacionalidad_trabajador_laboral?></b></span></li>
                      <li><span>Años de Experiencia: <b class="aplicant-detail"><?=$trabajador->annos_experiencia_trabajador_laboral?> Años</b></span></li>

                      <li><span>Educación: <b class="aplicant-detail"><?=$trabajador->grado_estudio_trabajador_laboral?></b></span></li>
                    </ul>

                    <ul class="list-unstyled pull-left">
                      <li>
                        <span>Estado Trabajador: <b class="aplicant-detail"><?=$trabajador->condicion_trabajador_laboral?></b></span>
                      </li>

                      <li>
                        <span>Género: <b class="aplicant-detail"><?=$trabajador->genero_trabajador_laboral?></b></span>
                      </li>

                      <li>
                        <span>Work Permit: <b class="aplicant-detail">General Work Permit</b></span>
                      </li>
                    </ul>

                  </div>
                  <!-- end .aplicant-details-show -->
                </div> <!-- end .language-print -->

                <div class="candidate-details">

                  <div class="toggle-content-client">
                    <div class="candidate-title">
                      <h5>Hola, mi nombre es <span><?=$trabajador->nombre_trabajador_laboral." ".$trabajador->paterno_trabajador_laboral." ".$trabajador->materno_trabajador_laboral?></span></h5>
                    </div>


                    <p style="text-align:justify">
                        <?=$trabajador->presentacion_trabajador_laboral?>
                    </p>
                    <div class="candidate-skills">
                      <div class="additional-skills">
                        <div class="candidate-title mt40">
                          <h5>CONOCIMIENTOS</h5>
                        </div>

                        <ul class="list-inline">
                            <?php
                                $conocimientos = explode(",", $trabajador->conocimientos);
                                foreach( $conocimientos as $conocimiento ){
                                    if($conocimiento != ''){
                                     echo '<li><a href="#">'.$conocimiento.'</a></li>';   
                                    }
                                }
                            ?>
                        </ul>
                      </div> <!-- end .addintional-skills -->

                    </div> <!-- end .candidate-skills -->

                    <div class="apply-share clearfix">                      
                        <ul class="list-inline pull-left job-preview-social-link" style="width:100%; text-align:left;margin-bottom:10px;">
                            <li class="share" style="width:25%">REDES SOCIALES:</li>
                            <?php
                                if(($trabajador->facebook_trabajador_laboral != '') && ($trabajador->facebook_trabajador_laboral != 'Sin Información')){
                                    echo '<li class="facebook-color"><a href="#"><i class="fa fa-facebook"></i></a></li>';
                                }
                                if(($trabajador->twitter_trabajador_laboral != '') && ($trabajador->twitter_trabajador_laboral != 'Sin Información')){
                                    echo '<li class="twitt-color"><a href="#"><i class="fa fa-twitter"></i></a></li>';}
                                if(($trabajador->linkedin_trabajador_laboral != '') && ($trabajador->linkedin_trabajador_laboral != 'Sin Información')){
                                    echo '<li class="twitt-color"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>';}

                            ?>
                        </ul>
                    </div>
                    <!-- end .apply-share -->
                  </div>
                  <!-- end .toggle-content-client -->


                  <div class="toggle-details text-right">
                    <a id="info_candidato<?=$trabajador->id_trabajador_laboral?>" onclick="ver_mas(this.id)" class="btn btn-default info"><i class="fa fa-angle-down" aria-hidden="true"></i> Leer Más</a>
                    <a class="btn btn-default" onclick="modal_mensaje(<?=$trabajador->id_trabajador_laboral?>)">Contactar</a>

                  </div>
                  <!-- end .toggle-details -->
                </div> <!-- end .candidate-details -->

              </div> <!-- end .candidate-description -->
                <?php
                    }
                    if($i == 0){
                    //echo '<li class="list-group-item">Sin Servicio</li>';
                    }
                ?>
              <?php echo $links; ?>
            <!--
              <div class="pagination-content clearfix">
                <p>Displaying 10 out of 50 items</p>

                <nav>
                  <ul class="list-inline">
                    <li><a class="btn btn-default first" href="#">first</a></li>
                    <li><a class="btn btn-default previous" href="#">Previous</a></li>
                    <li class="active"><a class="number" href="#">1</a></li>
                    <li><a class="number" href="#">2</a></li>
                    <li><a class="number" href="#">3</a></li>
                    <li><a class="number" href="#">4</a></li>
                    <li><a class="btn btn-default next" href="#">Next</a></li>
                    <li><a class="btn btn-default last" href="#">Last</a></li>
                  </ul>
                </nav>
              </div>
-->

            </div> <!-- end .page-content -->
          </div>
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

<!--Inicio  Modal Enviar Mensaje -->
<div id="modal_mensaje" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <form id="form_mensaje" class="mt30">
            <input style="display:none" id="id_trabajador_laboral_mensaje" name="id_trabajador_laboral_mensaje" value="" >
            <div class="form-group">
                <input id="titulo_mensaje" name="titulo_mensaje" type="text" class="form-control" placeholder="Título">
            </div>
            <div class="form-group">
                <textarea id="cuerpo_mensaje" name="cuerpo_mensaje" class="form-control" rows="5" placeholder="¿Que quieres preguntarle al trabajador?"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-envelope-o" aria-hidden="true"></i> Enviar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin Modal Enviar Mensaje --> 
          
<!--Inicio  Modal Enviar Mensaje -->
<div id="modal_agregar_lista" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <form id="form_mensaje" class="mt30">
            <div class="form-group">
                <select>
                    <option>Seleccione una Lista</option>
                    <?php
                        foreach ($listas as $lista){
                    ?>
                        <option value="<?=$listas->nombre_lista_ejecutivo. " - ".$listas->fecha?>">1</option>
                    <?php
                        }
                    ?>
                </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-envelope-o" aria-hidden="true"></i> Agregar a Lista</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- Fin Modal Enviar Mensaje -->
          
<script>
$( document ).ready(function() {
    $(".previo a").addClass('btn btn-default');
    $(".next a").addClass('btn btn-default');
});
    
    
    function ver_mas(id){
        if($("#"+id).hasClass('activo')){
           $("#"+id).removeClass('activo');
           $("#"+id).html('<i class="fa fa-angle-down" aria-hidden="true"></i> Leer Más');
        }else{
            $("#"+id).addClass('activo');
            $("#"+id).html('<i class="fa fa-angle-up" aria-hidden="true"></i> Leer Menos');
           }
    }
    
    function modal_mensaje(id){
        $("#id_trabajador_laboral_mensaje").val(id);
        $('#modal_mensaje').modal('show');
    }
    
    function eliminar_palabra(palabra_clave){
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>inicio/eliminar_palabra',
            data: {palabra_clave : palabra_clave}, 
            success: function(data){
                if(data == true){
                    redireccionarPagina(<?="'http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]."'"?>);
                }else{
                    Command: toastr["error"]("Ocurrio un Problema, intente nuevamente Por Favor.", "Error")
                }
            }
        });
    }
    
    function agregar_palabra(){
        /*Inicio Palabra Clave */  if($("#palabra_clave_sigesco").val() != ''){
                            $( "#palabra_clave_sigesco" ).css( "border-color","#ccc" );
                            $.ajax({
                                type: 'POST',
                                url: '<?=base_url()?>inicio/agregar_palabra',
                                data: {palabra_clave : $("#palabra_clave_sigesco").val()}, 
                                success: function(data){
                                    if(data == true){
                                        redireccionarPagina('<?=base_url()."busqueda/trabajadores"?>');
                                    }else{
                                        Command: toastr["error"]("Ocurrio un Problema, intente nuevamente Por Favor.", "Error")
                                    }
                                }
                            });
        /* Fin Palabra Clave */   }else{
                            $( "#palabra_clave_sigesco" ).css(  "border-color","red" );
                            $( "#palabra_clave_sigesco" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Palabra Clave'</strong> por favor.", "Palabra Clave")
                        }
    }
</script>