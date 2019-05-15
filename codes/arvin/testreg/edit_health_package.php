<?php
//GET the GET variables here
//(the id)
//$_GET["name"]
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
$id = "";
if($id = $_GET['id']){
    //echo "ID: " . $id . "\n";
    //echo "ID end \n";
    $id = (int)$id;
}
$fill_data = false;
//initialize fill variables



// if id exists, try searching it. if it does not OR none provided, return error
if($id != ""){
    //check if id exists in the db 
    if($id_match_result = mysqli_query($link, "SELECT * FROM health_packages WHERE id='".$id."'")){
        $row_cnt = mysqli_num_rows($id_match_result);
        if($row_cnt>0){
            //succes, record found!
            $fill_data = true;
            //start filling data
            $row = mysqli_fetch_array($id_match_result);
            $package_name = $row['package_name'];
            $package_desc = $row['package_desc'];
        }else{
            //quit. record does not exits
            echo "Error! Record does not exist!" . "\n";
            exit();
        }
        mysqli_free_result($id_match_result);
    }
}else{
    echo "Error: Record ID MUST be provided" . "\n";
}

if(isset($_POST['submitForm'])){
	if($_POST['package_name'] == "" || $_POST['package_desc'] == "") echo "Required fields must be filled";
	else{
		$package_name = $_POST['package_name'];
		$package_desc = $_POST['package_desc'];
		mysqli_query($link, "UPDATE health_packages SET `package_name` = '$package_name', `package_desc` = '$package_desc' WHERE id='".$id."'");
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
    <title>EDIT Health Package</title>
	<link rel="icon" href="images/cropped-UPseal-newcolors-192x192.png" sizes="192x192">

	<script src="js/jquery-3.3.1.min_2.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/util.js"></script>
	<script src="ourScript.js"></script>
    <script src="js/formvalidate.js"></script>

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
				<a class="nav-link logoInfo" href="#" style = "color:#fff;">Edit Health Package<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "homeadmin.html">University of the Philippines Manila</a>
		  </div>
	</nav>




	<div class="card bg1-light">
		<article class="card-body mx-auto" style="max-width: 1000px;">

		<br>
      <!--div class="row"><div class = "col-sm mx-auto"style="max-width: 300px;">
		  <img src="images/progress2.png" style="height:120px;margin:0px;">
		</div></div-->
			<form id="edit_health_package_form" method = "post" name = "health_package" action = "">
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
								<input name="package_name" class="form-control" placeholder="" type="text" value = '<?php echo "$package_name";?>'>
							</div>
						</div>
					</div>
					<div class = "row">
						<div class="form-group input-group col">
							<textarea style = "width: 977px" rows = 4 id = "package_desc"  name="package_desc" name = '<?php echo "$package_desc";?>' form = "edit_health_package_form"><?php echo "$package_desc";?></textarea>
						</div>
					</div>
				</div>
				<br><br>
				
				<div class="form-group mx-auto row" style = "max-width: 400px">
					<div class = "col">
						<div class="form-group mx-auto" style = "max-width: 500px"><a class="btn btn-danger btn-block" href = "health_packages.php">Back</a></div>
					</div>
					<div class = "col">
						<input type="submit" class="btn btn-danger btn-block" name = "submitForm" value= "Submit" >
					</div>
				</div>
				
				
			</form>
		</article>
	</div>


<footer class="footer text-center" >
		<div class="container mx-auto" style = "max-width: 1000px; margin: 0;">
		  <div class="row">
			<div class="col-md-4 mb-2 mb-lg-0">
			  <h4 class="text-uppercase mb-4">Location</h4>
			  <p class="lead mb-0">Padre Faura Street, University of the Philippines Manila</p>
			</div>
			
			
			<p>
			<img src="images/cropped-UPseal-newcolors-192x192.png" align = "middle" style="margin-left:70px; height:110px;">
			</p>
			
			
			<div class="col-md-4">
			  <h4 class="text-uppercase mb-4">About Us</h4>
			  <p class="lead mb-0">CS 127 Group</p>
			</div>
		  </div>
		</div>
	  </footer>

  </body>
