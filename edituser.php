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
    <title>SM4RT UNIVERSITY</title>
    <!-- Bootstrap Core CSS -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                                <a class="has-arrow" href="./dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                                
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
                                <a class='has-arrow' href='' aria-expanded='false'><i class='mdi mdi-wrench'></i><span class='hide-menu'>Administración </span></a>
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
            <div class="container-fluid" >
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Editar Usuario</h3>
                        
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
               

                        <div class="row" style="overflow:hidden;" >
                        
                    <div class="col-lg-6" >
                        <div class="card" style="height:765px;">
                            <div class="card-block" >
                                <h4 class="card-title">Editar Usuario <?php echo $_GET['name']?></h4>
                                <h6 class="card-subtitle">Editar Area, Dirección y Teléfono</h6>
                                <form method="post" action="./includes/update_userinfo.php" >
								 
                                <div class="form-group">
                                <input hidden id="userid" name="userid" value="<?php echo $_GET['id']; ?>">
                                                    <label class="control-label">Número de Empleado</label>
                                                    <input required readonly type="text" id="nempleado" name="nempleado" class="form-control" value="<?php echo $_GET['nempleado']; ?>" >
                                                      <small class="form-control-feedback">Número de Empleado Success Factors</small>  </div>

                                                      <div class="form-group">
                                                    <label class="control-label">Dirección</label>
                                                    <input required readonly type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $_GET['direccion']; ?>" >
                                                      <small class="form-control-feedback">Dirección a donde pertenece el usuario</small>  </div>
													  
													    <div class="form-group">
                                                    <label class="control-label">Ubicación</label>
                                                    <input required readonly type="text" id="location" name="location" class="form-control" value="<?php echo $_GET['location']; ?>" >
                                                      <small class="form-control-feedback">Ubicación fisica del usuario</small>  </div>
													  
													  <div class="form-group">

                                                <label>Cantidad de cursos impartidos</label>
                                                <div class="controls">
                                            <input type="number" name="cimpartidos" id="cimpartidos" class="form-control" min="0" value="<?php echo $_GET['impartidos'];?>" aria-invalid="false">
                                            </div>
                                            <small class="form-control-feedback"> Número de cursos</small>
											</div>

                                        <?php 
									if($_GET['bomb']=='si')
										{$bomberazo = 'checked';}
									if($_GET['abroad']=='si')
										{$abroad = 'checked';}
									if($_GET['combo']=='si')
										{$combo = 'checked';}
									
										?>
                                                    
													<div class="demo-checkbox">
                                    <input type="checkbox" id="bomberazo" name="bomberazo" value="si" <?php echo $bomberazo;?>>
                                    <label for="bomberazo">Bomberazo</label>
                                </div>
								<div class="demo-checkbox">
                                    <input type="checkbox" id="abroad" name="abroad" value="si" <?php echo $abroad;?>>
                                    <label for="abroad">Certificación en el extranjero</label>
                                </div>
                                                    
													<div class="demo-checkbox">
                                    <input type="checkbox" id="combo" name="combo" value="si" <?php echo $combo;?>>
                                    <label for="combo">Combo</label>
                                </div>

                                                      <div class="form-actions" style="position: absolute; top: 700px;">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check" ></i> Guardar</button>
                                        <button type="button" onclick="goBack()" class="btn btn-inverse">Cancelar</button>
										</div>
										</form>
                                   
                        </div>
                    </div>
                    </div>

                        <!-- ============================================================== -->
                <!-- End Table 1 -->
                <!-- ============================================================== -->

                        <div class="col-lg-6" >
                        <div class="card" style="height:914px;">
                            <div class="card-block" >
                                <h4 class="card-title">Certificaciones</h4>
                                <h6 class="card-subtitle">Agregar o quitar Certificaciones para el usuario</h6>
                                <br>
                                <form method="post" action="./includes/update_user.php" >
                                <input hidden id="userid" name="userid" value="<?php $userid = $_GET['id']; echo $userid?>">
                                <div style="height:260px; overflow: auto; position:absolute;">
                                <?php

