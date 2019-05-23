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
$fill_data = false;
//initialize fill variables

if(isset($_POST['submitForm'])){
	if($_POST['package_name'] == "" || $_POST['package_desc'] == "") echo "Required fields must be filled";
	else{
		$package_name = $_POST['package_name'];
		$package_desc = $_POST['package_desc'];
		$sqlquery = "INSERT INTO health_packages(`package_name`, `package_desc`) VALUES ('$package_name', '$package_desc')";
		mysqli_query($link, $sqlquery);
		header('location: health_packages.php');
	}


}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Add Health Package</title>
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
					alert("Please pledge to the great one");
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Add New Health Package<span class="sr-only">(current)</span></a>
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
			<form id="new_health_package_form" method = "post" name = "health_package" action = "">
				<br>


				<!--Dependencies-->


				<h2 align = "center" style = "width: 1000px"></h2>

				<div id = "new_package">
					<div class = "row">
						<div class = "col-12">
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Package Name</span>
								</div>
								<input name="package_name" class="form-control" placeholder="" type="text">
							</div>
						</div>
					</div>
					<div class = "row">
						<div class="form-group input-group col">
							<textarea style = "width: 977px" rows = 4 id = "package_desc"  name="package_desc" placeholder="Description" form = "new_health_package_form"></textarea>
						</div>
					</div>
				</div>
				<br><br>

				<div class="form-group mx-auto row" style = "max-width: 400px">
					<div class = "col">
						<div class="form-group mx-auto" style = "max-width: 500px"><a class="btn btn-danger btn-block" href = "health_packages.php">Back</a></div>
					</div>
					<div class = "col">
						<input id="submit" name = 'submitForm' type="submit" class="btn btn-danger btn-block" value= "Submit" >
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
