<?php
//var_dump($_POST);
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
					alert("Please confirm you have submitted nothing but the truth.");
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Application Form (Step 3)<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 1000px;">
		 <div class="row"><div class = "col-sm mx-auto"style="max-width: 500px;">
		  <img src="images/progress3.png" style="height:120px;margin:0px;">
		</div></div>
		<br>
      <!--div class="row"><div class = "col-sm mx-auto"style="max-width: 300px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div-->
			<form id="results_form" method = "post" name = "finished_page" action = "register4.php">

			<input name="first_name" type="hidden" value="<?php echo $_POST["first_name"]; ?>">
			<input name="last_name" type="hidden" value="<?php echo $_POST["last_name"]; ?>">
			<input name="middle_initial" type="hidden" value="<?php echo $_POST["middle_initial"]; ?>">
			<input name="sex" type="hidden" value="<?php echo $_POST["sex"]; ?>">
			<input name="full_address" type="hidden" value="<?php echo $_POST["full_address"]; ?>">
			<input name="place_of_birth" type="hidden" value="<?php echo $_POST["place_of_birth"]; ?>">
			<input name="birthday" type="hidden" value="<?php echo $_POST["birthday"]; ?>">
			<input name="phone_number" type="hidden" value="<?php echo $_POST["phone_number"]; ?>">
			<input name="email" type="hidden" value="<?php echo $_POST["email"]; ?>">
			<input name="linkedin_profile" type="hidden" value="<?php echo $_POST["linkedin_profile"]; ?>">
			<input name="educational_attainment" type="hidden" value="<?php echo $_POST["educational_attainment"]; ?>">
			<input name="civil_status" type="hidden" value="<?php echo $_POST["civil_status"]; ?>">
			<input name="nationality" type="hidden" value="<?php echo $_POST["nationality"]; ?>">
			<input name="SSN" type="hidden" value="<?php echo $_POST["SSN"]; ?>">

			<input name="employee_skill_1" type="hidden" value="<?php if(isset($_POST["employee_skill_1"])){echo $_POST["employee_skill_1"];} ?>">
			<input name="employee_skill_2" type="hidden" value="<?php if(isset($_POST["employee_skill_2"])){echo $_POST["employee_skill_2"];} ?>">
			<input name="employee_skill_3" type="hidden" value="<?php if(isset($_POST["employee_skill_3"])){echo $_POST["employee_skill_3"];} ?>">
			<input name="employee_skill_4" type="hidden" value="<?php if(isset($_POST["employee_skill_4"])){echo $_POST["employee_skill_4"];} ?>">
			<input name="employee_skill_5" type="hidden" value="<?php if(isset($_POST["employee_skill_5"])){echo $_POST["employee_skill_5"];} ?>">

			<input name="job_position_targ" type="hidden" value="<?php echo $_POST["job_position_targ"]; ?>">
			<input name="birth_cert_id" type="hidden" value="<?php echo $_POST["birth_cert_id"]; ?>">

			<!-- AUTO GENERATE ENTRIES FOR JOB HISTORY HERE -->
			<?php
			//Auto add all job_name_1
			$job_name_num = 1;
			$job_name_name = "job_name_";
			while(isset($_POST[$job_name_name . $job_name_num])){
				print '<input name="' . ($job_name_name . $job_name_num) . '" type="hidden" value="' . $_POST[$job_name_name . $job_name_num] . '">' . "\n";
				$job_name_num = $job_name_num + 1;
			}
			?>
			<?php
			//Auto add all job_desc_1
			$job_name_num = 1;
			$job_name_name = "job_desc_";
			while(isset($_POST[$job_name_name . $job_name_num])){
				print '<input name="' . ($job_name_name . $job_name_num) . '" type="hidden" value="' . $_POST[$job_name_name . $job_name_num] . '">' . "\n";
				$job_name_num = $job_name_num + 1;
			}
			?>



				<br>


				<!--Dependencies-->
				<h4 align = "center" style = "width: 1000px">Thank you for submitting the application form. Your details will be validated soon. You check your application status through the link below.</h2>
				<br>

				<br>
				<h4 align = "center" style = "width: 1000px">Please provide a password to gain access to your application results:</h4>
				<br>

				<div class = "row mx-auto" style = "width: 600px">
						<div class="form-group input-group">
							<input name="results_password1" class="form-control" placeholder="Enter Password" type="password">
						</div>
				</div>
				<div class = "row mx-auto" style = "width: 600px">
						<div class="form-group input-group">
							<input name="results_password2" class="form-control" placeholder="Confirm your Password" type="password">
						</div>
				</div>

				<br>

				<div class = "row mx-auto" style = "width: 600px">
					<input type="checkbox" id="checkbox" value="marked"> I hereby pledge I have submitted nothing but the truth.
					<br>
				</div>

				<br>

				<div class = "row">
						<div class="form-group mx-auto" style = "max-width: 500px">
							<input id="finish" type="button" class="btn btn-danger btn-block" value= "Finish Application" >
						</div>
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
