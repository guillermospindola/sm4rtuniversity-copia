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
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
     <link href="./assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
                                <a class='has-arrow' href='admin.php' aria-expanded='false'><i class='mdi mdi-wrench'></i><span class='hide-menu'>Administración </span></a>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Solicitud</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Solicitud</li>
                        </ol>
                    </div>
                   <?php 
                    $usersdus = getTotalSDUs($mysqli, $_SESSION['id']);
                    $useryearsdus = getYearsSDUs($mysqli, $_SESSION['id']);

                    ?>
                        <div class="col-md-7 col-4 align-self-center">
                            <div class="d-flex m-t-10 justify-content-end">
                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                    <div class="chart-text m-r-10">
                                        <h6 class="m-b-0"><small><?php echo date("Y"); ?></small></h6>
                                        <h4 class="m-t-0 text-info"><?php echo $useryearsdus[0];?> SDUs</h4></div>
                                    <div class="spark-chart">
                                        <div id="monthchart"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                    <div class="chart-text m-r-10">
                                        <h6 class="m-b-0"><small>Histórico</small></h6>
                                        <h4 class="m-t-0 text-primary"><?php echo $usersdus[0];?> SDUs</h4></div>
                                    <div class="spark-chart">
                                        <div id="lastmonthchart"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                                
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
                                <h4 class="m-b-0 text-white">Estado de la solicitud</h4>
                            </div>
                            <div class="card-block">
                                <form action="./includes/update_adminrequested.php" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title">Información de la solicitud</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                    <label class="control-label">Nombre del curso/certificación</label>
                                                    <input value="<?php echo $_GET['cname']?>" readonly type="text" id="name" name="name" class="form-control" >
                                                      <small class="form-control-feedback">Nombre descriptivo del proyecto</small>  </div>
            
                                                     <div class="form-group">
                                                    <label class="control-label">Usuario solicitante</label>
                                                    <input value="<?php echo $_GET['mname']?>" readonly type="text" id="requester" name="requester" class="form-control" >
                                                    <small class="form-control-feedback">Usuario que solocita el curso/certificación</small>  </div>
													
													<input hidden name="mid" id="mid" value="<?php echo $_GET['mid'];?>">
													<input hidden name="cid" id="mid" value="<?php echo $_GET['cid'];?>">

                                                 
                                            </div>
                                            <!--/span-->
                                        
                                        <!--/row-->
                                        
                                             <div class="col-md-6">

                                                                                 
 <div class="form-group">
                                 <label>Estado</label>
                                 <select id="status" readonly name="status" class="form-control custom-select">
                    <option value="Revisión" <?php if($_GET['status']=='Revisión'||$_GET['status']==''){echo "selected='selected'";}?>>Revisión</option>
                    <option value="Aprobado" <?php if($_GET['status']=='Aprobado'){echo "selected='selected'";}?>>Aprobado</option>
                    <option value="Rechazado" <?php if($_GET['status']=='Rechazado'){echo "selected='selected'";}?>>Rechazado</option>
                    </select>
                                                    <small class="form-control-feedback"> Estado del proyecto</small>
                                                    </div> 
													
										<?php
												$e403 = "​Error 403, ¡Forbidden! Sin privilegios por adeudo de​ certificación​.​ ​Ponte en contacto con el Team de Sm4rt-u.";
												$e100 = "Error 100. ¡Continue!, Intenta más adelante, te ​falta​n unos meses ​para poder ser considerado. ";
												$e418 = "​Error 418. ¡You are a teapot!, ​No te satures, ​estás por realizar un examen de certificación​. Cuidamos no asignarte capacitaciones simultáneas​ para que te enfoques mejor.​";
												$e404 = "Error 404. ¡Not Found!, Incumplimiento en pre-requisitos establecidos por el curso. ​";	
												$e510 = "​Error 510, !Not Extended! ​ ​los conocimientos de este curso/certificación no se ajustan a tu perfil.";
												$e204 = "​Error 204. ¡No Content!, ​estarás en lista de espera para próximos grupos.";
												$aceptado = "¡Nuevo reto! Estás dentro, recibirás los detalles por email.";
												$revision = "Tu solicitud esta en revisión por parte del área de capacitación.";
										?>		
				<div class="form-group">
                                 <label>Comentarios</label>
                                 <select id="comments" onchange="setValue()" name="comments" class="form-control custom-select">
				   <option value="<?php echo $revision;?>" <?php if($_GET['comments']==""){echo "selected='selected'";}?>><?php echo $revision;?></option>
                   <option value="<?php echo $aceptado;?>" <?php if($_GET['comments']==$aceptado){echo "selected='selected'";}?>><?php echo $aceptado;?></option>
                   <option value="<?php echo $e204;?>" <?php if($_GET['comments']==$e403){echo "selected='selected'";}?>><?php echo $e204;?></option>
				   <option value="<?php echo $e100;?>" <?php if($_GET['comments']==$e100){echo "selected='selected'";}?>><?php echo $e100;?></option>
				   <option value="<?php echo $e418;?>" <?php if($_GET['comments']==$e418){echo "selected='selected'";}?>><?php echo $e418;?></option>
				   <option value="<?php echo $e404;?>" <?php if($_GET['comments']==$e404){echo "selected='selected'";}?>><?php echo $e404;?></option>
				   <option value="<?php echo $e510;?>" <?php if($_GET['comments']==$e510){echo "selected='selected'";}?>><?php echo $e510;?></option>
				   <option value="<?php echo $e403;?>" <?php if($_GET['comments']==$e204){echo "selected='selected'";}?>><?php echo $e403;?></option>
                    </select>
                                                    <small class="form-control-feedback"> Comentarios visibles por el usuario.</small>
                                                    </div> 
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check" ></i> Save</button>
                                        <button type="button" onclick="goBack()" class="btn btn-inverse">Cancel</button>
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
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
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
	<!--Cambiar estado automáticamente-->
	<script>
function setValue() {
    d = document.getElementById("comments").value;
if(d=='<?php echo $revision;?>'){document.getElementById('status').value='Revisión';}
if(d=='<?php echo $aceptado;?>'){document.getElementById('status').value='Aprobado';}
if(d=='<?php echo $e204;?>'){document.getElementById('status').value='Revisión';}
if(d=='<?php echo $e510;?>'){document.getElementById('status').value='Rechazado';}
if(d=='<?php echo $e404;?>'){document.getElementById('status').value='Rechazado';}
if(d=='<?php echo $e418;?>'){document.getElementById('status').value='Rechazado';}
if(d=='<?php echo $e100;?>'){document.getElementById('status').value='Rechazado';}
if(d=='<?php echo $e403;?>'){document.getElementById('status').value='Rechazado';}

else{}				
}
</script>
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
