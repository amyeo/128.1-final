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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Application Form<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "index.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 800px;">

			 <div class="row"><div class = "col-sm mx-auto"style="max-width: 500px;">
			  <img src="images/progress1.png" style="height:120px;margin:0px;">
			</div></div>



			<form id="addnew" method = 'post' action = "register2.php">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span><span class="input-group-text">Firstname</span>
					 </div>
					<input name="first_name" class="form-control boxes" style = "width:600px;" type="text"><font color="red">*</font>
				</div> <!-- form-group// -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span><span class="input-group-text">Lastname</span>
					 </div>
					<input name="last_name" class="form-control" type="text"><font color="red">*</font>
				</div> <!-- form-group// -->

				<div class = "row">
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Middle Initial</span>
							 </div>
							<input name="middle_initial" class="form-control" style = "max-width: 400px;" type="text"><font color="red">*</font>
						</div> <!-- form-group// -->


					</div>
					<div class = "col">
						<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> Sex</span>
								</div>
								<select name = "sex" class="custom-select" style="max-width: 400px;">
									<option selected value = "M" >Male</option>
									<option value="F">Female</option>
								</select><font color="red">*</font>
						</div> <!-- form-group// -->
					</div>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-building"></i> </span><span class="input-group-text">Current Address</span>
					</div>
					<input name="full_address" class="form-control" type="text"><font color="red">*</font>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-building"></i> </span><span class="input-group-text">Place of Birth</span>
					</div>
					<input name="place_of_birth" class="form-control" type="text"><font color="red">*</font>
				</div> <!-- form-group end.// -->




				<!-- insert bday here-->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Birthday</span>
					</div>
					<input name="birthday" class="form-control" placeholder="Birthday" type="date"><font color="red">*</font>
				</div> <!-- form-group end.// -->

				<!----------------------->






				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span><span class="input-group-text">Phone Number</span>
					</div>
					<input name="phone_number" class="form-control" type="text"><font color="red">*</font>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Email Address</span>
					</div>
					<input name="email" class="form-control" type="text"><font color="red">*</font>
				</div>

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">LinkedIn Profile</span>
					</div>
					<input name="linkedin_profile" class="form-control" placeholder="optional" type="text">
				</div>


				<div class = "row">
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Educational Attainment</span>
							</div>
							<select name = "educational_attainment" class="custom-select" style="max-width: 400px;">
								<option selected value = "College" >College</option>
								<option value="Vocational">Vocational</option>
								<option value="HS">Highschool</option>
								<option value="Elementary">Elementary</option>
							</select><font color="red">*</font>
						</div> <!-- form-group// -->
					</div>
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Civil Status</span>
							</div>
							<select name = "civil_status" class="custom-select" style="max-width: 400px;">
								<option value = "M" >Married</option>
								<option selected value="S">Single</option>
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
							<input name="nationality" class="form-control"type="text"><font color="red">*</font>
						</div>
					</div>
					<div class = "col">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">SSN</span>
							</div>
							<input name="SSN" class="form-control" placeholder="" type="text"><font color="red">*</font>
						</div>
					</div>
				</div>


				<div class = "row" id = "skill_form">
						<div class = "col-10">
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Skill</span>
								</div>
								<input name="employee_skill_1" class="form-control" placeholder="optional" type="text">
							</div>
						</div>
						<div class = "col">
							<button id="add_skills">Add Skills</button>
						</div>
					</div>

					<input id = "skillVal" type = "text" name = "skill_count" value = "1" hidden>

				<!--
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Employment History</span>
					</div>
					<input name="employment_history" class="form-control" placeholder="" type="text"><font color="red">*</font>
				</div>
				-->


				<div class = "row">
					<div class = "col-4">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Target Position</span>
								<select name="job_position_targ">
            <?php
            $count=0;
            $sel_query="Select * from job_positions ORDER BY id asc;";
            $result = mysqli_query($link,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
            <option id="<?php print $row["id"]; ?>" value="<?php print $row["id"]; ?>"><?php print $row["job_title"]; ?></option>
            <?php $count++; } ?>
            </select><font color="red">*</font>
							</div>

						</div> <!-- form-group// -->
					</div>
					<div class = "col-8">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Birth Certificate ID</span>
							</div>
							<input name="birth_cert_id" class="form-control" placeholder="" type="text"><font color="red">*</font>
						</div> <!-- form-group// -->
					</div>
				</div>

				<!--employee added fields-->


			  <font color="red">* </font><font color="grey">Required fields - must be filled!</font><br><br>
				<div class="form-group mx-auto" style = "max-width: 400px">
					<input id="addapplicant" type="button" class="btn btn-danger btn-block" value= "Proceed to Step 2" >
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
