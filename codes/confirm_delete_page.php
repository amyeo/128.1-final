<?php

$id = $_GET['id'];

if(isset($_POST['delete'])){
	$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
	$stmt = $db->prepare("DELETE FROM employee WHERE `id` = '$id'");
	$stmt->execute();
	$stmt->DebugDumpParams();


	?>
	<script> alert("Employee Sucessfully deleted"); </script>
	<?php
	header('location: employee_list.php');
}






?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Delete</title>
	<link rel="icon" href="images/cropped-UPseal-newcolors-192x192.png" sizes="192x192">

	<script src="js/jquery-3.3.1.min_2.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/util.js"></script>
	<script src="ourScript.js"></script>


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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Delete Confirmation<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>





	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 800px;">

		<div class = "row">
			<h2> Delete Employee: </h2>
		</div>

		<?php
			$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
			$stmt = $db->prepare("SELECT * FROM employee WHERE `id` = '$id'");
			$stmt->execute();
			$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$last_name = "";
			$middle_name = "";
			$first_name = "";
			foreach ($results_arr as $i => $values) {
				foreach ($values as $key => $value) {
					if($key=="last_name")$last_name = $value;
					if($key=="middle_name")$middle_name = $value;
					if($key=="first_name")$first_name = $value;
					if($key=="job_position")$job_position = $value;
					if($key=="employment_date")$employment_date = $value;

				}
			}
		?>
		<div class = "row">
			<table class = "table">
				<thead>
					<th>Full Name</th>
					<th>Job Position</th>
					<th>Employment Date</th>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $last_name ?>, <?php echo $first_name ?> <?php echo $middle_name ?></td>
						<td><?php echo $job_position ?></td>
						<td><?php echo $employment_date ?></td>
					</tr>
				<tbody>
		</div><br>

		<form method = "post">
			<input type = "hidden" name = "ID" value = "0"/>

				<div class = "row">
					<div class = "col">
						<button type="button" onclick="javascript:history.back()" class="btn btn-primary btn-block">Cancel</button>
					</div>
					<div class = "col">
						<button type="submit" name = "delete" class="btn btn-primary btn-block">Delete</button>
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
