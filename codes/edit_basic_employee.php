<?php
error_reporting(-1);
echo "\n";
$link = mysqli_connect("localhost","root","","128.1v2");
mysqli_set_charset($link, "utf8");
//error if not success
if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); //quit if failed
}

$message="";
//catch POST requests here for completed data submission
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$middle_initial = $_POST['middle_initial'];
	$sex = $_POST['sex'];
	$full_address = $_POST['full_address'];
	$place_of_birth = $_POST['place_of_birth'];
	$birthday = $_POST['birthday'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$linkedin_profile = $_POST['linkedin_profile'];
	$educational_attainment = $_POST['educational_attainment'];
	$civil_status = $_POST['civil_status'];
	$nationality = $_POST['nationality'];
    $SSN = $_POST['SSN'];
    $job_position = $_POST['job_position'];
	$birth_cert_id = $_POST['birth_cert_id'];
    $health_benefits = $_POST['health_package'];
    $employee_id = $_POST['employee_id'];
    $querystr = "UPDATE employee SET 
    first_name='" . $first_name . "' "
    . ",last_name='" . $last_name . "' "
    . ",middle_initial='" . $middle_initial . "' "
    . ",sex='" . $sex . "' "
    . ",current_address='" . $full_address . "' "
    . ",place_of_birth='" . $place_of_birth . "' "
    . ",birthdate='" . $birthday . "' "
    . ",phone_number='" . $phone_number . "' "
    . ",email='" . $email . "' "
    . ",linkedin_profile='" . $linkedin_profile . "' "
    . ",educational_attainment='" . $educational_attainment . "' "
    . ",civil_status='" . $civil_status . "' "
    . ",nationality='" . $nationality . "' "
    . ",SSN='" . $SSN . "' "
    . ",job_position='" . $job_position . "' "
    . ",birth_certificate_id='" . $birth_cert_id . "' "
    . ",health_package='" . $health_benefits . "' "
    . "  WHERE id='" . $employee_id  . "' " ;
    //echo $querystr . "\n";
    mysqli_query($link, $querystr);
    //print "Edit Executed.";
    $message = "Record has been updated.";
}

$id = "";
if($id = $_GET['id']){
    //echo "ID: " . $id . "\n";
    //echo "ID end \n";
    $id = (int)$id;
}
$fill_data = false;
//initialize fill variables
$first_name = "";
$last_name = "";
$middle_initial = "";
$sex = "";
$full_address = "";
$place_of_birth = "";
$birthday = "";
$phone_number = "";
$email = "";
$linkedin_profile = "";
$educational_attainment = "";
$civil_status = "";
$nationality = "";
$SSN = "";
$job_position = "";
$birth_cert_id = "";
$employment_date = "";
$health_package = "";
$applicant_id = "";

$skills_csv = "";
$job_history_csv = "";

