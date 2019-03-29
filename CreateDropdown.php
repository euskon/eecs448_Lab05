<?php
$dbServer = "mysql.eecs.ku.edu";
$dbUsername = "z148f106";
$dbPW = "Eith9aeF";
$dbName = "z148f106";
$db = new mysqli($dbServer, $dbUsername, $dbPW, $dbName);
$query = "SELECT user_id FROM Users";
$result = $db->query($query);
if($result->num_rows > 0) {
  echo "User ID:<br><select name='user_id'>";
  while($currRow = $result->fetch_assoc()) {
    $currUserID = $currRow['user_id'];
    echo "<option value=" . $currUserID . ">" . $currUserID . "</option>";
  }
  echo "</select><br>";
}
$db->close();
?>
