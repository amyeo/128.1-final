<?php
  header("Access-Control-Allow-Origin: *");
  $running_function = $_REQUEST["function"];

  function add_job() {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare("INSERT INTO employee_job_history (employee_id, job_name, job_desc) VALUES(?,?,?)");
    $query -> bindParam(1,$_REQUEST['empid']);
    $query -> bindParam(2,$_REQUEST['name']);
    $query -> bindParam(3,$_REQUEST['description']);
    $query->execute();
  }

  function edit_job () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare("UPDATE employee_job_history SET job_desc=?, employee_id=?, job_name=? WHERE id=?");
    $query -> bindParam(1, $_REQUEST["description"]);
    $query -> bindParam(2, $_REQUEST["emp_id"]);
    $query -> bindParam(3, $_REQUEST["name"]);
    $query -> bindParam(4, $_REQUEST["id"]);
    $query->execute();
  }

  function edit_skill () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare("UPDATE employee_skills SET skill=? WHERE id=?");
    $query -> bindParam(1, $_REQUEST["skill"]);
    $query -> bindParam(2, $_REQUEST["id"]);
    $query->execute();
  }

  function delete_job () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare("DELETE FROM employee_job_history WHERE id=?");
    $query -> bindParam(1, $_REQUEST["id"]);
    $query -> execute();
  }

  function delete_skill () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare("DELETE FROM employee_skills WHERE id=?");
    $query -> bindParam(1, $_REQUEST["id"]);
    $query -> execute();
  }

  function add_skill () {
    $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
    $query = $db->prepare("INSERT INTO employee_skills (employee_id, skill) VALUES(?,?)");
    $query -> bindParam(1,$_REQUEST['emp_id']);
    $query -> bindParam(2,$_REQUEST['skill']);
    $query->execute();
  }
  switch ($running_function) {
    case 1:
      add_job();
      break;
    case 2:
      edit_job();
      break;
    case 3:
      delete_job();
      break;
    case 4:
      add_skill();
      break;
    case 5:
      edit_skill();
      break;
    case 6:
      delete_skill();
      break;
  }

?>
