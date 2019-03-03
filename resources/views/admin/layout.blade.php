<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">



    <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema | Panel Control</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.4.2/js/all.js" integrity="sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/jquery-ui/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>GYM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GYM</b>ESPARTA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span><i class="fas fa-angle-left">
            </i>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">USUARIO</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      USUARIO
                      <small>CARGO</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"> Menu Principal</li>
            <li class="active treeview">
              <a href="/admin">
                <i class="fas fa-home"></i> <span> Inicio</span>
              </a>
              


              </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-user-tie"></i>
                <span> Personal</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/personal/create"><i class="fas fa-plus-circle"></i> Registrar Personal</a></li>
                <li><a href="/personal/"><i class="fas fa-bars"></i> Listar Personal</a></li>
              </ul>
            </li>

              
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-users"></i>
                <span> Clientes</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/clientes/create"><i class="fas fa-plus-circle"></i> Registrar Clientes</a></li>
                <li><a href="/clientes/"><i class="fas fa-bars"></i> Listar Clientes</a></li>
              </ul>
            </li>

  

             </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-clipboard"></i>
                <span> Planes</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/planes/create"><i class="fas fa-plus-circle"></i> Agregar Plan</a></li>
                <li><a href="/planes/"><i class="fas fa-bars"></i> Listar Plan</a></li>
              </ul>
            </li>
              





            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-dumbbell"></i>
                <span> Implementos</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/implementos/create"><i class="fas fa-plus-circle"></i> Añadir Implemento</a></li>
                <li><a href="/implementos"><i class="fas fa-bars"></i> Listar Implementos</a></li>
              </ul>
            </li>





             </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-calendar-alt"></i>
                <span> Clases</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/clases/create"><i class="fas fa-plus-circle"></i> Añadir Clase</a></li>
                <li><a href="/clases/"><i class="fas fa-bars"></i> Listar Clases</a></li>
              </ul>
            </li>




             </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-walking"></i>
                <span> Progreso Clientes</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/progreso/create"><i class="fas fa-plus-circle"></i> Añadir Progreso a Clientes</a></li>
                <li><a href="/progreso/"><i class="fas fa-bars"></i> Listar Progresos</a></li>
              </ul>
            </li>


             </li>

            </li>
            <li class="treeview">
              <a href="#">
                <i class="far fa-edit"></i>
                <span> Crear Rutina</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/rutinas/create"><i class="fas fa-plus-circle"></i> Añadir Rutina</a></li>
                <!--<li><a href="/rutinas/"><i class="fas fa-bars"></i> Listar Rutina</a></li>-->
              </ul>
            </li>



             </li>
            <li class="treeview">
              <a href="#">
                <i class="far fa-calendar-check"></i>
                <span> Rutina de Ejercicios</span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/contiene/create"><i class="fas fa-plus-circle"></i> Asignar Ejercicios a Rutina</a></li>
                <li><a href="/contiene/"><i class="fas fa-bars"></i> Listar Rutina de Ejercicios</a></li>
              </ul>
            </li>





 </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-th-list"></i>
                <span> Plan Nutricional </span>
                <span class="label label-primary pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/plan_nutricional/create"><i class="fas fa-plus-circle"></i> Añadir Plan Nutricional</a></li>
                <li><a href="/plan_nutricional/"><i class="fas fa-bars"></i> Listar Plan</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
          
          @yield('content')
          <!--//aqui va el contenido-->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.1
        </div>
        <strong>Copyright &copy; 2019 <a href="http://#">Gimnasio Esparta</a>.</strong> Chiguayante.
      </footer>

    </div><!-- ./wrapper -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="/js/imprimir.js"></script>

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="/plugins/raphael-min.js"></script>
    <script src="/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>

    <script src="/js/scripts.js"></script>



  </body>
</html>
