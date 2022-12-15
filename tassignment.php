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


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>place_details</title>
</head>
<style>
  
     /* .container {
         border: 2px solid red; 
      
    } 
    */

    .container table {
        /* border: 2px solid yellowgreen; */
        width: 100%;
    }
    /* .container table tr {
     background-color: 
     lightgray;
    } */

    /* .container table tr {
        border: 2px solid blue;
        /* width: 100%; 
    } */
    .place_row{
        border: 2px solid blue;
        background-color: lightgray;
    }
    .table_heading {
        border: 3px solid black;
        color: darkslateblue;
        background-color: lightcyan;
        text-align: center;
        
    }

    .table_info {
        /* border: 2px solid blue;
        margin: 2px 2px;
        color: black;
        background-color: lightgrey;
        text-align: center; */
        border: 3px solid black;
        text-align: center;
        
       

    }
#head{
    text-align: center;
    font-weight: bolder;
    font-size: 2rem;
    color: black;
    /* background-color: lightgrey; */
    margin: 0px 110px;
}

</style>
<?php

// echo $dept;
// echo $year;


//$res = mysqli_query($conn , "select * from user_student where department='$dept' and year='$year'");

$res = mysqli_query($conn , "select user_student.fname,user_student.lname,marks.percentage from user_student left join marks on user_student.id=marks.stud_id where user_student.department='$dept' and user_student.year='$year' and marks.percentage>80");


 

if(mysqli_num_rows($res) > 0)
{
    // echo "<div id='head'> <strong>Place Details</strong> </div>";

    echo '<div class="container placetable ">
    <div id="head" style="color:white;"> <strong>Fast Learners</strong> </div>
    <table>
        <tr class="place_row">
            <th  class="table_heading">First Name</th>
            <th  class="table_heading">Last Name</th>
            <th class="table_heading">Percentage</th>
      
            
        </tr>
       
</div>';
    while($stud = mysqli_fetch_array($res)){
    
        $fname = $stud["fname"];
        $lname = $stud["lname"];
        $p = $stud["percentage"];
      

        // echo $p_id . "<br>";    
        // echo $p_cat . "<br>";    
        // echo $p_des . "<br>";    
        // echo $p_loc . "<br>";    
        // echo $p_img . "<br>";    
        ?>
        <tr class="place_row">
        <th class="table_info"><?php echo $stud["fname"];?></th>
        <th class="table_info"><?php echo $stud["lname"];?></th>
        <th class="table_info"><?php echo $p;?></th>
    
     

        </tr>
        <?php
        
    }
    echo "</table>";
}
else{
    ?>
    <h1 style="text-align: center; color:cadetblue"> No record found !!!</h1>
    <?php
}
// while($place = mysqli_fetch_array($res))


?>

<?php



$res = mysqli_query($conn , "select user_student.fname,user_student.lname,marks.percentage from user_student left join marks on user_student.id=marks.stud_id where user_student.department='$dept' and user_student.year='$year' and marks.percentage<70");
echo'<div class="container placetable ">
<div id="head" style="color:white;"> <strong>Slow Learners</strong> </div>';
 

if(mysqli_num_rows($res) > 0)
{
    // echo "<div id='head'> <strong>Place Details</strong> </div>";

    echo '
    <table>
        <tr class="place_row">
            <th  class="table_heading">First Name</th>
            <th  class="table_heading">Last Name</th>
            <th class="table_heading">Percentage</th>
      
            
        </tr>
       
</div>';
    while($stud = mysqli_fetch_array($res)){
    
        $fname = $stud["fname"];
        $lname = $stud["lname"];
        $p = $stud["percentage"];
      

        // echo $p_id . "<br>";    
        // echo $p_cat . "<br>";    
        // echo $p_des . "<br>";    
        // echo $p_loc . "<br>";    
        // echo $p_img . "<br>";    
        ?>
        <tr class="place_row">
        <th class="table_info"><?php echo $stud["fname"];?></th>
        <th class="table_info"><?php echo $stud["lname"];?></th>
        <th class="table_info"><?php echo $p;?></th>
    
     

        </tr>
        <?php
        
    }
    echo "</table>";
}
else{
    ?>
    <h1 style="text-align: center; color:cadetblue"> No record found !!!</h1>
    <?php
}
// while($place = mysqli_fetch_array($res))


?>
<style>
.containercategory{
border: 2px solid purple;
/* width: 100%; */
position: absolute;
top: 0;
left: 0;
}

body{
	background-image: url('w1.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
}

</style>

<body>
   
    
</body>

</html>
<?php
require "../../dbclose.php";
?>
