<?php
session_start();
header("Access-Control-Allow-Origin: *");
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
<link rel="stylesheet" href="css/font-awesome.min.css"


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="progress-indicator/progress-indicator.scss">
</head>

<script>
	function add_job (object) {
		if (window.XMLHttpRequest) {
	      xmlhttp=new XMLHttpRequest();
	  }
	 else {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById('doesntexist').innerHTML = this.responseText;
	      }
	    };
		var employee_id = $(object).parent().parent().attr('id');
		var name = $(object).parent().parent().find('#job_name').val();
		var description = $(object).parent().parent().find('#job_description').val();
	  xmlhttp.open("GET", "employee_details_controller.php?" + "function=1" + "&name=" + name + "&description=" + description + "&empid=" +employee_id, true);
	  xmlhttp.send();
		location.reload();
	}

	function switch_boxes_edit (object) {
		var name = $(object).parent().parent().find('#edit_name');
		var description = $(object).parent().parent().find('#edit_desc');
		var old_name = $(name).html();
		var old_desc = $(description).html();
		$(name).html("");
		$(description).html("");
		var input_name = $("<input>").attr('id','input_name').val(old_name).appendTo(name);
		var input_name = $("<textarea>").attr('id','input_desc').val(old_desc).appendTo(description);
	}

	function switch_boxes_skill (object) {
		var skill = $(object).parent().parent().find('#edit_skill');
		var old_skill = $(skill).html();
		$(skill).html("");
		var input_skill = $("<input>").attr('id','input_skill').val(old_skill).appendTo(skill);
	}

	function return_boxes_edit (object) {
		var name = $(object).parent().parent().find('#edit_name');
		var description = $(object).parent().parent().find('#edit_desc');
		$(name).html($(name).children('#input_name').val());
		$(description).html($(description).children('#input_desc').val());
	}

	function return_boxes_skill (object) {
		var skill = $(object).parent().parent().find('#edit_skill');
		$(skill).html($(skill).children('#input_skill').val());
	}

	function edit_job (object) {
		if (window.XMLHttpRequest) {
	      xmlhttp=new XMLHttpRequest();
	  }
	 else {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById('doesntexist').innerHTML = this.responseText;
	      }
	    };
		var id = $(object).parent().parent().attr('id');
		var emp_id = $(object).parent().parent().attr('name');
		var name = $(object).parent().parent().find('#input_name').val();
		var description = $(object).parent().parent().find('#input_desc').val();
	  xmlhttp.open("GET", "employee_details_controller.php?" + "function=2" + "&emp_id=" + emp_id + "&name=" + name + "&description=" + description + "&id=" +id, true);
	  xmlhttp.send();
		location.reload();
	}

	function edit_skill (object) {
		if (window.XMLHttpRequest) {
	      xmlhttp=new XMLHttpRequest();
	  }
	 else {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById('doesntexist').innerHTML = this.responseText;
	      }
	    };
		var id = $(object).parent().parent().attr('id');
		var skill = $(object).parent().parent().find('#input_skill').val();
	  xmlhttp.open("GET", "employee_details_controller.php?" + "function=5" + "&id=" + id + "&skill=" + skill, true);
	  xmlhttp.send();
		location.reload();
	}

	function delete_job (object) {
		if (window.XMLHttpRequest) {
	      xmlhttp=new XMLHttpRequest();
	  }
	 else {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById('doesntexist').innerHTML = this.responseText;
	      }
	    };
		var id = $(object).parent().parent().attr('id');
	  xmlhttp.open("GET", "employee_details_controller.php?" + "function=3&" + "id=" + id, true);
	  xmlhttp.send();
		location.reload();
	}

	function delete_skill (object) {
		if (window.XMLHttpRequest) {
	      xmlhttp=new XMLHttpRequest();
	  }
	 else {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById('doesntexist').innerHTML = this.responseText;
	      }
	    };
		var id = $(object).parent().parent().attr('id');
	  xmlhttp.open("GET", "employee_details_controller.php?" + "function=6&" + "id=" + id, true);
	  xmlhttp.send();
		location.reload();
	}

	function add_skill (object) {
		if (window.XMLHttpRequest) {
	      xmlhttp=new XMLHttpRequest();
	  }
	 else {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById('doesntexist').innerHTML = this.responseText;
	      }
	    };
		var emp_id = $(object).parent().parent().attr('id');
		var skill = $(object).parent().parent().find('#skill_name').val();
		xmlhttp.open("GET", "employee_details_controller.php?" + "function=4&" + "emp_id=" + emp_id + "&skill=" + skill, true);
	  xmlhttp.send();
		location.reload();
	}


	$(document).ready(function () {
		$(document).on('focus','.clear_on_enter',function () {
			$(this).val('');
		});
		$(document).on('click','.add_job', function () {
			add_job($(this));
		});
		$(document).on('click','.edit_job', function () {
			if ($(this).html() == "EDIT") {
				$(this).html("DONE");
				switch_boxes_edit($(this));
			}
			else {
				$(this).html("EDIT");
				edit_job($(this));
				return_boxes_edit($(this));
			}
		});
		$(document).on('click','.edit_skill', function () {
			if ($(this).html() == "EDIT") {
				$(this).html("DONE");
				switch_boxes_skill($(this));
			}
			else {
				$(this).html("EDIT");
				edit_skill($(this));
				return_boxes_skill($(this));
			}
		});
		$(document).on('click','.delete_job', function () {
			delete_job($(this));
			$(this).parent().parent().remove();
		});
		$(document).on('click','.add_skill', function () {
			add_skill($(this));
		});
		$(document).on('click','.delete_skill', function () {
			delete_skill($(this));
			$(this).parent().parent().remove();
		});
	});
