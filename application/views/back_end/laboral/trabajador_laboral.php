<style>
    .assigned-job-list{
        margin-top: 10px;
    }
    .pull-right{
        padding-top:35px;
    }
    
    #editar_perfil:hover{
        background-color: aqua;
    }
    
    @media screen and (min-width: 600px) {
        #modal_informacion_personal, #modal_experiencia_laboral,#modal_experiencia_laboral_editar {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:85%;
        }
        
        #modal_estudio, #modal_estudio_editar_basica, #modal_estudio_editar_media, #modal_estudio_editar_universitaria,  {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:60%;
        }
        
        .barra_progreso{
            padding:10px 10px 10px 10px;
        }
        
        .detalle_idioma_tabla{
            padding:5px 10px 0px 10px;
        }
        
        .detalle_idioma_tabla2{
            padding:5px 10px 5px 10px;
        }
        .detalle_idioma_tabla3{
            padding:5px 10px 5px 10px;
        }
    }
    
    @media screen and (min-width: 600px) {
        #modal_foto_perfil {
            /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
            width:inherit;
            height:inherit;
            /* To center horizontally */
            margin: 0 auto;
            width:50%;
        }
    }

    
    .list-unstyled li{
        
        padding: 5px 0px 10px 0px;
    }
    
    label{
        color:#346abb;
    }
    
    .skill-progressbar p #valor_porcentaje_conocimiento {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    .skill-progressbar p #valor_porcentaje_idioma_oral {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    .skill-progressbar p #valor_porcentaje_idioma_escrito {
        position: absolute;
        right: 0;
        top: 0;
    }
    
    @media screen and (max-width: 375px) and (min-width: 300px) {
        .texto_anuncio{
            font-size:8px;
            text-align: center;
            padding-left: 10px;
        }
        
        .cuadrado_anuncio{
            width:10px;
            height:10px;
        }
        
        .days-left{
            max-width: 50px;
            min-height: 50px;
            
        }
        
        .css-table{
            width:100%;
        }
        
        .col-xs-6{
            padding: 0px;
        }
        
        p.detalle_idioma_tabla{
            margin: 0px;
            padding: 0px
        }
        
        .barra_progreso{
            padding:0px 20px 0px 20px;
        }
    }
    
    .titulo_idioma_tabla{
        text-transform: capitalize;
        font-size: 19px;
        font-weight: 600;
        line-height: 1.1;
        font-family: 'Raleway', sans-serif;
        padding-top: 25px;
    }
    
    .titulo_idioma_tabla2{
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.1;
        font-family: 'Raleway', sans-serif;
        padding-top: 10px;
    }
    
    .detalle_idioma_tabla{
        color: #666;
        font-size: 14px;
        text-transform: capitalize;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
    }
    
    .detalle_idioma_tabla2{
        color: #666;
        font-size: 14px;
        text-transform: capitalize;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
    }
    
    .icono_idioma{
        cursor: pointer;
        color: #346abb;
        text-transform: capitalize;
        text-align: center;
        font-size: inherit;
        text-rendering: auto;
        font-size: 28px;
        text-align: center;
        align-content: center;
        padding-top: 20px;
    }
    
    .icono_imagen{
        cursor: pointer;
        color: #346abb;
        text-transform: capitalize;
        text-align: left;
        font-size: inherit;
        text-rendering: auto;
        font-size: 28px;
        text-align: center;
        align-content: center;
        padding-top: 0px;
    }
    
    p.detalle_idioma_tabla3{
        margin: 0px;
        padding: 0px;
    }
    
