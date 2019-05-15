<?php
header('Content-Type: text/html; charset=utf-8');
 error_reporting(-1);
 ini_set('display_errors', 'On');
 //echo "php init" . "\n";
 //var_dump($_SERVER);
 //echo "\n";
 $link = mysqli_connect("localhost","root","","128.1-project1");
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
    <title>List of Employees</title>
	
	<script src="js/jquery-3.3.1.min_2.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/util.js"></script>
	<script src="ourScript.js"></script>

	
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">List of Employees<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;">University of the Philippines Manila</a>
		  </div>
	</nav>
	
	


	<script>
		function addEmployee
	
	</script>
	
	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 800px;">
		
		<table id = "employeeList" border="all" >
			<tr><th>Employee ID</th><th>Lastname</th><th>Firstname</th><th>Position</th><th>Action</th></tr>
			<!--entries will be added here using backend php-->
        <?php
     $count=1;
     $sel_query="Select * from employee ORDER BY id desc;";
     $result = mysqli_query($link,$sel_query);
     while($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
     <td align="center"><?php print $row["id"]; ?></td>
     <td align="center"><?php print $row["last_name"]; ?></td>
     <td align="center"><?php print $row["first_name"]; ?></td>
     <td align="center"><?php print $row["applying_for"]; ?></td>
     <td align="center">
    <a href="edit_employee.php?id=<?php echo $row["id"]; ?>" >Edit</a></td><td> <a href="confirm_delete_page.php?id=<?php echo $row["id"]; ?>" >Delete</a></td>
     </tr>
     <?php $count++; } ?>
		</table>
		
		

		</article>
	</div>



  </body>
