<?php
  ini_set('display_errors', 1);
  $dbServer = "mysql.eecs.ku.edu";
  $dbUsername = "z148f106";
  $dbPW = "Eith9aeF";
  $dbName = "z148f106";
  $db = new mysqli($dbServer, $dbUsername, $dbPW, $dbName);
  /* check connection */
  if ($db->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  /*table setup*/
  echo "<table frame='border' border = '1'>";
  echo "<tr>";
  echo "<th>User ID's</th>";
  echo "</tr>";
  $query = "SELECT user_id FROM Users";
  $result = $db->query($query);
  if($result->num_rows > 0) {
    while($currRow = $result->fetch_assoc()) {
      echo "<tr><td>" . $currRow['user_id'] . "</td></tr>";
    }
  } else {
    echo "<tr><td>ERROR: EMPTY TABLE</td></tr>";
  }
