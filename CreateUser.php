<?php
$dbServer = "mysql.eecs.ku.edu";
$dbUsername = "z148f106";
$dbPW = "Eith9aeF";
$dbName = "z148f106";
$db = new mysqli($dbServer, $dbUsername, $dbPW, $dbName);
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$userID = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $userID = $_POST["user_id"];
  if(empty($userID))
  {
    echo "Error: User ID Field Blank. <br>";

  } else {

    $query = "INSERT INTO Users (user_id) VALUES ($userID)";
    if($db->query($query)) {
      echo "User Added to Database. <br>";
    } else {
      echo "<script type='text/javascript'>alert("User NOT Added, Redirecting.");</script>";
      echo "<script type='text/javascript'>window.location.href = "CreateUser.html";</script>";
    }
  }

}

 ?>
