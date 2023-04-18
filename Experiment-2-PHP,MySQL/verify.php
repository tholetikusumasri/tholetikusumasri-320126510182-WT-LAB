<html>
<?php
  session_start();
  $servername = "localhost";
 $username = "root";
 $passwords = "";
 $dbname = "fbdata";
 $conn = mysqli_connect($servername, $username, $passwords, $dbname);
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
  $eml=$_POST["em"];
  $pass=$_POST["pwd"];
  $sql="SELECT * from `user` where  Password='$pass' and Email='$eml'";
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)==1){
    while($r=mysqli_fetch_array($res)){
    $_SESSION['id']=$r[0];
    $_SESSION['uname']=$r[1];
    }
$sql = "SELECT * FROM active_users WHERE user_id = '".$_SESSION['id']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) ==0) {
  $s_id = session_id();
  $sql = "INSERT INTO active_users (user_id, session_id) VALUES ('".$_SESSION['id']."', '$s_id')";
  mysqli_query($conn, $sql);
}
    header('Location:result.php');
  }
     else{
      header('Location:login.php');
     }
  ?>