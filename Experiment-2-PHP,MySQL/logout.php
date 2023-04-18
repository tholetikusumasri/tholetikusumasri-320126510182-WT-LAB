<?php
session_start();
$servername = "localhost";
$username = "root";
$passwords = "";
$dbname = "fbdata";
$conn= mysqli_connect($servername, $username, $passwords, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_SESSION["id"])){
    $session_id = session_id();
    $sql = "DELETE FROM active_users WHERE session_id = '$session_id'";
    mysqli_query($conn, $sql);
   header('Location: index.php');
exit();
    Session_destroy();
    header('Location:index.php');
  }
  ?>