<?php
  header("Access-Control-Allow-Origin: *");
  $running_function = $_REQUEST["function"];

  function load_jobs () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare ("SELECT * FROM job_positions");
    $query->execute();
    echo "<table class='table'>";
      echo "<tr>";
        echo "<th>Job ID</th>";
        echo "<th>Title</th>";
        echo "<th>Description</th>";
        echo "<th>Status</th>";
      echo "</tr>";
      while ($result = $query->fetch()) {
        echo "<tr>";
          for ($i = 0; $i < 4; $i += 1) {
            if ($i == 3) {
              if ($result[$i] == 1) {
                echo "<td class='status'>Open</td>";
              }
              else {
                echo "<td class='status'>Closed</td>";
              }
            }
            else if ($i == 0) {
              echo "<td class='id_number'>".$result[$i]."</td>";
            }
            else if ($i == 1) {
              echo "<td class='title'>".$result[$i]."</td>";
            }
            else if ($i == 2) {
              echo "<td class='description'>".$result[$i]."</td>";
            }
            else {
              echo "<td>".$result[$i]."</td>";
            }
          }
          echo "<td><button class='btn btn-danger edit_record'>Edit</button><button class='btn btn-danger delete_record'>Delete</button></td>";
        echo "</tr>";
      }
      $query = $db->prepare("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = '128.1v2' AND TABLE_NAME = 'job_positions'");
      $query -> execute();
      $result = $query->fetch();
      echo "<tr>";
        echo "<td>".$result['AUTO_INCREMENT']."</td>";
        echo "<td class='title'><input type='text' id='add_name' value='Job Position' class='clear_enter'></td>";
        echo "<td class='description'><input type='textarea' id='add_description' value='Enter a description here.' class='clear_enter input_description'></td>";
        echo "<td class='status'><select id='add_status'><option value='1'>Open</option><option value='0'>Closed</option></select></td>";
        echo "<td><button id='add_button' class='btn btn-danger'>Add</button></td>'";
    echo "</table>";
  }

  function delete_position () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2', 'root', '');
    $query = $db->prepare("DELETE FROM job_positions WHERE id=?");
    $query -> bindParam(1, $_REQUEST["id"]);
    $query -> execute();
  }

  function add_position () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2', 'root', '');
    $query = $db->prepare("INSERT INTO job_positions (job_title,job_description,is_open) VALUES(?,?,?)");
    $query -> bindParam(1, $_REQUEST["title"]);
    $query -> bindParam(2, $_REQUEST["description"]);
    $query -> bindParam(3, $_REQUEST["status"]);
    $query -> execute();
  }

  function edit_position () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2', 'root', '');
    $query = $db->prepare("UPDATE job_positions SET job_title=?, job_description=?,is_open=? WHERE id=?");
    $query -> bindParam(1, $_REQUEST["title"]);
    $query -> bindParam(2, $_REQUEST["description"]);
    $query -> bindParam(3, $_REQUEST["status"]);
    $query -> bindParam(4, $_REQUEST["id"]);
    $query -> execute();
  }

  switch ($running_function) {
    case 1:
      load_jobs();
      break;
    case 2:
      delete_position();
      load_jobs();
      break;
    case 3:
      edit_position();
      load_jobs();
      break;
    case 4:
      add_position();
      load_jobs();
      break;
    case 5:

      break;
  }
 ?>
