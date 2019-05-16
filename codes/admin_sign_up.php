<?php
session_start();

$adminUser = "";

if(isset($_SESSION['adminUser'])){
	$adminUser = $_SESSION['adminUser'];
}

$full_name = "";
$username = "";
$password1 = "";

if(isset($_POST['signUp'])){

	$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
	$password1 = strip_tags($_POST['password1']);
	$password2 = strip_tags($_POST['password2']);
	$full_name = strip_tags($_POST['full_name']);
	$username = strip_tags($_POST['username']);


	if($password1==$password2){

		$password1 = md5($password2);

		$stmt = $db->prepare("INSERT INTO `admin` (`full_name`, `username`, `user_password`) VALUES ('$full_name', '$username', '$password1')");
		$stmt->execute();
		$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$stmt->debugDumpParams();
		header ('location: admin.php');


	}
	else{ ?>
		<script> alert("Passwords don't match"); </script>
	<?php }



}

if(isset($_POST['logOut'])){
	?>
	<script> alert("Admin has logged out"); </script>
	<?php
	unset($_SESSION['adminUser']);
}

?>


<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Register Admin</title>
  <link rel="icon" href="images/cropped-UPseal-newcolors-192x192.png" sizes="192x192">

<script src="js/jquery-3.3.1.min_2.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/util.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/footer.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="progress-indicator/progress-indicator.scss">
</head>

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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Register New Admin Account<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "admin.php">University of the Philippines Manila</a>
		  </div>
	</nav>

	<div class="card bg1-light" style = "height: 500px; background-image: url('images/oble.jpg'); background-repeat: no-repeat;">


			<article class="card-body mx-auto" style="max-width: 1280px;">
				<br><br>
					<h1 align = "center">New Admin Account:</h1><br>

					<form method = 'post'>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> Full Name </span>
							 </div>
							<input name="full_name" class="form-control" type="text" required value = "<?php echo $full_name?>">
						</div>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> Username </span>
							 </div>
							<input name="username" class="form-control" type="text" required value = "<?php echo $username?>">
						</div>
						<!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> Password: </span>
							 </div>
							<input name="password1" class="form-control" type="password" required value = "<?php echo $password1?>">
						</div>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> Password: </span>
							 </div>
							<input name="password2" class="form-control" type="password" placeholder = "confirm password" required>
						</div>
						<br>
						<div class="form-group">
							<input type="submit" name = "signUp" class="btn btn-danger btn-block" value = "Register">
						</div>
						<div class="form-group">
							<a href = "admin.php" class="btn btn-danger btn-block" >Back</a>
						</div>
					</form>
			</article>
	</div>
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
