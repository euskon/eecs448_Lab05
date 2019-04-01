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
  $userID = $_POST["user_id"];
  if(empty($userID)) {
    $db->close();
    exit();
  }
  /*table setup*/
  echo "<table frame='border' border = '1' style='width:35%;margins:auto'>";
  echo "<tr>";
  echo "<th>Posts by: " . $userID . "</th>";
  echo "</tr>";
  $query = "SELECT content FROM Posts WHERE author_id = '$userID'";
  $result = $db->query($query);
  if($result->num_rows > 0) {
    while($currRow = $result->fetch_assoc()) {
      echo "<tr><td>" . $currRow['content'] . "</td></tr>";
    }

  } else {
    echo "<tr><td>ERROR: EMPTY TABLE</td></tr>";
  }
  echo "</table><br><br>";
  echo "<a href='ViewUserPosts.html'><i>Back to Post Log Search</i></a><br>";
  echo "<a href='AdminHome.html'><t><i>Admin Homepage</i></a>";
  $db->close();
 ?>
