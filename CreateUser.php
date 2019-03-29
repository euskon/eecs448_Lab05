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
  if(empty($userID))
  {
    echo "Error: User ID Field Blank. <br>";

  } else {
    $query = "INSERT INTO Users (user_id) VALUES ('$userID')";
    if($db->query($query) === true) {
      echo "<script type='text/javascript'>alert('User Added to Database, Redirecting.');</script>";
      echo "<script type='text/javascript'>window.location.href = 'CreatePosts.html';</script>";
    } else {
      echo "<script type='text/javascript'>alert('User Already Exists OR failed to Added, Redirecting.');</script>";
      echo "<script type='text/javascript'>window.location.href = 'CreateUser.html';</script>";
    }
  }
  $db->close();
 ?>
