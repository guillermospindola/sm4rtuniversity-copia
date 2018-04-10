<?php
include_once 'psl-config.php';
include_once 'db_connect.php';

function updateSuds($id, $mysqli)

{
	$csdus=0;
	$stmt = $mysqli->prepare("SELECT courses.value AS cvalue, courses_members.suma AS suma, 
	courses_members.renovacion AS renovacion FROM members, courses_members, courses
	WHERE members.id=courses_members.user_id
	AND courses.id = courses_members.course_id
    AND courses_members.active = 'Activo'
	AND courses.type='Curso'
	AND courses_members.suma <>'no'
	AND members.id =?");
	
	
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = mysqli_fetch_array($result))	
	
	{
		
			if ($row['suma']=='10')
			{
				$csdus += 10;
				
			}
			else
			{
			$csdus += $row['cvalue'];
		    }
			if($row['renovacion'] == 'si')
			{
			$csdus += 10;
			}
	}
	
		$cesdus=0;
	$stmt = $mysqli->prepare( "SELECT courses.value AS cvalue, courses_members.suma AS suma, 
	courses_members.renovacion AS renovacion FROM members, courses_members, courses
	WHERE members.id=courses_members.user_id
	AND courses.id = courses_members.course_id
    AND courses_members.active = 'Activo'
	AND courses.type='Certificacion'
	AND courses_members.suma <>'no'
	AND members.id =?");
	
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = mysqli_fetch_array($result))	
		{
			if ($row['suma'] == '10')
			{
				$cesdus += 10;
			}
			else
			{
			$cesdus += $row['cvalue'];
		    }
			if($row['renovacion'] == 'si')
		{
			$cesdus += 10;
		}
		}
		
		$email=getEmail($id, $mysqli);
		
		$prosdus=0;
	$sqls = "SELECT value
	FROM proposals
	WHERE proposals.leader='".$email."'
	OR proposals.member1='".$email."'
	OR proposals.member2='".$email."'
	AND proposals.status='Completado'
	OR proposals.status='Completado_Inconformidad'";
	
$querys = mysqli_query($mysqli, $sqls); 
		while ($row = mysqli_fetch_array($querys))
		{
			$prosdus += $row['value'];
		}
		
$stmt = $mysqli->prepare("UPDATE members SET coursesdu=?, certsdu=?, projectsdu=? WHERE id=?");
$stmt->bind_param('iiii', $csdus, $cesdus, $prosdus, $id);
 $stmt->execute();
}

function updateYearSuds($id, $mysqli)

{
$csdus=0;
	$stmt = $mysqli->prepare("SELECT courses.value AS cvalue, courses_members.suma AS suma, 
	courses_members.renovacion AS renovacion FROM members, courses_members, courses
	WHERE members.id=courses_members.user_id
	AND courses.id = courses_members.course_id
    AND courses_members.active = 'Activo'
    AND YEAR(courses_members.added) = YEAR(CURDATE())
	AND courses.type='Curso'
	AND courses_members.suma <>'no'
	AND members.id =?");
	
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = mysqli_fetch_array($result))	
		{
			if ($row['suma']=='10')
			{
				$csdus += 10;
			}
			else
			{
			$csdus += $row['cvalue'];
		    }
			if($row['renovacion'] == 'si')
		{
			$csdus += 10;
		}
		}
		
		
		$cesdus=0;
	$stmt = $mysqli->prepare("SELECT courses.value AS cvalue, courses_members.suma AS suma, 
	courses_members.renovacion AS renovacion FROM members, courses_members, courses
	WHERE members.id=courses_members.user_id
	AND courses.id = courses_members.course_id
    AND courses_members.active = 'Activo'
	AND courses.type='Certificacion'
	AND YEAR(courses_members.added) = YEAR(CURDATE())
	AND courses_members.suma <>'no'
	AND members.id =?");
	
	
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = mysqli_fetch_array($result))	
		{
			if ($row['suma'] == '10')
			{
				$cesdus += 10;
			}
			else
			{
			$cesdus += $row['cvalue'];
		    }
			if($row['renovacion'] == 'si')
		{
			$cesdus += 10;
		}
		}
		
		$email=getEmail($id, $mysqli);
		
		$prosdus=0;
	$sqls = "SELECT value
	FROM proposals
	WHERE YEAR(proposals.created) = YEAR(CURDATE())
	AND proposals.leader='".$email."'
	OR proposals.member1='".$email."'
	OR proposals.member2='".$email."'
	AND proposals.status='Completado'
	OR proposals.status='Completado_Inconformidad'";
	
$querys = mysqli_query($mysqli, $sqls); 
		while ($row = mysqli_fetch_array($querys))
		{
			$prosdus += $row['value'];
		}
		
		
$stmt = $mysqli->prepare("UPDATE members SET coursesducy=?, certsducy=?, projectsducy=? WHERE id=?");
$stmt->bind_param('iiii', $csdus, $cesdus, $prosdus, $id);
 $stmt->execute();		

//$mysqli->query($sqly);
	
}

