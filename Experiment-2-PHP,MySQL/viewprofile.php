<?php include 'header.php'; ?>
<html>
    <head>
        <style>
   table {
      margin: 0 auto;
    }
    table tr:first-child {
      text-align: center;
    }
    table tr:first-child img {
      display: block;
      margin: 0 auto 10px;
    }
    </style>
</head>
<body>
<?php
 $servername = "localhost";
 $username = "root";
 $passwords = "";
 $dbname = "fbdata";
 $conn = mysqli_connect($servername, $username, $passwords, $dbname);
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
$imid=$_SESSION['id'];
$sql="SELECT * from `user` where id=$imid";
$res=mysqli_query($conn,$sql);?>
<table align=center cellspacing=0 cellpadding='10' style="color:black; font-size:20px"> 
<?php
 while($row=mysqli_fetch_array($res)){
   echo '<img src="' . $row['7'] . '"align=center alt="User Image" width="300" height=180 style="margin-left:10px"><br>';
   echo "<td><tr><th>Name:</th><td>".$row["Name"]."</td></tr>";
   echo "<tr><th>Last Name:</th><td>".$row["LName"]."</td></tr>";
   echo "<tr><th>Contact No:</th><td>".$row["contact"]."</td></tr>";
   echo "<tr><th>Email:</th><td>".$row["Email"]."</td></tr>";
   echo "<tr><th>Password:</th><td>".$row[4]."</td></tr>";
   echo "<tr><th>DOB:</th><td>".$row["DOB"]."</td></tr>";
   echo "<tr><th>Gender:</th><td>".$row[6]."</td></tr>";
   echo "<tr><th>Preferred Languages:</th><td>".$row["Preflang"]."</td></tr>";
   
 }?>
 </body>
 </html>
 
