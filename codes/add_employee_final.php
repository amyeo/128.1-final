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
$target_position = mysqli_real_escape_string($link,$_POST['job_position']);
$birth_cert_id = mysqli_real_escape_string($link,$_POST['birth_cert_id']);
$health_package = mysqli_real_escape_string($link,$_POST['health_package']);
$applicant_id = mysqli_real_escape_string($link,$_POST['applicant_id']);

//print "a: " . $job_history_csv;
//print "b: " . $employee_skills_csv;
//add to db
$db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
$query = $db->prepare ("INSERT INTO employee (first_name, last_name
,middle_initial, sex, current_address,
place_of_birth, birthdate, phone_number,
email,linkedin_profile, educational_attainment,
civil_status, nationality, SSN, job_position, birth_certificate_id, health_package) VALUES ('" . $first_name . "', '" .
$last_name . "', '" . $middle_initial . "', '" . $sex . "', '" .
$full_address . "', '" . $place_of_birth . "', '" . $birthday . "', '" .
$phone_number . "', '" . $email . "', '" . $linkedin_profile . "', '" .
$educational_attainment . "', '" . $civil_status . "', '" . $nationality . "', '" .
$SSN . "', '" . $target_position . "', '" . $birth_cert_id . "', '" . $health_package  . "')");

//$query->debugDumpParams();
$query -> execute();

//$error= $query->errorInfo();
//echo $error[2];


//$ = mysqli_real_escape_string($link,$_POST['']);

//now add the CSVs
$job_history_csv = mysqli_real_escape_string($link,$_POST['job_history_table_csv']);
$skills_csv = mysqli_real_escape_string($link,$_POST['skills_table_csv']);
$dependents_csv = mysqli_real_escape_string($link,$_POST['dependents_table_csv']);

//calculate and get employee id first to link to the db FKs
$employee_id = $db->lastInsertId();

//print "Emp :" . $employee_id;

//dump job history
//first of all, break the data into rows
$row_arr = explode(";",$job_history_csv);
//now loop trough the rows and add to db
foreach($row_arr as $row){
    $cell_arr = explode(",",$row);
    //add user
    if(($cell_arr[0] != "") && ($cell_arr[1] != "")){
        $querystr = "INSERT INTO employee_job_history(employee_id, job_name, job_desc) VALUES('" . $employee_id . "','" . $cell_arr[0] . "','"  . $cell_arr[1] . "')" ;
        //echo $querystr . "\n";
        mysqli_query($link, $querystr);
    }
}

//dump skills
$row_arr = explode(";",$skills_csv);
//now loop trough the rows and add to db
foreach($row_arr as $row){
    $cell_arr = explode(",",$row);
    //add user
    if(($cell_arr[0] != "")){
        $querystr = "INSERT INTO employee_skills(employee_id, skill) VALUES('" . $employee_id . "','"  . $cell_arr[0] . "')" ;
        //echo $querystr . "\n";
        mysqli_query($link, $querystr);
    }
}

//dependents csv
$row_arr = explode(";",$dependents_csv);
//now loop trough the rows and add to db
foreach($row_arr as $row){
    $cell_arr = explode(",",$row);
    //add user
    if(($cell_arr[0] != "") && ($cell_arr[1] != "")){
        $querystr = "INSERT INTO employee_deps(employee_id, dep_name, dep_relation) VALUES('" . $employee_id . "','" . $cell_arr[0] . "','"  . $cell_arr[1] . "')" ;
        //echo $querystr . "\n";
        mysqli_query($link, $querystr);
    }
}

//finally, update the applicant record and make it approved
$querystr = "UPDATE applicants SET approved=3 WHERE id=" . $applicant_id . "";
//echo $querystr . "\n";
mysqli_query($link, $querystr);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Add Employee</title>
	<link rel="icon" href="images/cropped-UPseal-newcolors-192x192.png" sizes="192x192">

	<script src="js/jquery-3.3.1.min_2.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/util.js"></script>
	<script src="ourScript.js"></script>
    <script src="js/formvalidate.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/footer.css">

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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Add Employee Form (Finished)<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "admin.php">University of the Philippines Manila</a>
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
				<h4 align = "center" style = "width: 1000px">Employee added</h2>
				<br>

				<div>
				<a class = "btn btn-danger container" href = "admin.php">Home</a>
				</div>
			</form>
		</article>
	</div>


  <footer class="footer" id="myFooter" >
          <div class="container">
              <div class="row">
                  <div class="col-sm-4">
                      <h5>Links</h5>
                      <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="register.php">Apply </a></li>
                      </ul>
                  </div>
                  <div class="col-sm-4">
                      <h5>About us</h5>
                      <ul>
                          <li><a href="aboutus.html">CMSC 128.1 GROUP</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-4">
                      <h5>Contact Us</h5>
                      <ul>
                          <li><a href="contactus.html">Email</a></li>
                      </ul>
                  </div>
              </div>
          </div>
             <div class="container">
                  <h5 class="logo"><a href="index.html"> <img src="images/logo.png" width="50">  University of the Philippines Manila </a></h5>
              </div>
      </footer>

  </body>
</html>