</style>
<div id="page-content" class="candidate-profile">
        <div class="container">
              <div id="candidate-profile">
                <div class="row">
                  <div class="col-md-4">
                    <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">
                        <img id="foto_editar_perfil" src="<?=base_url().$perfil->foto_perfil_trabajador_laboral?>" alt="">
                          <div id="editar_perfil" style="height:50px;width:100%;margin-top:-70px;background-color:black;opacity:0.5; display:none;"><a  href="#" data-toggle="modal" data-target="#modal_foto_perfil"><h5 style="opacity:0.9;color:white;margin:0px;font-size:14px;heigh:20px;padding:15px 10px 15px 10px;"><i class="fa fa-pencil" aria-hidden="true"></i> Editar Foto Perfil</h5></a></div>
                        <div>&nbsp;</div>
                        <a style="margin-top:15px" href="#"><?=$this->session->userdata('sigesco_laboral_nombre')." ".$this->session->userdata('sigesco_laboral_paterno')?></a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title">
                          <h6>Información General</h6>
                        </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Birthday:</strong>June 17, 1986</li>
                          <li><strong>Address:</strong>New York City, United States</li>
                          <li><strong>Phone:</strong>+1 123-456-7890</li>
                          <li><strong>Email:</strong>email@example.com</li>
                          <li><strong>Website:</strong>www.example.com</li>
                          <li class="mt20"><strong>Experience:</strong>5 Years</li>
                          <li><strong>Degree:</strong>MBA</li>
                          <li><strong>Residence:</strong>USA</li>
                        </ul>

                        <!-- social link -->

                        <div class="title mt20">
                          <h6>Redes Sociales</h6>
                        </div> <!-- end .title -->

                        <ul class="list-inline social-link mt10">
                          <li class="envelop-color"><a href="#"><i class="fa fa-envelope"></i></a></li>
                          <li class="facebook-color"><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li class="google-color"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li class="twitt-color"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li class="linked-color"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li class="pinterest-color"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>


                      </div> <!-- end .candidate-general-info -->
                    </div>
                  </div> <!-- end .3col grid layout -->

                  <div id="datos_candidato" class="col-md-8">
                    <div class="candidate-description">
                      <div class="candidate-details" style="padding-top: 30px;">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#personal">Personal</a></li>
                          <li><a data-toggle="tab" href="#estudio">Estudio</a></li>
                          <li><a data-toggle="tab" href="#experiencia">Experiencia</a></li>
                          <li><a data-toggle="tab" href="#conocimiento">Conocimiento</a></li>
                          <li><a data-toggle="tab" href="#idioma">Idiomas</a></li>
                          <li><a data-toggle="tab" href="#documentacion">Documentación</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="personal" class="tab-pane fade in active">
                            <div class="row">
                              <div class="col-sm-10 col-xs-8"><h3>INFORMACIÓN PERSONAL</h3></div>
                              <div class="col-sm-2 col-xs-4">
                                  <a style="" class="pull-right" href="#" data-toggle="modal" data-target="#modal_informacion_personal"><i class="fa fa-edit fa-lg"></i> Editar</a>
                              </div>
                            </div>
                            <div class="aplicant-details-show clearfix">
                                <ul class="list-unstyled pull-left">
                                  <li><span>Nombre: <b class="aplicant-detail"><?=$perfil->nombre_trabajador_laboral?></b></span></li>
                                  <li><span>Apellido Paterno: <b class="aplicant-detail"><?=$perfil->paterno_trabajador_laboral?></b></span></li>
                                  <li><span>Celular Contacto: <b class="aplicant-detail"><?=$perfil->celular_trabajador_laboral?></b></span></li>
                                  <li><span>Dirección: <b class="aplicant-detail"><?=$perfil->direccion_trabajador_laboral?></b></span></li>
                                  <li><span>Email: <b class="aplicant-detail"><?=$perfil->email_trabajador_laboral?></b></span></li>
                                  <li><span>Pretención Salarial: <b class="aplicant-detail"><?=$perfil->pretencion_salarial_trabajador_laboral?></b></span></li>
                                  <li><span>Estado Civil: <b class="aplicant-detail"><?=$perfil->estado_civil_trabajador_laboral?></b></span></li>
                                  <li><span>Discapacidad: <b class="aplicant-detail"><?=$perfil->discapacidad_trabajador_laboral?></b></span></li>
                                  
                                </ul>
                                <ul class="list-unstyled pull-left">
                                  <li><span>Segundo Nombre: <b class="aplicant-detail"><?=$perfil->nombre2_trabajador_laboral?></b></span></li>
                                  <li><span>Apellido Materno: <b class="aplicant-detail"><?=$perfil->materno_trabajador_laboral?></b></span></li>
                                  <li><span>Fecha de Nacimiento: <b class="aplicant-detail"><?=$perfil->nacimiento?></b></span></li>
                                  <li><span>Celular Referencia: <b class="aplicant-detail"><?=$perfil->celular_referencia_trabajador_laboral?></b></span></li>
                                  <li><span>Ciudad: <b class="aplicant-detail"><?=$perfil->nombre_ciudad?></b></span></li>
                                  <li><span>Nacionalidad: <b class="aplicant-detail"><?=$perfil->nacionalidad_trabajador_laboral?></b></span></li>
                                  <li><span>Genero: <b class="aplicant-detail"><?=$perfil->genero_trabajador_laboral?></b></span></li>
                                  <li><span>Licencia Conducir: <b class="aplicant-detail"><?=$perfil->licencia?></b></span></li>
                                  
                                </ul>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12" style="padding-bottom:5px;margin-left: 8px; text-transform: uppercase; font-size:12px">
                                        <b class="aplicant-detail">Objetivo Profesional: </b>
                                        <?=$perfil->objetivo_laboral_trabajador_laboral?>
                                    </div>
                                    <div class="col-sm-2 col-xs-12" style="padding-top:5px; padding-bottom:5px;margin-left: 8px;text-transform: uppercase;font-size:12px">
                                        <b class="aplicant-detail">Presentación: </b>
                                    </div>
                                    <div class="col-sm-9 col-xs-12" style="padding-top:5px; padding-bottom:5px;margin-left: 8px;text-transform: uppercase;font-size:12px; text-align:justify;">
                                        <?=$perfil->presentacion_trabajador_laboral?>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div id="estudio" class="tab-pane fade">
                                <div class="row">
                                  <div class="col-sm-10 col-xs-6"><h3>EDUCACIÓN</h3></div>
                                  <div class="col-sm-2 col-xs-6">
                                      <a class="pull-right" href="#" data-toggle="modal" data-target="#modal_estudio"><i class="fa fa-plus-circle fa-lg"></i> Agregar</a>
                                  </div>
                                </div>
                              <div class="row">
                                <div class="col-sm-12">
                                    <div id="lista_educacion_basica" class="assigned-job-list">
                                        <div class="table-heading">
                                          <div class="css-table">
                                            <div class="table-details css-table-cell">
                                              <h5>Educación Básica</h5>
                                            </div>
                                          </div> <!-- end .css-table -->
                                        </div> <!-- end .table-heading -->
                                        
                                        <?php
                                            $contador = 0;
                                            foreach($educaciones_basicas as $educacion_basica){
                                                
                                            $fecha_termino = '';
                                            if($educacion_basica->alpresente_trabajador_laboral_educacion_basica == 'SI'){
                                                $fecha_termino = "Al Presente";
                                            }else{
                                                $fecha_termino = $educacion_basica->mes_termino_trabajador_laboral_educacion_basica."-".$educacion_basica->anno_termino_trabajador_laboral_educacion_basica;
                                            }
                                                
                                            if($educacion_basica->situacion_trabajador_laboral_educacion_basica == 1){$situacion = 'Completo';}
                                            if($educacion_basica->situacion_trabajador_laboral_educacion_basica == 3){$situacion = 'Cursando';}
                                            if($educacion_basica->situacion_trabajador_laboral_educacion_basica == 4){$situacion = 'Incompleto';}
                                        ?>
                                        
                                            <div id="fila_educacion_basica<?=$educacion_basica->id_trabajador_laboral_educacion_basica?>" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h4><a id="titulo_institucion_basica<?=$educacion_basica->id_trabajador_laboral_educacion_basica?>" href="#"><?=$educacion_basica->nombre_educacion_basica?></a><a id="titulo_situacion_basica<?=$educacion_basica->id_trabajador_laboral_educacion_basica?>" style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i><?=$situacion?></a></h4>
                                                  </div> <!-- end .job-description -->

                                                <div class="job-location-stat">
                                                    <p>
                                                        <a id="titulo_fecha_basica<?=$educacion_basica->id_trabajador_laboral_educacion_basica?>" href="#"><i class="fa fa-calendar"></i><?=$educacion_basica->mes_inicio_trabajador_laboral_educacion_basica?>-<?=$educacion_basica->anno_inicio_trabajador_laboral_educacion_basica?> / <?=$fecha_termino?></a>
                                                    </p>
                                                  </div> <!-- end .job-location-stat -->

                                                </div> <!-- end .table-details -->

                                                <div class="days-left css-table-cell">
                                                    <h3 style="cursor:pointer; color:#346abb;">
                                                      <i onClick="modificar_basica(<?=$educacion_basica->id_trabajador_laboral_educacion_basica?>)" class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                      <i onClick="eliminar_basica(<?=$educacion_basica->id_trabajador_laboral_educacion_basica?>)" class="fa fa-trash" aria-hidden="true"></i>
                                                    </h3>
                                                </div> <!-- end .days-left -->

                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->
                                        
                                        <?php
                                            $contador++;
                                            }
                                            if($contador == 0){echo '<div id="sin_informacion_basica" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h6><a href="#">Sin Información</a></h6>
                                                  </div> <!-- end .job-description -->                                               
                                                </div> <!-- end .table-details -->
                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->';}
                                        ?>
                                    </div> <!-- end .assigned-job-list -->
                                    <div id="lista_educacion_media" class="assigned-job-list">
                                        <div class="table-heading">
                                          <div class="css-table">
                                            <div class="table-details css-table-cell">
                                              <h5>Educación Media</h5>
                                            </div>
                                          </div> <!-- end .css-table -->
                                        </div> <!-- end .table-heading -->

                                        <?php
                                            $contador = 0;
                                            foreach($educaciones_medias as $educacion_media){
                                            
                                            $fecha_termino = '';
                                            if($educacion_media->alpresente_trabajador_laboral_educacion_media == 'SI'){
                                                $fecha_termino = "Al Presente";
                                            }else{
                                                $fecha_termino = $educacion_media->mes_termino_trabajador_laboral_educacion_media."-".$educacion_media->anno_termino_trabajador_laboral_educacion_media;
                                            }
                                            
                                            if($educacion_media->situacion_trabajador_laboral_educacion_media == 1){$situacion = 'Completo';}
                                            if($educacion_media->situacion_trabajador_laboral_educacion_media == 3){$situacion = 'Cursando';}
                                            if($educacion_media->situacion_trabajador_laboral_educacion_media == 4){$situacion = 'Incompleto';}
                                        ?>
                                        
                                            <div id="fila_educacion_media<?=$educacion_media->id_trabajador_laboral_educacion_media?>" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h4><a id="titulo_institucion_media<?=$educacion_media->id_trabajador_laboral_educacion_media?>" href="#"><?=$educacion_media->nombre_educacion_media?></a><a id="titulo_situacion_media<?=$educacion_media->id_trabajador_laboral_educacion_media?>" style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i><?=$situacion?></a></h4>
                                                  </div> <!-- end .job-description -->
                                                    
                                                  <?php
                                                    if($educacion_media->especialidad_trabajador_laboral_educacion_media != '' or $educacion_media->especialidad_trabajador_laboral_educacion_media != null){
                                                        
                                                    ?>
                                                    <div class="company-name">
                                                        <h4><a id="titulo_especialidad_media<?=$educacion_media->id_trabajador_laboral_educacion_media?>" href="#"><?=$educacion_media->especialidad_trabajador_laboral_educacion_media?></a></h4>
                                                    </div> <!-- end .company-name -->
                                                  
                                                    <?php } ?> 
                                                    
                                                <div class="job-location-stat">
                                                    <p>
                                                        <a id="titulo_fecha_media<?=$educacion_media->id_trabajador_laboral_educacion_media?>" href="#"><i class="fa fa-calendar"></i><?=$educacion_media->mes_inicio_trabajador_laboral_educacion_media?>-<?=$educacion_media->anno_inicio_trabajador_laboral_educacion_media?> / <?=$fecha_termino?></a>
                                                    </p>
                                                  </div> <!-- end .job-location-stat -->

                                                </div> <!-- end .table-details -->

                                                <div class="days-left css-table-cell">
                                                    <h3 style="cursor:pointer; color:#346abb;">
                                                      <i onClick="modificar_media(<?=$educacion_media->id_trabajador_laboral_educacion_media?>)" class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                      <i onClick="eliminar_media(<?=$educacion_media->id_trabajador_laboral_educacion_media?>)" class="fa fa-trash" aria-hidden="true"></i>
                                                    </h3>
                                                </div> <!-- end .days-left -->

                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->
                                        
                                        <?php
                                            $contador++;
                                            }
                                            if($contador == 0){echo '<div id="sin_informacion_media" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h6><a href="#">Sin Información</a></h6>
                                                  </div> <!-- end .job-description -->                                               
                                                </div> <!-- end .table-details -->
                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->';}
                                        ?>
                                      </div> <!-- end .assigned-job-list -->
                                    <div id="lista_educacion_universitaria" class="assigned-job-list">
                                        <div class="table-heading">
                                          <div class="css-table">
                                            <div class="table-details css-table-cell">
                                              <h5>Educación Universitaria</h5>
                                            </div>
                                          </div> <!-- end .css-table -->
                                        </div> <!-- end .table-heading -->

                                        <?php
                                            $contador = 0;
                                            foreach($educaciones_universitarias as $educacion_universitaria){
                                            
                                            $fecha_termino = '';
                                            if($educacion_universitaria->alpresente_trabajador_laboral_educacion_universitaria == 'SI'){
                                                $fecha_termino = "Al Presente";
                                            }else{
                                                $fecha_termino = $educacion_universitaria->mes_termino_trabajador_laboral_educacion_universitaria."-".$educacion_universitaria->anno_termino_trabajador_laboral_educacion_universitaria;
                                            }
                                            if($educacion_universitaria->situacion_trabajador_laboral_educacion_universitaria == 1){$situacion = 'Titulado';}
                                            if($educacion_universitaria->situacion_trabajador_laboral_educacion_universitaria == 1){$situacion = 'Egresado';}
                                            if($educacion_universitaria->situacion_trabajador_laboral_educacion_universitaria == 3){$situacion = 'Cursando';}
                                            if($educacion_universitaria->situacion_trabajador_laboral_educacion_universitaria == 4){$situacion = 'Incompleto';}
                                        ?>
                                        
                                            <div id="fila_educacion_universitaria<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h4><a id="titulo_institucion_universitaria<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>" href="#"><?=$educacion_universitaria->nombre_educacion_universitaria?></a><a id="titulo_situacion_universitaria<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>" style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i><?$situacion?></a></h4>
                                                  </div> <!-- end .job-description -->
                                                    
                                                  <?php
                                                    if($educacion_universitaria->especialidad_trabajador_laboral_educacion_universitaria != '' or $educacion_universitaria->especialidad_trabajador_laboral_educacion_universitaria != null){
                                                        
                                                    ?>
                                                    <div class="company-name">
                                                        <h4><a id="titulo_especialidad_universitaria<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>" href="#"><?=$educacion_universitaria->especialidad_trabajador_laboral_educacion_universitaria?></a></h4>
                                                    </div> <!-- end .company-name -->
                                                  
                                                    <?php } ?> 
                                                    
                                                <div class="job-location-stat">
                                                    <p>
                                                        <a id="titulo_fecha_universitaria<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>" href="#"><i class="fa fa-calendar"></i><?=$educacion_universitaria->mes_inicio_trabajador_laboral_educacion_universitaria?>-<?=$educacion_universitaria->anno_inicio_trabajador_laboral_educacion_universitaria?> / <?=$fecha_termino?></a>
                                                    </p>
                                                  </div> <!-- end .job-location-stat -->

                                                </div> <!-- end .table-details -->

                                                <div class="days-left css-table-cell">
                                                    <h3 style="cursor:pointer; color:#346abb;">
                                                      <i onClick="modificar_universitaria(<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>)" class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                      <i onClick="eliminar_universitaria(<?=$educacion_universitaria->id_trabajador_laboral_educacion_universitaria?>)" class="fa fa-trash" aria-hidden="true"></i>
                                                    </h3>
                                                </div> <!-- end .days-left -->

                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->
                                        
                                        <?php
                                            $contador++;
                                            }
                                            if($contador == 0){echo '<div id="sin_informacion_universitaria" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h6><a href="#">Sin Información</a></h6>
                                                  </div> <!-- end .job-description -->                                               
                                                </div> <!-- end .table-details -->
                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->';}
                                        ?>
                                      </div> <!-- end .assigned-job-list -->
                                    <div id="lista_educacion_posterior" class="assigned-job-list">
                                        <div class="table-heading">
                                          <div class="css-table">
                                            <div class="table-details css-table-cell">
                                              <h5>Educación Posterior</h5>
                                            </div>
                                          </div> <!-- end .css-table -->
                                        </div> <!-- end .table-heading -->

                                        <?php
                                            $contador = 0;
                                            foreach($educaciones_posteriores as $educacion_posterior){
                                            
                                            $fecha_termino = '';
                                            if($educacion_posterior->alpresente_educacion_posterior == 'SI'){
                                                $fecha_termino = "Al Presente";
                                            }else{
                                                $fecha_termino = $educacion_posterior->mes_termino_educacion_posterior."-".$educacion_posterior->anno_termino_educacion_posterior;
                                            }
                                            if($educacion_posterior->situacion_educacion_posterior == 1){$situacion = 'Titulado';}
                                            if($educacion_posterior->situacion_educacion_posterior == 1){$situacion = 'Egresado';}
                                            if($educacion_posterior->situacion_educacion_posterior == 3){$situacion = 'Cursando';}
                                            if($educacion_posterior->situacion_educacion_posterior == 4){$situacion = 'Incompleto';}
                                        ?>
                                        
                                            <div id="fila_educacion_posterior<?=$educacion_posterior->id_educacion_posterior?>" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h4><a id="titulo_institucion_posterior<?=$educacion_posterior->id_educacion_posterior?>" href="#"><?=$educacion_posterior->nombre_educacion_universitaria?></a><a id="titulo_situacion_posterior<?=$educacion_posterior->id_educacion_posterior?>" style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i><?=$situacion?></a></h4>
                                                  </div> <!-- end .job-description -->
                                                    
                                                  <?php
                                                    if($educacion_posterior->especialidad_educacion_posterior != '' or $educacion_posterior->especialidad_educacion_posterior != null){
                                                        
                                                    ?>
                                                    <div class="company-name">
                                                        <h4><a id="titulo_especialidad_posterior<?=$educacion_posterior->id_educacion_posterior?>" href="#"><?=$educacion_posterior->especialidad_educacion_posterior?></a></h4>
                                                    </div> <!-- end .company-name -->
                                                  
                                                    <?php } ?> 
                                                    
                                                <div class="job-location-stat">
                                                    <p>
                                                        <a id="titulo_fecha_posterior<?=$educacion_posterior->id_educacion_posterior?>" href="#"><i class="fa fa-calendar"></i><?=$educacion_posterior->mes_inicio_educacion_posterior?>-<?=$educacion_posterior->anno_inicio_educacion_posterior?> / <?=$fecha_termino?></a>
                                                         &nbsp;&nbsp;&nbsp; 
                                                        <a id="titulo_hora_nota_posterior<?=$educacion_posterior->id_educacion_posterior?>"><i class="fa fa-clock-o"></i><?=$educacion_posterior->cantidad_horas_educacion_posterior?> &nbsp;&nbsp;&nbsp; <i class="fa fa-pencil"></i><?=$educacion_posterior->nota?>
                                                        </a>
                                                    </p>
                                                  </div> <!-- end .job-location-stat -->

                                                </div> <!-- end .table-details -->

                                                <div class="days-left css-table-cell">
                                                    <h3 style="cursor:pointer; color:#346abb;">
                                                      <i onClick="modificar_posterior(<?=$educacion_posterior->id_educacion_posterior?>)" class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                      <i onClick="eliminar_posterior(<?=$educacion_posterior->id_educacion_posterior?>)" class="fa fa-trash" aria-hidden="true"></i>
                                                    </h3>
                                                </div> <!-- end .days-left -->

                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->
                                        
                                        <?php
                                            $contador++;
                                            }
                                            if($contador == 0){echo '<div id="sin_informacion_posterior" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h6><a href="#">Sin Información</a></h6>
                                                  </div> <!-- end .job-description -->                                               
                                                </div> <!-- end .table-details -->
                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->';}
                                        ?>
                                      </div> <!-- end .assigned-job-list -->
                                </div>
                            </div>
                                
                          </div>
                          <div id="experiencia" class="tab-pane fade">
                            <div class="row">
                              <div class="col-sm-10"><h3>EXPERIENCIA LABORAL</h3></div>
                              <div class="col-sm-2">
                                  <a class="pull-right" href="#" data-toggle="modal" data-target="#modal_experiencia_laboral"><i class="fa fa-plus-circle fa-lg"></i> Agregar</a>
                              </div>
                                <div class="col-sm-12">
                                    <div id="lista_experiencia_laboral" class="assigned-job-list">
                                        <div class="table-heading">
                                          <div class="css-table">
                                            
                                          </div> <!-- end .css-table -->
                                        </div> <!-- end .table-heading -->
                                    <?php
                                            $contador = 0;
                                            foreach($experiencias_laborales as $experiencia_laboral){
                                                
                                            $fecha_termino = '';
                                                
                                            if($experiencia_laboral->alpresente_experiencia_laboral == 'SI'){
                                                $fecha_termino = "Al Presente";
                                            }else{
                                                $fecha_termino = $experiencia_laboral->fecha_termino;
                                            }
                                        ?>
                                        
                                            <div id="fila_experiencia_laboral<?=$experiencia_laboral->id_experiencia_laboral?>" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h4><a id="titulo_cargo_experiencia_laboral<?=$experiencia_laboral->id_experiencia_laboral?>" href="#"><?=$experiencia_laboral->cargo_experiencia_laboral?> </a><a style="color: #666;font-size: 16px;">     en </a><a style="color:#346abb" class="company-name" id="titulo_empresa_experiencia_laboral<?=$experiencia_laboral->id_experiencia_laboral?>" href="#"><?=$experiencia_laboral->empresa_experiencia_laboral?></a></h4>
                                                  </div> <!-- end .job-description -->
                                                    
                                                

                                                <div class="job-location-stat">
                                                    <p>
                                                        <a id="titulo_fecha_experiencia_laboral<?=$experiencia_laboral->id_experiencia_laboral?>" href="#"><i class="fa fa-calendar"></i><?=$experiencia_laboral->fecha_inicio?> - <?=$fecha_termino?></a>
                                                    </p>
                                                  </div> <!-- end .job-location-stat -->
                                                    
                                                <div class="job-location-stat">
                                                    <p style="text-align:justify;" id="titulo_descripcion_experiencia_laboral<?=$experiencia_laboral->id_experiencia_laboral?>">
                                                        <?=$experiencia_laboral->descripcion_experiencia_laboral?>
                                                    </p>
                                                  </div> <!-- end .job-location-stat -->

                                                </div> <!-- end .table-details -->

                                                <div class="days-left css-table-cell">
                                                    <h3 style="cursor:pointer; color:#346abb;">
                                                      <i onClick="modificar_experiencia_laboral(<?=$experiencia_laboral->id_experiencia_laboral?>)" class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                      <i onClick="eliminar_experiencia_laboral(<?=$experiencia_laboral->id_experiencia_laboral?>,<?=$experiencia_laboral->trabajador_laboral_id_trabajador_laboral?>)" class="fa fa-trash" aria-hidden="true"></i>
                                                    </h3>
                                                </div> <!-- end .days-left -->

                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->
                                        
                                        <?php
                                            $contador++;
                                            }
                                            if($contador == 0){echo '<div id="sin_informacion_experiencia_laboral" class="assigned-job-single">
                                              <div class="css-table">
                                                <div class="table-details css-table-cell">
                                                  <div class="job-description">
                                                    <h6><a href="#">Sin Información</a></h6>
                                                  </div> <!-- end .job-description -->                                               
                                                </div> <!-- end .table-details -->
                                              </div> <!-- end .css-table -->
                                            </div> <!-- end .assigned-job-single -->';}
                                        ?> 
                                        

                                    </div> <!-- end .assigned-job-list -->
                                </div>
                            </div>
                          </div>
                          <div id="conocimiento" class="tab-pane fade">
                            <div class="row">
                              <div class="col-sm-12"><h3>CONOCIMIENTO Y/O APTITUD</h3></div>
                                <div class="col-sm-12">
                                    <div class="assigned-job-list">
                                        <div class="table-heading">
                                          <div class="css-table">
                                            
                                          </div> <!-- end .css-table -->
                                        </div> <!-- end .table-heading -->

                                      <div class="col-md-12">
                                        <div class="candidate-skill-single clearfix">
                                          <div class="skill-edit-content" style="padding-left:0px;">
                                            <div class="skill-selectbox mb10">
                                              <input style="text-transform:uppercase" type="text" id="nombre_conocimiento" name="nombre_conocimiento" placeholder="Ingrese Nombre">
                                              <input style="display:none" type="text" id="id_conocimiento" name="id_conocimiento" placeholder="Ingrese Nombre">
                                            </div> <!-- end .skill-selectbox -->

                                            <!--<div class="skill-description mb10">
                                              <textarea id="descripcion_conocimiento" name="descripcion_conocimiento" placeholder="Descripción"></textarea>
                                            </div> <!-- end .skill-description -->
                                              
                                            <div class="skill-progressbar" style="height:25px">
                                              <p>
                                                <span class="mini-amount">0%</span>
                                                <input type="text" id="valor_porcentaje_conocimiento">
                                              </p>

                                              <div id="slider_conocimiento"></div>
                                            </div> <!-- end .skill-progressbar -->

                                          </div> <!-- end .skill-edit-content -->
                                        </div> <!-- end .candidate-skills-single -->
                                        <div class="add-skill-button">
                                          <a class="btn btn-default" onClick="agregar_conocimiento()">Agregar</a>
                                        </div>
                                        <div id="add_conocimientos" class="additional-skills">
                                            <ul id="lista_conocimientos" class="list-inline">
                                            <?php
                                                $color_conocimiento = 0;
                                                foreach($conocimientos_trabajador as $conocimiento_trabajador){
                                                $fecha_termino = '';
                                                if(($conocimiento_trabajador->nivel_trabajador_laboral_conocimiento) == '25'){$color_conocimiento = "#c20007";}
                                                if(($conocimiento_trabajador->nivel_trabajador_laboral_conocimiento) == '50'){$color_conocimiento = "#c2bb00";}
                                                if(($conocimiento_trabajador->nivel_trabajador_laboral_conocimiento) == '75'){$color_conocimiento = "#0068c2";}
                                                if(($conocimiento_trabajador->nivel_trabajador_laboral_conocimiento) == '100'){$color_conocimiento = "#68c200";}
                                                    
                                            ?>
                                              <li class="fila_conocimiento<?=$conocimiento_trabajador->conocimiento_id_conocimiento?>" id="fila_conocimiento<?=$conocimiento_trabajador->id_trabajador_laboral_conocimiento?>"><a style="background-color:<?=$color_conocimiento?>" data-toggle="popover" data-content="<a onClick='eliminar_conocimiento(<?=$conocimiento_trabajador->id_trabajador_laboral_conocimiento?>,<?=$conocimiento_trabajador->conocimiento_id_conocimiento?>)' style='background-color:transparent; color:black'>Eliminar <i style='color:red' class='fa fa-times' aria-hidden='true'></i></a>" data-placement="top"><?=$conocimiento_trabajador->nombre_conocimiento?></a></li>
                                            <?php } ?>    
                                            </ul>
                                          </div>
                                      </div> <!-- end .8th grid layout -->
                                      <div class="row">
                                        <div class="col-md-2 col-xs-0" style="margin-bottom:10px;">
                                        </div>
                                        <div class="col-xs-12  col-md-2" style="margin-bottom:10px;">
                                          <div class="row">
                                            <div style="font-size:10px;padding-right:0px" class="col-xs-8 col-md-8 texto_anuncio">
                                              Básico
                                            </div>
                                            <div  class="col-xs-4  col-md-4" style="padding-left:0px">
                                              <div class="cuadrado_anuncio" style="width:20px;height:20px; background-color:#c20007;">&nbsp;</div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-xs-12  col-md-2" style="margin-bottom:10px;">
                                          <div class="row">
                                            <div style="font-size:10px;padding-right:0px" class="col-xs-8 col-md-8 texto_anuncio">
                                              Intermedio
                                            </div>
                                            <div  class="col-xs-4 col-md-4" style="padding-left:0px">
                                              <div class="cuadrado_anuncio" style="width:20px;height:20px; background-color:#c2bb00;">&nbsp;</div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-xs-12  col-md-2" style="margin-bottom:8px;">
                                          <div class="row">
                                            <div style="font-size:10px;padding-right:0px" class="col-xs-8 col-md-8 texto_anuncio">
                                              Avanzado
                                            </div>
                                            <div  class="col-xs-4 col-md-4" style="padding-left:0px">
                                              <div class="cuadrado_anuncio" style="width:20px;height:20px; background-color:#0068c2;">&nbsp;</div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-2" style="margin-bottom:10px;">
                                          <div class="row">
                                            <div style="font-size:10px;padding-right:0px" class="col-xs-8 col-md-8 texto_anuncio">
                                              Experto
                                            </div>
                                            <div  class="col-xs-4 col-md-4" style="padding-left:0px">
                                              <div class="cuadrado_anuncio" style="width:20px;height:20px; background-color:#68c200;">&nbsp;</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> <!-- end .assigned-job-list -->
                                </div>
                            </div>
                          </div>
                          <div id="idioma" class="tab-pane fade">
                            <div class="row">
                                 <div class="col-sm-12"><h3>DOMINIO DE IDIOMAS</h3></div>
                                <div class="col-md-12">
                                        <div class="candidate-skill-single clearfix">
                                          <div class="skill-edit-content" style="padding-left:0px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="skill-selectbox mb10">
                                                      <input style="text-transform:uppercase" type="text" id="nombre_idioma" name="nombre_idioma" placeholder="Ingrese Nombre">
                                                      <input style="display:none" type="text" id="id_idioma" name="id_idioma" placeholder="Ingrese Nombre de Idioma">
                                                    </div> <!-- end .skill-selectbox -->
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <div class="row">   
                                                        <div class="col-md-2 detalle_idioma_tabla2" style="text-align:center">
                                                            Oral
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="skill-progressbar" style="height:25px">
                                                              <p>
                                                                <span class="mini-amount">0%</span>
                                                                <input type="text" id="valor_porcentaje_idioma_oral">
                                                              </p>
                                                              <div id="slider_idioma_oral"></div>
                                                            </div> <!-- end .skill-progressbar -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="">
                                                    <div class="row"> 
                                                        <div class="col-md-2 detalle_idioma_tabla2" style="text-align:center">
                                                            Escrito
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="skill-progressbar" style="height:25px">
                                                              <p>
                                                                <span class="mini-amount">0%</span>
                                                                <input type="text" id="valor_porcentaje_idioma_escrito">
                                                              </p>
                                                              <div id="slider_idioma_escrito"></div>
                                                            </div> <!-- end .skill-progressbar -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div> <!-- end .skill-edit-content -->
                                        </div> <!-- end .candidate-skills-single -->
                                        <div class="add-skill-button">
                                          <a class="btn btn-default" onClick="agregar_idioma()">Agregar</a>
                                        </div>
                                </div>
                                <div class="col-md-12" style="margin-top:10px">
                                    <div class="assigned-job-list" id="lista_idiomas">
                                        <?php
                                            foreach($idiomas_trabajador as $idioma_trabajador){
                                        ?>
                                    <div id="fila_idioma<?=$idioma_trabajador->id_trabajador_laboral_idioma?>" class="assigned-job-single">
                                        <div class="row" style="padding:10px 0px 10px 0px">
                                            <div class="col-xs-12 col-md-1"></div>
                                            <div class="col-xs-12 col-md-2" style="text-align:center;">
                                                <p class="titulo_idioma_tabla" style="color:#346abb;"><?=$idioma_trabajador->nombre_idioma?></p>
                                            </div>
                                            <div class="col-xs-12 col-md-2">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-12" style="text-align:center;">
                                                        <p class="detalle_idioma_tabla">Oral</p>
                                                    </div>
                                                    <div class="col-xs-6 col-md-12" style="text-align:center;">
                                                        <p class="detalle_idioma_tabla">Escrito</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-5">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-12 barra_progreso" style="">
                                                        <div class="progress-bar clearfix">
                                                            <div class="progress-bar-inner progress<?=$idioma_trabajador->porcentaje_oral_trabajador_laboral_conocimiento?>"><span><?=$idioma_trabajador->porcentaje_oral_trabajador_laboral_conocimiento?>%</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-12 barra_progreso" style="">
                                                        <div class="progress-bar clearfix">
                                                            <div class="progress-bar-inner progress<?=$idioma_trabajador->porcentaje_escrito_trabajador_laboral_conocimiento?>"><span><?=$idioma_trabajador->porcentaje_escrito_trabajador_laboral_conocimiento?>%</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="text-align:center;">
                                                <i onclick="eliminar_idioma(<?=$idioma_trabajador->id_trabajador_laboral_idioma?>)" class="fa fa-trash icono_idioma" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                              </div>
                            </div>
                            
                              
                              
                              
                          </div>
                          <div id="documentacion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 page-content2">               
                                  <div class="white-container mb0">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="col-xs-6 col-lg-5">
                                                <div class="input-group input-group-lg" style="width:100%">
                                                    <select id="tipo_documentacion" name="tipo_documentacion">
                                                        <option name='inicio_option' selected>Tipo de Documentación</option>
                                                        <option value="Certificado de Antecedente">Certificado de Antecedente</option>
                                                        <option value="Cerficado Militar al Día">Cerficado Militar al Día</option>
                                                        <option value="Certificado X">Certificado X</option>
                                                        <option value="Otro">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-lg-5  icono_idioma">
                                                <div class="input-group input-group-lg" style="width:100%">
                                                    <input id="archivo_documentacion" name="archivo_documentacion" type="file" class="custom-file-input" placeholder="Ingrese Documento" aria-label="Documento" value="">
                                                </div>
                                            </div>
                                            <div class="col-xs-1 col-lg-1" onClick="subir_documentacion()" style="">
                                                <i class="fa fa-cloud-upload icono_idioma" aria-hidden="true"> </i>
                                            </div>
                                            <div class="col-xs-12 col-lg-9 col-lg-offset-1">
                                            <div id="div_titulo_otro_documentacion" class="input-group input-group-lg" style="width:100%;margin-top:2%;display:none">
                                                <input id="titulo_otro_documentacion" name="titulo_otro_documentacion" type="text" class="form-control" placeholder="Ingrese Título de Archivo" aria-label="Carrera" value="">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-12" style="margin-top:2%; margin-bottom:2%; text-align:center;">
                                            <h4>Lista de Documentos</h4>
                                        </div>
                                        <div class="col-lg-12" style="margin-top:2%;">
                                                <div class="assigned-job-list" id="lista_documentacion">
                                                            <?php
                                                                foreach($documentos_trabajador as $documento_trabajador){
                                                            ?>
                                                        <div id="fila_documento<?=$documento_trabajador->id_trabajador_laboral_documentacion?>" class="assigned-job-single">
                                                            <div class="row" style="padding:10px 0px 10px 0px">
                                                                <div class="col-xs-12 col-md-12"></div>
                                                                <div class="col-xs-12 col-md-7" style="text-align:center;">
                                                                    <p class="titulo_idioma_tabla2" style="color:#346abb;"><?=$documento_trabajador->titulo_trabajador_laboral_documentacion?></p>
                                                                </div>
                                                                <div class="col-xs-12 col-md-3">
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-md-12" style="text-align:center;">
                                                                            <p class="detalle_idioma_tabla3"><strong>Fecha de Subida</strong></p>
                                                                        </div>
                                                                        <div class="col-xs-6 col-md-12" style="text-align:center;">
                                                                            <p class="detalle_idioma_tabla3"><?=$documento_trabajador->fecha?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2" style="text-align:center;">
                                                                    <i onClick="abrir_archivo('<?=base_url().$documento_trabajador->url_trabajador_laboral_documentacion?>')" class="fa fa-file-o icono_idioma" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                                                    <i onclick="eliminar_documento(<?=$documento_trabajador->id_trabajador_laboral_documentacion?>,'<?=$documento_trabajador->url_trabajador_laboral_documentacion?>')" class="fa fa-trash icono_idioma" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                    </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div> <!-- end .candidate-details -->

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
<!-- MODAL INFORMACION PERSONAL -->
<div id="modal_informacion_personal" class="modal fade">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-body">
              <form id="form_modificacion_laboral" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="nombre_editar_sigesco_laboral">Primer Nombre</label>
                            <input id="nombre_editar_sigesco_laboral" name="nombre_editar_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Nombre" aria-label="Nombre" value="<?=$perfil->nombre_trabajador_laboral?>">
                        </div>
                    </div>
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="nombre2_editar_sigesco_laboral">Segundo Nombre</label>
                            <input id="nombre2_editar_sigesco_laboral" name="nombre2_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Segundo Nombre" aria-label="Segundo Nombre" value="<?=$perfil->nombre2_trabajador_laboral?>">
                        </div>
                    </div>
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="paterno_editar_sigesco_laboral">Apellido Paterno</label>
                            <input id="paterno_editar_sigesco_laboral" name="paterno_editar_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Apellido Paterno" aria-label="Apellido Paterno" value="<?=$perfil->paterno_trabajador_laboral?>">
                        </div>
                    </div>
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="materno_editar_sigesco_laboral">Apellido Materno</label>
                            <input id="materno_editar_sigesco_laboral" name="materno_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Apellido Materno" aria-label="Apellido Materno" value="<?=$perfil->materno_trabajador_laboral?>">
                        </div>
                    </div>
                  </div>
                  
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="paterno_editar_sigesco_laboral">RUN</label>
                            <input id="run_editar_sigesco_laboral" name="run_editar_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="RUN" aria-label="RUN" value="<?=$perfil->rut_trabajador_laboral?>" disabled>
                        </div>
                    </div>
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="nacimiento_editar_sigesco_laboral">Fecha de Nacimiento</label>
                            <input id="nacimiento_editar_sigesco_laboral" onChange="validar_fecha(this.value)" name="nacimiento_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Fecha de Nacimiento" aria-label="Fecha de Nacimiento" value="<?=$perfil->nacimiento?>">
                        </div>
                    </div>

                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="celular_editar_sigesco_laboral">Celular Contacto</label>
                            <input id="celular_editar_sigesco_laboral" name="celular_editar_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Celular Contacto" aria-label="Celular Contacto" value="<?=$perfil->celular_trabajador_laboral?>" >
                        </div>
                    </div>
                    <div class="col-sm col-lg-3">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="celular_referencia_editar_sigesco_laboral">Celular Referencia</label>
                            <input id="celular_referencia_editar_sigesco_laboral" name="celular_referencia_editar_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Celular Referencia" aria-label="Celular Referencia" value="<?=$perfil->celular_referencia_trabajador_laboral?>" >
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px">
                        <div class="col-sm col-lg-6" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="direccion_editar_sigesco_laboral">Dirección</label>
                                <input id="direccion_editar_sigesco_laboral" name="direccion_editar_sigesco_laboral" type="text" class="form-control" placeholder="Dirección" aria-label="Dirección" value="<?=$perfil->direccion_trabajador_laboral?>">
                            </div>
                        </div>
                        <div class="col-sm col-lg-3" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="ciudad_editar_sigesco_laboral">Ciudad</label>
                                <input id="ciudad_buscar_sigesco_laboral" name="ciudad_buscar_sigesco_laboral" type="text" class="form-control" placeholder="Ciudad" aria-label="Ciudad"  value="<?=$perfil->nombre_ciudad?>">
                                <input id="ciudad_editar_sigesco_laboral" name="ciudad_editar_sigesco_laboral" value="<?=$perfil->ciudad_id_ciudad?>" style="display:none">
                            </div>
                        </div>
                        <div class="col-sm col-lg-3" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="nacionalidad_editar_sigesco_laboral">Nacionalidad</label>
                                <select id="nacionalidad_editar_sigesco_laboral" name="nacionalidad_editar_sigesco_laboral">
                                    <option name='inicio_option' value="<?=$perfil->nacionalidad_trabajador_laboral?>" selected><?=$perfil->nacionalidad_trabajador_laboral?></option>
                                    <option value="Chileno">Chileno/a</option>
                                    <option value="Argentino/a">Argentino/a</option>
                                    <option value="Peruano/a">Peruano/a</option>
                                    <option value="Boliviano/a">Boliviano/a</option>
                                    <option value="Haitiano/a">Haitiano/a</option>
                                    <option value="Brasileño/a">Brasileño/a</option>
                                    <option value="Otra">Otra</option>
                                </select>
                            </div>
                        </div>
                        
                  </div>
                  <div class="row" style="padding:5px 10px">
                        <div class="col-sm col-lg-4" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="email_editar_sigesco_laboral">Email</label>
                                <input id="email_editar_sigesco_laboral" name="email_editar_sigesco_laboral" type="email" class="form-control validate" required="true" placeholder="Email" aria-label="Email"  value="<?=$perfil->email_trabajador_laboral?>">
                            </div>
                        </div>
                        <div class="col-sm col-lg-2" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="pretencion_editar_sigesco_laboral">Pretención de Sueldo</label>
                                <input id="pretencion_editar_sigesco_laboral" name="pretencion_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Pretencion de Sueldo" onChange="formatear(this.id,this.value)" aria-label="Pretencion de Sueldo"  value="<?=$perfil->pretencion_salarial_trabajador_laboral?>">
                            </div>
                        </div>
                        <div class="col-sm col-lg-2" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="genero_editar_sigesco_laboral">Género</label>
                                <select id="genero_editar_sigesco_laboral" name="genero_editar_sigesco_laboral">
                                    <option name='inicio_option' value="<?=$perfil->genero_trabajador_laboral?>" selected><?=$perfil->genero_trabajador_laboral?></option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenimo">Femenimo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm col-lg-2" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="estado_civil_editar_sigesco_laboral">Estado Civil</label>
                                <select id="estado_civil_editar_sigesco_laboral" name="estado_civil_editar_sigesco_laboral">
                                    <option name='inicio_option' value="<?=$perfil->estado_civil_trabajador_laboral?>" selected><?=$perfil->estado_civil_trabajador_laboral?></option>
                                    <option value="Soltero/a">Soltero/a</option>
                                    <option value="Comprometido/a">Comprometido/a</option>
                                    <option value="Casado/a">Casado/a</option>
                                    <option value="Divorciado/a">Divorciado/a</option>
                                    <option value="Viudo/a">Viudo/a</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm col-lg-2" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="discapacidad_editar_sigesco_laboral">Discapacidad</label>
                                <select id="discapacidad_editar_sigesco_laboral" name="discapacidad_editar_sigesco_laboral">
                                    <option name='inicio_option' value="<?=$perfil->discapacidad_trabajador_laboral?>" selected><?=$perfil->discapacidad_trabajador_laboral?></option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>
                        </div>
                  </div>

                  <div class="row" style="padding:5px 10px">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="objetivo_editar_sigesco_laboral">Objetivo Profesional</label>
                                <input id="objetivo_editar_sigesco_laboral" name="objetivo_editar_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Objetivo" aria-label="Objetivo" value="<?=$perfil->objetivo_laboral_trabajador_laboral?>">
                            </div>
                        </div>
                      <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <label for="licencia_referencia_editar_sigesco_laboral">Licencia(s) Conducir</label>
                            <div class="row">
                              <div class="col-lg-3 col-xs-3"><input id="a1_editar_sigesco_laboral" name="a1_editar_sigesco_laboral" type="checkbox" value="A1" <?php if($perfil->a1_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase A1</div>
                              <div class="col-lg-3 col-xs-3"><input id="a2_editar_sigesco_laboral" name="a2_editar_sigesco_laboral" type="checkbox" value="A2" <?php if($perfil->a2_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase A2</div>
                              <div class="col-lg-3 col-xs-3"><input id="a3_editar_sigesco_laboral" name="a3_editar_sigesco_laboral" type="checkbox" value="A3" <?php if($perfil->a3_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase A3</div>
                              <div class="col-lg-3 col-xs-3"><input id="a4_editar_sigesco_laboral" name="a4_editar_sigesco_laboral" type="checkbox" value="A4" <?php if($perfil->a4_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase A4</div>
                            </div>
                            <div class="row">
                              <div class="col-lg-3 col-xs-3"><input id="a5_editar_sigesco_laboral" name="a5_editar_sigesco_laboral" type="checkbox" value="A5" <?php if($perfil->a5_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase A5</div>
                              <div class="col-lg-3 col-xs-3"><input id="b_editar_sigesco_laboral" name="b_editar_sigesco_laboral" type="checkbox" value="B" <?php if($perfil->b_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase B</div>
                              <div class="col-lg-3 col-xs-3"><input id="c_editar_sigesco_laboral" name="c_editar_sigesco_laboral" type="checkbox" value="C" <?php if($perfil->c_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase C</div>
                              <div class="col-lg-3 col-xs-3"><input id="d_editar_sigesco_laboral" name="d_editar_sigesco_laboral" type="checkbox" value="D" <?php if($perfil->d_licencia_conducir_trabajador_laboral != ''){ echo "checked";}?>> Clase D</div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px">
                    <div class="col-sm col-lg-12" style="margin-top:10px;">
                            <div class="input-group input-group-lg" style="width:100%">
                                <label for="presentacion_editar_sigesco_laboral">Presentación</label>
                                <textarea rows="4" id="presentacion_editar_sigesco_laboral" name="presentacion_editar_sigesco_laboral" placeholder="Ingrese una breve Presentación" aria-label="Presentación"><?=$perfil->presentacion_trabajador_laboral?></textarea>
                            </div>
                        </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_modificar_trabajador_laboral" style="color:white;" type="button" class="btn btn-success"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL INFORMACION PERSONAL -->
<!-- MODAL ESTUDIO -->
<div id="modal_estudio" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-4" style="text-align:right;">
                        <label for="nacionalidad_editar_sigesco_laboral">Nivel de Educación</label>
                    </div>
                    <div class="col-sm col-lg-4" style="">
                        <select onChange="visual_etudio(this.value)" id="nivel_educacion_sigesco_laboral" name="nivel_educacion_sigesco_laboral">
                            <option tipo="estudio" name='inicio_option' selected>Seleccione Nivel</option>
                            <option tipo="estudio" value="basica">Básica</option>
                            <option tipo="estudio" value="media">Media</option>
                            <option tipo="estudio" value="universitaria">Universitaria</option>
                            <option tipo="estudio" value="posterior">Post-Grado/Cursos</option>
                        </select>
                    </div>
                    <div class="col-sm col-lg-4" style="text-align:right;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            </div>
          </div>
          <div class="modal-body">
            <form id="form_creacion_estudio" method="post" >
                <div class="row"  id="form_basica" style="padding:5px 10px; display:none;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_basica_sigesco_laboral">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_basica_sigesco_laboral" name="ciudad_buscar_basica_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Ciudad" onChange="buscar_institucion_basica()">
                                    <input style="display:none" id="ciudad_basica_sigesco_laboral" name="ciudad_basica_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="institucion_educacion_basica_sigesco_laboral">Institución</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="institucion_buscar_educacion_basica_sigesco_laboral" name="institucion_educacion_basica_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="institucion_educacion_basica_sigesco_laboral" name="institucion_educacion_basica_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_basica_sigesco_laboral">Fecha Inicio</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_inicio_educacion_basica_sigesco_laboral" name="mes_inicio_educacion_basica_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_inicio_educacion_basica_sigesco_laboral" name="anno_inicio_educacion_basica_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_basica_sigesco_laboral">Fecha Término</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_fin_educacion_basica_sigesco_laboral" name="mes_fin_educacion_basica_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_fin_educacion_basica_sigesco_laboral" name="anno_fin_educacion_basica_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_basica_sigesco_laboral" onclick="check_basica()" name="check_presente_basica_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_basica_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="especialidad_educacion_basica_sigesco_laboral">Especialidad (Opcional)</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="especialidad_educacion_basica_sigesco_laboral" name="especialidad_educacion_basica_sigesco_laboral" type="text" class="form-control" placeholder="Especialidad" aria-label="Especialidad" value="">
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_educacion_basica_sigesco_laboral">Situación</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_basica_sigesco_laboral" name="situacion_educacion_basica_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="1">Completo</option>
                                        <option value="3">Cursando</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"  id="form_media" style="padding:5px 10px; display:none;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_media_sigesco_laboral">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_media_sigesco_laboral" name="ciudad_buscar_media_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre Ciudad" aria-label="Ingrese Nombre Ciudad" onChange="buscar_institucion_media()">
                                    <input style="display:none" id="ciudad_media_sigesco_laboral" name="ciudad_media_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="institucion_educacion_media_sigesco_laboral">Institución</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="institucion_buscar_educacion_media_sigesco_laboral" name="institucion_educacion_media_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Institución" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="institucion_educacion_media_sigesco_laboral" name="institucion_educacion_media_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_media_sigesco_laboral">Fecha Inicio</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_inicio_educacion_media_sigesco_laboral" name="mes_inicio_educacion_media_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_inicio_educacion_media_sigesco_laboral" name="anno_inicio_educacion_media_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_media_sigesco_laboral">Fecha Término</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_fin_educacion_media_sigesco_laboral" name="mes_fin_educacion_media_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_fin_educacion_media_sigesco_laboral" name="anno_fin_educacion_media_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_media_sigesco_laboral" onclick="check_media()" name="check_presente_media_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_media_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="especialidad_educacion_media_sigesco_laboral">Especialidad (Opcional)</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="especialidad_educacion_media_sigesco_laboral" name="especialidad_educacion_media_sigesco_laboral" type="text" class="form-control" placeholder="Especialidad" aria-label="Especialidad" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_educacion_media_sigesco_laboral">Situación</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_media_sigesco_laboral" name="situacion_educacion_media_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="1">Completo</option>
                                        <option value="3">Cursando</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"  id="form_universitaria" style="padding:5px 10px; display:none;">
                    <div class="col-sm-12">
                        <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_universitaria_sigesco_laboral">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_universitaria_sigesco_laboral" name="ciudad_buscar_universitaria_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Ciudad" aria-label="Ingrese Ciudad" onChange="buscar_institucion_universitaria()">
                                    <input style="display:none" id="ciudad_universitaria_sigesco_laboral" name="ciudad_universitaria_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="institucion_educacion_universitaria_sigesco_laboral">Institución</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="institucion_buscar_educacion_universitaria_sigesco_laboral" name="institucion_educacion_universitaria_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Institución" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="institucion_educacion_universitaria_sigesco_laboral" name="institucion_educacion_universitaria_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_universitaria_sigesco_laboral">Fecha Inicio</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_inicio_educacion_universitaria_sigesco_laboral" name="mes_inicio_educacion_universitaria_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_inicio_educacion_universitaria_sigesco_laboral" name="anno_inicio_educacion_universitaria_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_universitaria_sigesco_laboral">Fecha Término</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_fin_educacion_universitaria_sigesco_laboral" name="mes_fin_educacion_universitaria_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_fin_educacion_universitaria_sigesco_laboral" name="anno_fin_educacion_universitaria_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_universitaria_sigesco_laboral" onclick="check_universitaria()" name="check_presente_universitaria_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_universitaria_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="especialidad_educacion_universitaria_sigesco_laboral">Carrera</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="especialidad_educacion_universitaria_sigesco_laboral" name="especialidad_educacion_universitaria_sigesco_laboral" type="text" class="form-control" placeholder="Ingrese Carrera" aria-label="Carrera" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="archivo_carrera_educacion_universitaria_sigesco_laboral">Adjuntar Título (Opcional)</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="archivo_carrera_educacion_universitaria_sigesco_laboral" name="archivo_carrera_educacion_universitaria_sigesco_laboral" type="file" class="custom-file-input" placeholder="Ingrese Título" aria-label="Especialidad" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_educacion_universitaria_sigesco_laboral">Situación</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_universitaria_sigesco_laboral" name="situacion_educacion_universitaria_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="3">Cursando</option>
                                        <option value="2">Egresado</option>
                                        <option value="1">Titulado</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row"  id="form_posterior" style="padding:5px 10px; display:none;">
                    <div class="col-sm-12">
                        <div class="col-sm col-lg-12">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="ciudad_buscar_posterior_sigesco_laboral">Ciudad</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="ciudad_buscar_posterior_sigesco_laboral" name="ciudad_buscar_posterior_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Ciudad" aria-label="Ingrese Ciudad" onChange="buscar_institucion_posterior()">
                                        <input style="display:none" id="ciudad_posterior_sigesco_laboral" name="ciudad_posterior_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="institucion_educacion_posterior_sigesco_laboral">Institución</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="institucion_buscar_educacion_posterior_sigesco_laboral" name="institucion_educacion_posterior_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Institución" aria-label="Ingrese Nombre" value="">
                                        <input style="display:none" id="institucion_educacion_posterior_sigesco_laboral" name="institucion_educacion_posterior_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                           <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="fecha_inicio_educacion_posterior_sigesco_laboral">Fecha Inicio</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="mes_inicio_educacion_posterior_sigesco_laboral" name="mes_inicio_educacion_posterior_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Mes</option>
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Julio">Julio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="anno_inicio_educacion_posterior_sigesco_laboral" name="anno_inicio_educacion_posterior_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Año</option>
                                            <?php 
                                                for($i=0;$i<58;$i++){

                                                    echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";

                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                           <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="fecha_inicio_educacion_posterior_sigesco_laboral">Fecha Término</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="mes_fin_educacion_posterior_sigesco_laboral" name="mes_fin_educacion_posterior_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Mes</option>
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Julio">Julio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="anno_fin_educacion_posterior_sigesco_laboral" name="anno_fin_educacion_posterior_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Año</option>
                                            <?php 
                                                for($i=0;$i<58;$i++){

                                                    echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";

                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3" style="">
                                    <div class="input-group input-group-lg" style="text-align:right;">
                                        <div class="input-group input-group-lg">
                                            <input id="check_presente_posterior_sigesco_laboral" onclick="check_posterior()" name="check_presente_posterior_sigesco_laboral" type="checkbox" class="">
                                            <label for="check_presente_posterior_sigesco_laboral">Al Presente</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                           <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="tipo_posterior_educacion_posterior_sigesco_laboral">Tipo de Estudio</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="tipo_posterior_educacion_posterior_sigesco_laboral" name="tipo_posterior_educacion_posterior_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Tipo Estudio</option>
                                            <option value="1">Doctorado</option>
                                            <option value="2">Magister</option>
                                            <option value="3">Diplomado</option>
                                            <option value="4">Curso</option>
                                        </select>
                                        <input style="display:none" id="id_tipo_posterior_educacion_posterior_sigesco_laboral" name="id_tipo_posterior_educacion_posterior_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_posterior_sigesco_laboral" name="situacion_educacion_posterior_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="3">Cursando</option>
                                        <option value="2">Egresado</option>
                                        <option value="1">Titulado</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>    
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="especialidad_educacion_posterior_sigesco_laboral">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="especialidad_educacion_posterior_sigesco_laboral" name="especialidad_educacion_posterior_sigesco_laboral" type="text" class="form-control" placeholder="Ingrese nombre del Doctorado / Magister / Diplomado / Curso" aria-label="Carrera" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="horas_educacion_posterior_sigesco_laboral">Cantidad de Horas y Nota</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="horas_educacion_posterior_sigesco_laboral" name="horas_educacion_posterior_sigesco_laboral" type="number" class="form-control" placeholder="Canditad de Horas" aria-label="Carrera" value="">
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="nota_educacion_posterior_sigesco_laboral" name="nota_educacion_posterior_sigesco_laboral" type="text" class="form-control" placeholder="Ingrese Nota" aria-label="Carrera" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="archivo_carrera_educacion_posterior_sigesco_laboral">Adjuntar Título (Opcional)</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="archivo_carrera_educacion_posterior_sigesco_laboral" name="archivo_carrera_educacion_posterior_sigesco_laboral" type="file" class="custom-file-input" placeholder="Ingrese Título" aria-label="Especialidad" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button  onClick="agregar_educacion()" style="color:white;" type="button" class="btn btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> Agregar </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cerrar </button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL ESTUDIO -->
<!-- MODAL ESTUDIO BASICA -->
<div id="modal_estudio_editar_basica" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edición de Educación Básica</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_editar_basica" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_basica_editar_sigesco_laboral">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_basica_editar_sigesco_laboral" name="ciudad_buscar_basica_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Ciudad" onChange="buscar_institucion_editar_basica()">
                                    <input style="display:none" id="ciudad_basica_editar_sigesco_laboral" name="ciudad_basica_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="id_basica_editar_sigesco_laboral" name="id_basica_editar_sigesco_laboral" type="text">
                                    <input style="display:none" id="id_trabajador_basica_editar_sigesco_laboral" name="id_trabajador_basica_editar_sigesco_laboral" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="institucion_educacion_basica_editar_sigesco_laboral">Institución</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="institucion_buscar_educacion_basica_editar_sigesco_laboral" name="institucion_educacion_basica_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    
                                    <input style="display:none" id="institucion_educacion_basica_editar_sigesco_laboral" name="institucion_educacion_basica_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_basica_editar_sigesco_laboral">Fecha Inicio</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_inicio_educacion_basica_editar_sigesco_laboral" name="mes_inicio_educacion_basica_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_inicio_educacion_basica_editar_sigesco_laboral" name="anno_inicio_educacion_basica_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_basica_editar_sigesco_laboral">Fecha Término</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_fin_educacion_basica_editar_sigesco_laboral" name="mes_fin_educacion_basica_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_fin_educacion_basica_editar_sigesco_laboral" name="anno_fin_educacion_basica_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_basica_editar_sigesco_laboral" onclick="check_basica_editar()" name="check_presente_basica_editar_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_basica_editar_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="especialidad_educacion_basica_editar_sigesco_laboral">Especialidad (Opcional)</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="especialidad_educacion_basica_editar_sigesco_laboral" name="especialidad_educacion_basica_editar_sigesco_laboral" type="text" class="form-control" placeholder="Especialidad" aria-label="Especialidad" value="">
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_educacion_basica_editar_sigesco_laboral">Situación</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_basica_editar_sigesco_laboral" name="situacion_educacion_basica_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="1">Completo</option>
                                        <option value="3">Cursando</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="modificar_educacion_basica()" type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL ESTUDIO BASICA -->
<!-- INICIO MODAL ESTUDIO MEDIA -->
<div id="modal_estudio_editar_media" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edición de Educación Media</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_media" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_media_editar_sigesco_laboral">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_media_editar_sigesco_laboral" name="ciudad_buscar_media_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre Ciudad" aria-label="Ingrese Nombre Ciudad" onChange="buscar_institucion_editar_media()">
                                    <input style="display:none" id="ciudad_media_editar_sigesco_laboral" name="ciudad_media_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="id_media_editar_sigesco_laboral" name="id_media_editar_sigesco_laboral" type="text">
                                    <input style="display:none" id="id_trabajador_media_editar_sigesco_laboral" name="id_trabajador_media_editar_sigesco_laboral" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="institucion_educacion_media_editar_sigesco_laboral">Institución</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="institucion_buscar_educacion_media_editar_sigesco_laboral" name="institucion_educacion_media_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Institución" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="institucion_educacion_media_editar_sigesco_laboral" name="institucion_educacion_media_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_media_editar_sigesco_laboral">Fecha Inicio</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_inicio_educacion_media_editar_sigesco_laboral" name="mes_inicio_educacion_media_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_inicio_educacion_media_editar_sigesco_laboral" name="anno_inicio_educacion_media_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_media_editar_sigesco_laboral">Fecha Término</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_fin_educacion_media_editar_sigesco_laboral" name="mes_fin_educacion_media_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_fin_educacion_media_editar_sigesco_laboral" name="anno_fin_educacion_media_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_media_editar_sigesco_laboral" onclick="check_media_editar()" name="check_presente_media_editar_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_media_editar_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="especialidad_educacion_media_editar_sigesco_laboral">Especialidad (Opcional)</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="especialidad_educacion_media_editar_sigesco_laboral" name="especialidad_educacion_media_editar_sigesco_laboral" type="text" class="form-control" placeholder="Especialidad" aria-label="Especialidad" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_educacion_media_editar_sigesco_laboral">Situación</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_media_editar_sigesco_laboral" name="situacion_educacion_media_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="1">Completo</option>
                                        <option value="3">Cursando</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="modificar_educacion_media()" type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL ESTUDIO MEDIA -->
<!-- INICIO MODAL ESTUDIO UNIVERSITARIO -->
<div id="modal_estudio_editar_universitaria" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edición de Educación Universitaria</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_universitaria_editar" style="padding:5px 10px;">
                    <div class="col-sm-12">
                        <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_universitaria_editar_sigesco_laboral">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_universitaria_editar_sigesco_laboral" name="ciudad_buscar_universitaria_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Ciudad" aria-label="Ingrese Ciudad" onChange="buscar_institucion_universitaria()">
                                    <input style="display:none" id="ciudad_universitaria_editar_sigesco_laboral" name="ciudad_universitaria_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="id_universitaria_editar_sigesco_laboral" name="id_universitaria_editar_sigesco_laboral" type="text">
                                    <input style="display:none" id="id_trabajador_universitaria_editar_sigesco_laboral" name="id_trabajador_universitaria_editar_sigesco_laboral" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="institucion_educacion_universitaria_editar_sigesco_laboral">Institución</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="institucion_buscar_educacion_universitaria_editar_sigesco_laboral" name="institucion_educacion_universitaria_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Institución" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="institucion_educacion_universitaria_editar_sigesco_laboral" name="institucion_educacion_universitaria_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_universitaria_editar_sigesco_laboral">Fecha Inicio</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_inicio_educacion_universitaria_editar_sigesco_laboral" name="mes_inicio_educacion_universitaria_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_inicio_educacion_universitaria_editar_sigesco_laboral" name="anno_inicio_educacion_universitaria_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_educacion_universitaria_editar_sigesco_laboral">Fecha Término</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="mes_fin_educacion_universitaria_editar_sigesco_laboral" name="mes_fin_educacion_universitaria_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Mes</option>
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octubre">Octubre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="anno_fin_educacion_universitaria_editar_sigesco_laboral" name="anno_fin_educacion_universitaria_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Año</option>
                                        <?php 
                                            for($i=0;$i<58;$i++){
                                                
                                                echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-3" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_universitaria_editar_sigesco_laboral" onclick="check_universitaria_editar()" name="check_presente_universitaria_editar_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_universitaria_editar_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="especialidad_educacion_universitaria_editar_sigesco_laboral">Carrera</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="especialidad_educacion_universitaria_editar_sigesco_laboral" name="especialidad_educacion_universitaria_editar_sigesco_laboral" type="text" class="form-control" placeholder="Ingrese Carrera" aria-label="Carrera" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="archivo_carrera_educacion_universitaria_editar_sigesco_laboral">Adjuntar Título (Opcional)</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="archivo_carrera_educacion_universitaria_editar_sigesco_laboral" name="archivo_carrera_educacion_universitaria_editar_sigesco_laboral" type="file" class="custom-file-input" placeholder="Ingrese Título" aria-label="Especialidad" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_educacion_universitaria_editar_sigesco_laboral">Situación</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_universitaria_editar_sigesco_laboral" name="situacion_educacion_universitaria_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="3">Cursando</option>
                                        <option value="2">Egresado</option>
                                        <option value="1">Titulado</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="modificar_educacion_universitaria()" type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL ESTUDIO UNIVERSITARIO -->
<!-- INICIO MODAL ESTUDIO POSTERIOR -->
<div id="modal_estudio_editar_posterior" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edición de Educación Posterior</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_posterior" style="padding:5px 10px;">
                    <div class="col-sm-12">
                        <div class="col-sm col-lg-12">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="ciudad_buscar_posterior_editar_sigesco_laboral">Ciudad</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="ciudad_buscar_posterior_editar_sigesco_laboral" name="ciudad_buscar_posterior_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Ciudad" aria-label="Ingrese Ciudad" onChange="buscar_institucion_posterior()">
                                        <input style="display:none" id="ciudad_posterior_editar_sigesco_laboral" name="ciudad_posterior_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                        <input style="display:none" id="id_posterior_editar_sigesco_laboral" name="id_posterior_editar_sigesco_laboral" type="text">
                                        <input style="display:none" id="id_trabajador_posterior_editar_sigesco_laboral" name="id_trabajador_posterior_editar_sigesco_laboral" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="institucion_educacion_posterior_editar_sigesco_laboral">Institución</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="institucion_buscar_educacion_posterior_editar_sigesco_laboral" name="institucion_educacion_posterior_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Institución" aria-label="Ingrese Nombre" value="">
                                        <input style="display:none" id="institucion_educacion_posterior_editar_sigesco_laboral" name="institucion_educacion_posterior_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                           <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="fecha_inicio_educacion_posterior_editar_sigesco_laboral">Fecha Inicio</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="mes_inicio_educacion_posterior_editar_sigesco_laboral" name="mes_inicio_educacion_posterior_editar_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Mes</option>
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Julio">Julio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="anno_inicio_educacion_posterior_editar_sigesco_laboral" name="anno_inicio_educacion_posterior_editar_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Año</option>
                                            <?php 
                                                for($i=0;$i<58;$i++){

                                                    echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";

                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                           <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="fecha_inicio_educacion_posterior_editar_sigesco_laboral">Fecha Término</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="mes_fin_educacion_posterior_editar_sigesco_laboral" name="mes_fin_educacion_posterior_editar_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Mes</option>
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Julio">Julio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="anno_fin_educacion_posterior_editar_sigesco_laboral" name="anno_fin_educacion_posterior_editar_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Año</option>
                                            <?php 
                                                for($i=0;$i<58;$i++){

                                                    echo "<option value='".(date('Y')-$i)."'>".(date('Y')-$i)."</option>";

                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3" style="">
                                    <div class="input-group input-group-lg" style="text-align:right;">
                                        <div class="input-group input-group-lg">
                                            <input id="check_presente_posterior_editar_sigesco_laboral" onclick="check_posterior_editar()" name="check_presente_posterior_editar_sigesco_laboral" type="checkbox" class="">
                                            <label for="check_presente_posterior_editar_sigesco_laboral">Al Presente</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                           <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="tipo_posterior_educacion_posterior_editar_sigesco_laboral">Tipo de Estudio</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <select id="tipo_posterior_educacion_posterior_editar_sigesco_laboral" name="tipo_posterior_educacion_posterior_editar_sigesco_laboral">
                                            <option name='inicio_option' selected>Seleccione Tipo Estudio</option>
                                            <option value="1">Doctorado</option>
                                            <option value="2">Magister</option>
                                            <option value="3">Diplomado</option>
                                            <option value="4">Curso</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="situacion_educacion_posterior_editar_sigesco_laboral" name="situacion_educacion_posterior_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Situación</option>
                                        <option value="3">Cursando</option>
                                        <option value="2">Egresado</option>
                                        <option value="1">Titulado</option>
                                        <option value="4">Incompleto</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>    
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="especialidad_educacion_posterior_editar_sigesco_laboral">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="especialidad_educacion_posterior_editar_sigesco_laboral" name="especialidad_educacion_posterior_editar_sigesco_laboral" type="text" class="form-control" placeholder="Ingrese nombre del Doctorado / Magister / Diplomado / Curso" aria-label="Carrera" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="horas_educacion_posterior_editar_sigesco_laboral">Cantidad de Horas y Nota</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="horas_educacion_posterior_editar_sigesco_laboral" name="horas_educacion_posterior_editar_sigesco_laboral" type="number" class="form-control" placeholder="Canditad de Horas" aria-label="Carrera" value="">
                                    </div>
                                </div>
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="nota_educacion_posterior_editar_sigesco_laboral" name="nota_educacion_posterior_editar_sigesco_laboral" type="text" class="form-control" placeholder="Ingrese Nota" aria-label="Carrera" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-lg-12" style="margin-top:2%">
                            <div class="row">
                                <div class="col-sm col-lg-3">
                                    <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                        <label for="archivo_carrera_educacion_posterior_editar_sigesco_laboral">Adjuntar Título (Opcional)</label>
                                    </div>
                                </div>
                                <div class="col-sm col-lg-6">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="archivo_carrera_educacion_posterior_editar_sigesco_laboral" name="archivo_carrera_educacion_posterior_editar_sigesco_laboral" type="file" class="custom-file-input" placeholder="Ingrese Título" aria-label="Especialidad" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="modificar_educacion_posterior()" type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL ESTUDIO PORTERIOR -->
<!-- MODAL EXPERIENCIA LABORAL -->
<div id="modal_experiencia_laboral" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Creación de Experiencia Laboral</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_editar_basica" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_experiencia_laboral_sigesco_laboral">Ciudad / Empresa</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_experiencia_laboral_sigesco_laboral" name="ciudad_experiencia_laboral_sigesco_laboral" onChange="buscar_empresa_experiencia()" type="text" class="form-control validate" placeholder="Ingrese Nombre de Ciudad" aria-label="Ingrese Nombre de Ciudad">
                                    <input style="display:none" id="ciudad_experiencia_laboral_sigesco_laboral" name="ciudad_experiencia_laboral_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="empresa_experiencia_laboral_sigesco_laboral" name="empresa_experiencia_laboral_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Empresa" aria-label="Ingrese Nombre de Empresa" value="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="cargo_experiencia_laboral_sigesco_laboral">Cargo</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="cargo_experiencia_laboral_sigesco_laboral" name="cargo_experiencia_laboral_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Cargo" aria-label="Ingrese Cargo" value="">

                                </div>
                            </div>
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="tipo_experiencia_laboral_sigesco_laboral" name="tipo_experiencia_laboral_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Tipo</option>
                                        <option value="Administrativo">Administrativo</option>
                                        <option value="Directivo o Gerente">Directivo o Gerente</option>
                                        <option value="Jefatura">Jefatura</option>
                                        <option value="Profesional">Profesional</option>
                                        <option value="Otro">Otro</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="sueldo_experiencia_laboral_sigesco_laboral" name="sueldo_experiencia_laboral_sigesco_laboral" type="text" class="form-control validate" placeholder="Sueldo Bruto" aria-label="Sueldo Bruto" onChange="formatear(this.id,this.value)">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_experiencia_laboral_sigesco_laboral">Fecha de Experiencia</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg fecha_inicio" style="width:100%">
                                    <input id="fecha_inicio_experiencia_laboral_sigesco_laboral" name="fecha_inicio_experiencia_laboral_sigesco_laboral" type="text" class="form-control validate" placeholder="Fecha de Inicio" aria-label="Fecha de Inicio" value="">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg fecha_termino" style="width:100%">
                                    <input id="fecha_termino_experiencia_laboral_sigesco_laboral" name="fecha_termino_experiencia_laboral_sigesco_laboral" type="text" class="form-control validate" placeholder="Fecha de Termino" aria-label="Fecha de Termino" value="">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-sm col-lg-2" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_experiencia_sigesco_laboral" onclick="check_experiencia_laboral()" name="check_presente_experiencia_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_experiencia_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_experiencia_laboral_sigesco_laboral">Descripción</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-8">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <textarea rows="4" cols="50" id="descripcion_experiencia_laboral_sigesco_laboral" name="descripcion_experiencia_laboral_sigesco_laboral" placeholder="Ingrese descripción de la Experiencia Laboral"> </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="referencia_experiencia_laboral_sigesco_laboral">Contacto Referencia</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="referencia_experiencia_laboral_sigesco_laboral" name="referencia_experiencia_laboral_sigesco_laboral" type="text" class="form-control" placeholder="Datos de Referencia (Nombre, Teléfono, Correo)" aria-label="Datos de Referencia (Nombre, Teléfono, Correo)" value="">
                                </div>
                            </div>


                                <div class="col-sm col-lg-4">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="archivo_experiencia_laboral_sigesco_laboral" name="archivo_experiencia_laboral_sigesco_laboral" type="file" class="custom-file-input" placeholder="Ingrese Documento" aria-label="Ingrese Documento" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="agregar_experiencia()" type="button" class="btn btn-success">Agregar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL EXPERIENCIA LABORAL -->
<!-- MODAL EXPERIENCIA LABORAL EDITAR -->
<div id="modal_experiencia_laboral_editar" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edición de Experiencia Laboral</h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="row"  id="form_editar_basica" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="ciudad_buscar_experiencia_laboral_editar_sigesco_laboral">Ciudad / Empresa</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="ciudad_buscar_experiencia_laboral_editar_sigesco_laboral" name="ciudad_buscar_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Ciudad" aria-label="Ingrese Nombre de Ciudad">
                                    <input style="display:none" id="ciudad_experiencia_laboral_editar_sigesco_laboral" name="ciudad_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" value="">
                                    <input style="display:none" id="id_experiencia_laboral_editar_sigesco_laboral" name="id_experiencia_laboral_editar_sigesco_laboral" type="text">
                                    <input style="display:none" id="id_trabajador_experiencia_laboral_editar_sigesco_laboral" name="id_trabajador_experiencia_laboral_editar_sigesco_laboral" type="text">
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="empresa_experiencia_laboral_editar_sigesco_laboral" name="empresa_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Nombre de Empresa" aria-label="Ingrese Nombre de Empresa" value="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="cargo_experiencia_laboral_editar_sigesco_laboral">Cargo</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="cargo_experiencia_laboral_editar_sigesco_laboral" name="cargo_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ingrese Cargo" aria-label="Ingrese Cargo" value="">

                                </div>
                            </div>
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <select id="tipo_experiencia_laboral_editar_sigesco_laboral" name="tipo_experiencia_laboral_editar_sigesco_laboral">
                                        <option name='inicio_option' selected>Seleccione Tipo</option>
                                        <option value="Administrativo">Administrativo</option>
                                        <option value="Directivo o Gerente">Directivo o Gerente</option>
                                        <option value="Jefatura">Jefatura</option>
                                        <option value="Profesional">Profesional</option>
                                        <option value="Otro">Otro</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="sueldo_experiencia_laboral_editar_sigesco_laboral" name="sueldo_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Sueldo Bruto" aria-label="Sueldo Bruto" onChange="formatear(this.id,this.value)">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm col-lg-12" style="margin-top:2%">
                       <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="fecha_inicio_experiencia_laboral_editar_sigesco_laboral">Fecha de Experiencia</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg fecha_inicio" style="width:100%">
                                    <input id="fecha_inicio_experiencia_laboral_editar_sigesco_laboral" name="fecha_inicio_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Fecha de Inicio" aria-label="Fecha de Inicio" value="">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-sm col-lg-4">
                                <div class="input-group input-group-lg fecha_termino" style="width:100%">
                                    <input id="fecha_termino_experiencia_laboral_editar_sigesco_laboral" name="fecha_termino_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control validate" placeholder="Fecha de Termino" aria-label="Fecha de Termino" value="">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-sm col-lg-2" style="">
                                <div class="input-group input-group-lg" style="text-align:right;">
                                    <div class="input-group input-group-lg">
                                        <input id="check_presente_experiencia_labora_edita_sigesco_laboral" onclick="check_experiencia_laboral_editar()" name="check_presente_experiencia_labora_edita_sigesco_laboral" type="checkbox" class="">
                                        <label for="check_presente_experiencia_labora_edita_sigesco_laboral">Al Presente</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="situacion_experiencia_laboral_editar_sigesco_laboral">Descripción</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-8">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <textarea rows="4" cols="50" id="descripcion_experiencia_laboral_editar_sigesco_laboral" name="descripcion_experiencia_laboral_editar_sigesco_laboral" placeholder="Ingrese descripción de la Experiencia Laboral"> </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:2%">
                        <div class="row">
                            <div class="col-sm col-lg-2">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="referencia_experiencia_laboral_editar_sigesco_laboral">Contacto Referencia</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="referencia_experiencia_laboral_editar_sigesco_laboral" name="referencia_experiencia_laboral_editar_sigesco_laboral" type="text" class="form-control" placeholder="Datos de Referencia (Nombre, Teléfono, Correo)" aria-label="Datos de Referencia (Nombre, Teléfono, Correo)" value="">
                                </div>
                            </div>


                                <div class="col-sm col-lg-4">
                                    <div class="input-group input-group-lg" style="width:100%">
                                        <input id="archivo_experiencia_laboral_editar_sigesco_laboral" name="archivo_experiencia_laboral_editar_sigesco_laboral" type="file" class="custom-file-input" placeholder="Ingrese Documento" aria-label="Ingrese Documento" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="modificar_experiencia_laboral_editar()" type="button" class="btn btn-success">Modificar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL EXPERIENCIA LABORAL EDITAR -->
<!-- MODAL EDITAR FOTO PERFIL -->
<div id="modal_foto_perfil" class="modal fade" tabindex="-1" role="dialog">
   <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <form>
                <div class="row"  id="form_editar_basica" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="row">
                            <div class="col-sm col-lg-3  col-lg-offset-1">
                                <div class="input-group input-group-lg" style="width:100%; text-align:right;">
                                    <label for="referencia_experiencia_laboral_editar_sigesco_laboral">Subir Imagen</label>
                                </div>
                            </div>
                            <div class="col-sm col-lg-6">
                                <div class="input-group input-group-lg" style="width:100%">
                                    <input id="foto_perfil_editar" name="foto_perfil_editar" type="file" class="custom-file-input" placeholder="Seleccione Foto de Perfil" aria-label="Documento" value="">
                                </div>
                            </div>


                            <div class="col-xs-1 col-lg-1" onClick="subir_foto_perfil_editar()" style="">
                                <i class="fa fa-cloud-upload icono_imagen" aria-hidden="true"> </i>
                            </div>
                            </div>
                    </div>
                    <div class="col-sm col-lg-4  col-lg-offset-4" style="margin-top:2%">
                        <img id="img_perfil_auxiliar" width="220" src="<?=base_url().$perfil->foto_perfil_trabajador_laboral?>" alt="">
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button onClick="subir_foto_perfil_guardar()" type="button" class="btn btn-success">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div><!-- /.modal -->
<!-- FIN MODAL EDITAR FOTO PERFIL -->
<script>
$( document ).ready(function() { 
    
$(".candidate-profile-picture").mouseover(function() {
    $("#editar_perfil").slideDown( "slow" );
});

$(".candidate-profile-picture").mouseleave(function() {
    $("#editar_perfil").slideUp( "slow" );
});
    
$('#nacimiento_editar_sigesco_laboral').mask('00-00-0000');
$('#nota_educacion_posterior_editar_sigesco_laboral').mask('9.99');
$('#nota_educacion_posterior_sigesco_laboral').mask('9.99');
$('#fecha_inicio_educacion_basica_sigesco_laboral').mask('AAA-0000');
    
$("#ciudad_buscar_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
var $input = $("#ciudad_buscar_sigesco_laboral");
$input.change(function() {
      var current = $input.typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $input.val()) {
            $("#ciudad_editar_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
//////////////////////////  E D U C A C I O N   //////////////////////////////
$("#ciudad_buscar_basica_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_basica_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_basica_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_basica_sigesco_laboral").val()) {
            $("#ciudad_basica_sigesco_laboral").val(current.value);
            $("#institucion_buscar_educacion_basica_sigesco_laboral").val('');
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
$("#ciudad_buscar_basica_editar_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_basica_editar_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_basica_editar_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_basica_editar_sigesco_laboral").val()) {
            $("#ciudad_basica_editar_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
$("#ciudad_buscar_media_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_media_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_media_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_media_sigesco_laboral").val()) {
            $("#ciudad_media_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
        }
      } else {
      }
    });
    
$("#ciudad_buscar_media_editar_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_media_editar_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_media_editar_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_media_editar_sigesco_laboral").val()) {
            $("#ciudad_media_editar_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
$("#ciudad_buscar_universitaria_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_universitaria_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_universitaria_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_universitaria_sigesco_laboral").val()) {
            $("#ciudad_universitaria_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });

$("#ciudad_buscar_universitaria_editar_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_universitaria_editar_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_universitaria_editar_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_universitaria_editar_sigesco_laboral").val()) {
            $("#ciudad_universitaria_editar_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
$("#ciudad_buscar_posterior_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_posterior_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_posterior_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_posterior_sigesco_laboral").val()) {
            $("#ciudad_posterior_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });

$("#ciudad_buscar_posterior_editar_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#ciudad_buscar_posterior_editar_sigesco_laboral").change(function() {
      var current = $("#ciudad_buscar_posterior_editar_sigesco_laboral").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#ciudad_buscar_posterior_editar_sigesco_laboral").val()) {
            $("#ciudad_posterior_editar_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
$("#boton_modificar_trabajador_laboral" ).click(function() {
/*Inicio Primer Nombre */  if(($("#nombre_editar_sigesco_laboral").val().length) > 0){
                            $( "#nombre_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Segundo Nombre */  if($("#nombre2_editar_sigesco_laboral").val().length > 0){
                            $( "#nombre2_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Apellido Paterno */  if($("#paterno_editar_sigesco_laboral").val().length > 0){
                            $( "#paterno_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Apellido Materno */  if($("#materno_editar_sigesco_laboral").val().length > 0){
                            $( "#materno_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Fecha Nacimiento */  if($("#nacimiento_editar_sigesco_laboral").val().length > 0){
                            $( "#nacimiento_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Celular Contacto */  if($("#celular_editar_sigesco_laboral").val().length > 0){
                            $( "#celular_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Celular Referencia */  if($("#celular_referencia_editar_sigesco_laboral").val().length > 0){
                            $( "#celular_referencia_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Direccion */  if($("#direccion_editar_sigesco_laboral").val().length > 0){
                            $( "#direccion_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Ciudad */      if($("#ciudad_editar_sigesco_laboral").val().length > 0){
                            $( "#ciudad_editar_sigesco_laboral" ).css( "border-color","#ccc" );
    
/*Inicio Nacionalidad */  if($("#nacionalidad_editar_sigesco_laboral").val().length > 0){
                            $( "#nacionalidad_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Email */      if($("#email_editar_sigesco_laboral").val().length > 0){
                            $( "#email_editar_sigesco_laboral" ).css( "border-color","#ccc" );
    
/*Inicio Sueldo */      if($("#pretencion_editar_sigesco_laboral").val().length > 0){
                            $( "#pretencion_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Genero */      if($("#genero_editar_sigesco_laboral").val().length > 0){
                            $( "#genero_editar_sigesco_laboral" ).css( "border-color","#ccc" );
    
/*Inicio Estado_Civil */  if($("#estado_civil_editar_sigesco_laboral").val().length > 0){
                            $( "#estado_civil_editar_sigesco_laboral" ).css( "border-color","#ccc" );
    
/*Inicio Discapacidad */ if($("#discapacidad_editar_sigesco_laboral").val().length > 0){
                            $( "#discapacidad_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Objetivo */      if($("#objetivo_editar_sigesco_laboral").val().length > 0){
                            $( "#objetivo_editar_sigesco_laboral" ).css( "border-color","#ccc" );

/*Inicio Presentacion */  if($("#presentacion_editar_sigesco_laboral").val().length > 0){
                            $( "#presentacion_editar_sigesco_laboral" ).css( "border-color","#ccc" );

                                $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/modificar_trabajador_laboral',
                                    data: $('#form_modificacion_laboral').serialize(),
                                    success: function(data){
                                          
                                        if(data == true){
                                            
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "onclick": null,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "7000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                            Command: toastr["success"]("Se envio un correo electronico a su cuenta Email. Favor de Verificar.", "Registro Realizado");
                                            redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "onclick": null,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "7000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            
                                        }
                                    }

                                });
    
/* Fin Presentacion */   }else{
                            $( "#presentacion_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#presentacion_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Presentación'</strong> por favor.", "Presentación")
                        }
    
/* Fin Objetivo */   }else{
                            $( "#objetivo_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#objetivo_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Objetivo'</strong> por favor.", "Objetivo")
                        }
    
/* Fin Discapacidad */   }else{
                            $( "#discapacidad_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#discapacidad_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Discapacidad'</strong> por favor.", "Discapacidad")
                        }

/* Fin Estado_civil */   }else{
                            $( "#estado_civil_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#estado_civil_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Estado Civil'</strong> por favor.", "Estado Civil")
                        }

/* Fin Genero */   }else{
                            $( "#genero_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#genero_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Género'</strong> por favor.", "Género")
                        }
    
/* Fin Sueldo */   }else{
                            $( "#pretencion_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#pretencion_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Pretención de Sueldo'</strong> por favor.", "Pretención de Sueldo")
                        }
    
/* Fin Email */   }else{
                            $( "#email_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#email_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
                        }
    
/* Fin Nacionalidad */   }else{
                            $( "#nacionalidad_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#nacionalidad_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Nacionalidad'</strong> por favor.", "Nacionalidad")
                        }    
/* Fin Ciudad */   }else{
                            $( "#ciudad_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#ciudad_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
                        }
    
/* Fin Direccion */   }else{
                            $( "#direccion_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#direccion_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Dirección'</strong> por favor.", "Dirección")
                        }
        
/* Fin Celular Referencia */   }else{
                            $( "#celular_referencia_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#celular_referencia_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Celular Referencia'</strong> por favor.", "Celular Referencia")
                        }
    
/* Fin Celular Contacto */   }else{
                            $( "#celular_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#celular_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Celular Contacto'</strong> por favor.", "Celular Contacto")
                        }
    
 /* Fin Fecha Nacimiento */   }else{
                            $( "#nacimiento_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#nacimiento_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Nacimiento'</strong> por favor.", "Fecha de Nacimiento")
                        }
    
 /* Fin Apellido Materno */   }else{
                            $( "#materno_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#materno_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Apellido Materno'</strong> por favor.", "Apellido Materno")
                        } 
    
 /* Fin Apellido Paterno */   }else{
                            $( "#paterno_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#paterno_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Apellido Paterno'</strong> por favor.", "Apellido Paterno")
                        } 
    
 /* Fin Segundo Nombre */   }else{
                            $( "#nombre2_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#nombre2_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Segundo Nombre'</strong> por favor.", "Segundo Nombre")
                        } 

 /* Fin Primer Nombre */    }else{
                            $( "#nombre_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#nombre_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Primer Nombre'</strong> por favor.", "Primer Nombre")
                        }   
    });
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////   C O N O C I M I E N T O   //////////////////////////////
 $('[data-toggle="popover"]').popover({html: true});
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////   I D I O M A   ///////////////////////////////////
$("#nombre_idioma").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($idiomas as $idioma){
                    if($i>1){echo ",";};
                    echo '{id: "'.$idioma->id_idioma.'", name: "'.$idioma->nombre_idioma.'", value: "'.$idioma->id_idioma.'"}';
                $i++; 
                }
            ?>
          ]
        });
    
$("#nombre_idioma").change(function() {
      var current = $("#nombre_idioma").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#nombre_idioma").val()) {
            $("#id_idioma").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });
    
    
//////////////////////////////////////////////////////////////////////////////////
////////////////////////   D O C U M E N T A C I O N  ////////////////////////////
    $( "#tipo_documentacion" ).click(function() {
        if($( "#input_tipo_documentacion" ).val() == "Otro"){
           $( "#div_titulo_otro_documentacion" ).slideDown( "slow" );
        }else{
            $( "#div_titulo_otro_documentacion" ).slideUp( "slow" );
        }
    });
//////////////////////////////////////////////////////////////////////////////////
});

///////////////////////////////////////////////////////////////////////////////////
//////////////////// E X P E R I E N C I A   L A B O R A L   //////////////////////
    $('#fecha_inicio_experiencia_laboral_sigesco_laboral').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true,
        weekStart: 1
    });
    $('#fecha_termino_experiencia_laboral_sigesco_laboral').datepicker({
        format: "dd/mm/yyyy",
        language: "ES",
        autoclose: true,
        weekStart: 1
        
    });
    $('#fecha_inicio_experiencia_laboral_editar_sigesco_laboral').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true,
        weekStart: 1
    });
    $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').datepicker({
        format: "dd/mm/yyyy",
        language: "ES",
        autoclose: true,
        weekStart: 1
        
    });
    $("#ciudad_buscar_experiencia_laboral_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($ciudades as $ciudad){
                    if($i>1){echo ",";};
                    echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                $i++; 
                }
            ?>
          ]
        });
    $("#ciudad_buscar_experiencia_laboral_sigesco_laboral").change(function() {
          var current = $("#ciudad_buscar_experiencia_laboral_sigesco_laboral").typeahead("getActive");
          if (current) {
            // Some item from your model is active!
            if (current.name == $("#ciudad_buscar_experiencia_laboral_sigesco_laboral").val()) {
                $("#ciudad_experiencia_laboral_sigesco_laboral").val(current.value);
              // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
            } else {
                $("#ciudad_experiencia_laboral_sigesco_laboral").val('');
              // This means it is only a partial match, you can either add a new item
              // or take the active if you don't want new items
            }
          } else {
            // Nothing is active so it is a new value (or maybe empty value)
          }
        });
    $("#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral").typeahead({
            displayKey: "name",  
            source: [
                <?php
                    $i=1;
                    foreach ($ciudades as $ciudad){
                        if($i>1){echo ",";};
                        echo '{id: "'.$ciudad->id_ciudad.'", name: "'.$ciudad->nombre_ciudad.'", value: "'.$ciudad->id_ciudad.'"}';
                    $i++; 
                    }
                ?>
              ]
});
    var $input = $("#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral");
    $input.change(function() {
      var current = $input.typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $input.val()) {
            $("#ciudad_experiencia_laboral_editar_sigesco_laboral").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
            $("#ciudad_experiencia_laboral_editar_sigesco_laboral").val('');
          // This means it is only a partial match, you can either add a new item
          // or take the active if you don't want new items
        }
      } else {
        // Nothing is active so it is a new value (or maybe empty value)
      }
    });    
    $("#cargo_experiencia_laboral_sigesco_laboral").typeahead({
        displayKey: "name",  
        source: [
            <?php
                $i=1;
                foreach ($cargos_experiencia_laboral as $cargo_experiencia_laboral){
                    if($i>1){echo ",";};
                    echo '{name: "'.$cargo_experiencia_laboral->nombre_cargo_experiencia_laboral.'"}';
                $i++; 
                }
            ?>
          ]
        });
    $("#cargo_experiencia_laboral_sigesco_laboral").change(function() {
              var current = $("#cargo_experiencia_laboral_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#cargo_experiencia_laboral_sigesco_laboral").val()) {
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nuevo_cargo_experiencia',
                            data: { nombre_cargo : $("#cargo_experiencia_laboral_sigesco_laboral").val().toUpperCase()
                                  },
                            success: function(data){                        
                                if(data == false){
                                    Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                                }
                            }
                          });
                }
              } else {
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nuevo_cargo_experiencia',
                            data: { nombre_cargo : $("#cargo_experiencia_laboral_sigesco_laboral").val().toUpperCase()
                                  },
                            success: function(data){                        
                                if(data == false){
                                    Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                                }
                            }
                          });

              }
            });
    $("#input_select_tipo_posterior").change(function() {
        alert($("#input_select_tipo_posterior").val());
    });
///////////////////////////////////////////////////////////////////////////////////
    //////////////////////////      C O N O C I M I E N T O     ///////////////////////
    $("#nombre_conocimiento").typeahead({
            displayKey: "name",  
            source: [
                <?php
                    $i=1;
                    foreach ($conocimientos as $conocimiento){
                        if($i>1){echo ",";};
                        echo '{id: "'.$conocimiento->id_conocimiento.'", name: "'.$conocimiento->nombre_conocimiento.'", value: "'.$conocimiento->id_conocimiento.'"}';
                    $i++; 
                    }
                ?>
              ]
    });
    $("#nombre_conocimiento").change(function() {
      var current = $("#nombre_conocimiento").typeahead("getActive");
      if (current) {
        // Some item from your model is active!
        if (current.name == $("#nombre_conocimiento").val()) {
            $("#id_conocimiento").val(current.value);
          // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
           $.ajax({                
            type: 'POST',
            url: '<?=base_url()?>trabajador_laboral/nuevo_conocimiento',
            data: { nombre_conocimiento : $("#nombre_conocimiento").val().toUpperCase()},
            success: function(data){                        
                if(data != false){
                    $("#id_conocimiento").val(data);
                }else{
                    Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                }
            }
          });
        }
      } else {
          $.ajax({                
            type: 'POST',
            url: '<?=base_url()?>trabajador_laboral/nuevo_conocimiento',
            data: { nombre_conocimiento : $("#nombre_conocimiento").val().toUpperCase()},
            success: function(data){                        
                if(data != false){
                    $("#id_conocimiento").val(data);
                }else{
                    Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                }
            }
          });
      }
    });
    $('.popover-dismiss').popover({
      trigger: 'focus'
    });
    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
    ///////////////////////////////////////////////////////////////////////////////////
    function formatear(id,precio){
        var auxiliar_precio = precio;
		auxiliar_precio = auxiliar_precio.replace(/[\$ abcdefghijklmnopqrstuvwxyz .]/g, '');
        if(auxiliar_precio != ""){
            $("#"+id).val("$ "+formatNumber.new(auxiliar_precio));
        }
    }
    function validar_fecha(fecha){
        
        if(validador_fecha(fecha) == false){
            Command: toastr["error"]("<strong>'Fecha de Nacimiento'</strong> invalida, verifique por favor.", "Fecha de Nacimiento")
            $("#nacimiento_editar_sigesco_laboral").val("");
            $( "#nacimiento_editar_sigesco_laboral" ).css(  "border-color","red" );
            $( "#nacimiento_editar_sigesco_laboral" ).focus();
            
        }else{
            $( "#nacimiento_editar_sigesco_laboral" ).css( "border-color","#ccc" );
        }
    }
    function visual_estudio(tipo){
        switch(tipo) {
            case 'basica':
                $("#form_basica").show("slow");
                $("#form_media").hide("slow");
                $("#form_universitaria").hide("slow");
                $("#form_posterior").hide("slow");
                break;
                
            case 'media':
                
                $("#form_basica").hide("slow");
                $("#form_media").show("slow");
                $("#form_universitaria").hide("slow");
                $("#form_posterior").hide("slow");
                break;
                
            case 'universitaria':
                $("#form_basica").hide("slow");
                $("#form_media").hide("slow");
                $("#form_universitaria").show("slow");
                $("#form_posterior").hide("slow");
                break;
                
            case 'posterior':
                $("#form_basica").hide("slow");
                $("#form_media").hide("slow");
                $("#form_universitaria").hide("slow");
                $("#form_posterior").show("slow");
                break;
        }
    }
    //////////////////////////////   E D U C A C I O N   B A S I C A   //////////////////////////////////////////
    function modificar_basica(id_educacion_basica){
      $.ajax({                
        type: 'POST',
        url: '<?=base_url()?>trabajador_laboral/buscar_educacion_basica',
        data: {id_educacion : id_educacion_basica},
        success: function(data){
            if(data != false){
            dato_trabajador_laboral = JSON.parse(JSON.stringify(data));
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_basica == 1){var situacion = 'Completo';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_basica == 3){var situacion = 'Cursando';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_basica == 4){var situacion = 'Incompleto';}
            $('#id_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_trabajador_laboral_educacion_basica);
            $('#ciudad_buscar_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_ciudad);
            $('#ciudad_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_ciudad);
            buscar_institucion_editar_basica_modal();
            $('#input_select_mes_inicio_editar_basica').val(dato_trabajador_laboral[0].mes_inicio_trabajador_laboral_educacion_basica);
            $('#id_trabajador_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].trabajador_laboral_id_trabajador_laboral);
            $('#mes_inicio_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_inicio_trabajador_laboral_educacion_basica);
            $('#anno_inicio_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_basica);
            $('#input_select_anno_inicio_editar_basica').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_basica);
            $('#input_select_mes_fin_editar_basica').val(dato_trabajador_laboral[0].mes_termino_trabajador_laboral_educacion_basica);
            $('#input_select_anno_fin_editar_basica').val(dato_trabajador_laboral[0].anno_termino_trabajador_laboral_educacion_basica);
            $('#mes_fin_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_termino_trabajador_laboral_educacion_basica);
            $('#anno_fin_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_termino_trabajador_laboral_educacion_basica);
            if(dato_trabajador_laboral[0].alpresente_trabajador_laboral_educacion_basica == 'SI'){
                $("#check_presente_basica_editar_sigesco_laboral").prop( "checked", true );
                ////////  B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_basica" ).addClass('readonly');
                    $( "#select_anno_fin_editar_basica" ).addClass('readonly');
                ///////////////////////////////////////////////////////////////
            }else{
                ////////  D E S B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_basica" ).removeClass('readonly');
                    $( "#select_anno_fin_editar_basica" ).removeClass('readonly');
                ///////////////////////////////////////////////////////////////
            }
            $('#situacion_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_basica);
            $('#input_select_situacion_editar_basica').val(situacion);
            $('#anno_inicio_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_basica);
            $('#institucion_buscar_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_educacion_basica);
            $('#institucion_educacion_basica_editar_sigesco_laboral').val(dato_trabajador_laboral[0].educacion_basica_id_educacion_basica);
            $('#modal_estudio_editar_basica').modal('show');
            }
        }
      });
    }
    function modificar_educacion_basica(){
            /*Inicio Institucion */  if(($("#institucion_educacion_basica_editar_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_basica_editar_sigesco_laboral").val() != '')){
                            $( "#institucion_educacion_basica_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_basica_editar_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_editar_basica" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_basica_editar_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_editar_basica" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_basica_editar_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_basica_editar_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_basica_editar_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_editar_basica" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_editar_basica" ).css( "border-color","#ccc" );
                            $( "#check_presente_basica_editar_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_basica_editar_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_editar_basica" ).css( "border-color","#ccc" );
                
                            if ( $("#check_presente_basica_editar_sigesco_laboral").prop('checked')){
                                
                                check_basica = 'SI';
                                $("#mes_fin_educacion_basica_editar_sigesco_laboral").val('');
                                $("#anno_fin_educacion_basica_editar_sigesco_laboral").val('');
                                
                            }else{
                                check_basica = 'NO';
                            }
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/editar_estudio_basica',
                                    data: {
                                        id_basica_editar_sigesco_laboral : $( "#id_basica_editar_sigesco_laboral" ).val(),
                                        institucion_buscar_educacion_basica_editar_sigesco_laboral: $( "#institucion_buscar_educacion_basica_editar_sigesco_laboral" ).val(),
                                        institucion_educacion_basica_editar_sigesco_laboral: $( "#institucion_educacion_basica_editar_sigesco_laboral" ).val(),
                                        mes_inicio_educacion_basica_editar_sigesco_laboral: $( "#mes_inicio_educacion_basica_editar_sigesco_laboral" ).val(),
                                        anno_inicio_educacion_basica_editar_sigesco_laboral: $( "#anno_inicio_educacion_basica_editar_sigesco_laboral" ).val(),
                                        mes_fin_educacion_basica_editar_sigesco_laboral: $( "#mes_fin_educacion_basica_editar_sigesco_laboral" ).val(),
                                        anno_fin_educacion_basica_editar_sigesco_laboral: $( "#anno_fin_educacion_basica_editar_sigesco_laboral" ).val(),
                                        situacion_educacion_basica_editar_sigesco_laboral: $( "#situacion_educacion_basica_editar_sigesco_laboral" ).val(),
                                        especialidad_educacion_basica_editar_sigesco_laboral: '',
                                        check_presente_basica_editar_sigesco_laboral: check_basica,
                                        id_trabajador_basica_editar_sigesco_laboral : $('#id_trabajador_basica_editar_sigesco_laboral').val() 
                                    },
                                    success: function(data){
                                        if(data == true){
                                            var fecha_auxiliar_titulo = '';
                                            if(check_basica == 'SI'){
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_basica_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_basica_editar_sigesco_laboral" ).val()+' / Al Presente';
                                            }else{
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_basica_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_basica_editar_sigesco_laboral" ).val()+' / '+$( "#mes_fin_educacion_basica_editar_sigesco_laboral" ).val()+'-'+$( "#anno_fin_educacion_basica_editar_sigesco_laboral" ).val();
                                            }
                                            ///////////////  A G R E G A R   T E X T O   A   F I L A  D E   E S T U D I O ///////////////
                                            $('#titulo_institucion_basica'+$( "#id_basica_editar_sigesco_laboral" ).val()).html($( "#institucion_buscar_educacion_basica_editar_sigesco_laboral" ).val());
                                            $('#titulo_situacion_basica'+$( "#id_basica_editar_sigesco_laboral" ).val()).html(' -  <i class="fa fa-bell"></i> '+$( "#situacion_educacion_basica_editar_sigesco_laboral" ).val());
                                            $('#titulo_fecha_basica'+$( "#id_basica_editar_sigesco_laboral" ).val()).html(fecha_auxiliar_titulo);
                                            /////////////////////////////////////////////////////////////////////////////////////////////
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            check_basica_editar();
                                            
                                            Command: toastr["success"]("Se Modifico Correctamente Educación Basica.", "Registro Modificado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                        }
                                    }
                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_editar_basica" ).css(  "border-color","red" );
                            $( "#input_select_situacion_editar_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_editar_basica" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_editar_basica" ).css(  "border-color","red" );
                            $( "#check_presente_basica_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_editar_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_editar_basica" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_editar_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_editar_basica" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_editar_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_basica_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_basica_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
        }
    function eliminar_basica(id_educacion_basica){
            bootbox.confirm({ 
                buttons: {
                    cancel: {
                      label: 'Cerrar',
                      className: 'btn-danger'
                    },
                    
                    confirm: {
                      label: 'Eliminar',
                      className: 'btn-success'
                    }
                },
                title: "Eliminar Educación",
                message: "¿Esta seguro de <strong> Eliminar</strong> Educación Básica?", 
                callback: function(result){
                              
                  if(result == true){
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/eliminar_educacion_basica',
                        data: {id_educacion : id_educacion_basica},
                        success: function(data){
                                                        
                            if(data == true){
                              Command: toastr["success"]("Educación Básica Eliminada correctamente.", "Educación Eliminada");
                              $("#fila_educacion_basica"+id_educacion_basica).remove();
                            }else{
                            Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                            }
                                  
                        }
                    });
                  }
                }  
            });
        }
    function check_basica(){
        if($("#check_presente_basica_sigesco_laboral").prop('checked')){
             $( "#select_mes_fin_basica" ).addClass('readonly');
             $( "#select_anno_fin_basica" ).addClass('readonly');
        }else{
             $( "#select_mes_fin_editar_basica" ).removeClass('readonly');
             $( "#select_anno_fin_editar_basica" ).removeClass('readonly');
        }
    }
    function check_basica_editar(){
        if($("#check_presente_basica_editar_sigesco_laboral").prop('checked')){
             $( "#select_mes_fin_editar_basica" ).addClass('readonly');
             $( "#select_anno_fin_editar_basica" ).addClass('readonly');
             $( "#select_mes_fin_editar_basica" ).val('');
             $( "#select_anno_fin_editar_basica" ).val('');
        }else{
             $( "#select_mes_fin_editar_basica" ).removeClass('readonly');
             $( "#select_anno_fin_editar_basica" ).removeClass('readonly');
        }
    }
    function empty_basica(){
            $("#select_nivel_educacion input").val("Seleccione Nivel");
            $("#select_mes_inicio_basica input").val("Seleccione Mes");
            $("#select_anno_inicio_basica input").val("Seleccione Año");
            $("#select_mes_fin_basica input").val("Seleccione Mes");
            $("#select_anno_fin_basica input").val("Seleccione Año");
            $("#ciudad_buscar_basica_sigesco_laboral" ).val('');
            $("#institucion_buscar_educacion_basica_sigesco_laboral" ).val('');
            $("#check_presente_basica_sigesco_laboral").prop('checked', false);
            $("#select_situacion_basica input").val("Seleccione Situación");
            $("#form_basica").hide();
            $("#sin_informacion_basica").hide();

        }
    function buscar_institucion_basica(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_basica",{id_ciudad: $("#ciudad_basica_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $("#institucion_buscar_educacion_basica_sigesco_laboral" ).val('');
                $('#institucion_buscar_educacion_basica_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_basica_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
            },'json');
            

        $("#institucion_buscar_educacion_basica_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_basica_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_basica_sigesco_laboral").val()) {
                    $("#institucion_educacion_basica_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                   if($("#ciudad_basica_sigesco_laboral").val() != '' && $("#ciudad_basica_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_basica',
                            data: { 
                                nombre_educacion_basica : $("#institucion_buscar_educacion_basica_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_basica_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_basica_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
                }
              } else {
                if($("#ciudad_basica_sigesco_laboral").val() != '' && $("#ciudad_basica_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_basica',
                            data: { 
                                nombre_educacion_basica : $("#institucion_buscar_educacion_basica_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_basica_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_basica_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
              }
            });
        }
    function buscar_institucion_editar_basica_modal(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_basica",{id_ciudad: $("#ciudad_basica_editar_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $('#institucion_buscar_educacion_basica_editar_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_basica_editar_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
            },'json');
            

        $("#institucion_buscar_educacion_basica_editar_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_basica_editar_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_basica_editar_sigesco_laboral").val()) {
                    $("#institucion_educacion_basica_editar_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                  if($("#ciudad_basica_editar_sigesco_laboral").val() != '' && $("#ciudad_basica_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_basica',
                            data: { 
                                nombre_educacion_basica : $("#institucion_buscar_educacion_basica_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_basica_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_basica_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
                }
              } else {
                if($("#ciudad_basica_editar_sigesco_laboral").val() != '' && $("#ciudad_basica_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_basica',
                            data: { 
                                nombre_educacion_basica : $("#institucion_buscar_educacion_basica_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_basica_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_basica_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
              }
            });
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////   E D U C A C I O N   M E D I A   //////////////////////////////////////////
    function modificar_media(id_educacion_media){
      $.ajax({                
        type: 'POST',
        url: '<?=base_url()?>trabajador_laboral/buscar_educacion_media',
        data: {id_educacion : id_educacion_media},
        success: function(data){
            if(data != false){
            dato_trabajador_laboral = JSON.parse(JSON.stringify(data));
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_media == 1){var situacion = 'Completo';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_media == 3){var situacion = 'Cursando';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_media == 4){var situacion = 'Incompleto';}        
            $('#id_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_trabajador_laboral_educacion_media);
            $('#id_trabajador_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].trabajador_laboral_id_trabajador_laboral);
            $('#ciudad_buscar_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_ciudad);
            $('#ciudad_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_ciudad);
            buscar_institucion_editar_media_modal();
            $('#input_select_mes_inicio_editar_media').val(dato_trabajador_laboral[0].mes_inicio_trabajador_laboral_educacion_media);
            $('#mes_inicio_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_inicio_trabajador_laboral_educacion_media);
            $('#anno_inicio_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_media);
            $('#input_select_anno_inicio_editar_media').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_media);
            $('#input_select_mes_fin_editar_media').val(dato_trabajador_laboral[0].mes_termino_trabajador_laboral_educacion_media);
            $('#input_select_anno_fin_editar_media').val(dato_trabajador_laboral[0].anno_termino_trabajador_laboral_educacion_media);
            $('#mes_fin_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_termino_trabajador_laboral_educacion_media);
            $('#anno_fin_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_termino_trabajador_laboral_educacion_media);
            $('#especialidad_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].especialidad_trabajador_laboral_educacion_media);
            if(dato_trabajador_laboral[0].alpresente_trabajador_laboral_educacion_media == 'SI'){
                $("#check_presente_media_editar_sigesco_laboral").prop( "checked", true );
                ////////  B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_media" ).addClass('readonly');
                    $( "#select_anno_fin_editar_media" ).addClass('readonly');
                ///////////////////////////////////////////////////////////////
            }else{
                ////////  D E S B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_media" ).removeClass('readonly');
                    $( "#select_anno_fin_editar_media" ).removeClass('readonly');
                ///////////////////////////////////////////////////////////////
            }
            $('#situacion_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_media);
            $('#input_select_situacion_editar_media').val(situacion);
            $('#anno_inicio_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_media);
            $('#institucion_buscar_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_educacion_media);
            $('#institucion_educacion_media_editar_sigesco_laboral').val(dato_trabajador_laboral[0].educacion_media_id_educacion_media);
            $('#modal_estudio_editar_media').modal('show');
            }
        }
      });
    }
    function modificar_educacion_media(){
            /*Inicio Institucion */  if(($("#institucion_educacion_media_editar_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_media_editar_sigesco_laboral").val() != '')){
                            $( "#institucion_buscar_educacion_media_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_media_editar_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_media" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_media_editar_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_media" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_media_editar_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_media_editar_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_media_editar_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_media" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_media" ).css( "border-color","#ccc" );
                            $( "#check_presente_media_editar_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_media_editar_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_media" ).css( "border-color","#ccc" );
                
                            if ( $("#check_presente_media_editar_sigesco_laboral").prop('checked')){
                                
                                check_media = 'SI';
                                $("#mes_fin_educacion_media_editar_sigesco_laboral").val('');
                                $("#anno_fin_educacion_media_editar_sigesco_laboral").val('');
                                
                            }else{
                                check_media = 'NO';
                            }
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/editar_estudio_media',
                                    data: {
                                        id_media_editar_sigesco_laboral : $( "#id_media_editar_sigesco_laboral" ).val(),
                                        institucion_buscar_educacion_media_editar_sigesco_laboral: $( "#institucion_buscar_educacion_media_editar_sigesco_laboral" ).val(),
                                        institucion_educacion_media_editar_sigesco_laboral: $( "#institucion_educacion_media_editar_sigesco_laboral" ).val(),
                                        mes_inicio_educacion_media_editar_sigesco_laboral: $( "#mes_inicio_educacion_media_editar_sigesco_laboral" ).val(),
                                        anno_inicio_educacion_media_editar_sigesco_laboral: $( "#anno_inicio_educacion_media_editar_sigesco_laboral" ).val(),
                                        mes_fin_educacion_media_editar_sigesco_laboral: $( "#mes_fin_educacion_media_editar_sigesco_laboral" ).val(),
                                        anno_fin_educacion_media_editar_sigesco_laboral: $( "#anno_fin_educacion_media_editar_sigesco_laboral" ).val(),
                                        situacion_educacion_media_editar_sigesco_laboral: $( "#situacion_educacion_media_editar_sigesco_laboral" ).val(),
                                        especialidad_educacion_media_editar_sigesco_laboral: $( "#especialidad_educacion_media_editar_sigesco_laboral" ).val(),
                                        check_presente_media_editar_sigesco_laboral: check_media,
                                        id_trabajador_media_editar_sigesco_laboral : $('#id_trabajador_media_editar_sigesco_laboral').val()
                                    },
                                    success: function(data){
                                        if(data == true){
                                            var fecha_auxiliar_titulo = '';
                                            if(check_media == 'SI'){
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_media_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_media_editar_sigesco_laboral" ).val()+' / Al Presente';
                                            }else{
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_media_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_media_editar_sigesco_laboral" ).val()+' / '+$( "#mes_fin_educacion_media_editar_sigesco_laboral" ).val()+'-'+$( "#anno_fin_educacion_media_editar_sigesco_laboral" ).val();
                                            }
                                            ///////////////  A G R E G A R   T E X T O   A   F I L A  D E   E S T U D I O ///////////////
                                            $('#titulo_institucion_media'+$( "#id_media_editar_sigesco_laboral" ).val()).html($( "#institucion_buscar_educacion_media_editar_sigesco_laboral" ).val());
                                            $('#titulo_situacion_media'+$( "#id_media_editar_sigesco_laboral" ).val()).html(' -  <i class="fa fa-bell"></i> '+$( "#situacion_educacion_media_editar_sigesco_laboral" ).val());
                                            $('#titulo_fecha_media'+$( "#id_media_editar_sigesco_laboral" ).val()).html(fecha_auxiliar_titulo);
                                            $('#titulo_especialidad_media'+$( "#id_media_editar_sigesco_laboral" ).val()).html($( "#especialidad_educacion_media_editar_sigesco_laboral" ).val());
                                            /////////////////////////////////////////////////////////////////////////////////////////////
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            check_media_editar();
                                            
                                            Command: toastr["success"]("Se Modifico Correctamente Educación Basica.", "Registro Modificado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                        }
                                    }
                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_media" ).css(  "border-color","red" );
                            $( "#input_select_situacion_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_media" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_media" ).css(  "border-color","red" );
                            $( "#check_presente_media_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_media" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_media" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_media_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_media_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
    }
    function eliminar_media(id_educacion_media){
            bootbox.confirm({ 
                buttons: {
                    cancel: {
                      label: 'Cerrar',
                      className: 'btn-danger'
                    },
                    
                    confirm: {
                      label: 'Eliminar',
                      className: 'btn-success'
                    }
                },
                title: "Eliminar Educación",
                message: "¿Esta seguro de <strong> Eliminar</strong> Educación Média?", 
                callback: function(result){
                              
                  if(result == true){
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/eliminar_educacion_media',
                        data: {id_educacion : id_educacion_media},
                        success: function(data){
                                                        
                            if(data == true){
                              Command: toastr["success"]("Educación Média Eliminada correctamente.", "Educación Eliminada");
                              $("#fila_educacion_media"+id_educacion_media).remove();
                            }else{
                            Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                            }
                                  
                        }
                    });
                  }
                }  
            });
        }
    function check_media(){
            if ( $("#check_presente_media_sigesco_laboral").prop('checked')){
                $( "#select_mes_fin_media" ).addClass('readonly');
                $( "#select_anno_fin_media" ).addClass('readonly');
            }else{
                $( "#select_mes_fin_media" ).removeClass('readonly');
                $( "#select_anno_fin_media" ).removeClass('readonly');
            }
        }
    function check_media_editar(){
        if($("#check_presente_media_editar_sigesco_laboral").prop('checked')){
             $( "#select_mes_fin_editar_media" ).addClass('readonly');
             $( "#select_anno_fin_editar_media" ).addClass('readonly');
             $( "#select_mes_fin_editar_media" ).val('');
             $( "#select_anno_fin_editar_media" ).val('');
        }else{
             $( "#select_mes_fin_editar_media" ).removeClass('readonly');
             $( "#select_anno_fin_editar_media" ).removeClass('readonly');
        }
    }
    function empty_media(){
            $("#select_nivel_educacion input").val("Seleccione Nivel");
            $("#select_mes_inicio_media input").val("Seleccione Mes");
            $("#select_anno_inicio_media input").val("Seleccione Año");
            $("#select_mes_fin_media input").val("Seleccione Mes");
            $("#select_anno_fin_media input").val("Seleccione Año");
            $("#ciudad_buscar_media_sigesco_laboral" ).val('');
            $("#institucion_buscar_educacion_media_sigesco_laboral" ).val('');
            $("#especialidad_educacion_media_sigesco_laboral" ).val('');
            $("#check_presente_media_sigesco_laboral").prop('checked', false);
            $("#select_situacion_media input").val("Seleccione Situación");
            $("#form_media").hide();
            $("#sin_informacion_media").hide();

        }
    function buscar_institucion_media(){
            
            
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_media",{id_ciudad: $("#ciudad_media_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $("#institucion_buscar_educacion_media_sigesco_laboral" ).val('');
                $('#institucion_buscar_educacion_media_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_media_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
                
                
                    
            },'json');
            
            
            

        $("#institucion_buscar_educacion_media_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_media_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_media_sigesco_laboral").val()) {
                    $("#institucion_educacion_media_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                      if($("#ciudad_media_sigesco_laboral").val() != '' && $("#ciudad_media_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_media',
                            data: { 
                                nombre_educacion_media : $("#institucion_buscar_educacion_media_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_media_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_media_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
                }
              } else {
                if($("#ciudad_media_sigesco_laboral").val() != '' && $("#ciudad_media_sigesco_laboral").val().lengh != 0){
                      $.ajax({                
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/nueva_educacion_media',
                        data: { 
                            nombre_educacion_media : $("#institucion_buscar_educacion_media_sigesco_laboral").val().toUpperCase(), 
                            id_ciudad : $("#ciudad_media_sigesco_laboral").val()},
                        success: function(data){                        
                            if(data != false){
                                $("#institucion_educacion_media_sigesco_laboral").val(data);
                            }
                        }
                      });
                }else{
                    Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                }
              }
            });
        }
    function buscar_institucion_editar_media_modal(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_media",{id_ciudad: $("#ciudad_media_editar_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $('#institucion_buscar_educacion_media_editar_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_media_editar_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
            },'json');
            
        $("#institucion_buscar_educacion_media_editar_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_media_editar_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_media_editar_sigesco_laboral").val()) {
                    $("#institucion_educacion_media_editar_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                  if($("#ciudad_media_editar_sigesco_laboral").val() != '' && $("#ciudad_media_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_media',
                            data: { 
                                nombre_educacion_media : $("#institucion_buscar_educacion_media_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_media_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_media_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
                }
              } else {
                if($("#ciudad_media_editar_sigesco_laboral").val() != '' && $("#ciudad_media_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_media',
                            data: { 
                                nombre_educacion_media : $("#institucion_buscar_educacion_media_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_media_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_media_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
              }
            });
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////   E D U C A C I O N   U N I V E R S I T A R I A    ///////////////////////////
    function modificar_universitaria(id_educacion_universitaria){
      $.ajax({                
        type: 'POST',
        url: '<?=base_url()?>trabajador_laboral/buscar_educacion_universitaria',
        data: {id_educacion : id_educacion_universitaria},
        success: function(data){
            if(data != false){
            dato_trabajador_laboral = JSON.parse(JSON.stringify(data));
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_universitaria == 1){var situacion = 'Titulado';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_universitaria == 1){var situacion = 'Egresado';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_universitaria == 3){var situacion = 'Cursando';}
            if(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_universitaria == 4){var situacion = 'Incompleto';}
            $('#id_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_trabajador_laboral_educacion_universitaria);
            $('#id_trabajador_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].trabajador_laboral_id_trabajador_laboral);
            $('#ciudad_buscar_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_ciudad);
            $('#ciudad_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_ciudad);
            buscar_institucion_editar_universitaria_modal();
            $('#input_select_mes_inicio_editar_universitaria').val(dato_trabajador_laboral[0].mes_inicio_trabajador_laboral_educacion_universitaria);
            $('#mes_inicio_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_inicio_trabajador_laboral_educacion_universitaria);
            $('#anno_inicio_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_universitaria);
            $('#input_select_anno_inicio_editar_universitaria').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_universitaria);
            $('#input_select_mes_fin_editar_universitaria').val(dato_trabajador_laboral[0].mes_termino_trabajador_laboral_educacion_universitaria);
            $('#input_select_anno_fin_editar_universitaria').val(dato_trabajador_laboral[0].anno_termino_trabajador_laboral_educacion_universitaria);
            $('#mes_fin_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_termino_trabajador_laboral_educacion_universitaria);
            $('#anno_fin_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_termino_trabajador_laboral_educacion_universitaria);
            $('#especialidad_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].especialidad_trabajador_laboral_educacion_universitaria);
            if(dato_trabajador_laboral[0].alpresente_trabajador_laboral_educacion_universitaria == 'SI'){
                $("#check_presente_universitaria_editar_sigesco_laboral").prop( "checked", true );
                ////////  B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_universitaria" ).addClass('readonly');
                    $( "#select_anno_fin_editar_universitaria" ).addClass('readonly');
                ///////////////////////////////////////////////////////////////
            }else{
                ////////  D E S B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_universitaria" ).removeClass('readonly');
                    $( "#select_anno_fin_editar_universitaria" ).removeClass('readonly');
                ///////////////////////////////////////////////////////////////
            }
            $('#situacion_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].situacion_trabajador_laboral_educacion_universitaria);
            $('#input_select_situacion_editar_universitaria').val(situacion);
            $('#anno_inicio_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_trabajador_laboral_educacion_universitaria);
            $('#institucion_buscar_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_educacion_universitaria);
            $('#institucion_educacion_universitaria_editar_sigesco_laboral').val(dato_trabajador_laboral[0].educacion_universitaria_id_educacion_universitaria);
            $('#modal_estudio_editar_universitaria').modal('show');
            }
        }
      });
    }
    function modificar_educacion_universitaria(){
        /*Inicio Institucion */  if(($("#institucion_educacion_universitaria_editar_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").val() != '')){
                            $( "#institucion_buscar_educacion_universitaria_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_universitaria_editar_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_universitaria" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_universitaria_editar_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_universitaria" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_universitaria_editar_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_universitaria_editar_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_universitaria_editar_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_universitaria" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_universitaria" ).css( "border-color","#ccc" );
                            $( "#check_presente_universitaria_editar_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Carrera */  if($("#especialidad_educacion_universitaria_editar_sigesco_laboral").val() != ''){
                            $( "#especialidad_educacion_universitaria_editar_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_universitaria_editar_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_universitaria" ).css( "border-color","#ccc" );
                
                            
                
                            ///////////////////  S U B I R   T I T U L O   ////////////////////////////////////
                            var fd = new FormData();
                
                            if ( $("#check_presente_universitaria_editar_sigesco_laboral").prop('checked')){
                                
                                check_universitaria = 'SI';
                                fd.append("mes_fin_educacion_universitaria_editar_sigesco_laboral", '');
                                fd.append("anno_fin_educacion_universitaria_editar_sigesco_laboral", '');
                                
                            }else{
                                check_universitaria = 'NO';
                                fd.append("mes_fin_educacion_universitaria_editar_sigesco_laboral", $( "#mes_fin_educacion_universitaria_editar_sigesco_laboral" ).val());
                                fd.append("anno_fin_educacion_universitaria_editar_sigesco_laboral", $( "#anno_fin_educacion_universitaria_editar_sigesco_laboral" ).val());
                            
                            }

                            if($("#archivo_carrera_educacion_universitaria_editar_sigesco_laboral").val().length > 0){
                                fd.append( "titulo_sigesco_editar_laboral", $("#archivo_carrera_educacion_universitaria_editar_sigesco_laboral")[0].files[0]);
                            }
                            fd.append("id_universitaria_editar_sigesco_laboral", $( "#id_universitaria_editar_sigesco_laboral ").val());
                            fd.append("institucion_buscar_educacion_universitaria_editar_sigesco_laboral", $( "#institucion_buscar_educacion_universitaria_editar_sigesco_laboral ").val());
                            fd.append("institucion_educacion_universitaria_editar_sigesco_laboral", $( "#institucion_educacion_universitaria_editar_sigesco_laboral" ).val());
                            fd.append("mes_inicio_educacion_universitaria_editar_sigesco_laboral", $( "#mes_inicio_educacion_universitaria_editar_sigesco_laboral" ).val());
                            fd.append("anno_inicio_educacion_universitaria_editar_sigesco_laboral", $( "#anno_inicio_educacion_universitaria_editar_sigesco_laboral" ).val());
                            
                            fd.append("situacion_educacion_universitaria_editar_sigesco_laboral", $( "#situacion_educacion_universitaria_editar_sigesco_laboral" ).val());
                            fd.append("especialidad_educacion_universitaria_editar_sigesco_laboral", $( "#especialidad_educacion_universitaria_editar_sigesco_laboral" ).val());
                            fd.append("check_presente_universitaria_editar_sigesco_laboral", check_universitaria);
                            fd.append("id_trabajador_universitaria_editar_sigesco_laboral", $('#id_trabajador_universitaria_editar_sigesco_laboral').val());
                
                            
                            ///////////////////////////////////////////////////////////////////////////////////////////
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/editar_estudio_universitaria',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        if(data == true){
                                            var fecha_auxiliar_titulo = '';
                                            if(check_universitaria == 'SI'){
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_universitaria_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_universitaria_editar_sigesco_laboral" ).val()+' / Al Presente';
                                            }else{
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_universitaria_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_universitaria_editar_sigesco_laboral" ).val()+' / '+$( "#mes_fin_educacion_universitaria_editar_sigesco_laboral" ).val()+'-'+$( "#anno_fin_educacion_universitaria_editar_sigesco_laboral" ).val();
                                            }
                                            
                                            ///////////////  A G R E G A R   T E X T O   A   F I L A  D E   E S T U D I O ///////////////
                                            $('#titulo_institucion_universitaria'+$( "#id_universitaria_editar_sigesco_laboral" ).val()).html($( "#institucion_buscar_educacion_universitaria_editar_sigesco_laboral" ).val());
                                            $('#titulo_situacion_universitaria'+$( "#id_universitaria_editar_sigesco_laboral" ).val()).html(' -  <i class="fa fa-bell"></i> '+$( "#situacion_educacion_universitaria_editar_sigesco_laboral" ).val());
                                            $('#titulo_fecha_universitaria'+$( "#id_universitaria_editar_sigesco_laboral" ).val()).html(fecha_auxiliar_titulo);
                                            $('#titulo_especialidad_universitaria'+$( "#id_universitaria_editar_sigesco_laboral" ).val()).html($( "#especialidad_educacion_universitaria_editar_sigesco_laboral" ).val());
                                            /////////////////////////////////////////////////////////////////////////////////////////////
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            check_universitaria_editar();
                                            
                                            Command: toastr["success"]("Se Modifico Correctamente Educación Universitaria.", "Registro Modificado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                        }
                                    }

                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_situacion_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Carrera */   }else{
                            $( "#especialidad_educacion_universitaria_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#especialidad_educacion_universitaria_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Carrera'</strong> por favor.", "Carrera")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_universitaria" ).css(  "border-color","red" );
                            $( "#check_presente_universitaria_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_universitaria_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_universitaria_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
    }
    function eliminar_universitaria(id_educacion_universitaria){
            bootbox.confirm({ 
                buttons: {
                    cancel: {
                      label: 'Cerrar',
                      className: 'btn-danger'
                    },
                    
                    confirm: {
                      label: 'Eliminar',
                      className: 'btn-success'
                    }
                },
                title: "Eliminar Educación",
                message: "¿Esta seguro de <strong> Eliminar</strong> Educación Universitaria?", 
                callback: function(result){
                              
                  if(result == true){
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/eliminar_educacion_universitaria',
                        data: {id_educacion : id_educacion_universitaria},
                        success: function(data){
                                                        
                            if(data == true){
                              Command: toastr["success"]("Educación Universitaria Eliminada correctamente.", "Educación Eliminada");
                              $("#fila_educacion_universitaria"+id_educacion_universitaria).remove();
                            }else{
                            Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                            }
                                  
                        }
                    });
                  }
                }  
            });
        }
    function check_universitaria(){
            if ( $("#check_presente_universitaria_sigesco_laboral").prop('checked')){
                $( "#select_mes_fin_universitaria" ).addClass('readonly');
                $( "#select_anno_fin_universitaria" ).addClass('readonly');
            }else{
                $( "#select_mes_fin_universitaria" ).removeClass('readonly');
                $( "#select_anno_fin_universitaria" ).removeClass('readonly');
            }
        }
    function check_universitaria_editar(){
        if($("#check_presente_universitaria_editar_sigesco_laboral").prop('checked')){
             $( "#select_mes_fin_editar_universitaria" ).addClass('readonly');
             $( "#select_anno_fin_editar_universitaria" ).addClass('readonly');
             $( "#select_mes_fin_editar_universitaria" ).val('');
             $( "#select_anno_fin_editar_universitaria" ).val('');
        }else{
             $( "#select_mes_fin_editar_universitaria" ).removeClass('readonly');
             $( "#select_anno_fin_editar_universitaria" ).removeClass('readonly');
        }
    }
    function empty_universitaria(){
            $("#select_nivel_educacion input").val("Seleccione Nivel");
            $("#select_mes_inicio_universitaria input").val("Seleccione Mes");
            $("#select_anno_inicio_universitaria input").val("Seleccione Año");
            $("#select_mes_fin_universitaria input").val("Seleccione Mes");
            $("#select_anno_fin_universitaria input").val("Seleccione Año");
            $("#ciudad_buscar_universitaria_sigesco_laboral" ).val('');
            $("#institucion_buscar_educacion_universitaria_sigesco_laboral" ).val('');
            $("#especialidad_educacion_universitaria_sigesco_laboral" ).val('');
            $("#check_presente_universitaria_sigesco_laboral").prop('checked', false);
            $("#select_situacion_universitaria input").val("Seleccione Situación");
            $("#form_universitaria").hide();
            $("#sin_informacion_universitaria").hide();

        }
    function buscar_institucion_universitaria(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_universitaria",{id_ciudad: $("#ciudad_universitaria_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $("#institucion_buscar_educacion_universitaria_sigesco_laboral" ).val('');
                $('#institucion_buscar_educacion_universitaria_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_universitaria_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }                    
            },'json');
            
        $("#institucion_buscar_educacion_universitaria_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_universitaria_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_universitaria_sigesco_laboral").val()) {
                    $("#institucion_educacion_universitaria_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                  if($("#ciudad_universitaria_sigesco_laboral").val() != '' && $("#ciudad_universitaria_sigesco_laboral").val().lengh != 0){
                      $.ajax({                
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                        data: { 
                            nombre_educacion_universitaria : $("#institucion_buscar_educacion_universitaria_sigesco_laboral").val().toUpperCase(), 
                            id_ciudad : $("#ciudad_universitaria_sigesco_laboral").val()},
                        success: function(data){                        
                            if(data != false){
                                $("#institucion_educacion_universitaria_sigesco_laboral").val(data);
                            }
                        }
                      });
                }else{
                    Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                }
                }
              } else {
                if($("#ciudad_universitaria_sigesco_laboral").val() != '' && $("#ciudad_universitaria_sigesco_laboral").val().lengh != 0){
                      $.ajax({                
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                        data: { 
                            nombre_educacion_universitaria : $("#institucion_buscar_educacion_universitaria_sigesco_laboral").val().toUpperCase(), 
                            id_ciudad : $("#ciudad_universitaria_sigesco_laboral").val()},
                        success: function(data){                        
                            if(data != false){
                                $("#institucion_educacion_universitaria_sigesco_laboral").val(data);
                            }
                        }
                      });
                }else{
                    Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                }
              }
            });
        }
    function buscar_institucion_editar_universitaria_modal(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_universitaria",{id_ciudad: $("#ciudad_universitaria_editar_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $('#institucion_buscar_educacion_universitaria_editar_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
            },'json');
            
        $("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").val()) {
                    $("#institucion_educacion_universitaria_editar_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                  if($("#ciudad_universitaria_editar_sigesco_laboral").val() != '' && $("#ciudad_universitaria_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                            data: { 
                                nombre_educacion_universitaria : $("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_universitaria_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_universitaria_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
                }
              } else {
                if($("#ciudad_universitaria_editar_sigesco_laboral").val() != '' && $("#ciudad_universitaria_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                            data: { 
                                nombre_educacion_universitaria : $("#institucion_buscar_educacion_universitaria_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_universitaria_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_universitaria_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
              }
            });
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////   E D U C A C I O N   P O S T E R I O R   ///////////////////////////
    function modificar_posterior(id_educacion_posterior){
      $.ajax({                
        type: 'POST',
        url: '<?=base_url()?>trabajador_laboral/buscar_educacion_posterior',
        data: {id_educacion : id_educacion_posterior},
        success: function(data){
            if(data != false){
            dato_trabajador_laboral = JSON.parse(JSON.stringify(data)); 
            if(dato_trabajador_laboral[0].situacion_educacion_posterior == 1){var situacion = 'Titulado';}
            if(dato_trabajador_laboral[0].situacion_educacion_posterior == 1){var situacion = 'Egresado';}
            if(dato_trabajador_laboral[0].situacion_educacion_posterior == 3){var situacion = 'Cursando';}
            if(dato_trabajador_laboral[0].situacion_educacion_posterior == 4){var situacion = 'Incompleto';}
            $('#id_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_educacion_posterior);
            $('#id_trabajador_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].trabajador_laboral_id_trabajador_laboral);
            $('#ciudad_buscar_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_ciudad);
            $('#ciudad_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].id_ciudad);
            buscar_institucion_editar_posterior_modal();
            $('#input_select_mes_inicio_editar_posterior').val(dato_trabajador_laboral[0].mes_inicio_educacion_posterior);
            $('#mes_inicio_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_inicio_educacion_posterior);
            $('#anno_inicio_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_educacion_posterior);
            $('#input_select_anno_inicio_editar_posterior').val(dato_trabajador_laboral[0].anno_inicio_educacion_posterior);
            $('#input_select_mes_fin_editar_posterior').val(dato_trabajador_laboral[0].mes_termino_educacion_posterior);
            $('#input_select_anno_fin_editar_posterior').val(dato_trabajador_laboral[0].anno_termino_educacion_posterior);
            $('#mes_fin_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].mes_termino_educacion_posterior);
            $('#anno_fin_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_termino_educacion_posterior);
            $('#especialidad_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].especialidad_educacion_posterior);
            if(dato_trabajador_laboral[0].alpresente_educacion_posterior == 'SI'){
                $("#check_presente_posterior_editar_sigesco_laboral").prop( "checked", true );
                ////////  B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_posterior" ).addClass('readonly');
                    $( "#select_anno_fin_editar_posterior" ).addClass('readonly');
                ///////////////////////////////////////////////////////////////
            }else{
                ////////  D E S B L O Q U E A R   F E C H A   T E R M I N O /////////
                    $( "#select_mes_fin_editar_posterior" ).removeClass('readonly');
                    $( "#select_anno_fin_editar_posterior" ).removeClass('readonly');
                ///////////////////////////////////////////////////////////////
            }
            $('#especialidad_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].especialidad_educacion_posterior);
            $('#situacion_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].situacion_educacion_posterior);
            $('#input_select_situacion_editar_posterior').val(situacion);
            $('#tipo_posterior_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_tipo_educacion_posterior);
            $('#select_tipo_editar_posterior').val(dato_trabajador_laboral[0].nombre_tipo_educacion_posterior);
            $('#input_select_tipo_editar_posterior').val(dato_trabajador_laboral[0].nombre_tipo_educacion_posterior);
            $('#id_tipo_posterior_educacion_posterior_sigesco_laboral').val(dato_trabajador_laboral[0].tipo_educacion_posterior_id_tipo_educacion_posterior);
            $('#anno_inicio_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].anno_inicio_educacion_posterior);
            $('#institucion_buscar_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nombre_educacion_universitaria);
            $('#horas_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].cantidad_horas_educacion_posterior);
            $('#nota_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].nota_educacion_posterior);
        $('#institucion_educacion_posterior_editar_sigesco_laboral').val(dato_trabajador_laboral[0].educacion_universitaria_id_educacion_universitaria);
            $('#modal_estudio_editar_posterior').modal('show');
            }
        }
      });
    }
    function modificar_educacion_posterior(){
        /*Inicio Institucion */  if(($("#institucion_educacion_editar_posterior_editar_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_editar_posterior_editar_sigesco_laboral").val() != '')){
                            $( "#institucion_buscar_educacion_editar_posterior_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_editar_posterior_editar_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_editar_posterior" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_editar_posterior_editar_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_editar_posterior" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_editar_posterior_editar_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_editar_posterior_editar_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_editar_posterior_editar_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_editar_posterior" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_editar_posterior" ).css( "border-color","#ccc" );
                            $( "#check_presente_editar_posterior_editar_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Tipo */  if($("#tipo_editar_posterior_educacion_editar_posterior_editar_sigesco_laboral").val() != ''){
                            $( "#tipo_editar_posterior_educacion_editar_posterior_editar_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Carrera */  if($("#especialidad_educacion_editar_posterior_editar_sigesco_laboral").val() != ''){
                            $( "#especialidad_educacion_editar_posterior_editar_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_editar_posterior_editar_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_editar_posterior" ).css( "border-color","#ccc" );
                
                            ///////////////////  S U B I R   T I T U L O   ////////////////////////////////////
                            var fd = new FormData();
                
                            if ( $("#check_presente_posterior_editar_sigesco_laboral").prop('checked')){
                                
                                check_posterior = 'SI';
                                fd.append("mes_fin_educacion_posterior_editar_sigesco_laboral", '');
                                fd.append("anno_fin_educacion_posterior_editar_sigesco_laboral", '');
                                
                            }else{
                                check_posterior = 'NO';
                                fd.append("mes_fin_educacion_posterior_editar_sigesco_laboral", $( "#mes_fin_educacion_posterior_editar_sigesco_laboral" ).val());
                                fd.append("anno_fin_educacion_posterior_editar_sigesco_laboral", $( "#anno_fin_educacion_posterior_editar_sigesco_laboral" ).val());
                            
                            }

                            if($("#archivo_carrera_educacion_posterior_editar_sigesco_laboral").val().length > 0){
                                fd.append( "titulo_sigesco_editar_laboral", $("#archivo_carrera_educacion_posterior_editar_sigesco_laboral")[0].files[0]);
                            }
                            fd.append("id_posterior_editar_sigesco_laboral", $( "#id_posterior_editar_sigesco_laboral ").val());
                            fd.append("institucion_buscar_educacion_posterior_editar_sigesco_laboral", $( "#institucion_buscar_educacion_posterior_editar_sigesco_laboral ").val());
                            fd.append("institucion_educacion_posterior_editar_sigesco_laboral", $( "#institucion_educacion_posterior_editar_sigesco_laboral" ).val());
                            fd.append("mes_inicio_educacion_posterior_editar_sigesco_laboral", $( "#mes_inicio_educacion_posterior_editar_sigesco_laboral" ).val());
                            fd.append("anno_inicio_educacion_posterior_editar_sigesco_laboral", $( "#anno_inicio_educacion_posterior_editar_sigesco_laboral" ).val());
                            
                            fd.append("situacion_educacion_posterior_editar_sigesco_laboral", $( "#situacion_educacion_posterior_editar_sigesco_laboral" ).val());
                            fd.append("especialidad_educacion_posterior_editar_sigesco_laboral", $( "#especialidad_educacion_posterior_editar_sigesco_laboral" ).val());
                            fd.append("horas_educacion_posterior_editar_sigesco_laboral", $( "#horas_educacion_posterior_editar_sigesco_laboral" ).val());
                            fd.append("nota_educacion_posterior_editar_sigesco_laboral", $( "#nota_educacion_posterior_editar_sigesco_laboral" ).val());
                            fd.append("tipo_posterior_educacion_posterior_sigesco_laboral", $( "#id_tipo_posterior_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("check_presente_posterior_editar_sigesco_laboral", check_posterior);
                            fd.append("id_trabajador_posterior_editar_sigesco_laboral", $('#id_trabajador_posterior_editar_sigesco_laboral').val());
                            
                            ///////////////////////////////////////////////////////////////////////////////////////////
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/editar_estudio_posterior',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        if(data == true){
                                            var fecha_auxiliar_titulo = '';
                                            if(check_posterior == 'SI'){
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_posterior_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_posterior_editar_sigesco_laboral" ).val()+' / Al Presente';
                                            }else{
                                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#mes_inicio_educacion_posterior_editar_sigesco_laboral" ).val()+'-'+$( "#anno_inicio_educacion_posterior_editar_sigesco_laboral" ).val()+' / '+$( "#mes_fin_educacion_posterior_editar_sigesco_laboral" ).val()+'-'+$( "#anno_fin_educacion_posterior_editar_sigesco_laboral" ).val();
                                            }
                                            
                                            ///////////////  A G R E G A R   T E X T O   A   F I L A  D E   E S T U D I O ///////////////
                                            $('#titulo_institucion_posterior'+$( "#id_posterior_editar_sigesco_laboral" ).val()).html($( "#institucion_buscar_educacion_posterior_editar_sigesco_laboral" ).val());
                                            $('#titulo_situacion_posterior'+$( "#id_posterior_editar_sigesco_laboral" ).val()).html(' -  <i class="fa fa-bell"></i> '+$( "#situacion_educacion_posterior_editar_sigesco_laboral" ).val());
                                            $('#titulo_fecha_posterior'+$( "#id_posterior_editar_sigesco_laboral" ).val()).html(fecha_auxiliar_titulo);
                                            $('#titulo_especialidad_posterior'+$( "#id_posterior_editar_sigesco_laboral" ).val()).html($( "#especialidad_educacion_posterior_editar_sigesco_laboral" ).val());
                                            
                                             $('#titulo_hora_nota_posterior'+$( "#id_posterior_editar_sigesco_laboral" ).val()).html('<i class="fa fa-clock-o"></i>'+$( "#horas_educacion_posterior_editar_sigesco_laboral" ).val()+' &nbsp;&nbsp;&nbsp; <i class="fa fa-pencil"></i>'+$( "#nota_educacion_posterior_editar_sigesco_laboral" ).val());
                                            /////////////////////////////////////////////////////////////////////////////////////////////
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            check_posterior_editar();
                                            
                                            Command: toastr["success"]("Se Modifico Correctamente Educación Universitaria.", "Registro Modificado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                        }
                                    }

                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_editar_posterior" ).css(  "border-color","red" );
                            $( "#input_select_situacion_editar_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Carrera */   }else{
                            $( "#especialidad_educacion_editar_posterior_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#especialidad_educacion_editar_posterior_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Carrera'</strong> por favor.", "Carrera")
                        }
                
            /* Fin Tipo */   }else{
                            $( "#tipo_editar_posterior_educacion_editar_posterior_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#tipo_editar_posterior_educacion_editar_posterior_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Tipo de Estudio'</strong> por favor.", "Tipo Estudio")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_editar_posterior" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_editar_posterior" ).css(  "border-color","red" );
                            $( "#check_presente_editar_posterior_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_editar_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_editar_posterior" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_editar_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_editar_posterior" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_editar_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_editar_posterior_editar_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_editar_posterior_editar_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
    }
    function eliminar_posterior(id_educacion_posterior){
            bootbox.confirm({ 
                buttons: {
                    cancel: {
                      label: 'Cerrar',
                      className: 'btn-danger'
                    },
                    
                    confirm: {
                      label: 'Eliminar',
                      className: 'btn-success'
                    }
                },
                title: "Eliminar Educación",
                message: "¿Esta seguro de <strong> Eliminar</strong> Educación Posterior?", 
                callback: function(result){
                              
                  if(result == true){
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/eliminar_educacion_posterior',
                        data: {id_educacion : id_educacion_posterior},
                        success: function(data){
                                                        
                            if(data == true){
                              Command: toastr["success"]("Educación Posterior Eliminada correctamente.", "Educación Eliminada");
                              $("#fila_educacion_posterior"+id_educacion_posterior).remove();
                            }else{
                            Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                            }
                                  
                        }
                    });
                  }
                }  
            });
        }
    function check_posterior(){
            if ( $("#check_presente_posterior_sigesco_laboral").prop('checked')){
                $( "#select_mes_fin_posterior" ).addClass('readonly');
                $( "#select_anno_fin_posterior" ).addClass('readonly');
            }else{
                $( "#select_mes_fin_posterior" ).removeClass('readonly');
                $( "#select_anno_fin_posterior" ).removeClass('readonly');
            }
        }
    function check_posterior_editar(){
        if($("#check_presente_posterior_editar_sigesco_laboral").prop('checked')){
             $( "#select_mes_fin_editar_posterior" ).addClass('readonly');
             $( "#select_anno_fin_editar_posterior" ).addClass('readonly');
             $( "#select_mes_fin_editar_posterior" ).val('');
             $( "#select_anno_fin_editar_posterior" ).val('');
        }else{
             $( "#select_mes_fin_editar_posterior" ).removeClass('readonly');
             $( "#select_anno_fin_editar_posterior" ).removeClass('readonly');
        }
    }
    function empty_posterior(){
            $("#select_nivel_educacion input").val("Seleccione Nivel");
            $("#select_mes_inicio_posterior input").val("Seleccione Mes");
            $("#select_anno_inicio_posterior input").val("Seleccione Año");
            $("#select_mes_fin_posterior input").val("Seleccione Mes");
            $("#select_anno_fin_posterior input").val("Seleccione Año");
            $("#select_tipo_posterior input").val("Seleccione Tipo Estudioo");
            $("#ciudad_buscar_posterior_sigesco_laboral" ).val('');
            $("#institucion_buscar_educacion_posterior_sigesco_laboral" ).val('');
            $("#especialidad_educacion_posterior_sigesco_laboral" ).val('');
            $("#horas_educacion_posterior_sigesco_laboral" ).val('');
            $("#nota_educacion_posterior_sigesco_laboral" ).val('');
            $("#archivo_carrera_educacion_posterior_sigesco_laboral" ).val('');
            $("#check_presente_posterior_sigesco_laboral").prop('checked', false);
            $("#select_situacion_posterior input").val("Seleccione Situación");
            $("#form_posterior").hide();
            $("#sin_informacion_posterior").hide();

        }
    function buscar_institucion_posterior(){
            
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_posterior",{id_ciudad: $("#ciudad_posterior_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $("#institucion_buscar_educacion_posterior_sigesco_laboral" ).val('');
                $('#institucion_buscar_educacion_posterior_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_posterior_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
                    
            },'json');
            

        $("#institucion_buscar_educacion_posterior_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_posterior_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_posterior_sigesco_laboral").val()) {
                    $("#institucion_educacion_posterior_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                  if($("#ciudad_posterior_sigesco_laboral").val() != '' && $("#ciudad_posterior_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                            data: { 
                                nombre_educacion_universitaria : $("#institucion_buscar_educacion_posterior_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_posterior_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_posterior_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
                }
              } else {
                if($("#ciudad_posterior_sigesco_laboral").val() != '' && $("#ciudad_posterior_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                            data: { 
                                nombre_educacion_universitaria : $("#institucion_buscar_educacion_posterior_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_posterior_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_posterior_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
              }
            });
        }
    function buscar_institucion_editar_posterior_modal(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_institucion_posterior",{id_ciudad: $("#ciudad_posterior_editar_sigesco_laboral").val()}, function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $('#institucion_buscar_educacion_posterior_editar_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#institucion_buscar_educacion_posterior_editar_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
            },'json');
            
        $("#institucion_buscar_educacion_posterior_editar_sigesco_laboral").change(function() {
              var current = $("#institucion_buscar_educacion_posterior_editar_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#institucion_buscar_educacion_posterior_editar_sigesco_laboral").val()) {
                    $("#institucion_educacion_posterior_editar_sigesco_laboral").val(current.value);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                  
                }
              } else {
                if($("#ciudad_posterior_editar_sigesco_laboral").val() != '' && $("#ciudad_posterior_editar_sigesco_laboral").val().lengh != 0){
                          $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_educacion_universitaria',
                            data: { 
                                nombre_educacion_posterior : $("#institucion_buscar_educacion_posterior_editar_sigesco_laboral").val().toUpperCase(), 
                                id_ciudad : $("#ciudad_posterior_editar_sigesco_laboral").val()},
                            success: function(data){                        
                                if(data != false){
                                    $("#institucion_educacion_posterior_editar_sigesco_laboral").val(data);
                                }
                            }
                          });
                    }else{
                        Command: toastr["error"]("Primero, Ingrese una Ciudad.", "Ciudad")
                    }
              }
            });
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////////////////// A G R E G A R   E D U C A C I O N  //////////////////////////////////////////
    function agregar_educacion() {
        var eleccion = $("#nivel_educacion_sigesco_laboral").val();
        var check_basica = '';
        var check_media = '';
        var check_universitaria = '';
        var check_posterior = '';
    
        switch(eleccion) {
            case 'basica':
            /*Inicio Institucion */  if(($("#institucion_educacion_basica_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_basica_sigesco_laboral").val() != '')){
                            $( "#institucion_educacion_basica_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_basica_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_basica" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_basica_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_basica" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_basica_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_basica_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_basica_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_basica" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_basica" ).css( "border-color","#ccc" );
                            $( "#check_presente_basica_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_basica_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_basica" ).css( "border-color","#ccc" );
                
                            if ( $("#check_presente_basica_sigesco_laboral").prop('checked')){
                                
                                check_basica = 'SI';
                                $("#mes_fin_educacion_basica_sigesco_laboral").val('');
                                $("#anno_fin_educacion_basica_sigesco_laboral").val('');
                                
                            }else{
                                check_basica = 'NO';
                            }
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/agregar_estudio',
                                    data: {
                                        tipo_estudio : 1,
                                        institucion_buscar_educacion_basica_sigesco_laboral: $( "#institucion_buscar_educacion_basica_sigesco_laboral" ).val(),
                                        institucion_educacion_basica_sigesco_laboral: $( "#institucion_educacion_basica_sigesco_laboral" ).val(),
                                        mes_inicio_educacion_basica_sigesco_laboral: $( "#mes_inicio_educacion_basica_sigesco_laboral" ).val(),
                                        anno_inicio_educacion_basica_sigesco_laboral: $( "#anno_inicio_educacion_basica_sigesco_laboral" ).val(),
                                        mes_fin_educacion_basica_sigesco_laboral: $( "#mes_fin_educacion_basica_sigesco_laboral" ).val(),
                                        anno_fin_educacion_basica_sigesco_laboral: $( "#anno_fin_educacion_basica_sigesco_laboral" ).val(),
                                        situacion_educacion_basica_sigesco_laboral: $( "#situacion_educacion_basica_sigesco_laboral" ).val(),
                                        especialidad_educacion_basica_sigesco_laboral: '',
                                        check_presente_basica_sigesco_laboral: check_basica
                                    },
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){
                                            
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            if(datos[10] == 'SI'){
                                                check_basica = 'Al Presente';
                                            }else{
                                                check_basica = datos[6]+'-'+datos[7];
                                            }
                                            
                                            $( "#lista_educacion_basica" ).append('<div id="fila_educacion_basica'+datos[1]+'" class="assigned-job-single"><div class="css-table"><div class="table-details css-table-cell"><div class="job-description">                                  <h4><a id="titulo_institucion'+datos[1]+'" href="#">'+datos[3]+'</a><a  id="titulo_situacion'+datos[1]+'" style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i>'+datos[8]+'</a></h4></div><div class="company-name"><h4><a href="#">'+datos[9]+'</a></h4></div><div class="job-location-stat"><p><a  id="titulo_fecha'+datos[1]+'" href="#"><i class="fa fa-calendar"></i>'+datos[4]+'-'+datos[5]+' / '+check_basica+'</a></p></div></div><div class="days-left css-table-cell"><h3 style="cursor:pointer; color:#346abb;"><i onclick="modificar_basica('+datos[1]+')" class="fa fa-pencil-square-o" aria-hidden="true"></i><i onclick="eliminar_basica('+datos[1]+')" class="fa fa-trash" aria-hidden="true"></i></h3></div></div></div>');
                                            
                                            empty_basica();
                                            Command: toastr["success"]("Se ingreso Correctamente Educación Basica.", "Registro Realizado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            
                                        }
                                    }

                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_basica" ).css(  "border-color","red" );
                            $( "#input_select_situacion_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_basica" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_basica" ).css(  "border-color","red" );
                            $( "#check_presente_basica_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_basica" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_basica" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_basica" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_basica_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_basica_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
                break;
            case 'media':
            /*Inicio Institucion */  if(($("#institucion_educacion_media_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_media_sigesco_laboral").val() != '')){
                            $( "#institucion_buscar_educacion_media_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_media_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_media" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_media_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_media" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_media_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_media_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_media_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_media" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_media" ).css( "border-color","#ccc" );
                            $( "#check_presente_media_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            
            /*Inicio Situacion */  if($("#situacion_educacion_media_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_media" ).css( "border-color","#ccc" );
                
                            if ( $("#check_presente_media_sigesco_laboral").prop('checked')){
                                
                                check_media = 'SI';
                                $("#mes_fin_educacion_media_sigesco_laboral").val('');
                                $("#anno_fin_educacion_media_sigesco_laboral").val('');
                                
                            }else{
                                check_media = 'NO';
                            }
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/agregar_estudio',
                                    data: {
                                        tipo_estudio : 2,
                                        institucion_buscar_educacion_media_sigesco_laboral: $( "#institucion_buscar_educacion_media_sigesco_laboral" ).val(),
                                        institucion_educacion_media_sigesco_laboral: $( "#institucion_educacion_media_sigesco_laboral" ).val(),
                                        mes_inicio_educacion_media_sigesco_laboral: $( "#mes_inicio_educacion_media_sigesco_laboral" ).val(),
                                        anno_inicio_educacion_media_sigesco_laboral: $( "#anno_inicio_educacion_media_sigesco_laboral" ).val(),
                                        mes_fin_educacion_media_sigesco_laboral: $( "#mes_fin_educacion_media_sigesco_laboral" ).val(),
                                        anno_fin_educacion_media_sigesco_laboral: $( "#anno_fin_educacion_media_sigesco_laboral" ).val(),
                                        situacion_educacion_media_sigesco_laboral: $( "#situacion_educacion_media_sigesco_laboral" ).val(),
                                        especialidad_educacion_media_sigesco_laboral: $( "#especialidad_educacion_media_sigesco_laboral" ).val(),
                                        check_presente_media_sigesco_laboral: check_media
                                    },
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){
                                            
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            if(datos[10] == 'SI'){
                                                check_media = 'Al Presente';
                                            }else{
                                                check_media = datos[6]+'-'+datos[7];
                                            }
                                            
                                            $( "#lista_educacion_media" ).append('<div id="fila_educacion_media'+datos[1]+'" class="assigned-job-single"><div class="css-table"><div class="table-details css-table-cell"><div class="job-description">                                  <h4><a href="#">'+datos[3]+'</a><a style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i>'+datos[8]+'</a></h4></div><div class="company-name"><h4><a href="#">'+datos[9]+'</a></h4></div><div class="job-location-stat"><p><a href="#"><i class="fa fa-calendar"></i>'+datos[4]+'-'+datos[5]+' / '+check_media+'</a></p></div></div><div class="days-left css-table-cell"><h3 style="cursor:pointer; color:#346abb;"><i onclick="modificar_media('+datos[1]+')" class="fa fa-pencil-square-o" aria-hidden="true"></i><i onclick="eliminar_media('+datos[1]+')" class="fa fa-trash" aria-hidden="true"></i></h3></div></div></div>');
                                            
                                            empty_media();
                                            Command: toastr["success"]("Se ingreso Correctamente Educación Basica.", "Registro Realizado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            
                                        }
                                    }

                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_media" ).css(  "border-color","red" );
                            $( "#input_select_situacion_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_media" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_media" ).css(  "border-color","red" );
                            $( "#check_presente_media_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_media" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_media" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_media" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_media_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_media_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
                break;
            case 'universitaria':
                /*Inicio Institucion */  if(($("#institucion_educacion_universitaria_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_universitaria_sigesco_laboral").val() != '')){
                            $( "#institucion_buscar_educacion_universitaria_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_universitaria_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_universitaria" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_universitaria_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_universitaria" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_universitaria_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_universitaria_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_universitaria_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_universitaria" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_universitaria" ).css( "border-color","#ccc" );
                            $( "#check_presente_universitaria_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Carrera */  if($("#especialidad_educacion_universitaria_sigesco_laboral").val() != ''){
                            $( "#especialidad_educacion_universitaria_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_universitaria_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_universitaria" ).css( "border-color","#ccc" );
                
                            
                
                            ///////////////////  S U B I R   T I T U L O   ////////////////////////////////////
                            var fd = new FormData();
                
                            if ( $("#check_presente_universitaria_sigesco_laboral").prop('checked')){
                                
                                check_universitaria = 'SI';
                                fd.append("mes_fin_educacion_universitaria_sigesco_laboral", '');
                                fd.append("anno_fin_educacion_universitaria_sigesco_laboral", '');
                                
                            }else{
                                check_universitaria = 'NO';
                                fd.append("mes_fin_educacion_universitaria_sigesco_laboral", $( "#mes_fin_educacion_universitaria_sigesco_laboral" ).val());
                                fd.append("anno_fin_educacion_universitaria_sigesco_laboral", $( "#anno_fin_educacion_universitaria_sigesco_laboral" ).val());
                            
                            }

                            if($("#archivo_carrera_educacion_universitaria_sigesco_laboral").val().length > 0){
                                fd.append( "titulo_sigesco_laboral", $("#archivo_carrera_educacion_universitaria_sigesco_laboral")[0].files[0]);
                            }
                            fd.append("tipo_estudio" , "3");
                            fd.append("institucion_buscar_educacion_universitaria_sigesco_laboral", $( "#institucion_buscar_educacion_universitaria_sigesco_laboral ").val());
                            fd.append("institucion_educacion_universitaria_sigesco_laboral", $( "#institucion_educacion_universitaria_sigesco_laboral" ).val());
                            fd.append("mes_inicio_educacion_universitaria_sigesco_laboral", $( "#mes_inicio_educacion_universitaria_sigesco_laboral" ).val());
                            fd.append("anno_inicio_educacion_universitaria_sigesco_laboral", $( "#anno_inicio_educacion_universitaria_sigesco_laboral" ).val());
                            
                            fd.append("situacion_educacion_universitaria_sigesco_laboral", $( "#situacion_educacion_universitaria_sigesco_laboral" ).val());
                            fd.append("especialidad_educacion_universitaria_sigesco_laboral", $( "#especialidad_educacion_universitaria_sigesco_laboral" ).val());
                            fd.append("check_presente_universitaria_sigesco_laboral", check_universitaria);
                            
                            ///////////////////////////////////////////////////////////////////////////////////////////
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/agregar_estudio',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){
                                            
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            if(datos[10] == 'SI'){
                                                check_universitaria = 'Al Presente';
                                            }else{
                                                check_universitaria = datos[6]+'-'+datos[7];
                                            }
                                            
                                            $( "#lista_educacion_universitaria" ).append('<div id="fila_educacion_universitaria'+datos[1]+'" class="assigned-job-single"><div class="css-table"><div class="table-details css-table-cell"><div class="job-description">                                  <h4><a href="#">'+datos[3]+'</a><a style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i>'+datos[8]+'</a></h4></div><div class="company-name"><h4><a href="#">'+datos[9]+'</a></h4></div><div class="job-location-stat"><p><a href="#"><i class="fa fa-calendar"></i>'+datos[4]+'-'+datos[5]+' / '+check_universitaria+'</a></p></div></div><div class="days-left css-table-cell"><h3 style="cursor:pointer; color:#346abb;"><i onclick="modificar_universitaria('+datos[1]+')" class="fa fa-pencil-square-o" aria-hidden="true"></i><i onclick="eliminar_universitaria('+datos[1]+')" class="fa fa-trash" aria-hidden="true"></i></h3></div></div></div>');
                                            
                                            empty_universitaria();
                                            Command: toastr["success"]("Se ingreso Correctamente Educación Basica.", "Registro Realizado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            
                                        }
                                    }

                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_situacion_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Carrera */   }else{
                            $( "#especialidad_educacion_universitaria_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#especialidad_educacion_universitaria_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Carrera'</strong> por favor.", "Carrera")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_universitaria" ).css(  "border-color","red" );
                            $( "#check_presente_universitaria_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_universitaria" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_universitaria" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_universitaria_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_universitaria_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
                break;
            case 'posterior':
                /*Inicio Institucion */  if(($("#institucion_educacion_posterior_sigesco_laboral").val() != '') && ($("#institucion_buscar_educacion_posterior_sigesco_laboral").val() != '')){
                            $( "#institucion_buscar_educacion_posterior_sigesco_laboral" ).css( "border-color","#ccc" );
            /*Inicio Mes Inicio */  if(($("#mes_inicio_educacion_posterior_sigesco_laboral").val() != 'Seleccione Mes')){
                            $( "#input_select_mes_inicio_posterior" ).css( "border-color","#ccc" );
            
            /*Inicio Año Inicio */  if(($("#anno_inicio_educacion_posterior_sigesco_laboral").val() != 'Seleccione Año')){
                            $( "#input_select_anno_inicio_posterior" ).css( "border-color","#ccc" );
                
            /*Inicio Termino */  if((
                                    $("#mes_fin_educacion_posterior_sigesco_laboral").val() != 'Seleccione Mes' &&
                                    $("#anno_fin_educacion_posterior_sigesco_laboral").val() != 'Seleccione Año') || (
                                    $("#check_presente_posterior_sigesco_laboral").prop('checked') == true
                                    )){
                            $( "#input_select_mes_fin_posterior" ).css( "border-color","#ccc" );
                            $( "#input_select_anno_fin_posterior" ).css( "border-color","#ccc" );
                            $( "#check_presente_posterior_sigesco_laboral´" ).css( "border-color","#ccc" );
                
            /*Inicio Tipo */  if($("#tipo_posterior_educacion_posterior_sigesco_laboral").val() != ''){
                            $( "#tipo_posterior_educacion_posterior_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Carrera */  if($("#especialidad_educacion_posterior_sigesco_laboral").val() != ''){
                            $( "#especialidad_educacion_posterior_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Situacion */  if($("#situacion_educacion_posterior_sigesco_laboral").val() != 'Seleccione Situación'){
                            $( "#input_select_situacion_posterior" ).css( "border-color","#ccc" );
                
                
                            ///////////////////  S U B I R   T I T U L O   ////////////////////////////////////
                            var fd = new FormData();
                
                            if ( $("#check_presente_universitaria_sigesco_laboral").prop('checked')){
                                
                                check_posterior = 'SI';
                                fd.append("mes_fin_educacion_universitaria_sigesco_laboral", '');
                                fd.append("anno_fin_educacion_universitaria_sigesco_laboral", '');
                                
                            }else{
                                check_posterior = 'NO';
                                fd.append("mes_fin_educacion_universitaria_sigesco_laboral", $( "#mes_fin_educacion_universitaria_sigesco_laboral" ).val());
                                fd.append("anno_fin_educacion_universitaria_sigesco_laboral", $( "#anno_fin_educacion_universitaria_sigesco_laboral" ).val());
                            
                            }
                            
                            if($("#archivo_carrera_educacion_posterior_sigesco_laboral").val().length > 0){
                                fd.append( "titulo_sigesco_laboral", $("#archivo_carrera_educacion_posterior_sigesco_laboral")[0].files[0]);
                            }
                            fd.append("tipo_estudio" , "4");
                            fd.append("institucion_buscar_educacion_posterior_sigesco_laboral", $( "#institucion_buscar_educacion_posterior_sigesco_laboral ").val());
                            fd.append("institucion_educacion_posterior_sigesco_laboral", $( "#institucion_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("mes_inicio_educacion_posterior_sigesco_laboral", $( "#mes_inicio_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("anno_inicio_educacion_posterior_sigesco_laboral", $( "#anno_inicio_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("situacion_educacion_posterior_sigesco_laboral", $( "#situacion_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("especialidad_educacion_posterior_sigesco_laboral", $( "#especialidad_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("check_presente_posterior_sigesco_laboral", check_posterior);
                            fd.append("especialidad_educacion_posterior_sigesco_laboral", $( "#especialidad_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("tipo_posterior_educacion_posterior_sigesco_laboral", $( "#tipo_posterior_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("nota_educacion_posterior_sigesco_laboral", $( "#nota_educacion_posterior_sigesco_laboral" ).val());
                            fd.append("horas_educacion_posterior_sigesco_laboral", $( "#horas_educacion_posterior_sigesco_laboral" ).val());
                            ///////////////////////////////////////////////////////////////////////////////////////////
                
                            $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/agregar_estudio',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){
                                            
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            
                                            if(datos[10] == 'SI'){
                                                check_posterior = 'Al Presente';
                                            }else{
                                                check_posterior = datos[6]+'-'+datos[7];
                                            }
                                            
                                            $( "#lista_educacion_posterior" ).append('<div id="fila_educacion_posterior'+datos[1]+'" class="assigned-job-single"><div class="css-table"><div class="table-details css-table-cell"><div class="job-description">  <h4><a href="#">'+datos[3]+'</a><a style="color: #666;font-size: 12px;">  -  <i class="fa fa-bell"></i>'+datos[8]+'</a></h4></div><div class="company-name"><h4><a href="#">'+datos[9]+'</a></h4></div><div class="job-location-stat"><p><a href="#"><i class="fa fa-calendar"></i>'+datos[4]+'-'+datos[5]+' / '+check_posterior+'  &nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o"></i>'+datos[14]+' &nbsp;&nbsp;&nbsp; <i class="fa fa-pencil"></i>'+datos[13]+'</a></p></div></div><div class="days-left css-table-cell"><h3 style="cursor:pointer; color:#346abb;"><i onclick="modificar_posterior('+datos[1]+')" class="fa fa-pencil-square-o" aria-hidden="true"></i><i onclick="eliminar_posterior('+datos[1]+')" class="fa fa-trash" aria-hidden="true"></i></h3></div></div></div>');
                                            
                                            empty_posterior();
                                            Command: toastr["success"]("Se ingreso Correctamente Educación Basica.", "Registro Realizado")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                        }
                                    }

                                });
                
            /* Fin Situacion */   }else{
                            $( "#input_select_situacion_posterior" ).css(  "border-color","red" );
                            $( "#input_select_situacion_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Situación'</strong> por favor.", "Situacion")
                        }
                
            /* Fin Carrera */   }else{
                            $( "#especialidad_educacion_posterior_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#especialidad_educacion_posterior_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Carrera'</strong> por favor.", "Carrera")
                        }
                
            /* Fin Tipo */   }else{
                            $( "#tipo_posterior_educacion_posterior_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#tipo_posterior_educacion_posterior_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Tipo de Estudio'</strong> por favor.", "Tipo Estudio")
                        }
                
            /* Fin Termino */   }else{
                            $( "#input_select_anno_fin_posterior" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_posterior" ).css(  "border-color","red" );
                            $( "#check_presente_posterior_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#input_select_mes_fin_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Fecha Término'</strong> por favor.", "Fecha Término")
                            
                        }
                
            /* Fin Año Inicio */   }else{
                            $( "#input_select_anno_inicio_posterior" ).css(  "border-color","red" );
                            $( "#input_select_anno_inicio_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Año de Inicio'</strong> por favor.", "Año de Inicio")
                        }
            /* Fin Mes Inicio */   }else{
                            $( "#input_select_mes_inicio_posterior" ).css(  "border-color","red" );
                            $( "#input_select_mes_inicio_posterior" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Mes de Inicio'</strong> por favor.", "Mes de Inicio")
                        }
            /* Fin Institucion */   }else{
                            $( "#institucion_buscar_educacion_posterior_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#institucion_buscar_educacion_posterior_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Institución'</strong> por favor.", "Institución")
                        }
                break;
            default:
            Command: toastr["error"]("Seleccione el <strong>'Nivel de Educación'</strong> por favor.", "Nivel de Educación")
        }
    };
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////   E X P E R I E N C I A  L A B O R A L /////////////////////////////////////
    function agregar_experiencia() {
            var check_posterior = '';
        
            /*Inicio Ciudad */  if(($("#ciudad_buscar_experiencia_laboral_sigesco_laboral").val() != '') && ($("#ciudad_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#ciudad_buscar_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Empresa */  if(($("#empresa_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#empresa_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Cargo */  if(($("#cargo_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#cargo_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Tipo Cargo */  if(($("#input_tipo_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#input_tipo_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Cargo */  if(($("#sueldo_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#sueldo_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Fecha Inicio */  if(($("#fecha_inicio_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#fecha_inicio_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Fecha Termino */  if((
                                    $("#fecha_termino_experiencia_laboral_sigesco_laboral").val() != '') || (
                                    $("#check_presente_experiencia_sigesco_laboral").prop('checked') == true
                                    )){
            $( "#fecha_termino_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Descripcion */  if(($("#descripcion_experiencia_laboral_sigesco_laboral").val() != '')){
            $( "#descripcion_experiencia_laboral_sigesco_laboral" ).css( "border-color","#ccc" );
            
                ///////////////////  S U B I R   R E F E R E N C I A   ////////////////////////////////////
                    var fd = new FormData();
                
                    if ( $("#check_presente_experiencia_sigesco_laboral").prop('checked')){
                        check_posterior = 'SI';
                        fd.append("fecha_termino_experiencia_laboral_sigesco_laboral", '');
                    }else{
                        check_posterior = 'NO';
                        fd.append("fecha_termino_experiencia_laboral_sigesco_laboral", $( "#fecha_termino_experiencia_laboral_sigesco_laboral" ).val());
                    }
                    if($("#archivo_experiencia_laboral_sigesco_laboral").val().length > 0){
                        fd.append( "titulo_sigesco_laboral", $("#archivo_experiencia_laboral_sigesco_laboral")[0].files[0]);
                    }
                    fd.append("ciudad_experiencia_laboral_sigesco_laboral", $( "#ciudad_experiencia_laboral_sigesco_laboral ").val());
                    fd.append("empresa_experiencia_laboral_sigesco_laboral", $( "#empresa_experiencia_laboral_sigesco_laboral" ).val());
                    fd.append("cargo_experiencia_laboral_sigesco_laboral", $( "#cargo_experiencia_laboral_sigesco_laboral" ).val());
                    fd.append("tipo_experiencia_laboral_sigesco_laboral", $( "#input_tipo_experiencia_laboral_sigesco_laboral" ).val());
                    fd.append("sueldo_experiencia_laboral_sigesco_laboral", $( "#sueldo_experiencia_laboral_sigesco_laboral" ).val());
                    fd.append("fecha_inicio_experiencia_laboral_sigesco_laboral", $( "#fecha_inicio_experiencia_laboral_sigesco_laboral" ).val());
                    fd.append("check_presente_experiencia_sigesco_laboral", check_posterior);
                    fd.append("descripcion_experiencia_laboral_sigesco_laboral", $( "#descripcion_experiencia_laboral_sigesco_laboral" ).val());
                    fd.append("referencia_experiencia_laboral_sigesco_laboral", $( "#referencia_experiencia_laboral_sigesco_laboral" ).val());
                ///////////////////////////////////////////////////////////////////////////////////////////
                
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>trabajador_laboral/agregar_experiencia_laboral',
                    contentType: false,
                    data: fd, 
                    processData: false,
                    cache: false,
                    success: function(data){
                        var datos = JSON.parse(data);
                        if(datos[0] == true){
                            var fecha_termino = datos[1];
                            if(datos[9] == 'SI'){
                               fecha_termino = 'Al Presente' ;
                            }else{
                               fecha_termino = datos[8];
                            }
                            
                            $( "#lista_experiencia_laboral" ).append('<div id="fila_experiencia_laboral'+datos[1]+'" class="assigned-job-single"><div class="css-table"><div class="table-details css-table-cell"><div class="job-description"><h4><a id="titulo_cargo_experiencia_laboral'+datos[1]+'" href="#">'+datos[4]+' </a><a style="color: #666;font-size: 16px;">     en </a><a style="color:#346abb" class="company-name" id="titulo_empresa_experiencia_laboral'+datos[1]+'" href="#">'+datos[3]+'</a></h4></div><div class="job-location-stat"><p><a id="titulo_fecha_experiencia_laboral'+datos[1]+'" href="#"><i class="fa fa-calendar"></i>'+datos[7]+' - '+fecha_termino+'</a></p></div><div class="job-location-stat"><p style="text-align:justify;" id="titulo_descripcion_experiencia_laboral'+datos[1]+'">'+datos[10]+'</p></div></div><div class="days-left css-table-cell"><h3 style="cursor:pointer; color:#346abb;"><i onClick="modificar_experiencia_laboral('+datos[1]+')" class="fa fa-pencil-square-o" aria-hidden="true"></i><i onClick="eliminar_experiencia_laboral('+datos[1]+','+datos[12]+')" class="fa fa-trash" aria-hidden="true"></i></h3></div></div></div>');
                                            
                            empty_experiencia_laboral();
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["success"]("Se ingreso Correctamente Educación Basica.", "Registro Realizado")
                            //redireccionarPagina('<?=base_url()?>laboral');
                        }else{
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                        }
                    }
                });
            
            /*Fin descripcion */}else{
                $( "#descripcion_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#descripcion_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Descripción'</strong> por favor.", "Descripción")
            }
            /*Fin Fecha Termino */}else{
                $( "#fecha_termino_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#fecha_termino_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Experiencia'</strong> por favor.", "Fecha de Término")
            }
            /*Fin Fecha Inicio */}else{
                $( "#fecha_inicio_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#fecha_inicio_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Experiencia'</strong> por favor.", "Fecha de Inicio")
            }
            /*Fin Sueldo */}else{
                $( "#sueldo_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#sueldo_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Sueldo'</strong> por favor.", "Sueldo Bruto")
            }
            /*Fin Tipo Cargo */}else{
                $( "#input_tipo_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#input_tipo_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Tipo Cargo'</strong> por favor.", "Tipo Cargo")
            }
            /*Fin Cargo */}else{
                $( "#cargo_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#cargo_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Cargo'</strong> por favor.", "Cargo")
            }
            /*Fin Empresa */}else{
                $( "#empresa_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#empresa_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Empresa'</strong> por favor.", "Empresa")
            }
            /*Fin Ciudad */}else{
                $( "#ciudad_buscar_experiencia_laboral_sigesco_laboral" ).css(  "border-color","red" );
                $( "#ciudad_buscar_experiencia_laboral_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor, o esta mal escrita.", "Ciudad")
            }
        };
    function eliminar_experiencia_laboral(id_experiencia_laboral,id_trabajador){
            bootbox.confirm({ 
                buttons: {
                    cancel: {
                      label: 'Cerrar',
                      className: 'btn-danger'
                    },
                    
                    confirm: {
                      label: 'Eliminar',
                      className: 'btn-success'
                    }
                },
                title: "Eliminar Educación",
                message: "¿Esta seguro de <strong> Eliminar</strong> Experiencia Laboral?", 
                callback: function(result){
                              
                  if(result == true){
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/eliminar_experiencia_laboral',
                        data: {id_experiencia_laboral : id_experiencia_laboral,id_trabajador : id_trabajador},
                        success: function(data){
                            if(data == true){
                              Command: toastr["success"]("Experiencia Laboral Eliminada correctamente.", "Experiencia Laboral");
                              $("#fila_experiencia_laboral"+id_experiencia_laboral).remove();
                            }else{
                            Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                            }
                                  
                        }
                    });
                  }
                }  
            });
        }
    function empty_experiencia_laboral(){
            $("#cargo_experiencia_laboral_sigesco_laboral").val('');
            $("#empresa_experiencia_laboral_sigesco_laboral").val('');
            $("#ciudad_buscar_experiencia_laboral_sigesco_laboral").val('');
            $("#ciudad_experiencia_laboral_sigesco_laboral").val('');
            $("#tipo_experiencia_laboral_sigesco_laboral input").val("Seleccione Tipo");
            $("#sueldo_experiencia_laboral_sigesco_laboral" ).val('');
            $("#fecha_inicio_experiencia_laboral_sigesco_laboral" ).val('');
            $("#fecha_termino_experiencia_laboral_sigesco_laboral" ).val('');
            $("#check_presente_experiencia_sigesco_laboral").prop('checked', false);
            $("#descripcion_experiencia_laboral_sigesco_laboral" ).val('');
            $("#referencia_experiencia_laboral_sigesco_laboral" ).val('');
            $("#sin_informacion_experiencia_laboral").hide();

        }
    function modificar_experiencia_laboral(id_experiencia_laboral){
      $.ajax({                
        type: 'POST',
        url: '<?=base_url()?>trabajador_laboral/buscar_experiencia_laboral',
        data: {id_experiencia_laboral : id_experiencia_laboral},
        success: function(data){
            if(data != false){
            dato_experiencia_laboral = JSON.parse(JSON.stringify(data));
                if (dato_experiencia_laboral.alpresente_experiencia_laboral == 'SI'){
                    $("#check_presente_experiencia_labora_edita_sigesco_laboral").prop('checked', true);
                    $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').datepicker('destroy');
                    $("#fecha_termino_experiencia_laboral_editar_sigesco_laboral").val('');
                    $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').prop('readonly', true);
                }else{
                    $( "#fecha_termino_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.fecha_termino);
                }
                
                $( "#id_experiencia_laboral_editar_sigesco_laboral ").val(dato_experiencia_laboral.id_experiencia_laboral);
                $( "#ciudad_experiencia_laboral_sigesco_laboral ").val(dato_experiencia_laboral.nombre_ciudad);
                $( "#ciudad_experiencia_laboral_editar_sigesco_laboral ").val(dato_experiencia_laboral.ciudad_id_ciudad);
                $( "#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral ").val(dato_experiencia_laboral.nombre_ciudad);
                $( "#empresa_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.empresa_experiencia_laboral);
                $( "#cargo_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.cargo_experiencia_laboral);
                $( "#tipo_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.tipo_cargo_experiencia_laboral);
                $( "#input_tipo_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.tipo_cargo_experiencia_laboral);
                $( "#sueldo_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.sueldo_bruto_experiencia_laboral);
                $( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.fecha_inicio);
                $( "#descripcion_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.descripcion_experiencia_laboral);
                $( "#referencia_experiencia_laboral_editar_sigesco_laboral" ).val(dato_experiencia_laboral.nombre_referencia_experiencia_laboral);
                $( "#id_trabajador_experiencia_laboral_editar_sigesco_laboral ").val(dato_experiencia_laboral.trabajador_laboral_id_trabajador_laboral);
                $('#modal_experiencia_laboral_editar').modal('show');
            }
        }
      });
    }
    function modificar_experiencia_laboral_editar() {
            var check_posterior = '';
            /*Inicio Ciudad */  if(($("#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral").val() != '') && ($("#ciudad_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Empresa */  if(($("#empresa_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#empresa_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Cargo */  if(($("#cargo_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#cargo_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
                
            /*Inicio Tipo Cargo */  if(($("#input_tipo_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#input_tipo_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Cargo */  if(($("#sueldo_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#sueldo_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Fecha Inicio */  if(($("#fecha_inicio_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Fecha Termino */  if((
                                    $("#fecha_termino_experiencia_laboral_editar_sigesco_laboral").val() != '') || (
                                    $("#check_presente_experiencia_labora_edita_sigesco_laboral").prop('checked') == true
                                    )){
            $( "#fecha_termino_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            
            /*Inicio Descripcion */  if(($("#descripcion_experiencia_laboral_editar_sigesco_laboral").val() != '')){
            $( "#descripcion_experiencia_laboral_editar_sigesco_laboral" ).css( "border-color","#ccc" );
            
                ///////////////////  S U B I R   R E F E R E N C I A   ////////////////////////////////////
                    var fd = new FormData();
                
                    if ( $("#check_presente_experiencia_labora_edita_sigesco_laboral").prop('checked')){
                        check_experiencia_laboral = 'SI';
                        fd.append("fecha_termino_experiencia_laboral_editar_sigesco_laboral", '');
                    }else{
                        check_experiencia_laboral = 'NO';
                        fd.append("fecha_termino_experiencia_laboral_editar_sigesco_laboral", $( "#fecha_termino_experiencia_laboral_editar_sigesco_laboral" ).val());
                    }
                    if($("#archivo_experiencia_laboral_editar_sigesco_laboral").val().length > 0){
                        fd.append( "titulo_sigesco_laboral", $("#archivo_experiencia_laboral_editar_sigesco_laboral")[0].files[0]);
                    }
                
                    fd.append("id_trabajador", $( "#id_trabajador_experiencia_laboral_editar_sigesco_laboral ").val());
                    fd.append("id_experiencia_laboral_editar_sigesco_laboral", $( "#id_experiencia_laboral_editar_sigesco_laboral ").val());
                    fd.append("ciudad_experiencia_laboral_editar_sigesco_laboral", $( "#ciudad_experiencia_laboral_editar_sigesco_laboral ").val());
                    fd.append("empresa_experiencia_laboral_editar_sigesco_laboral", $( "#empresa_experiencia_laboral_editar_sigesco_laboral" ).val());
                    fd.append("cargo_experiencia_laboral_editar_sigesco_laboral", $( "#cargo_experiencia_laboral_editar_sigesco_laboral" ).val());
                    fd.append("tipo_experiencia_laboral_editar_sigesco_laboral", $( "#input_tipo_experiencia_laboral_editar_sigesco_laboral" ).val());
                    fd.append("sueldo_experiencia_laboral_editar_sigesco_laboral", $( "#sueldo_experiencia_laboral_editar_sigesco_laboral" ).val());
                    fd.append("fecha_inicio_experiencia_laboral_editar_sigesco_laboral", $( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).val());
                    fd.append("check_presente_experiencia_labora_edita_sigesco_laboral", check_experiencia_laboral);
                    fd.append("descripcion_experiencia_laboral_editar_sigesco_laboral", $( "#descripcion_experiencia_laboral_editar_sigesco_laboral" ).val());
                    fd.append("referencia_experiencia_laboral_editar_sigesco_laboral", $( "#referencia_experiencia_laboral_editar_sigesco_laboral" ).val());
                ///////////////////////////////////////////////////////////////////////////////////////////
                
                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>trabajador_laboral/editar_experiencia_laboral',
                    contentType: false,
                    data: fd, 
                    processData: false,
                    cache: false,
                    success: function(data){
                        if(data == true){
                            var fecha_auxiliar_titulo = '';
                            
                            if ($("#check_presente_experiencia_labora_edita_sigesco_laboral").prop('checked') == true){
                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).val()+' - Al Presente';
                            }else{
                                fecha_auxiliar_titulo = '<i class="fa fa-calendar"></i>'+$( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).val()+' - '+$( "#fecha_termino_experiencia_laboral_editar_sigesco_laboral" ).val();
                            }
                                            
                            ///////////////  A G R E G A R   T E X T O   A   F I L A  D E   E S T U D I O ///////////////
                            $('#titulo_cargo_experiencia_laboral'+$( "#id_experiencia_laboral_editar_sigesco_laboral" ).val()).html($( "#cargo_experiencia_laboral_editar_sigesco_laboral" ).val());
                            $('#titulo_empresa_experiencia_laboral'+$( "#id_experiencia_laboral_editar_sigesco_laboral" ).val()).html($( "#empresa_experiencia_laboral_editar_sigesco_laboral" ).val());
                            $('#titulo_fecha_experiencia_laboral'+$( "#id_experiencia_laboral_editar_sigesco_laboral" ).val()).html(fecha_auxiliar_titulo);
                            $('#titulo_descripcion_experiencia_laboral'+$( "#id_experiencia_laboral_editar_sigesco_laboral" ).val()).html($( "#descripcion_experiencia_laboral_editar_sigesco_laboral" ).val());

                            /////////////////////////////////////////////////////////////////////////////////////////////             
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["success"]("Se Modifico Correctamente Experiencia Lbaoral.", "Modificación Experiencia Laboral")
                            //redireccionarPagina('<?=base_url()?>laboral');
                        }else{
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                        }
                    }
                });
            
            /*Fin descripcion */}else{
                $( "#descripcion_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#descripcion_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Descripción'</strong> por favor.", "Descripción")
            }
            /*Fin Fecha Termino */}else{
                $( "#fecha_termino_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#fecha_termino_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Experiencia'</strong> por favor.", "Fecha de Término")
            }
            /*Fin Fecha Inicio */}else{
                $( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#fecha_inicio_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Fecha de Experiencia'</strong> por favor.", "Fecha de Inicio")
            }
            /*Fin Sueldo */}else{
                $( "#sueldo_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#sueldo_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Sueldo'</strong> por favor.", "Sueldo Bruto")
            }
            /*Fin Tipo Cargo */}else{
                $( "#input_tipo_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#input_tipo_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Tipo Cargo'</strong> por favor.", "Tipo Cargo")
            }
            /*Fin Cargo */}else{
                $( "#cargo_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#cargo_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Cargo'</strong> por favor.", "Cargo")
            }
            /*Fin Empresa */}else{
                $( "#empresa_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#empresa_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Empresa'</strong> por favor.", "Empresa")
            }
            /*Fin Ciudad */}else{
                $( "#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral" ).css(  "border-color","red" );
                $( "#ciudad_buscar_experiencia_laboral_editar_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor, o esta mal escrita.", "Ciudad")
            }
        };
    function check_experiencia_laboral(){
        if ( $("#check_presente_experiencia_sigesco_laboral").prop('checked')){
            $('#fecha_termino_experiencia_laboral_sigesco_laboral').datepicker('destroy');
            $("#fecha_termino_experiencia_laboral_sigesco_laboral").val('');
            $('#fecha_termino_experiencia_laboral_sigesco_laboral').prop('readonly', true);
        }else{
            $('#fecha_termino_experiencia_laboral_sigesco_laboral').prop('readonly', false);
            $('#fecha_termino_experiencia_laboral_sigesco_laboral').datepicker({
                format: "dd/mm/yyyy",
                language: "ES",
                autoclose: true,

            });
        }
    }
    function check_experiencia_laboral_editar(){
        if ($("#check_presente_experiencia_labora_edita_sigesco_laboral").prop('checked')){
            $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').datepicker('destroy');
            $("#fecha_termino_experiencia_laboral_editar_sigesco_laboral").val('');
            $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').prop('readonly', true);
        }else{
            $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').prop('readonly', false);
            $('#fecha_termino_experiencia_laboral_editar_sigesco_laboral').datepicker({
                format: "dd/mm/yyyy",
                language: "ES",
                autoclose: true,

            });
        }
    }
    function buscar_empresa_experiencia(){
            $.get("<?=base_url()?>trabajador_laboral/buscar_empresa_experiencia",{
                id_ciudad: $("#ciudad_experiencia_laboral_sigesco_laboral").val()}, 
                   function(data){
                var jsonObj = JSON.parse(JSON.stringify(data));
                $("#empresa_experiencia_laboral_sigesco_laboral" ).val('');
                $('#empresa_experiencia_laboral_sigesco_laboral').typeahead('destroy');
                
                if(jsonObj != ''){
                   $("#empresa_experiencia_laboral_sigesco_laboral").typeahead({
                          source:jsonObj
                    });
                }
            },'json');
           
            $("#empresa_experiencia_laboral_sigesco_laboral").change(function() {
              var current = $("#empresa_experiencia_laboral_sigesco_laboral").typeahead("getActive");
              if (current) {
                // Some item from your model is active!
                if (current.name == $("#empresa_experiencia_laboral_sigesco_laboral").val()) {
                    $("#empresa_experiencia_laboral_sigesco_laboral").val(current.name);
                  // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {

                }
              } else {
                if($("#ciudad_buscar_experiencia_laboral_sigesco_laboral").val() != '' && $("#ciudad_buscar_experiencia_laboral_sigesco_laboral").val().lengh != 0){
                   $.ajax({                
                            type: 'POST',
                            url: '<?=base_url()?>trabajador_laboral/nueva_empresa_experiencia',
                            data: { nombre_empresa : $("#empresa_experiencia_laboral_sigesco_laboral").val().toUpperCase(),
                                   id_ciudad : $("#ciudad_experiencia_laboral_sigesco_laboral").val()
                                  },
                            success: function(data){                        
                                if(data == false){
                                    Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                                }
                            }
                          });
                  }
              }
            });
        }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////   C O N O C I M I E N T O ///////////////////////////////////////////
    function agregar_conocimiento(){
        /*Inicio Nombre Conocimiento */  if(($("#nombre_conocimiento").val() != '')){
            $( "#nombre_conocimiento" ).css( "border-color","#ccc" );
        /*Inicio Descripcion Conocimiento   if(($("#descripcion_conocimiento").val() != '')){
            $( "#descripcion_conocimiento" ).css( "border-color","#ccc" );   
        /*Inicio Slider */  if(($( "#slider_conocimiento" ).slider( "value" ) > 0)){
            
            $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>trabajador_laboral/agregar_conocimiento',
                    data: {nombre_conocimiento : $("#nombre_conocimiento").val().toUpperCase(),
                           descripcion_conocimiento : $("#descripcion_conocimiento").val(),
                           slider_conocimiento : $( "#slider_conocimiento" ).slider( "value" ),
                           id_conocimiento : $("#id_conocimiento").val()
                          }, 
                    success: function(data){
                        var datos = JSON.parse(data);
                        if(datos[0] == true){
                            var color = ''
                            if((datos[3]) == '25'){color = "#c20007";}
                            if((datos[3]) == '50'){color = "#c2bb00";}
                            if((datos[3]) == '75'){color = "#0068c2";}
                            if((datos[3]) == '100'){color = "#68c200";}
                            
                            $( "#lista_conocimientos" ).append("<li id='fila_conocimiento"+datos[1]+"'><a id='popover_conocimiento"+datos[1]+"' style='background-color:"+color+"'>"+datos[2]+"</a></li>");
                            
                            Command: toastr["success"]("Conocimiento Creado correctamente.", "Conocimiento");
                            
                            $('#popover_conocimiento'+datos[1]).popover({
                                html:true,
                                animation:true,
                                placement:'top',
                                content:"<a onClick='eliminar_conocimiento("+datos[1]+","+datos[4]+")' style='background-color:transparent; color:black'>Eliminar <i style='color:red' class='fa fa-times' aria-hidden='true'></i></a>"
                            });
                            
                            $("#nombre_conocimiento").val('');
                            $("#slider_conocimiento").slider( "option", "value", 10 );
                            $( "#valor_porcentaje_conocimiento" ).val("0%");
                            
                        }else{
                            if(datos[0] == 3){
                                Command: toastr["error"]("El Conocimiento seleccionado ya Existe.", "Existe Conocimiento")
                            }else{
                                Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                            }
                        }
                    }
                });
            
        /*Fin Slider */}else{
                Command: toastr["error"]("Seleccion el <strong>'Porcentaje'</strong> de Conocimiento por favor.", "Porcentaje de Conocimiento")
        }
        /*Fin Descripcion Conocimiento }else{
                $( "#descripcion_conocimiento" ).css(  "border-color","red" );
                $( "#descripcion_conocimiento" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Descripción Conocimiento")
        }
        */
        /*Fin Nombre Conocimiento */}else{
                $( "#nombre_conocimiento" ).css(  "border-color","red" );
                $( "#nombre_conocimiento" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre Conocimiento")
        }
    }
    
    $( "#slider_conocimiento" ).slider({
      range: "max",
          min: 0,
          max: 100,
          value: 0,
          step: 25,
          slide: function( event, ui ) {
            $( "#valor_porcentaje_conocimiento" ).val( ui.value + "%" );
          }
      });

    $( "#valor_porcentaje_conocimiento" ).val( $( "#slider_conocimiento" ).slider( "value" ) + "%" );
    
     function eliminar_conocimiento(fila_conocimiento,id_conocimiento){
         $.ajax({
            type: 'POST',
            url: '<?=base_url()?>trabajador_laboral/eliminar_conocimiento',
            data: {fila_conocimiento : fila_conocimiento,id_conocimiento:id_conocimiento}, 
            success: function(data){
                        if(data == true){
                            $("#fila_conocimiento"+fila_conocimiento).remove();
                            Command: toastr["success"]("Conocimiento Eliminado correctamente.", "Conocimiento Eliminado");
                        }else{
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                        }
            }
        });
     }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////   I D I O M A   ////////////////////////////////////////////////////
        $( "#slider_idioma_oral" ).slider({
          range: "max",
              min: 0,
              max: 100,
              value: 0,
              step: 10,
              slide: function( event, ui ) {
                $( "#valor_porcentaje_idioma_oral" ).val( ui.value + "%" );
              }
          });
    
        $( "#slider_idioma_escrito" ).slider({
          range: "max",
              min: 0,
              max: 100,
              value: 0,
              step: 10,
              slide: function( event, ui ) {
                $( "#valor_porcentaje_idioma_escrito" ).val( ui.value + "%" );
              }
          });
    
        function agregar_idioma(){
        /*Inicio Nombre Conocimiento */  if(($("#nombre_idioma").val() != '')){
            $( "#nombre_idioma" ).css( "border-color","#ccc" );
        /*Inicio Descripcion Conocimiento   if(($("#descripcion_conocimiento").val() != '')){
            $( "#descripcion_conocimiento" ).css( "border-color","#ccc" );   
        /*Inicio Slider Oral */  if(($( "#slider_idioma_oral" ).slider( "value" ) > 0)){
        /*Inicio Slider Escrito*/  if(($( "#slider_idioma_escrito" ).slider( "value" ) > 0)){
            
            $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>trabajador_laboral/agregar_idioma',
                    data: {nombre_idioma : $("#nombre_idioma").val().toUpperCase(),
                           slider_idioma_oral : $( "#slider_idioma_oral" ).slider( "value" ),
                           slider_idioma_escrito : $( "#slider_idioma_escrito" ).slider( "value" ),
                           id_idioma : $("#id_idioma").val()
                          }, 
                    success: function(data){
                        var datos = JSON.parse(data);
                        if(datos[0] == true){
                            
                            $( "#lista_idiomas" ).append('<div id="fila_idioma'+datos[1]+'" class="assigned-job-single"><div class="row" style="padding:10px 0px 10px 0px"><div class="col-xs-12 col-md-1"></div><div class="col-xs-12 col-md-2" style="text-align:center;"><p class="titulo_idioma_tabla" style="color:#346abb;">'+datos[2]+'</p></div><div class="col-xs-12 col-md-2"><div class="row"><div class="col-xs-6 col-md-12" style="text-align:center;"><p class="detalle_idioma_tabla">Oral</p></div><div class="col-xs-6 col-md-12" style="text-align:center;"><p class="detalle_idioma_tabla">Escrito</p></div></div></div><div class="col-xs-12 col-md-5"><div class="row"><div class="col-xs-6 col-md-12 barra_progreso" style=""><div class="progress-bar clearfix"><div class="progress-bar-inner progress'+datos[3]+'"><span>'+datos[3]+'%</span></div></div></div><div class="col-xs-6 col-md-12 barra_progreso" style=""><div class="progress-bar clearfix"><div class="progress-bar-inner progress'+datos[4]+'"><span>'+datos[4]+'%</span></div></div></div></div></div><div class="col-md-2" style="text-align:center;"><i onclick="eliminar_idioma('+datos[0]+')" class="fa fa-trash icono_idioma" aria-hidden="true"></i></div></div></div>');
                            
                            Command: toastr["success"]("Idioma Agregado correctamente.", "Idioma");
                            
                            $("#nombre_idioma").val('');
                            $("#id_idioma").val('');
                            $("#slider_idioma_oral").slider( "option", "value", 0 );
                            $("#slider_idioma_escrito").slider( "option", "value", 0 );
                            $( "#valor_porcentaje_idioma_oral" ).val("0%");
                            $( "#valor_porcentaje_idioma_escrito" ).val("0%");
                            
                        }else{
                           if(datos[0] == 3){
                                Command: toastr["error"]("El Idioma seleccionado ya Existe.", "Existe Idioma")
                            }else{
                                Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                            } 
                        }
                    }
                });
            
        /*Fin Slider Escrito*/}else{
                Command: toastr["error"]("Seleccion el <strong>'Porcentaje'</strong> de Idioma Escrito por favor.", "Porcentaje de Idioma Escrito")
        }
        /*Fin Slider Oral */}else{
                Command: toastr["error"]("Seleccion el <strong>'Porcentaje'</strong> de Idioma Oral por favor.", "Porcentaje de Idioma Oral")
        }
        /*Fin Descripcion Conocimiento }else{
                $( "#descripcion_conocimiento" ).css(  "border-color","red" );
                $( "#descripcion_conocimiento" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Descripción Conocimiento")
        }
        */
        /*Fin Nombre Conocimiento */}else{
                $( "#nombre_idioma" ).css(  "border-color","red" );
                $( "#nombre_idioma" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre Idioma")
        }
    }
    
        function eliminar_idioma(fila_idioma){
         $.ajax({
            type: 'POST',
            url: '<?=base_url()?>trabajador_laboral/eliminar_idioma',
            data: {fila_idioma : fila_idioma}, 
            success: function(data){
                        if(data == true){
                            $("#fila_idioma"+fila_idioma).remove();
                            Command: toastr["success"]("Idioma Eliminado correctamente.", "Idioma Eliminado");
                        }else{
                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                        }
            }
        });
     }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////   D O C U M E N T A C I O N   ////////////////////////////////////////////
    function subir_documentacion(){
    
        var fd = new FormData();
    
        fd.append( "archivo_documentacion", $("#archivo_documentacion")[0].files[0]);
        
    
    /*Inicio Tipo Dcumentacion */   if(($("#input_tipo_documentacion").val() != '')){
                                    $( "#input_tipo_documentacion" ).css( "border-color","#ccc" );
                                    fd.append("input_tipo_documentacion", $( "#input_tipo_documentacion" ).val());
        
    /*Inicio Documento */   if(($("#archivo_documentacion").val() != '')){
                                    $( "#archivo_documentacion" ).css( "border-color","#ccc" );
                                    fd.append("archivo_documentacion", $( "#archivo_documentacion" ).val());
        
                            if(($("#input_tipo_documentacion").val() == 'Otro') && ($("#titulo_otro_documentacion").val() != '')){
                                fd.append("titulo_otro_documentacion", $( "#titulo_otro_documentacion" ).val());
                                
                                $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/agregar_documentacion',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){

                                            $( "#lista_documentacion" ).append('<div id="fila_documento'+datos[0]+'" class="assigned-job-single"><div class="row" style="padding:10px 0px 10px 0px"><div class="col-xs-12 col-md-12"></div><div class="col-xs-12 col-md-7" style="text-align:center;"><p class="titulo_idioma_tabla2" style="color:#346abb;">'+datos[3]+'</p></div><div class="col-xs-12 col-md-3"><div class="row"><div class="col-xs-6 col-md-12" style="text-align:center;"><p class="detalle_idioma_tabla2"><strong>Fecha de Subida</strong></p></div><div class="col-xs-6 col-md-12" style="text-align:center;"><p class="detalle_idioma_tabla2">'+datos[2]+'</p></div></div></div><div class="col-md-2" style="text-align:center;"><i onClick="abrir_archivo(\'<?=base_url()?>'+datos[4]+'\')" class="fa fa-file-o icono_idioma" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<i onclick="eliminar_documento(\''+datos[1]+'\',\''+datos[4]+'\')" class="fa fa-trash icono_idioma" aria-hidden="true"></i></div></div></div>');
                                            
                                            Command: toastr["success"]("Se agrego correctamente la Documentación.", "Documentación")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            
                                        }
                                    }

                                });
                                
                               }else{
                                   $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/agregar_documentacion',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){

                                            $( "#lista_documentacion" ).append('<div id="fila_documento'+datos[0]+'" class="assigned-job-single"><div class="row" style="padding:10px 0px 10px 0px"><div class="col-xs-12 col-md-12"></div><div class="col-xs-12 col-md-7" style="text-align:center;"><p class="titulo_idioma_tabla2" style="color:#346abb;">'+datos[3]+'</p></div><div class="col-xs-12 col-md-3"><div class="row"><div class="col-xs-6 col-md-12" style="text-align:center;"><p class="detalle_idioma_tabla3"><strong>Fecha de Subida</strong></p></div><div class="col-xs-6 col-md-12" style="text-align:center;"><p class="detalle_idioma_tabla3">'+datos[2]+'</p></div></div></div><div class="col-md-2" style="text-align:center;"><i onClick="abrir_archivo(\'<?=base_url()?>'+datos[4]+'\')" class="fa fa-file-o icono_idioma" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<i onclick="eliminar_documento(\''+datos[1]+'\',\''+datos[4]+'\')" class="fa fa-trash icono_idioma" aria-hidden="true"></i></div></div></div>');
                                            
                                            Command: toastr["success"]("Se agrego correctamente la Documentación.", "Documentación")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            
                                        }
                                    }

                                });
                               }
    
    /* Fin Documento */   }else{
                            $( "#archivo_documentacion" ).css(  "border-color","red" );
                            $( "#archivo_documentacion" ).focus();
                            Command: toastr["error"]("Ingrese el <strong>'Archivo'</strong> por favor.", "Archivo")
                        }
    
    /* Fin Tipo Documentacion */   }else{
                            $( "#input_tipo_documentacion" ).css(  "border-color","red" );
                            $( "#input_tipo_documentacion" ).focus();
                            Command: toastr["error"]("Seleccione el campo <strong>'Tipo de Documentación'</strong> por favor.", "Tipo de Documentación")
                        }
}
    
    function eliminar_documento(fila_documento,url_documento){
            bootbox.confirm({ 
                buttons: {
                    cancel: {
                      label: 'Cerrar',
                      className: 'btn-danger'
                    },
                    
                    confirm: {
                      label: 'Eliminar',
                      className: 'btn-success'
                    }
                },
                title: "Eliminar Documento",
                message: "¿Esta seguro de <strong> Eliminar</strong> el Documento?", 
                callback: function(result){
                              
                  if(result == true){
                        
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>trabajador_laboral/eliminar_documentacion',
                        data: {fila_documento : fila_documento,url_documento : url_documento},
                        success: function(data){
                                                        
                            if(data == true){
                              Command: toastr["success"]("Documento Eliminado correctamente.", "Documento Eliminado");
                              $("#fila_documento"+fila_documento).remove();
                            }else{
                            Command: toastr["error"]("Ocurrio un problema. Intente Nuevamente.", "ERROR");
                            }
                                  
                        }
                    });
                  }
                }  
            });
        }
    
    function abrir_archivo(url){
        window.open(url, '_blank');
    }  

    function subir_foto_perfil_editar(){
        var fd = new FormData();
        fd.append( "foto_perfil_editar", $("#foto_perfil_editar")[0].files[0]);
        
    /*Inicio Foto Perfil */   if(($("#foto_perfil_editar").val() != '')){
                                    $( "#foto_perfil_editar" ).css( "border-color","#ccc" );
                                    fd.append("foto_perfil_editar", $( "#foto_perfil_editar" ).val());
                                
                                $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/foto_perfil_editar',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){
                                            
                                            $("#img_perfil_auxiliar").attr("src",datos[1]);
                                            Command: toastr["success"]("Se agrego correctamente la Fotografia.", "Fotografia")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            if(datos[0] == 3){
                                               $("#foto_perfil_editar").val('');
                                               Command: toastr["error"]("Ingrese una fotografia. (Extension: JPG o PNG).", "Ingrese Fotografia Nueva")
                                               }else{
                                                $("#foto_perfil_editar").val('');
                                                $("[data-dismiss=modal]").trigger({ type: "click" });
                                                Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                               }
                                        }
                                    }
                                });
                                    
    /* Fin Foto Perfil */   }else{
                            $( "#foto_perfil_editar" ).css(  "border-color","red" );
                            $( "#foto_perfil_editar" ).focus();
                            Command: toastr["error"]("Ingrese la <strong>'Fotografia'</strong> por favor.", "Fotografia")
                        }

    }
    
    function subir_foto_perfil_guardar(){
        var fd = new FormData();
        fd.append( "foto_perfil_editar", $("#foto_perfil_editar")[0].files[0]);
        
    /*Inicio Foto Perfil */   if(($("#foto_perfil_editar").val() != '')){
                                    $( "#foto_perfil_editar" ).css( "border-color","#ccc" );
                                    fd.append("foto_perfil_editar", $( "#foto_perfil_editar" ).val());
                                
                                $.ajax({
                                    type: 'POST',
                                    url: '<?=base_url()?>trabajador_laboral/foto_perfil_guardar',
                                    contentType: false,
                                    data: fd, 
                                    processData: false,
                                    cache: false,
                                    success: function(data){
                                        var datos = JSON.parse(data);
                                        if(datos[0] == true){
                                            
                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                            $("#foto_editar_perfil").attr("src",datos[1]);
                                            $("#foto_editar_perfil_superior").attr("src",datos[1]);
                                            Command: toastr["success"]("Se actualizo correctamente.", "Fotografia Actualizada")
                                            //redireccionarPagina('<?=base_url()?>laboral');
                                            
                                        }else{
                                            if(datos[0] == 3){
                                               $("#foto_perfil_editar").val('');
                                               Command: toastr["error"]("Ingrese una fotografia. (Extension: JPG o PNG).", "Ingrese Fotografia Nueva")
                                            }else{
                                                $("#foto_perfil_editar").val('');
                                                $("[data-dismiss=modal]").trigger({ type: "click" });
                                                Command: toastr["error"]("Ocurrio un Problema.", "Intente Nuevamente")
                                            }
                                        }
                                    }
                                });
                                    
    /* Fin Foto Perfil */   }else{
                            $( "#foto_perfil_editar" ).css(  "border-color","red" );
                            $( "#foto_perfil_editar" ).focus();
                            Command: toastr["error"]("Primero Ingrese la <strong>'Fotografia'</strong> por favor.", "Ingrese Fotografia")
                        }

    }

    
</script>