<?php
    require '../dbconnect.php';
    // require_once "../nav.html";
  

    if($_SERVER ["REQUEST_METHOD"]== "POST")
    {

        $usernm = $_POST["username"];
        $pwd = $_POST["password"];
        $login = false;

        $sql = "select * from user_teacher where username='$usernm' and password='$pwd'";

        $result =  mysqli_query($conn , $sql);
        $check = mysqli_num_rows($result);
      
    

      if($check>0)
      {
       
        $login = true;
        session_start();
       $_SESSION["loggedin"] = 1;
       $_SESSION["tname"] = $usernm;
       $_SESSION["tpwd"] = $pwd;
       header("location:Tuser/twelcome.php");

      }
      else
      {
           echo " <div class='alert alert-danger' role='alert'>
             wrong credentials !!!!
         </div>" ;
          $login = false;
      }
      
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="tcss/tbootstrap.css" />
    <link rel="stylesheet" href="tcss/tstyle.css" />
    
<style>

     body{
         background-color: rgb(199, 209, 209);
         padding-top: 10px;
    }  
    /* body::before {
    content: "";
    background: url("https://images.pexels.com/photos/368893/pexels-photo-368893.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500")no-repeat center center/cover;
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0.3.2;
    top: 0;
    left: 0;
    z-index: -1;
    } */
    .link{
        color: blue;
        display: inline;
    }
</style>

<style>
    .containerfluid {
        /* border: 2px solid red; */
        background-color: rgb(8, 4, 17);
        height: 50px;
        position: relative;

    }

    #nav_heading {
        color: whitesmoke;
    position: absolute;
    display: inline-block;
    left: 30px;
    top: 2px;
    }

    #navbar {
        display: flex;
        flex-direction:row;
        align-items: center;
        justify-content: center;
    }

    #navbar  .nav_item {
        margin: 4px 15px;
        list-style: none;

    }

    ul .nav_item a {
        text-decoration: none;
        color: white;
        height: 10px;
        width: 20px;
        padding: 0px 5px;
        font-size: 20px;
    }
    ul .nav_item a:hover{
       color: grey;
    }
    body{
	background-image: url('backg.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
} 
h2{
color:#5d011b;}

h2{padding-top:100px;
color:#5d011b;}
.container{padding-top:100px;}
</style>
</head>


<body>
<nav >
        <div class="containerfluid">
            <ul id="navbar">
                <h4 id="nav_heading">Teacher Login</h4>
            </ul>
               
            <ul id="navbar">
            <h4 class="nav_item "> <a style="padding-left:1400px;" href="../index.php">RMS</a> </h4>
            
            </ul>
            
        </div>
 </nav>


<h2 align="center">Login Your Account</h2>
</header>

<div class="container" > 
<div class="row" >
<div class="col-md-3">
</div>
<div class="col-md-7">
        
        <form action="tlogin.php" method="post" onsubmit="return validate() "  id="tloginform" name="tloginform">
        <div class="col-md-10 box" align="center" >
 <h6>Fill Login Details</h6>
   </div>
       
        <div  class="col-md-3 info">
        <label>Username</label>
        </div>
        <div class="col-md-7 box">
        <div class="form-group">
         <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your username here" required>
        </div>
        </div>

        
        <div  class="col-md-3 info">
        <label>Password</label>
        </div>
        <div class="col-md-7 box">
        <div class="form-group">
         <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your password here" required>
        </div>
        </div>

        <div class="col-md-10 box" align="center">
        <button type="submit" class="btn btn-primary" id="submitbtn">Login</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        <strong ><a style="color:black"; href="ttsignup.php" id="tsignuplink"> Create new account</a></strong>
        <strong ><a style="color:black"; href="" id=""> Forget Password</a></strong>
        
        </div>


         
        </form>
    </div>
    </div>
</div>

</body>
</html>



