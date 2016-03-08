<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lamp Server</title>

  <!-- Bootstrap core CSS -->

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!--<link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="assets/css/icon.css" rel="stylesheet">

  <script src="assets/js/jquery-1.11.0.min.js"></script>
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="assets/images/apache-logo.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido</span>
              <h2>
              <?php
              echo php_uname('n');

              ?>
            </h2>
            <br>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-rocket"></i> PROYECTOS </a>
                </li>
                <li><a target="_blank" href="http://localhost/phpmyadmin/"><i class="fa fa-database"></i> PHPMYADMIN </a>
                </li>
                <li><a target="_blank" href="info.php"><i class="fa fa-info"></i> INFO PHP </a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" >
              <span class="fa fa-angle-right" aria-hidden="true"></span>
            </a>
            <a target="_blank" href="http://www.crearmijuego.org/" data-toggle="tooltip" data-placement="top" title="Pagina web">
              <span class="fa fa-home" aria-hidden="true"></span>
            </a>
            <a target="_blank" href="https://github.com/luisfranciscocesar/Lamp-index-theme" data-toggle="tooltip" data-placement="top" title="Github">
              <span class="fa fa-github-alt" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" >
              <span class="fa fa-angle-left" aria-hidden="true"></span>
            </a>

          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                 Lamp Server corriendo en
                   <?php
                   echo php_uname('s');
                   ?> -
                   <?php
                    echo php_uname('r');
                   ?>
                </a>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="filemanager"> <!-- filemanager -->
          <div class="right_col" role="main">

            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Proyectos</h3>
                </div>

                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <div class="search">
                        <input type="search" class="form-control" placeholder="Buscar...">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">

                    <div class="x_content">


                            <!-- start project list -->
                            <table class="table table-striped projects">
                              <thead>
                                <tr>
                                  <th style="width: 25%">Nombre</th>
                                  <th>Tamaño</th>
                                  <th>Tipo</th>
                                  <th>Fecha de modificación</th>
                                </tr>
                              </thead>
                              <tbody class="datafiles">

                              </tbody>
                            </table>
                            <!-- end project list -->
                  <div class="nothingfound">
                    <div class="nofiles"></div>
                    <span>No hay Archivos.</span>
                  </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- footer content -->
            <footer>
              <div class="copyright-info">
                <p class="pull-right">
                  <?php
                      $version = apache_get_version();
                      echo "$version\n";
                  ?>
                </p>
              </div>
              <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->

          </div>
        </div><!-- filemanager -->

      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="assets/js/bootstrap.min.js"></script>

  <!-- chart js -->
  <script src="assets/js/chartjs/chart.min.js"></script>
  <!-- bootstrap progress js -->
  <script src="assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="assets/js/icheck/icheck.min.js"></script>

  <script src="assets/js/custom.js"></script>

  <!-- pace -->
  <script src="assets/js/pace/pace.min.js"></script>
  <!-- files -->
  <script src="assets/js/script.js"></script>
</body>

</html>
