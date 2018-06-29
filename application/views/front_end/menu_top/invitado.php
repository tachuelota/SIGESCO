     <!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

         <div class="header-notification-bar" style="padding:15px 0px 5px 0px;">
            <div class="non-register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-3 col-sm-6">
                    <div class="logo-section">
                      <a href="<?=base_url()?>"><img src="<?=base_url()?>img/logo_superior.png" alt=""></a>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-5">
                    &nbsp;
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="notification-section text-right">

                      <ul class="list-inline">
                        <li style="display:none;"><a href="#">ES<i class="fa fa-caret-down"></i></a>
                          <ul>
                            <!--<li><a href="#">DE</a></li>
                            <li><a href="#">ES</a></li>
                            <li><a href="#">IT</a></li>-->
                          </ul>

                        </li>
                            <li><a data-toggle="modal" data-target="#modal_login_empresa" href="#">Empresa</a></li>
                            <li><a href="#">Trabajador</a>
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#modal_login" >Chileno</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#modal_login_extranjero" >Extranjero</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Registrarse</a>
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#modal_registro" >Chileno</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#modal_registro_extranjero" >Extranjero</a></li>
                                    <li><a href="<?=base_url()?>empresa/crear">Empresa</a></li>
                                </ul>
                            </li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->


          <!--
          END HEADER TOP BAR FOR WITHOUT LOGIN USER
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
                  <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>img/logo_superior.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="<?=base_url()?>">Home</a></li>

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
                    <li class="dropdown" style="display:none;">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidate
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="candidate-profile.html">candidate profile</a></li>
                        <li><a href="candidate-registration.html">Candidate registration</a></li>
                      </ul>
                    </li>
                    <li style="display:none;"><a href="professionals.html">Professionals</a></li>
                    <li class="dropdown" style="display:none;">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our clients
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="clients.html">Our clients</a></li>
                        <li><a href="add-client.html">Quick add client</a></li>
                        <li><a href="client-profile(tab1).html">Client profile</a></li>
                        <li><a href="client-profile(tab2).html">Client team</a></li>
                        <li><a href="client-profile(tab3).html">Applicants</a></li>
                        <li><a href="client-registration.html">Client registration</a></li>
                      </ul>
                    </li>

                    <li class="dropdown" style="display:none;">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agent
                        <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="our-agents.html">Our agents</a></li>
                        <li><a href="agent-profile.html">Agent profile</a></li>
                        <li><a href="add-agents.html">Add agent</a></li>
                      </ul>
                    </li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="<?=base_url()?>registro">Registro</a></li>
                    <li><a href="<?=base_url()?>contacto">Contacto</a></li>
                  </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container -->
            </nav>
          </div> <!-- main-navbar -->
          <!-- end .header-top-bar -->
        </div>


      </header>
      <!-- end #header -->

<!-- MODAL REGISTRO -->
<div id="modal_registro" class="modal fade">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="text-align:center;" class="modal-title">Registro de Trabajador Chileno</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_registro_laboral" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="nombre_sigesco_laboral" name="nombre_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Nombre" aria-label="Nombre" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="paterno_sigesco_laboral" name="paterno_sigesco_laboral" type="text" class="form-control validate" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="pass_sigesco_laboral" name="pass_sigesco_laboral" type="password" class="form-control validate" required="true" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="repetir_pass_sigesco_laboral" name="repetir_pass_sigesco_laboral" type="password" class="form-control validate" placeholder="Repetir Contraseña">
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="run_sigesco_laboral" name="run_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="R.U.N" aria-label="RUN" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="ciudad_buscar_sigesco_laboral" name="ciudad_buscar_sigesco_laboral" type="text" class="form-control validate" placeholder="Ciudad" aria-label="Ciudad">
                            <input style="display:none" id="ciudad_sigesco_laboral" name="ciudad_sigesco_laboral" type="text" class="form-control validate" placeholder="Ciudad" aria-label="Ciudad">
                        </div>
                    </div>
                      
                  </div>
                  <div class="row" style="padding:5px 10px">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="celular_sigesco_laboral" name="celular_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Teléfono de Contacto" aria-label="Teléfono de Contacto" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="email_sigesco_laboral" name="email_sigesco_laboral" type="email" class="form-control validate" placeholder="Email" aria-label="Email">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_registro_trabajador_laboral" style="color:white;" type="button" class="btn btn-primary">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL REGISTRO -->

