<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(-1);
//ini_set('display_errors', 'On');
//echo "php init" . "\n";
//var_dump($_SERVER);
echo "\n";
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
    <title>Employee List</title>
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">List of Health Packages <span class="sr-only">(current)</span></a>
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
			<form id="results_form" method = "post" name = "finished_page" action = "">
				<br>


				<!--Dependencies-->


				<table class="table" style = "width: 1000px;">
				  <thead>
					<tr>
					  <th scope="col">Health Package ID</th>
					  <th scope="col">Name</th>
					  <th scope="col">Description</th>
					  <th scope="col"colspan = 2>Action</th>
					</tr>
				  </thead>
				  <tbody>
					<tbody>
					<?php
					$count=1;
					$sel_query="SELECT * from health_packages ORDER BY id asc;";
					$result = mysqli_query($link,$sel_query);
					while($row = mysqli_fetch_assoc($result)) { ?>
						<input type = 'text' name = 'id' value = '<?php print $row["id"]; ?>' hidden>
						<td ><?php print $row["id"]; ?></td>
						<td ><?php print $row["package_name"]; ?></td>
						<td ><?php print $row["package_desc"]; ?></td>
						<td><a href = 'edit_health_package.php?id=<?php print $row["id"]?>'<button class="btn btn-danger btn" type = 'suubmit'>Edit</button></a><a href = 'delete_health_package.php?id=<?php print $row["id"]?>'<button class="btn btn-danger btn" type = 'suubmit'>Delete</button></a></td>
						</tr>
						<?php $count++;
					} ?>
					</tbody>


				  </tbody>
				</table>
				<br><br>

				<div class="form-group mx-auto" style = "max-width: 500px"><a href = "admin.php" type="button" class="btn btn-danger btn-block">Back</a></div>
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
