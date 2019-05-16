<?php
session_start();

$adminUser = "";

if(isset($_SESSION['adminUser'])){
	$adminUser = $_SESSION['adminUser'];
}

$username = "";
if(isset($_POST['logIn'])){
	
	$db = new PDO('mysql:host=localhost;dbname=128.1v2','root','');
	$password = md5(strip_tags($_POST['password']));
	$username = strip_tags($_POST['username']);
	
	
	$stmt = $db->prepare("SELECT * FROM admin WHERE `username` = '$username' AND `user_password` = '$password'"); 
	$stmt->execute();
	$results_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$checked = "";
	foreach ($results_arr as $i => $values) {
		foreach ($values as $key => $value) {
			if($key=="username")$checked = $value;
			
		}
	}
	
	if($checked!=""){
		$_SESSION['adminUser'] = $checked;
		?>
		<script> alert("Welcome Admin!"); </script>
		<?php
	}
	else{ ?>
		<script> alert("Invalid Username or Password"); </script>
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
  <title>Home</title>
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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Home<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>

	<div class="card bg1-light" style = "height: 500px; background-image: url('images/oble.jpg'); background-repeat: no-repeat;">
	
		
			<article class="card-body mx-auto" style="max-width: 1280px;"><br>
				<?php if(isset($_SESSION['adminUser'])){ ?>
					<h1 align = "center">ACTIONS</h1><br>
					<div class="row">
					  <div class="col-sm">
						<div class="container" align="center"><a href="completed_applicants.php">
						<div class="card">
						<img src="images/applicant.png" style="width:200px; border: none;">Completed Applications</div></a></div>
					  </div>
					 <div class="col-sm">
						<div class="container" align="center"><a href="approved_applicants.php">
						<div class="card">
						<img src="images/approved.png" style="width:200px; border: none;">List Approved Applicants</div></a></div>
					  </div>
					<div class="col-sm">
						<div class="container" align="center"><a href="unapproved_applicants.php">
						<div class="card">
						<img src="images/unapproved.png" style="width:200px; border: none;">List Unapproved Applicants</div></a></div>
					  </div>
					<div class="col-sm">
						<div class="container" align="center"><a href="employee_list.php">
						<div class="card">
						<img src="images/employee.png" style="width:200px; border: none;">List Employees</div></a></div>
					  </div>
					</div>
					
					<div class="col-sm">
						<div class="container" align="center"><a href="pending_applicants.html">
						<div class="card">
						<img src="images/employee.png" style="width:200px; border: none;">Pending Applicants</div></a></div>
					  </div>
					</div>
					<form method = 'post'><br><br>
						<div class="form-group mx-auto" style = "width:100px">
							<input type="submit" name = "logOut" class="btn btn-danger btn" value = "Log Out">
						</div>
					</form>
				<?php }else{ ?><br><br>
					<h1 align = "center">Please Log In to continue:</h1><br>
					
					<form method = 'post'>
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> Username </span>
							 </div>
							<input name="username" class="form-control" type="text" required value = "<?php echo $username ?>">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> Password </span>
							 </div>
							<input name="password" class="form-control" type="password">
						</div> 
						<br>
						<div class="form-group">
							<input type="submit" name = "logIn" class="btn btn-danger btn-block" value = "Sign In">
						</div>
					</form>
					
					<form method = 'post' action = "admin_sign_up.php">
						<div class="form-group">
							<input type="submit" class="btn btn-danger btn-block" value = "Register">
						</div>
					</form>
				<?php } ?>
			</article>
	</div>
</div>

<hr>
<img alt="logo" src="images/logo.png" style="height:80px;" class="center">
</body>
</html>