<!-- MODAL REGISTRO EXTRANJERO -->
<div id="modal_registro_extranjero" class="modal fade">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="text-align:center;" class="modal-title">Registro de Trabajador Extranjero</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_registro_laboral_extranjero" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="nombre_extranjero_sigesco_laboral" name="nombre_extranjero_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Nombre" aria-label="Nombre" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="paterno_extranjero_sigesco_laboral" name="paterno_extranjero_sigesco_laboral" type="text" class="form-control validate" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="pass_extranjero_sigesco_laboral" name="pass_extranjero_sigesco_laboral" type="password" class="form-control validate" required="true" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="repetir_pass_extranjero_sigesco_laboral" name="repetir_pass_extranjero_sigesco_laboral" type="password" class="form-control validate" placeholder="Repetir Contraseña">
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="run_extranjero_sigesco_laboral" name="run_extranjero_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="DNI / Pasaporte / Cedula de Identidad" aria-label="RUN" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="ciudad_buscar_extranjero_sigesco_laboral" name="ciudad_buscar_extranjero_sigesco_laboral" type="text" class="form-control validate" placeholder="Ciudad" aria-label="Ciudad">
                            <input style="display:none" id="ciudad_extranjero_sigesco_laboral" name="ciudad_extranjero_sigesco_laboral" type="text" class="form-control validate" placeholder="Ciudad" aria-label="Ciudad">
                        </div>
                    </div>
                  </div>
                  <div class="row" style="padding:5px 10px">
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="celular_extranjero_sigesco_laboral" name="celular_extranjero_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Teléfono de Contacto" aria-label="Teléfono de Contacto" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-6" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="email_extranjero_sigesco_laboral" name="email_extranjero_sigesco_laboral" type="email" class="form-control validate" placeholder="Email" aria-label="Email">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_registro_extranjero_trabajador_laboral" style="color:white;" type="button" class="btn btn-primary">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL REGISTRO EXTRANJERO -->

<!-- MODAL LOGIN -->
<div id="modal_login" class="modal fade">
    <div class="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ingreso a la Plataforma Trabajador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_login_laboral_extranjero" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="email_login_sigesco_laboral" name="email_login_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Run o Email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="pass_login_sigesco_laboral" name="pass_login_sigesco_laboral" type="password" class="form-control validate" placeholder="Contraseña" aria-label="Contraseña">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_ingreso_trabajador_laboral" style="color:white;" type="button" class="btn btn-primary">Ingresar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL LOGIN -->

<!-- MODAL LOGIN EMPRESA-->
<div id="modal_login_empresa" class="modal fade">
    <div class="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ingreso a la Plataforma Empresa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_login_empresa" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="email_empresa_login_sigesco_laboral" name="email_empresa_login_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Run o Email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="pass_empresa_login_sigesco_laboral" name="pass_empresa_login_sigesco_laboral" type="password" class="form-control validate" placeholder="Contraseña" aria-label="Contraseña">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_ingreso_empresa" style="color:white;" type="button" class="btn btn-primary">Ingresar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL LOGIN EMPRESA-->

<!-- MODAL LOGIN EXTRANJERO -->
<div id="modal_login_extranjero" class="modal fade">
    <div class="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ingreso a la Plataforma Trabajador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="form_login_laboral" method="post" >
                  <div class="row" style="padding:5px 10px;">
                    <div class="col-sm col-lg-12">
                        <div class="input-group input-group-lg" style="width:100%">
                              <input id="email_login_extranjero_sigesco_laboral" name="email_login_extranjero_sigesco_laboral" type="text" class="form-control validate" required="true" placeholder="Run o Email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="col-sm col-lg-12" style="margin-top:10px;">
                        <div class="input-group input-group-lg" style="width:100%">
                            <input id="pass_login_extranjero_sigesco_laboral" name="pass_login_extranjero_sigesco_laboral" type="password" class="form-control validate" placeholder="Contraseña" aria-label="Contraseña">
                        </div>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button id="boton_ingreso_extranjero_trabajador_laboral" style="color:white;" type="button" class="btn btn-primary">Ingresar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN MODAL LOGIN EXTRANJERO-->

