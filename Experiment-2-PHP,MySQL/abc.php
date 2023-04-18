<?php
 $servername = "localhost";
 $username = "root";
 $passwords = "";
 $dbname = "fbdata";
 $conn = mysqli_connect($servername, $username, $passwords, $dbname);
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $name =$_POST['nm'];
 $lname=$_POST['lnm'];
 $email =$_POST['em'];
 $password =$_POST['pass'];
 $dob =$_POST['da'];
 $gender =$_POST['gen'];
 $prelang=$_POST['pf'];
 $contact=$_POST['co'];
 $imtemp=$_FILES['image']['tmp_name'];
 $imname=$_FILES['image']['name'];
 $imtype=$_FILES['image']['type'];
 $file_sep=explode('.',$imname);
 $file_ext=strtolower($file_sep[1]);
$ext=array('jpeg','jpg','png','gif');
if(in_array($file_ext,$ext)){
    $uploadimg='images/'.$imname;
    move_uploaded_file($imtemp,$uploadimg);
 $sql = "INSERT INTO `user`(Name,LName,Email,Password,DOB,Gender,Preflang,IMAGE,contact)VALUES ('$name','$lname','$email', '$password','$dob','$gender','$prelang','$uploadimg','$contact')";
 if (mysqli_query($conn, $sql)) {
    header('LOCATION:login.php');
 } else {
     echo "Error adding record: " . mysqli_error($conn);
 }}
 else{
    echo "only jpg,jpeg,png,gif extensions are allowed";
 }
 ?>