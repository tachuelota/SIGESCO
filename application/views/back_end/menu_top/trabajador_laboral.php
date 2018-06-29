<style>
    @media screen and (max-width: 375px) and (min-width: 300px) {
        #lista_mensaje{
            margin-left: -180%;
        }      
    }
    
    @media screen and (min-width: 600px) {
        #lista_mensaje{
            margin-left:-160px;
            width:360px;
            overflow:scroll;
            max-height:250px;
        }      
    }
    
    
</style>     
<!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

          <!--
          HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
          -->

          <div class="header-notification-bar">
            <div class="register-user">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a href="<?=base_url()?>laboral"><img height="100" src="<?=base_url();?>img/logo_superior.png" alt=""></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                   <!-- <div class="search-form">
                      <form action="#">
                        <button class="dropdown-search"><i class="fa fa-caret-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Buscar..." class="topbar-search-input">
                        <button class="search-button"><i class="fa fa-search"></i></button>
                      </form>
                    </div>-->
                      &nbsp;
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">
                      <ul class="list-inline">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-envelope-o"></i><span id="notificacion_cantidad_mensajes" class="new-notification"><?=$cantidad_mensajes?></span></a>
                            <ul id="lista_mensaje" class="dropdown-menu" role="menu" style="">
                                
                                <?php
                                    foreach( $mensajes as $mensaje ){
                                ?>
                                    <li>
                                      <div class="row" style="width: 350px;padding: 10px 5px;">  
                                        <div class="col-xs-3 col-sm-3">
                                            <img src="<?=base_url().$mensaje->url_foto_ejecutivo_empresa_contratista?>" alt="Scott Stevens" class="img-responsive img-circle" />
                                        </div>
                                        <div class="col-xs-9 col-sm-9">
                                            <span class="name"><?=$mensaje->titulo_mensaje_trabajador?></span><br/>
                                            <span class="text-muted"><?=$mensaje->cuerpo_mensaje_trabajador?></span>
                                        </div>
                                      </div>
                                    </li>
                                <?php
                                    }
                                ?>
                                

                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                        <li id="foto_superior_top" class="user-profile-pic dropdown" style="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img id="foto_editar_perfil_superior" src="<?=base_url().$this->session->userdata('sigesco_laboral_foto')?>" alt=""></a>
                            <ul class="dropdown-menu">
                                <li><a style="cursor:pointer;" data-toggle="modal" data-target="#modal_informacion_personal">Editar</a></li>
                                <li><a href="<?=base_url()?>login/cerrar_sesion">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .register-user -->
          </div> <!-- end. header-notification-bar  -->

          <!--
          END HEADER NOTIFICATION TOP BAR
          -->

          <!-- Navigation -->
          <div class="main-navbar">

            <nav class="navbar navbar-default">
              <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?=base_url()?>laboral"><img id="foto_editar_perfil_superior" src="img/logo_superior.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="<?=base_url()?>laboral">Inicio</a></li>

                    <li class="dropdown" style="display:none;">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Job
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="job-search.html">job search</a></li>
                        <li><a href="job-preview.html">Job Preview</a></li>
                        <li><a href="job-registration(full-width).html">Job Registration (full-width)</a></li>
                        <li><a href="job-registration(sidebar).html">Job Registration (sidebar)</a></li>
                      </ul>
                    </li>
                    <li><a href="<?=base_url()?>documentacion">Documentacion</a></li>
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
            </nav>
          </div> <!-- main-navbar -->
          <!-- end .header-top-bar -->
        </div>


      </header>
      <!-- end #header -->
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
<script>
$( document ).ready(function() { 
    
    $(".candidate-profile-picture").mouseover(function() {
        $("#editar_perfil").slideDown( "slow" );
    });

    $(".candidate-profile-picture").mouseleave(function() {
        $("#editar_perfil").slideUp( "slow" );
    });
});
   $(".user-profile-pic").mouseover(function(){$(".user-profile-pic").addClass("open");});
   $(".user-profile-pic").mouseout(function(){$(".user-profile-pic").removeClass("open");});
</script>
