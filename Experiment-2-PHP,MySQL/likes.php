<?php
session_start();
$servername = "localhost";
$username = "root";
$passwords = "";
$dbname = "fbdata";
global $conn;
$conn= mysqli_connect($servername, $username, $passwords, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['like'])) {
    $imgId= $_POST['like'];
    $userId=$_POST['userid'];
    // echo $imgId;
    // echo $userId;
    $sql = "SELECT COUNT(*) as count FROM `likes` WHERE imgid=$imgId AND userid=$userId";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	if ($row["count"] == 0) {
		$sql = "INSERT INTO `likes` (imgid, userid) VALUES ($imgId, $userId)";
		if (mysqli_query($conn,$sql)) {
			$sql = " UPDATE `image` SET likes=likes+1 WHERE imgid=$imgId";
			if (mysqli_query($conn,$sql)) {
				$sql = "SELECT likes FROM `image` WHERE imgid=$imgId";
				$res= mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($res);
            }}
        }
        else{
            echo "Already Liked";
        }
    }
        if(isset($_POST['comm'])) {
            $comment = $_POST['comment'];
            $imgId = $_POST['comm'];
            $userId = $_POST['userid'];
            $sql = "INSERT INTO `comment` (comment, imageid, userid) VALUES ('$comment', '$imgId', '$userId')";
            mysqli_query($conn, $sql);
            $sql2 = "SELECT comment,userid FROM comment WHERE imageid='$imgId'";
  $res2 = mysqli_query($conn, $sql2);?>
  <table><?php
  while ($row2 = mysqli_fetch_array($res2)) {
    $comment = $row2['comment'];
    $userId = $row2['userid'];
    $sql3 = "SELECT Name FROM user WHERE id='$userId'";
    $re3 = mysqli_query($conn, $sql3);
    while ($r3 = mysqli_fetch_array($re3)) {
      $commenterName = $r3['Name'];
    }
    echo '<tr><td>'.$commenterName.': '.$comment.'</td></tr>';
  }
  ?></table><?php
          }
          else{
            echo "qwertyui";
          }
header("Location: test.php");
?>
