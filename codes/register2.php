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
			$("#add_dependency").click(function(e) {
				var counter = 3;
				var dependencyName = "employee_dependency_" + counter;
				var relationName = "dependency_relationship_" + counter;
				counter++;
				e.preventDefault();
				$("#history_form").append('<div class = "row"><div class = "col-11"><div class="form-group input-group"><div class="input-group-prepend"><span class="input-group-text">Job Name</span></div><input name='+dependencyName+' class="form-control" placeholder="" type="text"></div></div><div class = "col"><button id="add_history">Add</button></div></div><div class = "row"><div class="form-group input-group col"><textarea style = "width: 877px" rows = 4 id = '+relationName+'  name='+relationName+' placeholder="briefly describe.." form = "step2"></textarea></div></div>');

			});
			var counter1 = 2;
			$("#add_history").click(function(e) {
				var jobName = "job_name_" + counter1;
				var jobDesc = "job_desc_" + counter1;
				counter1++;
				e.preventDefault();
				$("#history_form").append('	<div class = "row"><div class = "col-11"><div class="form-group input-group"><div class="input-group-prepend"><span class="input-group-text">Job Name</span></div><input name="' + jobName + '" class="form-control" placeholder="" type="text"></div></div><div class = "col"></div></div><div class = "row"><div class="form-group input-group col"><textarea style = "width: 877px" rows = 4 id ="' + jobDesc + '" name ="' + jobDesc + '" class="form-control" placeholder="briefly describe.." form = "addform"></textarea></div></div>');
			});
			$(".deleteThis").click(function(){
				$(this.parentNode).remove();
			})

			  $("#toStep3").click(validate);
				function validate(){

				if($("[name=employee_dependency_1]").val()=="" || $("[name=dependency_relationship_1]").val()=="" &&  $("[name=job_name_1]").val()=="" || $("[name=job_desc_1]").val()==""){

				  alert("No/incomplete entries. Please fill all or press SKIP!");
				}
			  else {
				if (((document.location).toString()).includes("step2")){
				$("#addform").submit();
				//////Writing other fields for other tables on a CSV




				//////
				//to do after form submits
				$("#addform").reset();
			  }
			  else {
				$("#editform").submit();
				//to do after form submits
				$("#editform").reset();
			  }
			  }
			  }

			  function isDigit(text){
				if (text.match("[0-9]+")) {
				  return true;
			  }
			  else {
				return false;
			  }
			}

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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Application Form (Step 2)<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "index.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 1000px;">
      <div class="row"><div class = "col-sm mx-auto"style="max-width: 500px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div>
			<form id="addform" method = "post" name = "step2" action = "register3.php">
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

				<br>

				<!--Job History-->
				<h2 align = "center" style = "width: 1000px">Job History:</h2>

				<div id = "history_form">
					<div class = "row">
						<div class = "col-11">
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Job Name</span>
								</div>
								<input name="job_name_1" class="form-control" placeholder="" type="text">
							</div>
						</div>

						<div class = "col">
							<button id="add_history">Add</button>
						</div>
					</div>
					<div class = "row">
						<div class="form-group input-group col">
							<textarea style = "width: 877px" rows = 4 id = "job_desc_1"  name="job_desc_1" placeholder="briefly describe.." form = "addform"></textarea>
						</div>
					</div>
				</div>



				<br>

				<div class = "row">
					<div class = "col">
						<div class="form-group mx-auto" style = "max-width: 500px">
							<input id="skip" type="button" class="btn btn-danger btn-block" value= "Skip this step" >
						</div>
					</div>
					<div class = "col">
						<div class="form-group mx-auto" style = "max-width: 500px">
							<input id="toStep3" type="submit" class="btn btn-danger btn-block" value= "Proceed to Next Step" >
						</div>
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
