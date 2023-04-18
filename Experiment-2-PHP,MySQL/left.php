<html>
   <head>
      <style>
         img{

            align-items: center;
         }
         .p,.th,.td1{
                /* border:2px solid black; */
                height:40px;
                /* border-collapse:collapse; */
            }

            .p{
      text-align: center;
      width:100%;
     } 
      .like{
         font-size:20px;
         color:papayawhip;
      }
      h1{
         margin-top:0px;
         padding-top:0px;
         font-size:30px;
         font-weight:bold;
         color:azure;
         margin-left:400px;
      }
      th{
         color:white;
         font-size:20px;
      }
      .co{
         color:papayawhip;
         font-size:20px;
      }
         </style>
</head>
<body>
   <h1>TOP-PICS</h1>
   <table class="p">
      <tr><th class="th">USER</th>
         <th class="th">PHOTO</th>
      <th class="th">LIKES</th>
      <th class="th">COMMENTS</th></tr>
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
    $sql="SELECT * FROM`image` ORDER BY likes DESC LIMIT 3 ";
   $res= mysqli_query($conn,$sql);
   while($r=mysqli_fetch_array($res)){
   $s="SELECT COUNT('comment') as count FROM `comment` WHERE imageid={$r['imgid']}";
   $re=mysqli_query($conn,$s);
   while($q=mysqli_fetch_array($re)){
         $nc= $q['count'];
   }
   $sq="SELECT DISTINCT Name FROM `user` WHERE id={$r['userid']} ";
   $q=mysqli_query($conn,$sq);
   while($w=mysqli_fetch_array($q)){
      $nm=$w['Name'];
   }
      echo '<tr><td><h2 style="font-size:20px;color:papayawhip">'.$nm.'</h2></td>';
      echo '<td class="td1"><img src="'.$r['imgdir'].'" width="150px" height="120px"/></td>';
      echo '<td class="td1"><p class="like">'.$r['likes'].'</p></td>';
      echo'<td class="td1"><p class="co">'.$nc.'</p></td></tr>';
   }
    ?></table> 
    </body>
</html> 