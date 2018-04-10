    <!DOCTYPE html>
    <!-- saved from url=(0086)https://wrappixel.com/demos/admin-templates/material-pro/horizontal/pages-profile.html -->
    <html lang="en"><head><meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
        <title>SM4RT UNIVERSITY</title>
        <!-- Bootstrap Core CSS -->
        <link href="./profile_files/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="./profile_files/style.css" rel="stylesheet">
		<!-- tooltip -->
		<link href="./css/tooltip.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="./profile_files/blue.css" id="theme" rel="stylesheet">
		<!-- FRAME-BREAKER Para prevenir clickjacking-->
		<!--style id="antiClickjack">body{display:none !important;}</style>
		<script type="text/javascript">
   if (self === top) {
       var antiClickjack = document.getElementById("antiClickjack");
       antiClickjack.parentNode.removeChild(antiClickjack);
   } else {
       top.location = self.location;
   }
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105771940-1', 'auto');
  ga('send', 'pageview');

</script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		
    <![endif]-->
	
	<?php 
	header("Content-Type: text/html;charset=utf-8");
	include './includes/db_connect.php';
    include './includes/functions.php';
    include './includes/config.php';
	if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
      // user already logged in the site
      header("location:" . SITE_URL);
    }
    if(!isset($_GET['id']))
              {
                  $_GET['id']=$_SESSION['id'];
              }

			  
    $user=getUserInfo (htmlentities($_GET['id']), $mysqli);
	updateBadges($mysqli, $user['id']);
	
    ?>


    <body class="fix-header card-no-border logo-center">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display: none;">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
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
                                <a class="has-arrow" href="" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Mi perfil</span></a>
                                
                            </li>
                            <li class="three-column">
                                <a class="has-arrow" href="./projects.php" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Proyectos</span></a>
                               <ul aria-expanded="false" class="collapse">                                  
                                    <li><a href="./announcement.php">Convocatorias</a></li>
                                    <li><a href="./projects.php">Registrar Proyecto</a></li>
                                </ul>
                            </li>
							<li class="two-column">
                                <a class="has-arrow" href="./my-lectures.php" aria-expanded="false"><i class="mdi mdi-presentation"></i><span class="hide-menu">Ponencias</span></a>
                                 <ul aria-expanded="false" class="collapse">
                                    <li><a href="./my-lectures.php">Mis ponencias</a></li>
                                    <li><a href="./newspeaker.php">Registrar Ponencia</a></li>
                                </ul>
                            </li>
							
                            <li class="two-column">
                                <a class="has-arrow" href="./courses" aria-expanded="false"><i class="mdi mdi-school"></i><span class="hide-menu">Formación</span></a>
                                 <ul aria-expanded="false" class="collapse">
                                    <li><a href="./courses.php">Cursos</a></li>
                                    <li><a href="./certifications.php">Certificaciones</a></li>
									<li><a href="./my-requests.php">Mis solicitudes</a></li>
                                    <li><a href="./iso.php">ISO 27001</a></li>
                                </ul>
                            </li>

                            <li class="two-column">
                                <a href="./chamilo/index.php" aria-expanded="false" class="has-arrow"><i class="mdi mdi-school"></i><span class="hide-menu">LMS</span></a>
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
            <div class="page-wrapper" style="min-height: 606px;">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0">Perfil</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item active">Perfil</li>
                            </ol>
                        </div>
                         <?php  
                    $usersdus = getTotalSDUs($mysqli, $_SESSION['id']);
                    $useryearsdus = getYearsSDUs($mysqli, $_SESSION['id']);
					$profilesdus = $user['certsdu']+$user['coursesdu']+$user['projectsdu'];

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
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-block">
                                    <center class="m-t-30"> <img src="<?php echo $user['picture']; ?>" class="img-circle" width="150">
                                        <h4 class="card-title m-t-10"><?php echo $user['name'];?></h4>
                                        <h6 class="card-subtitle"><?php echo $user['area'];?></h6>
                                        <div class="row text-center justify-content-md-center">
                                            <div class="col-4"><i class="icon-people"></i> <font class="font-medium"><?php echo $profilesdus;?> SDU's</font></div>
                                            
                                        </div>
                                    </center>
                                </div>
                                <div>
                                    <hr> </div>
                                <div class="card-block"> <small class="text-muted">Email</small>
                                    <h6><?php echo $user['email'] ?></h6> <small class="text-muted p-t-30 db">Número de Empleado</small>
                                    <h6><?php echo $user['numero_empleado'] ?></h6> <small class="text-muted p-t-30 db">Dirección</small>
                                    <h6><?php echo $user['direccion'] ?></h6>
									<br><small class="text-muted">Ubicación</small>
                                    <h6><?php echo $user['location'] ?></h6>

                                   <div>
                                    <hr> </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <!-- Nav tabs -->
                                
                                    <?php 
                                    
                                    $cert = getMaxCertSDUs($mysqli);
                                    if($cert != 0)
                                    {
                                    $sducert = (100*$user["certsdu"])/$cert[0];
                                    }

                                    $cours = getMaxCourseSDUs($mysqli);
                                    if($cours != 0)
                                    {
                                    $sduco = (100*$user["coursesdu"])/$cours[0];
                                    }

                                    $proj = getMaxProjectSDUs($mysqli);
                                        if($proj != 0)
                                    {
                                    $sduproj = (100*$user["projectsdu"])/$proj[0];
                                    }

                                    ?>
                                    
                                        <div class="card-block">
                                            
    										<div class="card-group">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Certificaciones</h3>
                                        <h6 class="card-subtitle"><?php echo $user["certsdu"]; ?> SDU's</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $sducert; ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Cursos</h3>
                                        <h6 class="card-subtitle"><?php echo $user["coursesdu"]; ?> SDU's</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $sduco; ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Proyectos</h3>
                                        <h6 class="card-subtitle"><?php echo $user["projectsdu"]; ?> SDU's</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $sduproj;?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
					<div class="col-12">
						<div class="card">
                            <div class="card-block">

							   <h2>Badges</h2>
							   					   			   
                                <?php echo getBadges($mysqli, $user['id']);?>
                            </div>
                            </div>
							</div>
    				 <div class="col-12">
                     <div class="card">
                            <div class="card-block">
                            <h2 class="card-title">Historial</h2>
                                
    				
    				 <div class="table-responsive" style="width:33%; float:left;">
                                        <table class="table color-table info-table" >
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Certificaciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php echo getUserCourses($user['id'], 'Certificacion', $mysqli); ?>
                                            </tbody>
                                        </table>
                                    </div>
    								
    										 <div class="table-responsive" style="width:33%; float:left;">
    										 
                                        <table class="table color-table info-table" >
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Cursos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php echo getUserCourses($user['id'], 'Curso', $mysqli); ?>
                                            </tbody>
                                        </table>
                                    </div>
    				 <div class="table-responsive" style="width:34%;">
    				
                                        <table class="table color-table info-table" >
                                            <thead>
                                                <tr>
                                                    <th>Proyectos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php echo getUserProjects($user['email'], $mysqli); ?>
                                            </tbody>
                                        </table>
                                    </div>						
                                        </div>
                                    </div>
                                   
                                </div>

                            </div>
    						</div>
                            </div>
    					
                        <!-- Column -->
                    </div>
                    <!-- Row -->
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    
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
        <script src="./profile_files/jquery.min.js.descarga"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="./profile_files/tether.min.js.descarga"></script>
        <script src="./profile_files/bootstrap.min.js.descarga"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="./profile_files/jquery.slimscroll.js.descarga"></script>
        <!--Wave Effects -->
        <script src="./profile_files/waves.js.descarga"></script>
        <!--Menu sidebar -->
        <script src="./profile_files/sidebarmenu.js.descarga"></script>
        <!--stickey kit -->
        <script src="./profile_files/sticky-kit.min.js.descarga"></script>
        <script src="./profile_files/jquery.sparkline.min.js.descarga"></script>
        <!--Custom JavaScript -->
        <script src="./profile_files/custom.min.js.descarga"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="./profile_files/jQuery.style.switcher.js.descarga"></script>



    </body></html>