<?php

var_dump($_POST);
//dependency variables
$ed1 = Trim(stripslashes($_POST['employee_dependency_1']));
$dr1 = Trim(stripslashes($_POST['dependency_relationship_1']));

$ed2 = Trim(stripslashes($_POST['employee_dependency_2']));
$dr2 = Trim(stripslashes($_POST['dependency_relationship_2']));

$ed3 = Trim(stripslashes($_POST['employee_dependency_3']));
$dr3 = Trim(stripslashes($_POST['dependency_relationship_3']));

//jhistory variables
$jn1 = Trim(stripslashes($_POST['job_name_1']));
$jd1 = Trim(stripslashes($_POST['job_desc_1']));

//$jn2 = Trim(stripslashes($_POST['job_name_2']));
//$jd2 = Trim(stripslashes($_POST['job_desc_2']));

//$jn3 = Trim(stripslashes($_POST['job_name_3']));
//$jd3 = Trim(stripslashes($_POST['job_desc_3']));

//checker
//if($ed1 != $dr1 && $ed1 != "") echo "$ed1 <br> $dr1";
//if($ed2 != $dr2 && $ed2 != "") echo "$ed2 <br> $dr2";
//if($ed3 != $dr3 && $ed3 != "") echo "$ed3 <br> $dr3";

//if($jn1 != $jd1 && $jn1 != "") echo "$jn1 <br> $jd1";
//if($jn2 != $jd2 && $jn2 != "") echo "$jn2 <br> $jd2";
//if($jn3 != $jd3 && $jn3 != "") echo "$jn3 <br> $jd3";

$csvData = "";

?>