// if id exists, try searching it. if it does not OR none provided, return error
if($id != ""){
    //check if id exists in the db 
	
    if($id_match_result = mysqli_query($link, "SELECT * FROM employee WHERE id='".$id."'")){
        $row_cnt = mysqli_num_rows($id_match_result);
        if($row_cnt>0){
            //succes, record found!
            $fill_data = true;
            //start filling data
						$row = mysqli_fetch_array($id_match_result);
						$applicant_id = $row['id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
			$job_position = $row['job_position'];
			$middle_initial = $row['middle_initial'];
			$sex = $row['sex'];
			$full_address = $row['current_address'];
			$place_of_birth = $row['place_of_birth'];
			$birthday = $row['birthdate'];
			$phone_number = $row['phone_number'];
			$email = $row['email'];
			$linkedin_profile = $row['linkedin_profile'];
			$educational_attainment = $row['educational_attainment'];
			$civil_status = $row['civil_status'];
			$nationality = $row['nationality'];
			$SSN = $row['SSN'];
			$birth_cert_id = $row['birth_certificate_id'];
			//$employment_date = $row['employment_date'];
			$health_package = $row['health_package'];
        }else{
            //quit. record does not exits
            echo "Error! Record does not exist!" . "\n";
            exit();
        }
        mysqli_free_result($id_match_result);
    }
}else{
		echo "Error: Record ID MUST be provided" . "\n";
		exit();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Edit Employee Basic Info</title>
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
        $msg = "<?php echo $message; ?>";
        if($msg != ""){
            alert($msg);
			window.location.href = "employee_details.php?id=<?php echo $id ?>";
        }
    </script>

	<script>
		$(function() {
			var counter = 2;
			$("#add_skills").click(function(e) {
				if(counter<6){
					var fieldname = "Skill " + counter;
					var inputname = "employee_skill_" + counter;
					document.getElementById("skillVal").value = counter;
					counter++;
					e.preventDefault();
					$("#skill_form").append('<div class = "col-10"><div class="form-group input-group"><div class="input-group-prepend"><span class="input-group-text">' + fieldname + '</span></div><input name=' + inputname + ' class="form-control" placeholder="optional" type="text"></div></div><div class = "col"><button class = "deleteThis" hidden>x</button></div>');
				}
				else if(counter==6){
					e.preventDefault();
					counter++;
					$("#skill_form").append('<div class = "col-10"><div class="form-group input-group"><div class="input-group-prepend"><span style = "color:red">Cannot add more skills (max 5)</span></div></div>');
				}
				else e.preventDefault();
			});
			$(".deleteThis").click(function(){
				$(this.parentNode).remove();
			})

		});
	</script>


    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="signUpStyles.css">
  </head>
  <body>
<div class="shadow">
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Edit Employee Basic Information<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 800px;">
		<div class="row"><div class = "col-sm mx-auto"style="max-width: 500px;">
		  <img src="images/progress1.png" style="height:120px;margin:0px;">
		</div></div>
            <form id="addform" method = "post" action = "edit_basic_employee.php?id=<?php echo $id?>">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span><span class="input-group-text">Firstname</span>
					 </div>
					<input name="first_name" class="form-control boxes" style = "width:600px;" type="text" value = "<?php echo $first_name?>"><font color="red">*</font>
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span><span class="input-group-text">Lastname</span>
					 </div>
					<input name="last_name" class="form-control" type="text" value = "<?php echo $last_name?>"><font color="red" >*</font>
				</div> <!-- form-group// -->

				<div class = "row">
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Middle Initial</span>
							 </div>
							<input name="middle_initial" class="form-control" style = "max-width: 400px;" type="text" value = "<?php echo $middle_initial?>"><font color="red">*</font>
						</div> <!-- form-group// -->


					</div>
					<div class = "col">
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> Sex</span>
								</div>
								<select name = "sex" class="custom-select" style="max-width: 400px;">
									<option value = "M" <?php if($sex=="M") echo "selected"?>>Male</option>
									<option value="F" <?php if($sex=="F") echo "selected"?>>Female</option>
								</select><font color="red">*</font>
						</div> <!-- form-group// -->
					</div>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-building"></i> </span><span class="input-group-text">Current Address</span>
					</div>
					<input name="full_address" class="form-control" type="text" value = "<?php echo $full_address?>"><font color="red">*</font>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-building"></i> </span><span class="input-group-text">Place of Birth</span>
					</div>
					<input name="place_of_birth" class="form-control" type="text" value = "<?php echo $place_of_birth?>"><font color="red">*</font>
				</div> <!-- form-group end.// -->




				<!-- insert bday here-->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Birthday</span>
					</div>
					<input name="birthday" class="form-control" placeholder="Birthday" type="date" value="<?php echo $birthday; ?>" ><font color="red">*</font>
				</div> <!-- form-group end.// -->

				<!----------------------->






				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span><span class="input-group-text">Phone Number</span>
					</div>
					<input name="phone_number" class="form-control" type="text" value = "<?php echo $phone_number?>"><font color="red">*</font>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Email Address</span>
					</div>
					<input name="email" class="form-control" type="text" value = "<?php echo $email?>"><font color="red">*</font>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">LinkedIn Profile</span>
					</div>
					<input name="linkedin_profile" class="form-control" placeholder="optional" type="text" value = "<?php echo $linkedin_profile?>">
				</div>
				
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Assigned Job Position</span>
					</div>
					<input name="job_position" class="form-control" placeholder="optional" type="text" value = "<?php echo $job_position; ?>">
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Health Package</span>
							<select name="health_package">
							<?php
							$count=0;
							$sel_query="Select * from health_packages ORDER BY id asc;";
							$result = mysqli_query($link,$sel_query);
							while($row = mysqli_fetch_assoc($result)) { ?>
							<option id="<?php print $row["id"]; ?>" value="<?php print $row["id"]; ?>" <?php if($row["id"]==$health_package) echo "selected"?> ><?php print $row["package_name"]; ?></option>
							<?php $count++; } ?>    
							</select>
					</div>
				</div>

				<div class = "row">
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Educational Attainment</span>
							</div>
							<select name = "educational_attainment" class="custom-select" style="max-width: 400px;">
								<option value = "College" <?php if($educational_attainment=="College") echo "selected"?>>College</option>
								<option value="Vocational" <?php if($educational_attainment=="Vocational") echo "selected"?>>Vocational</option>
								<option value="HS" <?php if($educational_attainment=="HS") echo "selected"?>>Highschool</option>
								<option value="Elementary" <?php if($educational_attainment=="Elementary") echo "selected"?>>Elementary</option>
							</select><font color="red">*</font>
						</div> <!-- form-group// -->
					</div>
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Civil Status</span>
							</div>
							<select name = "civil_status" class="custom-select" style="max-width: 400px;">
								<option value = "M" <?php if($civil_status=="M") echo "selected"?>>Married</option>
								<option selected value="S" <?php if($civil_status=="S") echo "selected"?>>Single</option>
							</select><font color="red">*</font>
						</div> <!-- form-group// -->
					</div>
				</div>

				<div class = "row">
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Nationality</span>
							</div>
							<input name="nationality" class="form-control"type="text" value = "<?php echo $nationality?>"><font color="red">*</font>
						</div>
					</div>
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">SSN</span>
							</div>
							<input name="SSN" class="form-control" placeholder="" type="text" value = "<?php echo $SSN?>"><font color="red">*</font>
						</div>
					</div>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Birth Certificate ID</span>
					</div>
					<input name="birth_cert_id" class="form-control" placeholder="" type="text" value = "<?php echo $birth_cert_id?>"><font color="red">*</font>
				</div>
                <input name="employee_id" type="hidden" value="<?php echo $applicant_id; ?>">
			  <font color="red">* </font><font color="grey">Required fields - must be filled!</font><br><br>
				<div class="form-group mx-auto" style = "max-width: 400px">
					<input id="addemployee" type="submit" class="btn btn-danger btn-block" value= "Commit Changes" >
				</div>
			</form>
		</article>
	</div>

</div>

  </body>
