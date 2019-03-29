<?php
$query = "SELECT user_id FROM Users";
$result = $db->query($query);
if($result->num_rows > 0) {
  while($currRow = $result->fetch_assoc()) {
    $currUserID = $currRow['user_id'];
    echo "<option value=" . $currUserID . ">" . $currUserID . "</option>";
  }
}
?>
