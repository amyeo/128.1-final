<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>New Employee</title>
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
	<style>
	table, td {
  	border: 1px solid black;
	}
	</style>


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
		<article class="card-body mx-auto" style="max-width: 1000px;">
      <div class="row"><div class = "col-sm mx-auto"style="max-width: 500px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div>

		<script>
		//do not delete
		function AddSkill(){
            //do validation here first
            var nameField = document.getElementById("skill_name").value;
            //check email first,then all the general fields that may be blank
            var table=document.getElementById("SkillsTable");
						var row=table.insertRow(-1);
						var cell1=row.insertCell(0);
						var cell2=row.insertCell(1);
						cell1.innerHTML = nameField;
						cell2.innerHTML = '<button onclick="DeleteRow(this)">Delete</button>';
        }
			function DeleteRow(btn){
				var row = btn.parentNode.parentNode;
				row.parentNode.removeChild(row);
			}

			function AddJobHist(){
            //do validation here first
            var nameField = document.getElementById("job_name").value;
						var descField = document.getElementById("job_description").value;
            //check email first,then all the general fields that may be blank
            var table=document.getElementById("JobHistoryTable");
						var row=table.insertRow(-1);
						var cell1=row.insertCell(0);
						var cell2=row.insertCell(1);
						var cell3=row.insertCell(2);
						cell1.innerHTML = nameField;
						cell2.innerHTML = descField;
						cell3.innerHTML = '<button onclick="DeleteRow(this)">Delete</button>';
        }

				function AddDep(){
            //do validation here first
            var nameField = document.getElementById("dependent_name").value;
						var descField = document.getElementById("dependent_relationship").value;
            //check email first,then all the general fields that may be blank
            var table=document.getElementById("DependentsTable");
						var row=table.insertRow(-1);
						var cell1=row.insertCell(0);
						var cell2=row.insertCell(1);
						var cell3=row.insertCell(2);
						cell1.innerHTML = nameField;
						cell2.innerHTML = descField;
						cell3.innerHTML = '<button onclick="DeleteRow(this)">Delete</button>';
        }

				function SubmitAsString(){

            var outString_dependents = "";
            var table = document.getElementById("DependentsTable");
            for (var i = 1, row; row = table.rows[i]; i++) {
                //iterate through rows
                //rows would be accessed using the "row" variable assigned in the for loop
                for (var j = 0, col; col = row.cells[j]; j++) {
                    //iterate through columns
                    //columns would be accessed using the "col" variable assigned in the for loop
                    outString_dependents = outString_dependents + col.innerText;
                    if(j<2){
											outString_dependents = outString_dependents + ",";
                    }
                }
                outString_dependents = outString_dependents + ";";
								console.log()
            }
            document.getElementById("dependents_table_csv").value = outString_dependents;
						//console.log(outString_dependents);

						var outString_skills = "";
            var table = document.getElementById("SkillsTable");
            for (var i = 1, row; row = table.rows[i]; i++) {
                //iterate through rows
                //rows would be accessed using the "row" variable assigned in the for loop
                for (var j = 0, col; col = row.cells[j]; j++) {
                    //iterate through columns
                    //columns would be accessed using the "col" variable assigned in the for loop
                    outString_skills = outString_skills + col.innerText;
                    if(j<1){
											outString_skills = outString_skills+ ",";
                    }
                }
                outString_skills = outString_skills + ";";
            }
            document.getElementById("skills_table_csv").value = outString_skills

						var outString_jhist = "";
            var table = document.getElementById("JobHistoryTable");
            for (var i = 1, row; row = table.rows[i]; i++) {
                //iterate through rows
                //rows would be accessed using the "row" variable assigned in the for loop
                for (var j = 0, col; col = row.cells[j]; j++) {
                    //iterate through columns
                    //columns would be accessed using the "col" variable assigned in the for loop
                    outString_jhist = outString_jhist + col.innerText;
                    if(j<2){
											outString_jhist = outString_jhist + ",";
                    }
                }
                outString_jhist = outString_jhist + ";";
            }
            document.getElementById("job_history_table_csv").value = outString_jhist;


            return true;
        }
		</script>

			<!-- Table bullshit starts here -->
			<h2>Dependents Editor</h2>
				<table id="DependentsTable"  class = "table">
				<tr>
					<td><b>Dependent Name</b></td>
					<td><b>Relationship</b></td>
					<td><b>Action</b></td>
				</tr>
			</table>
			<h3>Add Dependents</h3>
			Dependent's Name: <input type="text" id="dependent_name"> <br>
			Dependent's Relationship: <input type="text" id="dependent_relationship"> <br>
			<button onclick="AddDep()">Add Dependent</button> <br>
			<hr/>



			<h2>Skills Editor</h2>
				<table id="SkillsTable"  class = "table">
				<tr>
					<td><b>Skill Name</b></td>
					<td><b>Action</b></td>
				</tr>
				<?php
				//step 1: load csv into string here for applicant
				$skills_csv = $_POST["skills_csv"];
				//first of all, break the data into rows
      $row_arr = explode(";",$skills_csv);
        foreach($row_arr as $row){
						$cell_arr = explode(",",$row);
						if($cell_arr[0] != ""){
							print "<tr>";
							print "<td>" . $cell_arr[0] . "</td>";
							print "<td>" . '<button onclick="DeleteRow(this)">Delete</button>' . "</td>";
							print "</tr>";
						}
        }
				?>
			</table>
			<h4>Add Skill</h4>
			Skill Name: <input type="text" id="skill_name"> <br>
			<button onclick="AddSkill()">Add Skill</button> <br>
			<hr/>


			<h2>Job History Editor</h2>
				<table id="JobHistoryTable" class = "table">
				<tr>
					<td><b>Job Title</b></td>
					<td><b>Job Description</b></td>
					<td><b>Action</b></td>
				</tr>
				<?php
				//step 1: load csv into string here for applicant
				$job_history_csv = $_POST["job_history_csv"];
				//first of all, break the data into rows
        $row_arr = explode(";",$job_history_csv);
        foreach($row_arr as $row){
						$cell_arr = explode(",",$row);
						if($cell_arr[0] != "" && $cell_arr[1] != ""){
							print "<tr>";
							print "<td>" . $cell_arr[0] . "</td>";
							print "<td>" . $cell_arr[1] . "</td>";
							print "<td>" . '<button onclick="DeleteRow(this)">Delete</button>' . "</td>";
							print "</tr>";
						}
        }
				?>
			</table>
			<h4>Add Job History Entry</h4>
			Job Title: <input type="text" id="job_name"> <br>
			Job Description: <input type="text" id="job_description"> <br>
			<button onclick="AddJobHist()">Add Job History Entry</button> <br>
			<hr/>



			<form id="addform" method = "post" name = "step2" action = "add_employee_final.php" onsubmit="return SubmitAsString()">
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
			<input name="job_position" type="hidden" value="<?php echo $_POST["job_position"]; ?>">
			<input name="birth_cert_id" type="hidden" value="<?php echo $_POST["birth_cert_id"]; ?>">
			<input name="health_package" type="hidden" value="<?php echo $_POST["health_package"]; ?>">
			<input name="applicant_id" type="hidden" value="<?php echo $_POST["applicant_id"]; ?>">

			<input name="dependents_table_csv" id="dependents_table_csv" type="hidden" value="">
			<input name="skills_table_csv" id="skills_table_csv" type="hidden" value="">
			<input name="job_history_table_csv" id="job_history_table_csv" type="hidden" value="">

				<br>
					<div class = "col">
						<div class="form-group mx-auto" style = "max-width: 500px">
							<input id="toStep3" type="submit" class="btn btn-danger btn-block" value= "Finalize and add as employee" >
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
