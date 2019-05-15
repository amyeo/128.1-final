<?php
  $db = new PDO ('mysql:host = localhost; dbname=128.1v2; charset=utf8', 'root', '');
  $query = $db->prepare ("SELECT * FROM job_positions WHERE is_open=1");
  $query -> execute();
  while ($result = $query->fetch()) {
    echo "<tr>";
      echo "<td>".$result['job_title']."</td>";
      echo "<td>".$result['job_description']."</td>";
    echo "</tr>";
  }
?>