function getEmail($id, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT email, name FROM members WHERE id=?");
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
while ($row = mysqli_fetch_array($result))	
		{
			$email = $row['email'];
		}
		return $email;
	
}
function getId($email, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT id, name FROM members WHERE email=?");
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = mysqli_fetch_array($result))	
		{
			$id = $row['id'];
		}
		return $id;
}
function getNameFromEmail($email, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT id, name FROM members WHERE email=?");
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$result = $stmt->get_result();
while ($row = mysqli_fetch_array($result))	
		{
			$name = $row['name'];
		}
		return $name;
}
function getEmailFromId($id, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT email, name FROM members WHERE id=?");
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
while ($row = mysqli_fetch_array($result))	
		{
			$email = $row['email'];
		}
		return $email;
}

function updateCoursecertValue($type, $id, $old, $new, $mysqli)
{
	
		if($type == 'Curso')
	{
		$csdu = 'coursesdu';
	}
	else
	{
		$csdu = 'certsdu';
	}
	$stmt = $mysqli->prepare("SELECT members.id AS mid
	FROM members, 
	courses_members, courses
	WHERE members.id=courses_members.user_id
    AND courses.id=courses_members.course_id
	AND courses.id =?");
	
$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();
while ($row = mysqli_fetch_array($result))	
		{
			$stmt = $mysqli->prepare("UPDATE members SET ".$csdu."=".$csdu."-?+? WHERE id=?");
			$stmt->bind_param('iii',$old,$new,$row['mid']);
			$stmt->execute();
		}
	return $type;
}
function getUserInfo ($id, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT * FROM members WHERE id=?");
	$stmt->bind_param('i',$id);
			$stmt->execute();
	$result = $stmt->get_result();
	$sdus = mysqli_fetch_array($result);
	return $sdus;
}

function getLectureInfo ($id, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT * FROM lectures WHERE id=?");
	$stmt->bind_param('i',$id);
			$stmt->execute();
	$result = $stmt->get_result();
	$sdus = mysqli_fetch_array($result);
	return $sdus;
}

function checkChecked ($value, $mysqli)
{
	if ($value == 'si')
	{
		return 'checked';
	}
	else{
		return '';
	}
}

function checkSelect($value1, $value2)
{
	if($value1 == $value2)
	{
		return 'selected';
	}
	else{
		return '';
	}
}


function getUserCourses($id, $type, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT courses.name AS cname 
			FROM members, courses_members, courses 
			WHERE members.id=courses_members.user_id 
			AND courses.id=courses_members.course_id 
			AND courses_members.active='Activo'
            AND courses.type=? 			
			AND members.id=?");
			$stmt->bind_param('si',$type,$id);
		$stmt->execute();
	    $result = $stmt->get_result();
		 
		while ($row = mysqli_fetch_array($result))
		{			$string .= '<tr>
					<td>'.$row['cname'].'</td>
				</tr>';
		}
		
		return $string;
}

function getUserProjects($email, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT name, id FROM proposals WHERE leader=? OR member1=? 
	OR member2=?");
			
		$stmt->bind_param('sss',$email,$email,$email);
		$stmt->execute();
	    $result = $stmt->get_result();
		 
		while ($row = mysqli_fetch_array($result))
		{			$string .= '<tr>
					<td>'.$row['name'].'</td>
				</tr>';
		}
		
		return $string;
}

function getProjectInfo($projectid, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT * FROM proposals WHERE id=?");
	$stmt->bind_param('i',$projectid);
		$stmt->execute();
	    $result = $stmt->get_result();
		$project = mysqli_fetch_array($result);
	return $project;
	
}

function getAllCoursesList($mysqli)
{
	$sql = "SELECT id, name FROM courses WHERE active ='Activo' AND type='Curso'  ORDER BY name";
			
		$query = mysqli_query($mysqli, $sql); 
		 
		while ($row = mysqli_fetch_array($query))
		{			$val .= "<a href='coursedetail.php?id=".$row['id']."'><img style='height:70px;' src='./images/courses/".$row['id'].".png'></img></a> <br><br>";
		}
		
		return $val;
}

function getAllCertList($mysqli)
{
	$sql = "SELECT id, name FROM courses WHERE active ='Activo' AND type='Certificacion' ORDER BY name";
			
		$query = mysqli_query($mysqli, $sql); 
		 
		while ($row = mysqli_fetch_array($query))
		{			$val .= "<a href='coursedetail.php?id=".$row['id']."'><img style='height:70px;' src='./images/courses/".$row['id'].".png'></img></a> <br><br>";
		}
		
		return $val;
}
function getCourseInfo($id, $mysqli)
{
		
		$stmt = $mysqli->prepare("SELECT * FROM courses WHERE id=?");
		$stmt->bind_param('i',$id);
		$stmt->execute();
	    $result = $stmt->get_result();
		$row = mysqli_fetch_array($result);
		return $row;
}

function getCertCourseInfo($userid, $courseid, $mysqli)
{
	$stmt = $mysqli->prepare("SELECT * FROM courses_members WHERE user_id=? AND course_id=?");
			
		$stmt->bind_param('ii',$userd, $courseid);
		$stmt->execute();
	    $result = $stmt->get_result();
		$row = mysqli_fetch_array($result);
		return $row;
}
function getMaxCertSDUs($mysqli){

	$sql = "SELECT certsdu FROM members 
	ORDER BY certsdu DESC LIMIT 1";
			
		$query = mysqli_query($mysqli, $sql); 
		$row = mysqli_fetch_array($query);
		return $row;
}

function getMaxCourseSDUs($mysqli){

	$sql = "SELECT coursesdu FROM members 
	ORDER BY coursesdu DESC LIMIT 1";
			
		$query = mysqli_query($mysqli, $sql); 
		$row = mysqli_fetch_array($query);
		return $row;
}

function getMaxProjectSDUs($mysqli){

	$sql = "SELECT projectsdu FROM members 
	ORDER BY projectsdu DESC LIMIT 1";
			
		$query = mysqli_query($mysqli, $sql); 
		$row = mysqli_fetch_array($query);
		return $row;
}

function getTotalSDUs($mysqli, $id){
		
	$stmt = $mysqli->prepare("SELECT coursesdu + certsdu + projectsdu AS sdus FROM members WHERE id=?");
	$stmt->bind_param('i',$id);
        $stmt->execute();
	    $result = $stmt->get_result();
		$row = mysqli_fetch_array($result);
		return $row;
}
function getYearsSDUs($mysqli, $id){
	
$stmt = $mysqli->prepare("SELECT coursesducy + certsducy + projectsducy 
		AS sdus FROM members
		WHERE id=?");
     $stmt->bind_param('i',$id);
       $stmt->execute();
	    $result = $stmt->get_result();
		$row = mysqli_fetch_array($result);
		return $row;
}
 function getYearRanking($mysqli)
{
	$i=1; $string="";
 $sql = "SELECT id, name, picture, coursesducy + certsducy + projectsducy AS sdus FROM members 
 WHERE active = 'activo' ORDER BY sdus DESC";

        $query = mysqli_query($mysqli, $sql); 
        while ($row = mysqli_fetch_array($query))
        {           $string .= "<tr> 
                    <td>".$i."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['sdus']."</td>
                    <td>
                    
                    <a href='profile.php?id=".$row['id']."&name=".$row['name']."'><a href='./profile.php?id=".$row['id']."'><img class='img-circle' src='".$row['picture']."' height='40' width='40'></img></a>
                    
                    </td>
                    
                </tr>";
                $i++;
        }
		return $string;
}

function getHistoricRanking($mysqli)
{
	$i=1; $string="";
 $sql = "SELECT id, name, picture, coursesdu + certsdu + projectsdu AS sdus FROM members 
 WHERE active = 'activo' ORDER BY sdus DESC";

        $query = mysqli_query($mysqli, $sql); 
        while ($row = mysqli_fetch_array($query))
        {           $string .= "<tr> 
                    <td>".$i."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['sdus']."</td>
                    <td>
                    
                    <a href='profile.php?id=".$row['id']."&name=".$row['name']."'><a href='./profile.php?id=".$row['id']."'><img class='img-circle' src='".$row['picture']."' height='40' width='40'></a>
                    
                    </td>
                    
                </tr>";
                $i++;
        }
		return $string;
}

function getBadges($mysqli, $id)
{
$string="";
$id = mysqli_real_escape_string($mysqli, $id);

 $stmt = $mysqli->prepare("SELECT badges.imagegray, badges.imagecolor, badges.name, badges.description, 
 		badges_members.active 
		FROM badges, badges_members, members
		WHERE badges.id = badges_members.badge_id
		AND members.id = badges_members.user_id
		AND members.id = ?");
		
		$stmt->bind_param('i',$id);
		$stmt->execute();
	    $result = $stmt->get_result();
		 
		while ($row = mysqli_fetch_array($result))
		{
			
		if($row['active']== 'si')
		{
			$image = $row['imagecolor'];
		}
		else{
			$image = $row['imagegray'];
		}
		
			$string .= "<span class='tooltipbasic'><img src='".$image."' class='m-t-30' width='7%'></img><span class='tooltiptext'><u><b>".$row['name']."</b></u><br>".$row['description']."</span></span>
</span>";
               
        }
		return $string;
}
function updateBadges($mysqli, $id)
{
	$id=mysqli_real_escape_string($mysqli, $id);
	//------------Conteo de Certificaciones-----------------------------------------------------------------------------------------------------------
	$sql = "SELECT COUNT(*) AS total
	FROM courses_members, courses 
	WHERE courses_members.user_id = '".$id."' 
	AND courses_members.active='Activo' 
	AND courses.id = courses_members.course_id
	AND courses.type='Certificacion'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	
	
	//Una certificación
	$omgid = '1';
	
	if($row['total']>0)
	{
		$omg ='si';
	}
	else{
		$omg ='no';
	}
	$sqlOMG = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$omgid."','".$omg."')
				ON DUPLICATE KEY UPDATE active='".$omg."'";
	$mysqli->query($sqlOMG);
	
	//3 Certificaciones
	$onFireID = '2';
	
	if($row['total']>2)
	{
		$onFire ='si';
	}
	else{
		$onFire ='no';
	}
	$sqlOnFire = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$onFireID."','".$onFire."')
				ON DUPLICATE KEY UPDATE active='".$onFire."'";
	$mysqli->query($sqlOnFire);
	
	
	//5 Certificaciones
	$daddyID = '3';
	
	if($row['total']>4)
	{
		$daddy ='si';
	}
	else{
		$daddy ='no';
	}
	$sqlDaddy = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$daddyID."','".$daddy."')
				ON DUPLICATE KEY UPDATE active='".$daddy."'";
	$mysqli->query($sqlDaddy);
	
	
	//7 Certificaciones
	$bigDaddyID = '4';
	
	if($row['total']>6)
	{
		$bigDaddy ='si';
	}
	else{
		$bigDaddy ='no';
	}
	$sqlBigDaddy = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$bigDaddyID."','".$bigDaddy."')
				ON DUPLICATE KEY UPDATE active='".$bigDaddy."'";
	$mysqli->query($sqlBigDaddy);
	

	//------------Conteo de Cursos-----------------------------------------------------------------------------------------------------------
	$sql = "SELECT COUNT(*) AS total
	FROM courses_members, courses 
	WHERE courses_members.user_id = '".$id."' 
	AND courses_members.active='Activo' 
	AND courses.id = courses_members.course_id
	AND courses.type='Curso'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	
	
	//3 Cursos
	$cuteID = '11';
	
	if($row['total']>2)
	{
		$cute ='si';
	}
	else{
		$cute ='no';
	}
	$sqlCute = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$cuteID."','".$cute."')
				ON DUPLICATE KEY UPDATE active='".$cute."'";
	$mysqli->query($sqlCute);

	
//------------Renovaciones----------------------------------------------------------------------------------------------------------------------------
	
	$sql = "SELECT COUNT(*) AS total
	FROM courses_members, courses 
	WHERE courses_members.user_id = '".$id."' 
	AND courses_members.active='Activo' 
	AND courses.id = courses_members.course_id
	AND courses.type='Certificacion'
	AND renovacion='si'";
	
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
	  $guardianID='20';
	  
	  if($row['total']>0)
	{
		$guardian ='si';
	}
	else{
		$guardian ='no';
	}
	
	$sqlGuardian = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$guardianID."','".$guardian."')
				ON DUPLICATE KEY UPDATE active='".$guardian."'";
	$mysqli->query($sqlGuardian);
	
	
	
//------------Proyectos----------------------------------------------------------------------------------------------------------------------------

$email=getEmail($id,$mysqli);
$sql = "SELECT COUNT(*) AS total
	FROM proposals 
	WHERE status='Completado'
	AND leader = '".$email."' 
	OR status='Completado' AND member1 = '".$email."'
	OR status='Completado' AND member2 = '".$email."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
	  
//1 Proyecto
	   $rookieID='5';
	  
	  if($row['total']>0){
		$rookie ='si';
	}
	else{
		$rookie ='no';
	}
$sqlRookie = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$rookieID."','".$rookie."')
				ON DUPLICATE KEY UPDATE active='".$rookie."'";
	$mysqli->query($sqlRookie);

//3 Proyectos

$hatTrickID='7';
	  
	  if($row['total']>2){
		$hatTrick ='si';
	}
	else{
		$hatTrick ='no';
	}
$sqlhatTrick = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$hatTrickID."','".$hatTrick."')
				ON DUPLICATE KEY UPDATE active='".$hatTrick."'";
	$mysqli->query($sqlhatTrick);

//5 Proyectos

$wtfID='8';
	  
	  if($row['total']>4){
		$wtf ='si';
	}
	else{
		$wtf ='no';
	}
$sqlWtf = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$wtfID."','".$wtf."')
				ON DUPLICATE KEY UPDATE active='".$wtf."'";
	$mysqli->query($sqlWtf);
	
	//------------Propuesta----------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT COUNT(*) AS total
	FROM proposals 
	WHERE leader = '".$email."'
	OR member1 = '".$email."'
	OR member2 = '".$email."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$goodLuckID='10';
	  
	  if($row['total']>0){
		$goodLuck ='si';
	}
	else{
		$goodLuck ='no';
	}
$sqlGoodLuck = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$goodLuckID."','".$goodLuck."')
				ON DUPLICATE KEY UPDATE active='".$goodLuck."'";
	$mysqli->query($sqlGoodLuck);
	
	
	//------------Proyecto ganador del año----------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT COUNT(*) AS total
	FROM proposals 
	WHERE ganador='si' AND leader = '".$email."'
	OR ganador='si' AND member1 = '".$email."'
	OR ganador='si' AND member2 = '".$email."'
	";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$inYourFaceID='9';
	  
	  if($row['total']>0){
		$inYourFace ='si';
	}
	else{
		$inYourFace ='no';
	}
	
$sqlInYourFace = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$inYourFaceID."','".$inYourFace."')
				ON DUPLICATE KEY UPDATE active='".$inYourFace."'";
	$mysqli->query($sqlInYourFace);
	
//------------Diplomado----------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT COUNT(*) AS total
	FROM courses_members, courses, members
	WHERE courses_members.course_id = courses.id
	AND courses_members.user_id = members.id
	AND courses_members.user_id = '".$id."'
	 AND courses_members.active = 'Activo'
	AND courses.class='Diplomado'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$triggerID='12';
	  
	  if($row['total']>0){
		$trigger ='si';
	}
	else{
		$trigger ='no';
	}
	
$sqlTrigger = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$triggerID."','".$trigger."')
				ON DUPLICATE KEY UPDATE active='".$trigger."'";
	$mysqli->query($sqlTrigger);
	
	//------------Maestría----------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT COUNT(*) AS total
	FROM courses_members, courses, members
	WHERE courses_members.course_id = courses.id
	AND courses_members.user_id = members.id
	AND courses_members.user_id = '".$id."'
	 AND courses_members.active = 'Activo'
	AND courses.class='Maestria'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$masterID='13';
	  
	  if($row['total']>0){
		$master ='si';
	}
	else{
		$master ='no';
	}
	
$sqlMaster = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$masterID."','".$master."')
				ON DUPLICATE KEY UPDATE active='".$master."'";
	$mysqli->query($sqlMaster);
	
	//------------Doctorado----------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT COUNT(*) AS total
	FROM courses_members, courses, members
	WHERE courses_members.course_id = courses.id
	AND courses_members.user_id = members.id
	AND courses_members.user_id = '".$id."'
	 AND courses_members.active = 'Activo'
	AND courses.class='Doctorado'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$bossID='14';
	  
	  if($row['total']>0){
		$boss ='si';
	}
	else{
		$boss ='no';
	}
	
$sqlBoss = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$bossID."','".$boss."')
				ON DUPLICATE KEY UPDATE active='".$boss."'";
	$mysqli->query($sqlBoss);
	
//------------Independiente----------------------------------------------------------------------------------------------------------------------------

$sql = "SELECT COUNT(*) AS total
	FROM courses_members 
	WHERE independent='si'
	AND user_id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$punchID='17';
	  
	  if($row['total']>0){
		$punch ='si';
	}
	else{
		$punch ='no';
	}
	
$sqlPunch = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$punchID."','".$punch."')
				ON DUPLICATE KEY UPDATE active='".$punch."'";
	$mysqli->query($sqlPunch);
	
//------------Cursos impartidos----------------------------------------------------------------------------------------------------------------------------

//1 Curso
$sql = "SELECT cursos_impartidos
	FROM members 
	WHERE id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$newbieID='15';
	  
	  if($row['cursos_impartidos']>0){
		$newbie ='si';
	}
	else{
		$newbie ='no';
	}
	
$sqlNewbie = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$newbieID."','".$newbie."')
				ON DUPLICATE KEY UPDATE active='".$newbie."'";
	$mysqli->query($sqlNewbie);
	
//3 Cursos
$sql = "SELECT cursos_impartidos
	FROM members 
	WHERE id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$trainerID='16';
	  
	  if($row['cursos_impartidos']>2){
		$trainer ='si';
	}
	else{
		$trainer ='no';
	}
	
$sqlTrainer = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$trainerID."','".$trainer."')
				ON DUPLICATE KEY UPDATE active='".$trainer."'";
	$mysqli->query($sqlTrainer);
	
	
//------------Manuales----------------------------------------------------------------------------------------------------------------------------

// Combo
$sql = "SELECT combo
	FROM members 
	WHERE id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$breakShieldID='18';
	  
	  if($row['combo']=='si'){
		$breakShield ='si';
	}
	else{
		$breakShield ='no';
	}
	
$sqlBreakShield = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$breakShieldID."','".$breakShield."')
				ON DUPLICATE KEY UPDATE active='".$breakShield."'";
	$mysqli->query($sqlBreakShield);
	
	// Bomberazo
$sql = "SELECT bomberazo
	FROM members 
	WHERE id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$wildcardID='22';
	  
	  if($row['bomberazo']=='si'){
		$wildcard ='si';
	}
	else{
		$wildcard ='no';
	}
	
$sqlWildcard = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$wildcardID."','".$wildcard."')
				ON DUPLICATE KEY UPDATE active='".$wildcard."'";
	$mysqli->query($sqlWildcard);
	
	// Certificación en el extranjero
$sql = "SELECT abroad
	FROM members 
	WHERE id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$internationalID='21';
	  
	  if($row['abroad']=='si'){
		$international ='si';
	}
	else{
		$international ='no';
	}
	
$sqlInternational = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$internationalID."','".$international."')
				ON DUPLICATE KEY UPDATE active='".$international."'";
	$mysqli->query($sqlInternational);
	
//------------Path----------------------------------------------------------------------------------------------------------------------------

// Nerdo
$sql = "SELECT COUNT(*) AS total
FROM members, courses_members, courses
	WHERE members.id = courses_members.user_id
    AND courses.id = courses_members.course_id
	AND courses_members.active='Activo'
	AND courses.path='si'
	AND members.id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$nerdoID='19';
	  
	  if($row['total']>0){
		$nerdo ='si';
	}
	else{
		$nerdo ='no';
	}
	
$sqlNerdo = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$nerdoID."','".$nerdo."')
				ON DUPLICATE KEY UPDATE active='".$nerdo."'";
	$mysqli->query($sqlNerdo);

//----------CHAMILO-----------------------------------------//

$sql = "SELECT COUNT(*) AS total
FROM members, courses_members, courses
	WHERE members.id = courses_members.user_id
    AND courses.id = courses_members.course_id
	AND courses_members.active='Activo'
	AND courses.path='si'
	AND members.id = '".$id."'";
	
	$query = mysqli_query($mysqli, $sql); 
      $row = mysqli_fetch_array($query);
	  
$nerdoID='19';
	  
	  if($row['total']>0){
		$nerdo ='si';
	}
	else{
		$nerdo ='no';
	}
	
$sqlNerdo = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$nerdoID."','".$nerdo."')
				ON DUPLICATE KEY UPDATE active='".$nerdo."'";
	$mysqli->query($sqlNerdo);

//------------Projects in a year----------------------------------------------------------------------------------------------------------------------------

//Boost

/* $sql = "SELECT YEAR(proposals.created) AS year
	FROM proposals 
    WHERE leader = '".$email."'
    OR member1 = '".$email."'
    OR member2 = '".$email."'
	AND status = 'Completado'
    OR status = 'Completado_Inconformidad'";
	
	$query = mysqli_query($mysqli, $sql); 
	$row = mysqli_fetch_array($query);
		
 $cnt_array = array_count_values($row);
 
 foreach($cnt_array as $key=>$value){
    if($value > 1){
       $duplicate += 1;
   }
   
   }	  
	  
$boostID='6';
	  
	  if($duplicate == 2){
		$boost ='si';
	}
	else{
		$boost ='no';
	}
	
$sqlBoost = "INSERT INTO badges_members (user_id, badge_id, active)
				VALUES ('".$id."','".$boostID."','".$boost."')
				ON DUPLICATE KEY UPDATE active='".$boost."'";
	$mysqli->query($sqlBoost); */
	
	
//End of function-------------------------------------------------------------------------------------------------------------------------------------	
}







