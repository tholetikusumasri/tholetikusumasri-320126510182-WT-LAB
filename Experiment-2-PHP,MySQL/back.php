<html>
 <head>
    <style>
        </style>
</head>
    <?php
       session_start();
       $servername="localhost";
       $username = "root";
 $passwords = "";
 $dbname = "fbdata";
 $conn = mysqli_connect($servername, $username, $passwords, $dbname);
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $imtemp=$_FILES['file']['tmp_name'];
 $imname=$_FILES['file']['name'];
 $imtype=$_FILES['file']['type'];
 $file_sep=explode('.',$imname);
 $file_ext=strtolower($file_sep[1]);
$ext=array('jpeg','jpg','png','gif');
$id=$_SESSION['id'];
$s="SELECT Name from `user` where id=$id";
$r=mysqli_query($conn,$s);
$h=mysqli_fetch_assoc($r);
$name=$h['Name'];
if(in_array($file_ext,$ext)){
    $uploadimg='images/'.$imname;
    move_uploaded_file($imtemp,$uploadimg);
 $sql = "INSERT INTO `image`(userid,imgdir,likes) VALUES ('$id','$uploadimg','0')";
 if (mysqli_query($conn, $sql)) {
    $imid=$_SESSION['id'];
    $sql="SELECT IMAGE from `user` where id=$imid";
    $res=mysqli_query($conn,$sql);
  ?>
     <table>
     <?php
    if(mysqli_num_rows($res)>0){
    $r=mysqli_fetch_assoc($res);
    echo 'File uploaded Successfully';
    header("Location:result.php");
      }
      else{
        echo "Image Not Found";
 } }else {
     echo "Error adding record: " . mysqli_error($conn);
 }}
 else{
    echo "only jpg,jpeg,png,gif extensions are allowed";
 }
?>
    </html>