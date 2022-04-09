<?php 
session_start();

$adminid=$_SESSION["adminid"];
?>



<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body{
        background-image:url("https://thumbnails.production.thenounproject.com/e-3LvRIVysDS343teZDVResBuHA=/fit-in/1000x1000/photos.production.thenounproject.com/photos/E3DE3D3A-341F-4629-A1ED-BCAF80AF7F0B.jpg");
       background-repeat:no-repeat;
       background-size:cover
    }
    .imglogo{
        margin:auto;
        width:300px;
        margin-top:50px;
        margin-bottom:70px;
    }
    .leftinnerdiv{
       display:flex;
       flex-direction:column;
       width:170px;
    }
    .rightinnerdiv{
       position :absolute;
       left:350px;
       top:230px;
    }
    .greenbtn{
        background-color:PURPLE;
        color:white;
        margin:1px;
    }
    .innerright:active{
        display:none;
    }
    
    </style>
<body>
  
<div class="container ">
    <div class="innerdiv">
        <div class="row"><img class="imglogo" src="https://comparecamp.com/media/uploads/2021/04/salonmanagementapp-logo.png"></div>
        <div class="leftinnerdiv">
            <Button class="greenbtn">Admin</Button>
            <button class="greenbtn" onclick="openpart('addperson')">ADD MEMBER</button>
            <button class="greenbtn" onclick="openpart('addperson')">ADD PRODUCTS</button>
            <button class="greenbtn" onclick="openpart('addperson')">PRODUCTS LEFT</button>
            <button class="greenbtn" onclick="openpart('addperson')">TOTAL REVENUE</button>
            <button class="greenbtn" onclick="openpart('addperson')">RECENT REGISTERATION</button>

            <a href="index.php"><Button class="greenbtn">ADMIN LOGOUT</Button></a>
        </div>



        <div class="rightinnerdiv">
        <div id="addperson" class="innerright portion"  >
          <Button class="greenbtn" style="width:400px">ADD PERSON</Button>  
         <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
         <label>Name :</label><input style="margin:5px 30px" type="text" name="addname"/>
          </br>
          <label>Password:</label><input style="margin:5px 10px" type="password" name="addpass"/>
          </br>
          <label>Email:</label><input style="margin:5px 38px" type="email" name="addemail"/>
          <input type="submit" style="margin:5px 80px;display:block;" value="SUBMIT"/>
        </form>  
    
        </div>



        </div>
</div>
</div>

<script>
    function openpart(portion) {
  var i;
  var x = document.getElementsByClassName("portion");
  for (i = 0; i <script x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(portion).style.display = "block";
}
</script>

    
</body>
</html>