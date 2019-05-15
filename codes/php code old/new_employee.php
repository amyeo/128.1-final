<?php
//new applicant page
//aka "register"
error_reporting(-1);
ini_set('display_errors', 'On');
var_dump($_POST); //dump all vars
$link = mysqli_connect("localhost","root","","128.1-project1");
//error if not success
if(mysqli_connect_errno()){
     printf("Connect failed: %s\n", mysqli_connect_error());
     exit(); //quit if failed
}
echo "PHP init." . "\n";
//check if post request. if it is, add to db
if($_SERVER["REQUEST_METHOD"] == "POST"){
    /*
     * array(17) { ["first_name"]=> string(10) "firstname2" ["last_name"]=> string(8) "lastname" ["middle_initial"]=> string(1) "M" ["sex"]=> string(1) "M" ["birthday"]=> string(10) "2019-03-20" ["place_of_birth"]=> string(21) "Manila place of birth" ["date_submitted"]=> string(10) "1888-01-01" ["phone_number"]=> string(10) "3874329832" ["email"]=> string(13) "adsa@dass.com" ["linkedin_profile_"]=> string(10) "linkedshit" ["educational_attainment"]=> string(2) "HS" ["nationality"]=> string(8) "Filipino" ["civil_status"]=> string(1) "S" ["SSN"]=> string(10) "4343454543" ["employment_history_"]=> string(19) "history 1 history 2" ["applying_for"]=> string(7) "Job pls" ["birth_cert_id"]=> string(11) "32874598433" } PHP init.
     */
    $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
    $middle_initial = mysqli_real_escape_string($link, $_POST['middle_initial']);
    $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
    $sex = mysqli_real_escape_string($link, $_POST['sex']);
    $place_of_birth = mysqli_real_escape_string($link, $_POST['place_of_birth']);
    $birthday = mysqli_real_escape_string($link, $_POST['birthday']);
    $phone_number = mysqli_real_escape_string($link, $_POST['phone_number']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $linkedin_profile = mysqli_real_escape_string($link, $_POST['linkedin_profile']);
    $educational_attainment = mysqli_real_escape_string($link, $_POST['educational_attainment']);
    $nationality = mysqli_real_escape_string($link, $_POST['nationality']);
    $civil_status = mysqli_real_escape_string($link, $_POST['civil_status']);
    $SSN = mysqli_real_escape_string($link, $_POST['SSN']);
    $employment_history = mysqli_real_escape_string($link, $_POST['employment_history']);
    $applying_for = mysqli_real_escape_string($link, $_POST['applying_for']);
    $birth_cert_id = mysqli_real_escape_string($link, $_POST['birth_cert_id']);
    $full_address = mysqli_real_escape_string($link, $_POST['full_address']);
    $health_benefits = mysqli_real_escape_string($link, $_POST['health_benefits']);
    echo "POST Detected!" . "\n";
    //add to db here
    $querystr = "insert into employee(first_name, middle_initial, last_name, full_address, sex, birthday, place_of_birth, date_submitted, phone_number, email, linkedin_profile, educational_attainment, nationality, civil_status, SSN, employment_history, applying_for, birth_cert_id, health_benefits) values('".$first_name."', '". $middle_initial."', '". $last_name."', '".$full_address."', '".$sex. "', '" . $birthday . "', '" . $place_of_birth . "', '" . "GETDATE()" . "', '" . $phone_number . "', '" . $email . "', '" . $linkedin_profile . "', '" . $educational_attainment . "', '" . $nationality . "', '" . $civil_status . "', '" . $SSN . "', '" . $employment_history . "', '" . $applying_for . "', '" . $birth_cert_id . "', '" . $health_benefits ."')";
    mysqli_query($link, $querystr);
    //echo "\n" . $querystr;

}
//close connection
mysqli_close($link);
?>
