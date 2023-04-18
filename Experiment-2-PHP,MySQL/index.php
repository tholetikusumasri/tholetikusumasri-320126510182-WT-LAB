<html>
    <head>
        <style>
            #top{
                width:1500px;
                height:160px;
                background-image:url('https://img.freepik.com/premium-vector/facebook-background-facebook-icon-social-media-icons-realistic-facebook-app-set-logo-vector-zaporizhzhia-ukraine-may-10-2021_399089-1051.jpg');
                background-color:dodgerblue;
                background-repeat:no-repeat;
                background-size:200px 180px;
            }
            #right{
                width:60%;
                height:600px;
                float:right;
            background-size:700px 650px;
            }
            #left{
                width:40%;
                height:600px;
                float:left;
            }
            #signup{
            position:fixed;
            right:300px;
            top:10px;
            color:purple;
            margin-top:55px;
            font-weight:bold;
            background-color:powderblue;
            width:120px;
            height:30px;
        }
        #login{
            position:fixed;
            right:150px;
            top:10px;
            margin-top:55px;
            color:purple;
            background-color:powderblue;
            font-weight:bold;
            width:100px;
            height:30px;
        }
        .h{
           margin-left:80px;
            padding-top:55px;
            font-size:20px;
        }
        </style>
</head>
<body>
   <div class="frame">
       <div id="top" name="top">
        <h1 class="h"  align="center" style="color:white">WELCOME TO FACEBOOK</h1>
        </div>
       <div  id="left" name="left">
       <?php  include("left.php");?>
       </div>
        <div id="right" name="right" >
          <?php include("login.php");?>
       </div>
</div>
    </body>
</html>