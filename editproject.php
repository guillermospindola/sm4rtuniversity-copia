<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <title>SM4RT UNIVERSITY - Nuevo Proyecto</title>
    <!-- Bootstrap Core CSS -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- page CSS -->
     <link href="./assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="./assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="./assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="./assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="./assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

 <?php include_once 'includes/db_connect.php'; include_once 'includes/analyticstracking.php';
    include_once 'includes/functions.php';
    require_once 'includes/config.php';
    if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
      // user already logged in the site
      header("location:" . SITE_URL);
    }
    if ($_SESSION["rol"] != 'admin') {
  // user not allowed to this url
  header("location: ../dashboard.php");
}
?>
</head>

<body class="fix-header card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" style="">
                <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <!-- Logo icon -->
                            <b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="./profile_files/logo-icon.png" alt="homepage" class="dark-logo">
                                <!-- Light Logo icon -->
                                <img src="./profile_files/logo-light-icon.png" alt="homepage" class="light-logo">
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span>
                             <!-- dark Logo text -->
                             <img src="./profile_files/logo-text.png" alt="homepage" class="dark-logo">
                             <!-- Light Logo text -->    
                             <img src="./profile_files/logo-light-text.png" class="light-logo" alt="homepage"></span> </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        </ul>
                      
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php $short_name = explode(" ",$_SESSION["name"]); echo $short_name[0]."  ";?><img src="<?php echo $_SESSION['picture'];?>" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="<?php echo $_SESSION["picture"];?>" alt="user"></div>
                                                <div class="u-text">
                                                    <h4><?php echo $_SESSION["name"];?></h4>
                                                    <p class="text-muted"><?php echo $_SESSION["email"];?></p></div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="profile.php"><i class="ti-user"></i> Mi perfil</a></li>
                                        <li><a href="./includes/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- Language -->
                            <!-- ============================================================== -->
                           
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav active">
                        <ul id="sidebarnav" class="in">
                            <li class="nav-small-cap">PERSONAL</li>
                            <li>
                                <a class="has-arrow" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                                
                            </li>
                            <li>
                                <a class="has-arrow" href="./profile.php" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Mi perfil</span></a>
                                
                            </li>
                            <li class="three-column">
                                <a class="has-arrow" href="./projects.php" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Proyectos</span></a>                               <ul aria-expanded="false" class="collapse">                                     <li><a href="./announcement.php">Convocatorias</a></li>                                    <li><a href="./projects.php">Registrar Proyecto</a></li>                                </ul>                               
                               
                            </li>
							<li class="two-column">
                                <a class="has-arrow" href="./my-lectures.php" aria-expanded="false"><i class="mdi mdi-presentation"></i><span class="hide-menu">Ponencias</span></a>
                                 <ul aria-expanded="false" class="collapse">
                                    <li><a href="./my-lectures.php">Mis ponencias</a></li>
                                    <li><a href="./newspeaker.php">Registrar Ponencia</a></li>
                                </ul>
                            </li>
                            <li class="two-column">
                                 <a class="has-arrow" href="./courses" aria-expanded="false"><i class="mdi mdi-school"></i><span class="hide-menu">Formación</span></a><ul aria-expanded="false" class="collapse"><li><a href="./courses.php">Cursos</a></li><li><a href="./certifications.php">Certificaciones</a></li> <li><a href="./my-requests.php">Mis solicitudes</a></li></ul>
                                
                            </li>
								<li>
                                <a class="has-arrow" href="./help.php" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Ayuda</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="./reglamento.php">Reglamento</a></li>
                                    <li><a href="./faqs.php">FAQs</a></li> <li><a href="./tutorial.php">Tutorial</a></li>
                                </ul>
                            </li>
                            <?php
							if ($_SESSION['rol']=='admin')
							{
								echo "
                            <li>
                                <a class='has-arrow' href='./admin.php' aria-expanded='false'><i class='mdi mdi-wrench'></i><span class='hide-menu'>Administración </span></a>
                                <ul aria-expanded='false' class='collapse'>
                                    <li><a href='./users.php'>Usuarios</a></li>
                                    <li><a href='./adminprojects.php'>Proyectos</a></li>
                                    <li><a href='./admincerts.php'>Certificaciones</a></li>
                                    <li><a href='./admincourses.php'>Cursos</a></li>
                                    <li><a href='./requests.php'>Solicitudes</a></li> <li><a href='./lectures.php'>Ponencias</a></li>
                                </ul>
                                
                            </li>";
							}
							?>
                            
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Editar Proyecto</h3>
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./adminprojects.php">Administración de Proyectos</a></li>
                            <li class="breadcrumb-item active">Editar Proyecto</li>
                        </ol>
                    </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Editar Proyecto</h4>
                            </div>
                            <div class="card-block">
                                <form action="./includes/update_proposal.php" enctype="multipart/form-data" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Información Solicitada</h3>
                                        <hr>
										<?php $project = getProjectInfo($_GET['id'], $mysqli); ?>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                               <div class="form-group">
                                               <input id="id" value="<?php echo $_GET['id']?>" name="id" hidden>
                                                    <label class="control-label">Nombre del proyecto</label>
                                                    <input required type="text" id="name" value="<?php echo htmlentities($_GET['name'])?>" name="name" class="form-control" >
                                                      <small class="form-control-feedback"> Nombre descriptivo del proyecto</small>  </div>
            
                                                     <div class="form-group">
                                                    <label class="control-label">Líder del Proyecto</label>
                                                    <input required type="text" id="leader" value="<?php echo $_GET['leader']?>" name="leader"  class="form-control" >
                                                    <small class="form-control-feedback"> Correo electrónico del líder</small>  </div>

                                                     <div class="form-group">

                                                    <label class="control-label">Miembro 1</label>
                                                    <input type="text" id="member1" value="<?php echo $_GET['member1']?>" name="member1" class="form-control">
                                                    <small class="form-control-feedback"> Correo electrónico del miembro 1</small>  </div>

                                                     <div class="form-group">

                                                    <label class="control-label">Miembro 2</label>
                                                    <input type="text" id="member2" value="<?php echo $_GET['member2']?>" name="member2" class="form-control">
                                                    <small class="form-control-feedback"> Correo electrónico del miembro 2</small>  </div>
													Descargar documento: <a href="<?php echo htmlentities(urlencode($project['attachment'])); ?>"><?php echo htmlentities(basename($project['attachment']).PHP_EOL);?></a>
													<input type="text" id="valueold" hidden value="<?php echo $_GET['value'];?>" name="valueold">



                                            </div>
                                            <!--/span-->
                                        
                                        <!--/row-->
                                        
                                             <div class="col-md-6">

                                                    <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea required class="form-control" rows="8" id="description" name="description"><?php echo $_GET['description']?></textarea>
                                </div>
                                 <div class="form-group">
                                 <label>Estado</label>
                                 <select id="status" name="status" class="form-control custom-select">
                    <option value="Revisión" <?php if($_GET['status']=='Revisión'){echo "selected='selected'";}?>>Revisión</option>
                    <option value="Aprobado" <?php if($_GET['status']=='Aprobado'){echo "selected='selected'";}?>>Aprobado</option>
                    <option value="No cumple con requisitos" <?php if($_GET['status']=='No cumple con requisitos'){echo "selected='selected'";}?>>No cumple con requisitos</option>
                    <option value="Completado" <?php if($_GET['status']=='Completado'){echo "selected='selected'";}?>>Completado</option>
					<option value="Completado_Inconformidad" <?php if($_GET['status']=='Completado_Inconformidad'){echo "selected='selected'";}?>>Completado con Inconformidades</option>
                                                    </select>
                                                    <small class="form-control-feedback"> Estado del proyecto</small>
                                                    </div> 

                                                <div class="form-group">

                                                <label>Puntaje</label>
                                                <div class="controls">
                                            <input type="number" name="value" class="form-control" min="0" value="<?php echo $_GET['value'];?>" aria-invalid="false">
                                            </div>
                                            <small class="form-control-feedback"> Valor en SDUs</small></div>
								<?php 
								 if($_GET['ganador']=='si')
	   {
		   $ganador="checked";
	   }      
								?>
                                                
												<div class="demo-checkbox">
                                    <input type="checkbox" id="ganador" name="ganador" value="si" <?php echo $ganador;?>>
                                    <label for="ganador">Ganador del año</label>
                                </div>



                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check" ></i> Guardar</button>
                                        <button type="button" onclick="goBack()" class="btn btn-inverse">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
               
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017 SM4RT UNIVERSITY
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="./assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="./assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Cancel Button-->
    <script>
function goBack() {
    window.history.back();
}
</script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
