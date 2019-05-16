<?php
session_start();

$id = $_GET['id'];

if(isset($_SESSION['adminUser'])){
	$adminUser = $_SESSION['adminUser'];
}

$first_name = "";
$last_name = "";
$middle_initial = "";
$sex = "";
$current_address = "";
$place_of_birth = "";
$birthdate = "";
$phone_number = "";
$email = "";
$linkedin_profile = "";
$educational_attainment = "";
$civil_status = "";
$nationality = "";
$SSN = "";
$birth_certificate_id = "";

	$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
	$stmt = $db->prepare("SELECT * FROM employee WHERE `id` = '$id'");
	$stmt->execute();
	$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->debugDumpParams();
		//header ('location: admin.php');

	foreach ($results_arr as $i => $values) {
		foreach ($values as $key => $value) {
			if($key=="first_name")$first_name = $value;
			if($key=="last_name")$last_name = $value;
			if($key=="middle_initial")$middle_initial = $value;
			if($key=="sex")$sex = $value;
			if($key=="current_address")$current_address = $value;
			if($key=="place_of_birth")$place_of_birth = $value;
			if($key=="birthdate")$birthdate = $value;
			if($key=="phone_number")$phone_number = $value;
			if($key=="email")$email = $value;
			if($key=="linkedin_profile")$linkedin_profile = $value;
			if($key=="educational_attainment")$educational_attainment = $value;
			if($key=="civil_status")$civil_status = $value;
			if($key=="nationality")$nationality = $value;
			if($key=="SSN")$SSN = $value;
			if($key=="birth_certificate_id")$birth_certificate_id = $value;

		}
	}


?>


<!doctype html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Employee Details</title>
  <link rel="icon" href="images/cropped-UPseal-newcolors-192x192.png" sizes="192x192">

<script src="js/jquery-3.3.1.min_2.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/util.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/footer.css">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="progress-indicator/progress-indicator.scss">
</head>

<body>
  <div class="shadow">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li>
			  </li>
			  <li class="nav-item active">
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Employee Details<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "admin.php" style = "font-size: 17px">University of the Philippines Manila</a>
		  </div>
	</nav>




 <div class="panel-body" style = "margin-right: 21%;font-size: 17px">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">  </div>

                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
					<tr>
                        <td colspan = 2><h1>BASIC INFORMATION</h1></td>

                      </tr>
                      <tr>
                      <tr>
                        <th>Surname:</th>
                        <td><?php echo $last_name ?></td>
                      </tr>
                      <tr>
                        <th>Firstname:</th>
                        <td><?php echo $first_name ?></td>
                      </tr>

                         <tr>
                             <tr>
                        <th>Middle Initial:</th>
                        <td> <?php echo $middle_initial ?></td>
                      </tr>
                        <tr>
                        <th>Sex:</th>
                        <td><?php echo $sex ?></td>
                      </tr>
                      <tr>
                        <th>Current Address:</th>
                        <td><?php echo $current_address ?></td>
                      </tr>
                        <th>Place of Birth:</th>
                        <td><?php echo $place_of_birth ?></td>

                      </tr>

                       </tr>
                        <th>Birthday:</th>
                        <td><?php echo $birthdate ?></td>

                      </tr>

                      </tr>
                        <td><b>Contact No.</b></td>
                        <td><?php echo $phone_number ?></td>

                      </tr>
					   </tr>
                        <td><b>Email:</b></td>
                        <td><?php echo $email ?></td>

                      </tr>
					   </tr>
                        <td><b>LinkedIn Profile:</b></td>
                        <td><?php echo $linkedin_profile ?></td>

                      </tr>
					   </tr>
                        <td><b>Educational Attainment</b></td>
                        <td><?php echo $educational_attainment ?></td>

                      </tr>
					   </tr>
                        <td><b>Civil Status:</b></td>
                        <td><?php echo $civil_status ?></td>

                      </tr>
					   </tr>
                        <td><b>Nationality</b></td>
                        <td><?php echo $nationality ?></td>

                      </tr>
					   </tr>
                        <td><b>SSN</b></td>
                        <td><?php echo $SSN ?></td>

                      </tr>
					  </tr>
					   </tr>
                        <td><b>Birth Certificate ID</b></td>
                        <td><?php echo $birth_certificate_id ?></td>

                      </tr>





                    </tbody>
                  </table>
                   <a href="edit_basic_employee.php?id=<?php echo $id ?>" class="btn btn-danger container mx-auto" style="margin-left:20%;"> EDIT</a>


                </div>
              </div>
            </div>




			<br><br><br><br>

			<div class="panel-body" style = "margin-right: 21%;font-size: 17px">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">  </div>


                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>

					<tr>
                        <td colspan = 3><h1>JOB HISTORY</h1></td>
                      </tr>
					<tr>
                        <th>Job Name:</th>
						<th>Job Description:</th>
						<th>Action:</th>

                     </tr>

                      <?php

					$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
					$stmt = $db->prepare("SELECT * FROM employee_job_history WHERE `employee_id` = '$id'");
					$stmt->execute();
					$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
						//$stmt->debugDumpParams();
						//header ('location: admin.php');
					$job_desc = "";
					$job_desc = "";
					foreach ($results_arr as $i => $values) {
						foreach ($values as $key => $value) {
							if($key=="job_name")$job_name = $value;
							if($key=="job_desc")$job_desc = $value;
						}?>

                      <tr>
                        <td><?php echo $job_name ?></td>
                        <td><?php echo $job_desc ?></td>


						<!--EDIT THIS ARVIN-->
						<td><button type = 'button' class = "btn btn-danger"> EDIT </button><button type = 'button' class = "btn btn-danger"> DELETE </button></td>
                      </tr>
					<?php } ?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
			<br><br><br><br>

			<div class="panel-body" style = "margin-right: 21%;font-size: 17px">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">  </div>


                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>

					<tr>
                        <td><h1>Employee Skills</h1></td>
						<th>Action:</th>
                      </tr>

                      <?php

					$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
					$stmt = $db->prepare("SELECT * FROM employee_skills WHERE `employee_id` = '$id'");
					$stmt->execute();
					$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$skill = "";
					foreach ($results_arr as $i => $values) {
						foreach ($values as $key => $value) {
							if($key=="skill")$skill = $value;
						}?>

                      <tr>
                        <td><?php echo $skill ?></td>
						<td><button type = 'button' class = "btn btn-danger"> EDIT </button><button type = 'button' class = "btn btn-danger"> DELETE </button></td>
                      </tr>
					<?php } ?>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>


          </div>
</div>
<footer class="footer" id="myFooter" >
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Links</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="register.html">Apply </a></li>
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
