<html>
<head>
    <style>
        .tab,tr,td{
            border:none;
        }
        body{
            max-height:auto;
            overflow-y:auto;
            display: flex;
            justify-content: center;
        }
        img{
            border: 5px solid #555;
            margin-right:30px;
        }
        #like{
            width:60px ;
            height:30px;
            border-color:palegoldenrod;
            font-weight: bold;
            margin-left:60px;
        }
        textarea{
            align:center;
            width: 120px;
            height:25px;
            border:3px solid lightpink;
        }
        #comm{
            font-weight:bold;
            border-color:palegoldenrod;
        }
        #like:hover,#comm:hover{
            background-color:blanchedalmond;
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
    $conn= mysqli_connect($servername, $username, $passwords, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * from `image`";
    $res=mysqli_query($conn,$sql);
    $user=$_SESSION['id'];
    ?>
    <table>
        <?php 
        $count = 0;
        while($row=mysqli_fetch_array($res)){
            if($count % 4 == 0){
                echo "<tr>";
            }
            $imgpath=$row['imgdir'];
            $imgId=$row['imgid'];
            $userId=$row['userid'];
            $sql1="select Name from user where id='$userId'";
            $re=mysqli_query($conn,$sql1);
            while($r=mysqli_fetch_array($re)){
                $names=$r['Name'];
            }
            ?>
            <td>
                <div class="im">
                    <img src="<?php echo $row['imgdir'];?>" width=200px height=150px />
                    <form name='fom' action='likes.php' method='POST' enctype='multipart/form-data'>
                        <input type='hidden' name='userid' value='<?php echo $user;?>'>
                        <p><h4><?php echo $names;?>:<button id="like" name="like" type="submit"  value='<?php echo $imgId;?>'>like</button><?php echo clike($imgId);?></h4></p>
                        <input type='hidden' name='action' value='comment'>
                        <p><textarea name='comment' placeholder='Add a comment'></textarea>
                        <button type="submit" id="comm" name="comm" type="submit" value='<?php echo $imgId;?>'>Comment</button><?php echo ccomm($imgId);?></p>
                    </form>
                </div>
            </td> 
            <?php
            $count++;
        }
        ?>
    </table>
    <?php
    function clike($imgId){
        global $conn;
        $res=mysqli_query($conn,"select likes from `image` where imgid='$imgId'");
        while($r=mysqli_fetch_assoc($res)){
            return "  " . $r['likes'];
        }
    }
    function ccomm($imgId){
        global $conn;
        $l="select COUNT(comment) as c from comment where imageid='$imgId'";
        $res=mysqli_query($conn,$l);
        while($r=mysqli_fetch_assoc($res)){
            return " " . $r['c'];
        }
    }
    ?>
</body>
</html>