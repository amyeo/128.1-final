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


if(isset($_POST['approve'])){
	$id = $_POST['id'];
	mysqli_query($link, "UPDATE applicants SET `approved` = '1' WHERE id='".$id."'");
	//header('location: admin.html');

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Completed Applications</title>
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">List of Added Applicants<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "admin.php">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 1000px;">

		<br>
      <!--div class="row"><div class = "col-sm mx-auto"style="max-width: 300px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div-->
				<br>


				<!--List-->


				<table class="table" style = "width: 1300px;">
				  <thead>
					<tr>
					  <th scope="col">Full Name</th>
					  <th scope="col">Sex</th>
					  <th scope="col">Address</th>
					  <th scope="col">Target Position</th>
					</tr>
				  </thead>
				  <tbody>
					<?php $count=1;
						$sel_query="SELECT * from applicants WHERE `approved` = '3' ORDER BY id asc;";
						$result = mysqli_query($link,$sel_query);

						while($row = mysqli_fetch_assoc($result)) { ?>
							<input type = 'text' name = 'id' value = '<?php print $row["id"]; ?>' hidden>
							<td ><?php print $row["last_name"];?>, <?php print $row["first_name"]; ?> <?php print $row["middle_initial"]; ?></td>
							<td ><?php print $row["sex"]; ?></td>
							<td ><?php print $row["current_address"]; ?></td>
							<td ><?php

							$target_position = $row["target_position"];
							$pos = "n/a";

							$sel_query2="SELECT * from job_positions WHERE `id` = '$target_position';";
							$result2 = mysqli_query($link,$sel_query2);
							while($row2 = mysqli_fetch_assoc($result2)) {
								$pos = $row2["job_title"];
							}



							print $pos; ?></td>

							</tr>
						<?php $count++;
					} ?>
				  </tbody>
				</table>
				<br><br>

				<div class="form-group mx-auto" style = "max-width: 500px"><a href = "admin.php" class="btn btn-danger btn-block">Back</a></div>

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
