     <!-- HEADER -->
      <header id="header">
        <div class="header-top-bar">

         <div class="header-notification-bar" style="padding:15px 0px 5px 0px;">
            <div class="non-register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-3 col-sm-6">
                    <div class="logo-section">
                      <a href="<?=base_url()?>"><img src="img/logo_superior.png" alt=""></a>
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
                            <li><a data-toggle="modal" data-target="#modal_login" href="#">Empresa</a></li>
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
                  <a class="navbar-brand" href="<?=base_url()?>"><img src="img/logo_superior.png" alt=""></a>
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

      <!-- header Search bar -->



      <!-- end .header-banner -->