<script>
            
        $( "#boton_registro_trabajador_laboral" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#nombre_sigesco_laboral").val().length > 0){$( "#nombre_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#paterno_sigesco_laboral").val().length > 0){ $( "#paterno_sigesco_laboral" ).css( "border-color","#ccc" );
            if(($("#pass_sigesco_laboral").val().length > 0) && ($("#repetir_pass_sigesco_laboral").val().length > 0) 
               ){ 
                $( "#pass_sigesco_laboral" ).css( "border-color","#ccc" );
                $( "#repetir_pass_sigesco_laboral" ).css( "border-color","#ccc" );
            if(($("#pass_sigesco_laboral").val()) == ($("#repetir_pass_sigesco_laboral").val())){
                $( "#pass_sigesco_laboral" ).css( "border-color","#ccc" );
                $( "#repetir_pass_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#run_sigesco_laboral").val().length > 0){ $( "#run_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#ciudad_sigesco_laboral").val().length > 0){ $( "#ciudad_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#celular_sigesco_laboral").val().length > 0){ $( "#celular_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#email_sigesco_laboral").val().length > 0){ $( "#email_sigesco_laboral" ).css( "border-color","#ccc" );
                    bootbox.confirm({ 
                                      size: "medium",
                                      buttons: {
                                        confirm: {
                                          label: 'Crear',
                                          className: 'btn-success color_blanco'
                                        },
                                        cancel: {
                                          label: 'Cerrar',
                                          className: 'btn-danger color_blanco'
                                        }
                                      },
                                      title: "Registrase en la Plataforma",
                                      message: "¿Esta seguro de <strong> Regitrarse</strong> en SIGESCO?", 
                                      callback: function(result){

                                      if(result == true){
                                          
                                          $.ajax({
                                                type: 'POST',
                                                url: '<?=base_url()?>inicio/registro_trabajador_laboral',
                                                data: $('#form_registro_laboral').serialize(),
                                                success: function(data){
                                                    switch(data) {
                                                        case '1':
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
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
                                                            Command: toastr["success"]("Se envio un correo electronico a su cuenta Email. Favor de Verificar.", "Registro Realizado")
                                                            break;
                                                        case '0':
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
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
                                                            break;
                                                            
                                                         case "run":
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "5000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                                            toastr.options.onclick = function () {
                                                                alert('Aqui la funcion de recuperar');
                                                            };
                                                            Command: toastr["error"]("Este RUN ya esta registrado en nuestra Plataforma. Recuperar cuenta click aquí.", "RUN Registrado")
                                                            break;
                                                    }

                                                    
                                                }

                                            });
                                       }
                                      }  
                                    });
            }else{
                $( "#email_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
            }
            }else{
                $( "#celular_sigesco_laboral" ).css(  "border-color","red" );
                $( "#celular_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Celular'</strong> por favor.", "Celular")
            }
            }else{
                $( "#ciudad_sigesco_laboral" ).css(  "border-color","red" );
                $( "#ciudad_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
            }
            }else{
                $( "#run_sigesco_laboral" ).css(  "border-color","red" );
                $( "#run_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'R.U.N'</strong> por favor.", "RUN")
            }
            }else{
                $( "#pass_sigesco_laboral" ).css( "border-color","red" );
                $( "#repetir_pass_sigesco_laboral" ).css( "border-color","red" );
                $( "#pass_sigesco_laboral" ).focus();
                Command: toastr["error"]("Las <strong>'Contraseñas'</strong> no coinciden, repítalas por favor.", "Rpetir Contraseñas")
            }
            }else{
                $( "#pass_sigesco_laboral" ).css( "border-color","red" );
                $( "#repetir_pass_sigesco_laboral" ).css( "border-color","red" );
                $( "#pass_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
            }
            }else{
                $( "#paterno_sigesco_laboral" ).css( "border-color","red" );
                $( "#paterno_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Apellido Paterno'</strong> por favor.", "Apellido Paterno")
            }
            }else{
                $( "#nombre_sigesco_laboral" ).css(  "border-color","red" );
                $( "#nombre_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
            }
            
        });
        
        $( "#boton_registro_extranjero_trabajador_laboral" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#nombre_extranjero_sigesco_laboral").val().length > 0){$( "#nombre_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#paterno_extranjero_sigesco_laboral").val().length > 0){ $( "#paterno_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if(($("#pass_extranjero_sigesco_laboral").val().length > 0) && ($("#repetir_pass_extranjero_sigesco_laboral").val().length > 0) 
               ){ 
                $( "#pass_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
                $( "#repetir_pass_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if(($("#pass_extranjero_sigesco_laboral").val()) == ($("#repetir_pass_extranjero_sigesco_laboral").val())){
                $( "#pass_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
                $( "#repetir_pass_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#run_extranjero_sigesco_laboral").val().length > 0){ $( "#run_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#ciudad_extranjero_sigesco_laboral").val().length > 0){ $( "#ciudad_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#celular_extranjero_sigesco_laboral").val().length > 0){ $( "#celular_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
            if($("#email_extranjero_sigesco_laboral").val().length > 0){ $( "#email_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
                                    bootbox.confirm({ 
                                      size: "medium",
                                      buttons: {
                                        confirm: {
                                          label: 'Crear',
                                          className: 'btn-success color_blanco'
                                        },
                                        cancel: {
                                          label: 'Cerrar',
                                          className: 'btn-danger color_blanco'
                                        }
                                      },
                                      title: "Registrase en la Plataforma",
                                      message: "¿Esta seguro de <strong> Regitrarse</strong> en SIGESCO?", 
                                      callback: function(result){

                                      if(result == true){
                                          
                                          $.ajax({
                                                type: 'POST',
                                                url: '<?=base_url()?>inicio/registro_trabajador_laboral',
                                                data: $('#form_registro_laboral_extranjero').serialize(),
                                                success: function(data){
                                                    switch(data) {
                                                        case '1':
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
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
                                                            Command: toastr["success"]("Se envio un correo electronico a su cuenta Email. Favor de Verificar.", "Registro Realizado")
                                                            break;
                                                        case '0':
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
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
                                                            break;
                                                            
                                                         case "run":
                                                            $("[data-dismiss=modal]").trigger({ type: "click" });
                                                            toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": false,
                                                              "progressBar": true,
                                                              "positionClass": "toast-top-full-width",
                                                              "preventDuplicates": true,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "5000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            }
                                                            toastr.options.onclick = function () {
                                                                alert('Aqui la funcion de recuperar');
                                                            };
                                                            Command: toastr["error"]("Este RUN ya esta registrado en nuestra Plataforma. Recuperar cuenta click aquí.", "RUN Registrado")
                                                            break;
                                                    }

                                                    
                                                }

                                            });
                                       }
                                      }  
                                    });
                                }else{
                                    $( "#email_extranjero_sigesco_laboral" ).css(  "border-color","red" );
                                    $( "#email_extranjero_sigesco_laboral" ).focus();
                                    Command: toastr["error"]("Ingrese el campo <strong>'Email'</strong> por favor.", "Email")
                                }
                            }else{
                                $( "#celular_extranjero_sigesco_laboral" ).css(  "border-color","red" );
                                $( "#celular_extranjero_sigesco_laboral" ).focus();
                                Command: toastr["error"]("Ingrese el campo <strong>'Celular'</strong> por favor.", "Celular")
                            }
                        }else{
                            $( "#ciudad_extranjero_sigesco_laboral" ).css(  "border-color","red" );
                            $( "#ciudad_extranjero_sigesco_laboral" ).focus();
                            Command: toastr["error"]("Ingrese el campo <strong>'Ciudad'</strong> por favor.", "Ciudad")
                        }
                    }else{
                        $( "#run_extranjero_sigesco_laboral" ).css(  "border-color","red" );
                        $( "#run_extranjero_sigesco_laboral" ).focus();
                        Command: toastr["error"]("Ingrese el campo <strong>'R.U.N'</strong> por favor.", "RUN")
                    }
                }else{
                    $( "#pass_extranjero_sigesco_laboral" ).css( "border-color","red" );
                    $( "#repetir_pass_extranjero_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_extranjero_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Las <strong>'Contraseñas'</strong> no coinciden, repítalas por favor.", "Rpetir Contraseñas")
                }
                }else{
                    $( "#pass_extranjero_sigesco_laboral" ).css( "border-color","red" );
                    $( "#repetir_pass_extranjero_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_extranjero_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
                }else{
                    $( "#paterno_extranjero_sigesco_laboral" ).css( "border-color","red" );
                    $( "#paterno_extranjero_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Apellido Paterno'</strong> por favor.", "Apellido Paterno")
                }
            }else{
                
                $( "#nombre_extranjero_sigesco_laboral" ).css(  "border-color","red" );
                $( "#nombre_extranjero_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Nombre'</strong> por favor.", "Nombre")
            }
            
        });
        
        $( "#boton_ingreso_trabajador_laboral" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#email_login_sigesco_laboral").val().length > 0){$( "#email_login_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#pass_login_sigesco_laboral").val().length > 0){ $( "#pass_login_sigesco_laboral" ).css( "border-color","#ccc" );
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>login/validar',
                        data: {user: $("#email_login_sigesco_laboral").val() ,pass: $("#pass_login_sigesco_laboral").val()},
                        success: function(data){
                            
                            if(data == true){
                                redireccionarPagina('<?=base_url()?>laboral');
                            }else{
                                 
                                Command: toastr["error"]("Rut/Email o Contraseña Incorrecta. Favor de Verificar.", "Error de Ingreso");
                            }
                        }
                    });
                }else{
                    $( "#pass_login_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_login_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
            }else{
                
                $( "#email_login_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_login_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Run o Email'</strong> por favor.", "RUN o Email")
            }
            
        });
    
        $( "#boton_ingreso_empresa" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#email_empresa_login_sigesco_laboral").val().length > 0){$( "#email_empresa_login_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#pass_empresa_login_sigesco_laboral").val().length > 0){ $( "#pass_empresa_login_sigesco_laboral" ).css( "border-color","#ccc" );
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>login/validar_empresa',
                        data: {user: $("#email_empresa_login_sigesco_laboral").val() ,pass: $("#pass_empresa_login_sigesco_laboral").val()},
                        success: function(data){
                            
                            if(data == true){
                                redireccionarPagina('<?=base_url()?>empresa');
                            }else{
                                 
                                Command: toastr["error"]("Rut/Email o Contraseña Incorrecta. Favor de Verificar.", "Error de Ingreso");
                            }
                        }
                    });
                }else{
                    $( "#pass_empresa_login_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_empresa_login_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
            }else{
                
                $( "#email_empresa_login_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_empresa_login_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Run o Email'</strong> por favor.", "RUN o Email")
            }
            
        });
        
        $( "#boton_ingreso_etranjero_trabajador_laboral" ).click(function() {
            
                    toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": true,
                      "positionClass": "toast-top-right",
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                    };
            
            if($("#email_login_extranjero_sigesco_laboral").val().length > 0){$( "#email_login_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
                if($("#pass_login_extranjero_sigesco_laboral").val().length > 0){ $( "#pass_login_extranjero_sigesco_laboral" ).css( "border-color","#ccc" );
                    $.ajax({
                        type: 'POST',
                        url: '<?=base_url()?>login/validar',
                        data: {user: $("#email_login_extranjero_sigesco_laboral").val() ,pass: $("#pass_login_extranjero_sigesco_laboral").val()},
                        success: function(data){
                            
                            if(data == true){
                                redireccionarPagina('<?=base_url()?>laboral');
                            }else{
                                 
                                Command: toastr["error"]("Rut/Email o Contraseña Incorrecta. Favor de Verificar.", "Error de Ingreso");
                            }
                        }
                    });
                }else{
                    $( "#pass_login_sigesco_laboral" ).css( "border-color","red" );
                    $( "#pass_login_sigesco_laboral" ).focus();
                    Command: toastr["error"]("Ingrese el campo <strong>'Contraseña'</strong> por favor.", "Contraseña")
                }
            }else{
                
                $( "#email_login_sigesco_laboral" ).css(  "border-color","red" );
                $( "#email_login_sigesco_laboral" ).focus();
                Command: toastr["error"]("Ingrese el campo <strong>'Run o Email'</strong> por favor.", "RUN o Email")
            }
            
        });       
    
</script>