$stmt = $mysqli->prepare("SELECT members.id AS mid, courses_members.course_id as cmcid, courses_members.suma as suma, courses_members.independent AS independent, courses_members.renovacion AS renovacion,
courses_members.user_id AS cmuid, courses_members.active AS cmact, 
courses.name AS cname, courses.id AS cid, courses.active AS cact, courses.type
FROM members, courses_members, courses
WHERE members.id=courses_members.user_id
AND courses.id = courses_members.course_id
AND courses.type = 'Certificacion'
AND members.id =?
ORDER BY cname");
$stmt->bind_param('i',$userid);
$stmt->execute();
	$result = $stmt->get_result();
		 $cert = array();
		while ($row = mysqli_fetch_array($result))
		{	
		if($row['cmact']=='Activo')
			{
				$checkcert = "checked";
			}
			else
			{
				$checkcert="";
			}
					echo ' <input id="'.$row['cid'].'" name="'.$row['cid'].'" value="'.$row['cid'].'" type="checkbox" '.$checkcert.'> <label for="'.$row['cid'].'"><a href="certvalidity.php?courseid='.$row['cid'].'&indie='.$row['independent'].'&previous='.$row['previous'].'&coursename='.$row['cname'].'&userid='.$userid.'&type=Certificacion&renovacion='.$row['renovacion'].'&suma='.$row['suma'].'">'.$row['cname'].'</a></label><br>';
					array_push($cert, $row['cid']);
		}
		
		$sqlall="SELECT id, name FROM courses WHERE type='Certificacion' ORDER BY name";
		$queryall = mysqli_query($mysqli, $sqlall); 
		while ($rowall = mysqli_fetch_array($queryall))
		{	
if (in_array($rowall['id'], $cert)) {
	
}
else
{
	echo ' <input id="'.$rowall['id'].'" name="'.$rowall['id'].'" value="'.$rowall['id'].'" type="checkbox"> <label for="'.$rowall['id'].'">'.$rowall['name'].'</label> <br>';
				array_push($cert, $rowall['id']);	
}
		}
		$_SESSION['cert']=$cert;
		?> 
</div>                         
                            </div>
							<div class="card-block" >
                                <h4 class="card-title">Cursos</h4>
                                <h6 class="card-subtitle">Agregar o quitar Cursos para el usuario</h6>
                                <br>
                                
                                <input hidden id="userid" name="userid" value="<?php $userid = $_GET['id']; echo $userid?>">
                                 <div style="height:260px; width: 97%; overflow: auto; position:absolute;">
<br>

<?php

$stmt = $mysqli->prepare("SELECT members.id AS mid, courses.type AS ctype,courses_members.previous AS previous, courses_members.independent AS independent, courses_members.course_id as cmcid, courses_members.user_id AS cmuid, courses_members.active AS cmact, courses.name AS cname, courses.id AS cid, courses.active AS cact, courses.type, courses_members.suma as suma, courses_members.renovacion AS renovacion
FROM members, courses_members, courses
WHERE members.id=courses_members.user_id
AND courses.id = courses_members.course_id
AND courses.type = 'Curso'
AND members.id =? ORDER BY cname");
$stmt->bind_param('i',$userid);
$stmt->execute();
	$result = $stmt->get_result();

		 $course = array();
		while ($row = mysqli_fetch_array($result))
		{			
			if($row['cmact']=='Activo')
			{
				$checked = "checked";
			}
			else
			{
				$checked="";
			}
					echo ' <input id="'.$row['cid'].'" name="'.$row['cid'].'" value="'.$row['cid'].'" type="checkbox" '.$checked.'> <label for="'.$row['cid'].'"><a href="certvalidity.php?courseid='.$row['cid'].'&coursename='.$row['cname'].'&indie='.$row['cind'].$row['independent'].'&previous='.$row['previous'].'&type2='.$row['cmtype'].'&renovacion='.$row['renovacion'].'&userid='.$userid.'&suma='.$row['suma'].'">'.$row['cname'].'</a></label><br>';
					array_push($course, $row['cid']);
		}
		$sqlall="SELECT id, name FROM courses WHERE type='Curso' ORDER BY name";
		$queryall = mysqli_query($mysqli, $sqlall);
		while ($rowall = mysqli_fetch_array($queryall))
		{	
	if (in_array($rowall['id'], $course)) {}
		else
		{
	echo ' <input id="'.$rowall['id'].'" name="'.$rowall['id'].'" value="'.$rowall['id'].'" type="checkbox"> <label for="'.$rowall['id'].'">'.$rowall['name'].'</label> <br>';
				array_push($course, $rowall['id']);	
		}
		}
		$_SESSION['course']=$course;
		?> 
		
		

									
</div>



                               
                            </div>
							
										 <div class="form-actions" style="position: absolute; top: 855px; left: 20px;">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check" ></i> Guardar</button>
                                        <button type="button" onclick="goBack()" class="btn btn-inverse">Cancelar</button>
										</div>
									</form>
                        </div>
						
						
						 

                        
                </div>
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
            <footer class="footer"> © 2017 SM4RT UNIVERSITY </footer>
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
    <!-- This is data table -->
    <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
     <script>
function goBack() {
    //window.history.back();
	location.reload();
}
</script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
