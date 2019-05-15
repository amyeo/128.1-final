<?php
header('Content-Type: text/html; charset=utf-8');
//uncomment below to show errors
//error_reporting(-1);
//ini_set('display_errors', 'On');
$link = mysqli_connect("localhost","root","","128.1v2");
mysqli_set_charset($link, "utf8");
//error if not success
if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); //quit if failed
}
//var_dump($_POST);

//process POST request here
//first, make sure passwords match. if not, quit
if($_POST["results_password1"] != $_POST["results_password2"]){
	print "ERROR! Passwords do not match!";
	exit();
}
//now, gather and filter fields
/*
array(31) {
  ["employee_skill_1"]=>
  string(4) "dsds"
  ["employee_skill_2"]=>
  string(0) ""
  ["employee_skill_3"]=>
  string(0) ""
  ["employee_skill_4"]=>
  string(0) ""
  ["employee_skill_5"]=>
  string(0) ""
  ["job_position"]=>
  string(7) "Janitor"
  ["birth_cert_id"]=>
  string(6) "432432"
  ["job_name_1"]=>
  string(3) "111"
  ["job_desc_1"]=>
  string(2) "aa"
  ["job_name_2"]=>
  string(1) "2"
  ["job_desc_2"]=>
  string(1) "b"
  ["job_name_3"]=>
  string(2) "33"
  ["job_desc_3"]=>
  string(2) "cc"
  ["job_name_4"]=>
  string(2) "44"
  ["job_desc_4"]=>
  string(2) "dd"
  ["job_name_5"]=>
  string(3) "555"
  ["job_desc_5"]=>
  string(2) "ee"
}
*/
$first_name = mysqli_real_escape_string($link,$_POST['first_name']);
$last_name = mysqli_real_escape_string($link,$_POST['last_name']);
$middle_initial = mysqli_real_escape_string($link,$_POST['middle_initial']);
$sex = mysqli_real_escape_string($link,$_POST['sex']);
$full_address = mysqli_real_escape_string($link,$_POST['full_address']);
$place_of_birth = mysqli_real_escape_string($link,$_POST['place_of_birth']);
$birthday = mysqli_real_escape_string($link,$_POST['birthday']);
$phone_number = mysqli_real_escape_string($link,$_POST['phone_number']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$linkedin_profile = mysqli_real_escape_string($link,$_POST['linkedin_profile']);
$educational_attainment = mysqli_real_escape_string($link,$_POST['educational_attainment']);
$civil_status = mysqli_real_escape_string($link,$_POST['civil_status']);
$nationality = mysqli_real_escape_string($link,$_POST['nationality']);
$SSN = mysqli_real_escape_string($link,$_POST['SSN']);
$target_position = mysqli_real_escape_string($link,$_POST['job_position_targ']);
//get employee CSV now
$job_history_csv = "";
//Auto add all job_name_1
$job_name_num = 1;
$job_name_name = "job_name_";
while(isset($_POST[$job_name_name . $job_name_num])){
	$job_desc = "";
	if(isset($_POST["job_desc_" . $job_name_num])){
		$job_desc = $_POST["job_desc_" . $job_name_num];
	}
	$job_history_csv = $job_history_csv . $_POST[$job_name_name . $job_name_num] . ", " . $job_desc . ";";
	$job_name_num = $job_name_num + 1;
}

//get employee skill csv
$employee_skills_csv = "";
//Auto add all job_name_1
$emps_num = 1;
$emps_name = "employee_skill_";
while(isset($_POST[$emps_name . $emps_num]) && $_POST[$emps_name . $emps_num] != ""){
	$employee_skills_csv = $employee_skills_csv . $_POST[$emps_name . $emps_num] . ";";
	$emps_num = $emps_num + 1;
}
//print "a: " . $job_history_csv;
//print "b: " . $employee_skills_csv;
//add to db
$db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
$query = $db->prepare ("INSERT INTO applicants (first_name, last_name
,middle_initial, sex, current_address,
place_of_birth, birthdate, phone_number,
email,linkedin_profile, educational_attainment,
civil_status, nationality, SSN,
job_history_csv, skills_csv, target_position) VALUES ('" . $first_name . "', '" . 
$last_name . "', '" . $middle_initial . "', '" . $sex . "', '" .
$full_address . "', '" . $place_of_birth . "', '" . $birthday . "', '" . 
$phone_number . "', '" . $email . "', '" . $linkedin_profile . "', '" . 
$educational_attainment . "', '" . $civil_status . "', '" . $nationality . "', '" . 
$SSN . "', '" . $job_history_csv . "', '" . $employee_skills_csv . "', '" . $target_position  . "')");

//$query->debugDumpParams();
$query -> execute();

//$error= $query->errorInfo();
//echo $error[2];


//$ = mysqli_real_escape_string($link,$_POST['']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>New Applicant</title>
	<link rel="icon" href="images/cropped-UPseal-newcolors-192x192.png" sizes="192x192">

	<script src="js/jquery-3.3.1.min_2.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/util.js"></script>
	<script src="ourScript.js"></script>
    <script src="js/formvalidate.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="styles.css">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

	<link rel="stylesheet" href="progress-indicator/progress-indicator.scss">
    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

	<script>
		$(document).ready(function(){
			$("#finish").click(function() {
				if($("[name=results_password1]").val()!=$("[name=results_password2]").val()){
					alert("passwords do not match");
					$("[name=results_password2]").val()="";
				}
				else if(document.getElementById("checkbox").checked == false){
					alert("Please pledge to the great one");
				}
				else $("#results_form").submit();
			});


		});

	</script>

    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="signUpStyles.css">
  </head>
  <body>

	<!--NAV Bar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Application Form (Finished)<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 1000px;">

		<br>
      <!--div class="row"><div class = "col-sm mx-auto"style="max-width: 300px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div-->
			<form id="results_form" method = "post" name = "finished_page" action = "">
				<br>


				<!--Dependencies-->
				<h4 align = "center" style = "width: 1000px">Thank you for submitting the application form. Your details will be validated soon. You check your application status through the link below.</h2>
				<br>
				
				<h4 align = "center" style = "width: 1000px">ID: 0069</h2>
				<br>
				
				<h4 align = "center" style = "width: 1000px">Password: <?php echo $_POST["results_password1"]; ?></h2>
				<br><br><br>
				
			</form>
		</article>
	</div>




  </body>