</script>

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




 <div class="panel-body" style = "font-size: 17px">
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
                        <td><h1>BASIC INFORMATION</h1></td>
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


                  <a href="edit_basic_employee.php?id=<?php echo $id ?>" class="btn btn-danger container mx-auto" style="width:340px"> EDIT</a>
                </div>
              </div>
            </div>




			<br><br><br><br>

			<div class="panel-body" style = "font-size: 17px">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">  </div>


                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>

					<tr>
                        <td><h1>JOB HISTORY</h1></td>
                      </tr>
					<tr>
                        <th>Job Name:</th>
						<th>Job Description:</th>
						<th>Action:</th>

                     </tr>

                      <?php

					$employee_id = $_GET['id'];
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
							if($key=="id")$id = $value;
						}?>

                      <tr id=<?php echo "'".$id."'"?> name=<?php echo "'".$employee_id."'"?>>
                        <td id='edit_name'><?php echo $job_name ?></td>
                        <td id='edit_desc'><?php echo $job_desc ?></td>


						<!--EDIT THIS ARVIN-->
						<td><button type = 'button' class = "btn btn-danger edit_job">EDIT</button><button type = 'button' class = "btn btn-danger delete_job">DELETE</button></td>
                      </tr>
					<?php } ?>
					<?php
					//$employee_id = $id;
						echo "<tr id='".$_GET['id']."'>";
							echo "<td><input class='clear_on_enter' id='job_name' type='text' value='Job Name'></td>";
							echo "<td><textarea class='clear_on_enter' id='job_description' row='2' style='width: 100%'>Job Description</textarea></td>";
							echo "<td><button class='btn btn-danger add_job'>ADD</button>";
						echo "</tr>";


					?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
			<br><br><br><br>

			<div class="panel-body" style = "font-size: 17px">
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

					$employee_id = $_GET['id'];
					$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
					$stmt = $db->prepare("SELECT * FROM employee_skills WHERE `employee_id` = '$employee_id '");
					$stmt->execute();
					$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$skill = "";
					foreach ($results_arr as $i => $values) {
						foreach ($values as $key => $value) {
							if($key=="skill")$skill = $value;
							if($key=="id")$id = $value;
						}?>

                      <tr id=<?php echo "'".$id."'" ?>>
                        <td id='edit_skill'><?php echo $skill ?></td>
						<td><button type = 'button' class = "btn btn-danger edit_skill">EDIT</button><button type = 'button' class = "btn btn-danger delete_skill">DELETE</button></td>
                      </tr>
					<?php } ?>
										<?php
											echo "<tr id='".$employee_id."'>";
											echo "<td><input class='clear_on_enter' id='skill_name' type='text' value='Skill Name'></td>";
											echo "<td><button class='btn btn-danger add_skill'>ADD</button>";
											echo "</tr>";
										?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>


          </div>
</div>

<hr>
<img alt="logo" src="images/logo.png" style="height:80px;" class="center">
<div id='doesntexist'>
</div>
</body>
</html>
