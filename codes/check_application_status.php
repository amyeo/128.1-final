<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Application Status</title>
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
				<a class="nav-link logoInfo" href="index.html" style = "color:#fff;">Home<span class="sr-only">(current)</span></a>
			  </li>
			</ul>
			<a class = "UPlogo"style = "color:#fff;" href = "index.html">University of the Philippines Manila</a>
		  </div>
	</nav>
</div><br>


<div class="container content"><div class="row">
<div class="card col-sm" style="width: 18rem; margin-right: 20px;"><br><br>
  <span>
  <?php
  error_reporting(-1);
  echo "\n";
  $link = mysqli_connect("localhost","root","","128.1v2");
  mysqli_set_charset($link, "utf8");
  //error if not success
  if(mysqli_connect_errno()){
      printf("Connect failed: %s\n", mysqli_connect_error());
  }

  //only post requests are allowed
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
      $user_id = mysqli_real_escape_string($link,$_POST['user_id']);
      $user_password   = mysqli_real_escape_string($link,$_POST['user_password']);
      if($id_match_result = mysqli_query($link, "SELECT * FROM applicants WHERE id='".$user_id."' AND user_password='" . $user_password . "'")){
          $row_cnt = mysqli_num_rows($id_match_result);
          if($row_cnt>0){
              //succes, record found!
              $row = mysqli_fetch_array($id_match_result); //pull data from row
              print "<h1>Application Status: </h1>" . "\n";
              $application_status = "";
              $application_status_code = $row["approved"];
              if($application_status_code == 0){
                  $application_status = "Judgement Pending";
              }elseif($application_status_code == 1){
                  $application_status = "Application Denied";
              }elseif($application_status_code == 2){
                  $application_status = "Application Approved";
              }elseif($application_status_code == 3){
                  $application_status = "N/A: You have already underwent the proccess.";
              }else{
                  $application_status = "Unknown status code. Please contact support";
              }
              print "<h2>" . $application_status . "</h2>" . "\n";
          }else{
              //quit. record does not exits
              echo "<h1>Authentication failed: ID or password wrong. please check</h1>" . "\n";
              print "<br><a href='status.html' class='btn btn-secondary'>Back</a><br>";
          }
          mysqli_free_result($id_match_result);
      }
  }else{
      print "<h1>Invalid entry. Please check if you have followed the correct link.</h1>";
  }

  ?>
</span><br>
<a href="index.html" class="btn btn-secondary">Back to Home</a><br>
</div></div></div></div>


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
