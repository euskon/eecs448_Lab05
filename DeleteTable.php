<?php
  /*init db connection*/
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
  echo "<table frame='border' border = '1' style='width:35%;margins:auto'>";
  echo "<tr>";
  echo "<th>Post: </th>";
  echo "<th>Author: </th>";
  echo "<th>Delete? </th>";
  echo "</tr>";
  $query = "SELECT content, author_id, post_id FROM Posts";
  $result = $db->query($query);
  if($result->num_rows > 0) {
    while($currRow = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $currRow['content'] . "</td>";
      echo "<td>" . $currRow['author_id'] . "</td>";
      echo "<td><input type='checkbox' name='delCheckbox[]' value=" . $currRow['post_id'] . "></td>";
    }
  } else {
    echo "<tr><td>ERROR: EMPTY TABLE</td></tr>";
  }
  echo "</table><br><br>";
  $db->close();
 ?>
