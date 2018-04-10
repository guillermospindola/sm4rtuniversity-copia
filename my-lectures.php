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
	<!-- FRAME-BREAKER Para prevenir clickjacking-->
		<style id="antiClickjack">body{display:none !important;}</style>
		<script type="text/javascript">
   if (self === top) {
       var antiClickjack = document.getElementById("antiClickjack");
       antiClickjack.parentNode.removeChild(antiClickjack);
   } else {
       top.location = self.location;
   }
</script>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Mis ponencias</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Ponencias</li>
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

                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Mis Ponencias</h4>
                                <h6 class="card-subtitle">Detalle sobre los cursos/talleres/ponencias que has registrado.</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myRequests" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ponente</th>
                                                <th>Tema</th>
                                                <th>Fecha</th>
                                                <th>Ubicación</th>
                                                <th>Estatus</th>
                                                <th>Comentarios</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php

$sql = "SELECT name, subject, date_time, location, status, comments
		FROM lectures 
        WHERE user_id = '".$_SESSION['id']."'";
        $query = mysqli_query($mysqli, $sql); 
         
        while ($row = mysqli_fetch_array($query))
        {           echo '<tr> 
                    <td>'.$row['name'].'</td>
                    <td>'.$row['subject'].'</td>
                    <td>'.$row['date_time'].'</td>
                    <td>'.$row['location'].'</td>
					<td>'.$row['status'].'</td>
					<td>'.$row['comments'].'</td>
					
            
                </tr>';
        }?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
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
    $(document).ready(function() {
        $('#myRequests').DataTable({
			"language": {
      "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando _START_ al _END_ de _TOTAL_ ",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        }
  }
		});
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
