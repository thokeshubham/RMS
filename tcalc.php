<?php
require "tnav.php";
require_once "../../dbconnect.php";
?>

<?php
session_start();
if( $_SESSION["loggedin"] != 1)
{
    header("location: ../tlogin.php");
}

$dept = $_SESSION["dept"];
$year = $_SESSION["year"];
$tname =  $_SESSION["tname"];

//if($tname=="sanghvi")
//{

if($_SERVER ["REQUEST_METHOD"]== "POST")
{



$ress= mysqli_query($conn,"select id,stud_id from marks where sub1 is null or sub2 is null or sub3 is null or sub4 is null;");
if(mysqli_num_rows($ress)<1)
{


$res = mysqli_query($conn , "select id from user_student where department='$dept' and year='$year'");

if(mysqli_num_rows($res) > 0)
{
    while($stud1 = mysqli_fetch_assoc($res))
    {
        
        
        
        // echo "<br>";
        // print_r($stud1);
        

        $idd=$stud1["id"];
        //$dpp=$stud1["department"]
        //$yrrrs=$stud1["year"]
      
        $sql1="select sub1,sub2,sub3,sub4 from marks where stud_id='$idd'";
        $res1 = mysqli_query($conn ,$sql1);

        if(mysqli_num_rows($res1) > 0)
        {
          while($markks = mysqli_fetch_array($res1))
           { 
            // print_r($markks);

                $total=$markks["sub1"]+$markks["sub2"]+$markks["sub3"]+$markks["sub4"];
                $percent=$total/4;
                // echo "<br>";
                // echo $percent;

                $sql11="update marks set percentage='$percent' where stud_id='$idd';";
                 $res11=mysqli_query($conn,$sql11);



            }
             }
           else{
                echo"no record found";
                }
    }

    echo '<div class="alert alert-success" role="alert">
                  Result Declared successfully!!
                    </div>';
}
else{
    echo"no record found";
}
}
else{
    echo"Marks of all subjects and All students are not yet filled";
}
}


//}
else{
  echo '<div class="alert alert-success" role="alert">
  You dont have access to declare result!!
    </div>';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>
<link rel="stylesheet" href="styles/loginstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
	background-image: url('w1.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
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
</head>







<body>
<header>
<h2 align="center" style="color:white;">Declare Result</h2>
</header>

<div class="container" > 
<div class="row" >
<div class="col-md-3">
</div>
<div class="col-md-7">


<form action="tcalc.php" method="POST" onsubmit="return validate()  " name="marks_form">



 <div class="col-md-10 box" align="center">
  <button type="submit" class="btn btn-primary" name="sub">Declare Result</button>





  </div>



   
</body>
</html>