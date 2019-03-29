<?php
  /*connect*/
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
  /*extract and use data*/
  $content = $_POST["content"];
  $userID = $_POST["user_id"];
  if(empty($userID)) {
    echo "Error: User ID Field Blank. <br>";
    $db->close();
    exit();
  }
  if(empty($content)) {
    echo "Error: Content Field Blank. <br>";
    $db->close();
    exit();
  }
  $query = "INSERT INTO Posts (post_id, content, author_id) VALUES (NULL, '$content', '$userID')";
  if($db->query($query) === true) {
    echo "<script type='text/javascript'>alert('Post Added Successfully, Redirecting.');</script>";
    echo "<script type='text/javascript'>window.location.href = 'CreatePosts.html';</script>";
  } else {
    echo "<script type='text/javascript'>alert('failed to Added, Redirecting.');</script>";
    echo "<script type='text/javascript'>window.location.href = 'CreatePosts.html';</script>";
  }
  $db->close();
 ?>
