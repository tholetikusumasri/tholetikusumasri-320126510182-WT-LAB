<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      overflow-y:auto;
    }

    nav {
      display: flex;
      flex-direction: column;
      background-color: #3366ff;
      color:blanchedalmond;
      padding: 10px;
      margin-top: 0px;
      width: 150px;
      height: calc(100vh - 20px);
      position: fixed;
      top: 0;
      left: 0;
    }

    nav a {
      color:black;
      text-decoration: none;
      padding: 10px;
      font-size: 18px;
      font-weight:bold;
    }

    nav a:hover {
      background-color:peachpuff;
    }

    iframe {
      width: calc(100vw - 150px);
      height: calc(100vh - 20px);
      border: none;
      margin-top: 20px;
      margin-left: 150px;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>
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
    if(isset($_SESSION['uname'])){
  ?>
      <h1>Welcome <?php echo $_SESSION['uname'] ?>!</h1>
  <?php
    }
    else{
      echo "Error No User found";
    }
  ?>
  <nav>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="result.php">Uploaded Pics</a>
      <a href="viewprofile.php">View-Profile</a>
    <a href="uploadpics.php">Upload-Pics</a>
    <a href="logout.php">Logout</a>
    <h3>ACTIVE USERS:</h3>
    <?php
      $sql = "SELECT user_id FROM active_users";
      $res=mysqli_query($conn,$sql);
      while($r=mysqli_fetch_array($res)){
        $name=$r['user_id'];
        $sq="SELECT Name from user where id=$name";
        $g=mysqli_query($conn,$sq);
        while($w=mysqli_fetch_array($g)){?>
          <h4><?php echo $w['Name'] ?></h4>
        <?php } }?>
  </nav>
</body>
</html>
