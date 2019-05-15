<?php
  header("Access-Control-Allow-Origin: *");
  $running_function = $_REQUEST["function"];
  switch ($running_function) {
    case 1:
      display_applicants();
      break;
    case 2:
      update_status(1);
      break;
    case 3:
      update_status(2);
      break;
  }

  function update_status ($value) {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2', 'root', '');
    $query = $db->prepare ("UPDATE applicants SET approved=? WHERE id=?");
    $query -> bindParam(1, $value);
    $query -> bindParam(2, $_REQUEST["id"]);
    $query->execute();
    if ($value == 1) {
      echo "Applicant accepted.";
    }
    else {
      echo "Applicant rejected";
    }
  }

  function display_applicants () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2', 'root', '');
    $query = $db->prepare ("SELECT * FROM applicants WHERE approved=0");
    $query -> execute();
    while ($result = $query->fetch()) {
      echo "<tr class='scroller' id='".$result['id']."'>";
        echo "<td class='hide_on_hover'>".$result['id']."</td>";
        echo "<td class='hide_on_hover'>".$result['first_name']." ".$result['middle_initial']." ".$result['last_name']."</td>";
        $position_finder = $db->prepare("SELECT * FROM job_positions WHERE id=?");
        $position_finder-> bindParam(1,$result['target_position']);
        $position_finder->execute();
        $found_position = $position_finder->fetch();
        echo "<td class='hide_on_hover'>".$found_position['job_title']."</td>";
        echo "<td class='details_container' style='display: none'>";
          echo "<div class='card' style='width: 400%; padding: 10px 30px 10px 30px'>";
            echo "ID: ".$result['id']."<br>";
            echo "Name: ".$result['first_name']." ".$result['middle_initial']." ".$result['last_name']."<br>";
            echo "Target Position: ".$found_position['job_title']."<br>";
            echo "Phone Number: ".$result['phone_number']."<br>";
            echo "Email: ".$result['email']."<br>";
            echo "<span>LinkedIn: <a href='".$result['linkedin_profile']."'>".$result['linkedin_profile']."</a></span>";
            echo "Educational Attainment: ".$result['educational_attainment']."";
            echo "<span style='margin-top: 20px;'><button class='btn btn-danger accept' style='width: 100px;'>Accept</button><button class='btn btn-secondary reject' style='width: 100px'>Reject</button></span>";
          echo "</div>";
        echo "</td>";
      echo "</tr>";
    }
  }
?>
