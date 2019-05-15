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
            }elseif($application_status_code == 2){
                $application_status = "Application Denied";
            }elseif($application_status_code == 1){
                $application_status = "Application Approved";
            }elseif($application_status_code == 3){
                $application_status = "N/A: You have already underwent the proccess.";
            }else{
                $application_status = "Unknown status code. Please contact support";
            }
            print "<h2>" . $application_status . "</h2>" . "\n";
            exit();
        }else{
            //quit. record does not exits
            echo "<h1>Authentication failed: ID or password wrong. please check</h1>" . "\n";
            exit();
        }
        mysqli_free_result($id_match_result);
    }
}else{
    print "<h1>Invalid entry. Please check if you have followed the correct link.</h1>";
    exit();
}

?>