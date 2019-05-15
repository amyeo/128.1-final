<?php include("append.php"); ?>

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
				$("#dependency_form").append('<div class = "col-7"><div class="form-group input-group"><div class="input-group-prepend"><span class="input-group-text">Name</span></div><input name=' + dependencyName + ' class="form-control" placeholder="" type="text"></div></div><div class = "col-4"><div class="form-group input-group"><div class="input-group-prepend"><span class="input-group-text">Relationship</span></div><input name=' + relationName + ' class="form-control" placeholder="" type="text"></div></div>');
			});
			$("#add_history").click(function(e) {
				var counter1 = 2;
				var jobName = "job_name_" + counter1;
				var jobDesc = "job_desc_" + counter1;
				counter1++;
				e.preventDefault();
				$("#history_form").append('	<div class = "row"><div class = "col-11"><div class="form-group input-group"><div class="input-group-prepend"><span class="input-group-text">Job Name</span></div><input name=' + jobName + 'class="form-control" placeholder="" type="text"></div></div><div class = "col"></div></div><div class = "row"><div class="form-group input-group col"><textarea style = "width: 877px" rows = 4 id =' + jobDesc + ' name =' + jobDesc + ' class="form-control" placeholder="briefly describe.." form = "step2"></textarea></div></div>');
			});
			$(".deleteThis").click(function(){
				$(this.parentNode).remove();
			})

			  $("#toStep3").click(validate);
				function validate(){

				//if($("[name=employee_dependency_1]").val()=="" || $("[name=dependency_relationship_1]").val()=="" || $("[name=job_name_1]").val()=="" || $("[name=job_desc_1]").val()==""){
//
				//  alert("No entries. Press SKIP!");
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">New Employee Form (Step 2)<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 1100px;">
      <div class="row"><div class = "col-sm mx-auto"style="max-width: 500px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div>
			<form id="addform" method = "post" name = "step2" action = "export.php">
				<!--EDITING THIS SHIT-->
	
		
				<input name="first_name" type="text" hidden value = "<?php echo $first_name?>">
				<input name="last_name" type="text" hidden value = "<?php echo $last_name?>">
				<input name="middle_initial" type="text" hidden value = "<?php echo $middle_initial?>">
				<input name="sex" type="text" hidden value = "<?php echo $sex?>">
				<input name="full_address" type="text" hidden value = "<?php echo $full_address?>">
				<input name="place_of_birth" type="text" hidden value = "<?php echo $place_of_birth?>">
				<input name="birthday" type="date" hidden value = "<?php echo $birthday?>">
				<input name="phone_number" type="text" hidden value = "<?php echo $phone_number?>">
				<input name="email" type="text" hidden value = "<?php echo $email?>">
				<input name="linkedin_profile" type="text" hidden value = "<?php echo $linkedin_profile?>">
				<input name="educational_attainment" type="text" hidden value = "<?php echo $educational_attainment?>">
				<input name="civil_status" type="text" hidden value = "<?php echo $civil_status?>">
				<input name="nationality" type="text" hidden  value = "<?php echo $nationality?>">
				<input name="SSN" type="text" hidden value = "<?php echo $SSN?>">
				
				<!--I SET MAX No. of SKILLS TO 5-->
				<input name="employee_skill_1" type="text" hidden value = "<?php echo $employee_skill_1?>">
				<input name="employee_skill_2" type="text" hidden value = "<?php if($skill_count>1) echo $employee_skill_2; else ''?>">
				<input name="employee_skill_3" type="text" hidden value = "<?php if($skill_count>2) echo $employee_skill_3; else ''?>">
				<input name="employee_skill_4" type="text" hidden value = "<?php if($skill_count>3) echo $employee_skill_4; else ''?>">
				<input name="employee_skill_5" type="text" hidden value = "<?php if($skill_count>4) echo $employee_skill_5; else ''?>">
				<input type = "text" name = "skill_count" value = "<?php echo $skill_count?>" hidden>
				
				<input name="applying_for" type="text" hidden value = "<?php echo $applying_for?>">
				<input name="birth_cert_id" type="text" hidden value = "<?php echo $birth_cert_id?>">
				<input name="health_benefits" type="text" hidden value = "<?php echo $health_benefits?>">
				
				<!---->
		
		
				<br>


				<!--Dependencies-->
				<h2 align = "center" style = "width: 1000px">Dependents:</h2>
				<div class = "row" id = "dependency_form">
					<div class = "col-7">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Name</span>
							</div>
							<input name="employee_dependency_1" class="form-control" placeholder="optional" type="text">
						</div>
					</div>
					<div class = "col-4">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Relationship</span>
							</div>
							<input name="dependency_relationship_1" class="form-control" placeholder="optional" type="text">
						</div>
					</div>
					<div class = "col">
						<button class = "btn btn-secondary" id="add_dependency">Add</button>
					</div>
					<div class = "col-7">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Name</span>
							</div>
							<input name="employee_dependency_2" class="form-control" placeholder="optional" type="text">
						</div>
					</div>
					<div class = "col-4">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Relationship</span>
							</div>
							<input name="dependency_relationship_2" class="form-control" placeholder="optional" type="text">
						</div>
					</div>

				</div>
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
							<button class = "btn-secondary btn"id="add_history">Add</button>
						</div>
					</div>	
					<div class = "row">
						<div class="form-group input-group col">
							<textarea style = "width: 970px" rows = 4 id = "job_desc_1"  name="job_desc_1" placeholder="briefly describe.." form = "addform"></textarea>
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
							<input id="toStep3" type="button" class="btn btn-danger btn-block" value= "Submit" >
						</div>
					</div>
				</div>

			</form>
		</article>
	</div>
	
	<footer class="footer text-center " style = "margin-left: -40px;" >
		<div class="container mx-auto" style = "max-width: 1000px; margin: 0;">
		  <div class="row">
			<div class="col-md-4 mb-2 mb-lg-0">
			  <h4 class="text-uppercase mb-4">Location</h4>
			  <p class="lead mb-0">Padre Faura Street, University of the Philippines Manila</p>
			</div>
			
			
			<p>
			<img src="images/cropped-UPseal-newcolors-192x192.png" align = "middle" style="margin-left:70px; height:110px;">
			</p>
			
			
			<div class="col-md-4">
			  <h4 class="text-uppercase mb-4">About Us</h4>
			  <p class="lead mb-0">CS 127 Group</p>
			</div>
		  </div>
		</div>
	  </footer>



  </body>
