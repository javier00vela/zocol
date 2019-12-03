
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ZOCOL</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link id="iconSys" rel="shortcut icon" href="src/images/sys/logotipo.png">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="src/fonts/montserrat/Montserrat-Regular.ttf">
  <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="src/fonts/montserrat/Montserrat-Medium.ttf">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/libs/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/libs/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/libs/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/libs/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/css/util.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/css/main.css">
  <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="src/css/globalCSS.css">
   <!--===============================================================================================-->

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="src/libs//notificaciones/css/sweetalert2.min.css">
<!--===============================================================================================-->
  <script type="text/javascript" src="src/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
  <script type="text/javascript" src="src/libs/tether/js/tether.min.js"></script>
  <script type="text/javascript" src="src/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="src/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="src/libs/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="src/libs/slick/slick.min.js"></script>
  <script type="text/javascript" src="src/js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script type="text/javascript" src="src/libs/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
   <script type="text/javascript" src="src/js/globalJS.js"></script>
  <script type="text/javascript" src="src/js/ajax.js"></script>
  <script type="text/javascript" src="src/libs/notificaciones/js/sweetalert2.min.js"></script>
  <script type="text/javascript " src="src/js/validarHeader.js">;</script>
<!--===============================================================================================-->
<?php if(empty($_SESSION["Usuario"])){ ?>
</head>

  <!-- Header -->
  <header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
      <div class="topbar" style="height: 0px" ></div>

      <div class="wrap_header navbar-fixed">
        <!-- Logo -->
        <a href="#"  class="logo" style="margin-left: -30px;">
          <img src="src/images/sys/titulo.png" style="width: 240px; height: 500px;">
        </a>

        <!-- Menu -->
        <div class="wrap_menu">
          <nav class="menu">
            <ul class="main_menu">
              
              <li >
                <a href="#" id="inicio">Inicio</a>
              </li>

              <li>
                <a href="#" id="cat3">Catálogo</a>
              </li>
              <?php if(isset($_SESSION["Usuario"])){?>
              <li>
                <a href="#" id="misProductos">Mis Productos</a>
              </li>
              <li>
                <a href="#" id="perfil">Mi Perfil</a>
              </li>

              <li>
                <a href="#" id="vehiculo">Mi Vehículo</a>
              </li>
            <?php } else{ ?>
             <li>
                <a href="#" class="nav-link disabled">Mis Productos</a>
              </li>


              <li>
                <a href="#" class="nav-link disabled">Mi Perfil</a>
              </li>

              <li>
                <a href="#" class="nav-link disabled">Mi Vehiculo</a>
              </li>
              
              <?php } ?>
               <li>
                <a href="#" class="search" ><i class="fa fa-search"></i></a>
              </li>
              <li class="invisible" id="search-input">
              </li>
            </ul>
          </nav>
        </div>

        <!-- Header Icon -->

       
        <div class="header-icons">
          <?php if(isset($_SESSION["Usuario"])){?>
          <a href="#" class="header-wrapicon1 dis-block">
            <img  class="imgPerfilUser rounded-circle "  src="<?php echo $_SESSION["fotoUser"] ?>" alt="ICON" >
           
          </a>
             <span class="linedivide1"></span>
         
 <div class="header-wrapicon">

            <ul class="main_menu">
  <li>
                <a href="#" style="padding-top: 5px;"><?php echo $_SESSION["Usuario"] ?></a>
                <ul class="sub_menu">
                  <li><a href="#" id="salir">Cerrar Sesión</a></li>
                </ul>
              </li>
      </ul>
   

          </div>
          <span class="linedivide1"></span>

          <div class="header-wrapicon">
             <img src="src/images/sys/icon-header-02.png" id="canasta" class="header-icon1 js-show-header-dropdown" alt="ICON">
          </div>
        
            <?php }else{ ?>
            
            <span><i class="fa fa-lock"> <a href="#" id="login" style="color: black;"> Iniciar Sesión</a></i></span> 

                      <?php }  ?>
            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">
              </ul>

             

                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Check Out
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
      <!-- Logo moblie -->
      <a href="index.html" class="logo-mobile">
        <img src="src/images/sys/LOGOTIPO.png" alt="IMG-LOGO">
      </a>

      <!-- Button show menu -->
      <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
          <a href="#" class="header-wrapicon1 dis-block">
            <img src="src/images/sys/icon-header-01.png" class="header-icon1" alt="ICON">
          </a>

          <span class="linedivide2"></span>

          <div class="header-wrapicon2">
            <img src="src/images/sys/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
            <span class="header-icons-noti">0</span>

            <!-- Header cart noti -->
            <div class="header-cart header-dropdown">
              <ul class="header-cart-wrapitem">
              </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
      </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
      <nav class="side-menu">
        <ul class="main-menu">
   

          <li class="item-menu-mobile">
            <a href="#" id="inicio">Inicio</a>
          </li>

          <li class="item-menu-mobile">
            <a href="#" id="cat3">Catálogo</a>
          </li>

          <li class="item-menu-mobile">
            <a href="#" id="misProductos">Mis Productos</a>
          </li>

          <li class="item-menu-mobile">
            <a href="#" id="perfil">Mi Perfil</a>
          </li>

          <li class="item-menu-mobile">
            <a href="#" id="vehiculo">Mi Vehículo</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>



























<?php }else{ ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="src/admin/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="src/admin/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="src/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="src/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="src/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="src/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="src/admin/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="src/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <div class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" id="input-search-make" type="search" placeholder="enter para buscar" aria-label="Search">
        <div class="input-group-append">
      </div>
          <div class="btn btn-navbar">
            <i class="fa fa-search"></i>
          </div>
        </div>
      </div>
  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
      <img src="<?php echo $_SESSION["fotoUser"] ?>" width="30" height="30" class="img-circle" alt="User Image" style="">
    </li>
    <li>
      <a href="#">  <?php echo $_SESSION["Usuario"] ?> / </a>
    </li>
    <li>  
      <i class="fa fa-arrow-right" style="color: white;"><span><a id="salir" href="#">  salir</a></span></i>
    </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background: #94cc38;padding-left: 20px;">
      <img src="src/images/sys/titulo.png" style="height: 30px;width:200px;" class=""
           style="opacity: .8">
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="#" id="inicio" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" id="cat3" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Catalogo
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" id="misProductos" class="nav-link">
              <i class="nav-icon fa fa-product-hunt"></i>
              <p>
                Mis Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" id="perfil" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Mi Perfil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" id="vehiculo" class="nav-link">
              <i class="nav-icon fa fa-car"></i>
              <p>
                Mi vehiculo
              </p>
            </a>
          </li>
             <li class="nav-item">
            <a href="#" id="canasta" class="nav-link">
              <i class="nav-icon fa fa-shopping-basket"></i>
              <p>
                Canasta
              </p>
            </a>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->

   

<!-- jQuery -->
<script src="src/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="src/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Sparkline -->
<script src="src/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="src/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="src/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="src/admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="src/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="src/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="src/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="src/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="src/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="src/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="src/admin/dist/js/demo.js"></script>
</body>
</html>


<?php } ?>