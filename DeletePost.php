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
  /*extract and use data*/
  $postIDArr = $_POST["delCheckbox"];
  $postsDeleted = "";
  foreach($postIDArr as $postIDToDel){
    $postsDeleted .= ", ". ($postIDToDel);
    $query = "DELETE FROM Posts Where post_id = '$postIDToDel';";
    if(!$db->query($query)){
      echo "<script type='text/javascript'>alert('failed to Delete, Redirecting.');</script>";
      echo "<script type='text/javascript'>window.location.href = 'DeletePost.html';</script>";
    }
  }
  echo "<script type='text/javascript'>alert('Post(s) Deleted Successfully, IDs:{$postsDeleted}.');</script>";
  echo "<script type='text/javascript'>window.location.href = 'DeletePost.html';</script>";
  $db->close();
 ?>
