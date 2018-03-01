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
                      <a href="<?=base_url()?>laboral"><img height="100" src="img/logo_superior.png" alt=""></a>
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
                        <li><a href="#"><i class="fa fa-envelope-o"></i></a><span class="new-notification">3</span></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                        <li class="user-profile-pic"><a href="#"><img id="foto_editar_perfil_superior" src="<?=$this->session->userdata('sigesco_laboral_foto')?>" alt=""></a></li>
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

      <!-- header Search bar -->



      <!-- end .header-banner -->