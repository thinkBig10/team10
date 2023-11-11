<?php

$url = "user.php";
header("Location: $url");
#$mysqli = mysqli_connect("localhost:43306", "team10", "team10", "team10");
include "./dbConnection.php";
if (mysqli_connect_errno()) {
    echo "" . mysqli_connect_error();
    exit();
} else {
    
  if (isset($_POST['rank']) && isset($_POST['userid'])) {
    $rank = $_POST['rank'];
    $userid = $_POST['userid'];

    $sql2 = "UPDATE users SET rank = ? WHERE userID = ?";
    if ($stmt = mysqli_prepare($mysqli, $sql2)) {
      mysqli_stmt_bind_param($stmt, "ss", $rank, $userid);
      if (mysqli_stmt_execute($stmt)) {
        // Update successful
        
      } else {
        // Update failed
        echo "Error updating rank in the database.";
      }
      mysqli_stmt_close($stmt);
    }
  }
}
?>