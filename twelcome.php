<?php
require "tnav.php";
require_once "../../dbconnect.php";

session_start();
if( $_SESSION["loggedin"] != 1)
{
    header("location: ../tlogin.php");
}

$tname =  $_SESSION["tname"];
$tpwd =  $_SESSION["tpwd"];


 $sql = "select fname,lname,gender,email_id,mob,department,year,subject from user_teacher where username='$tname' and password='$tpwd';";
 $Result = mysqli_query($conn , $sql);
 $row = mysqli_fetch_array($Result);


  $_SESSION["fname"] = $row["fname"];
 $_SESSION["lname"]= $row["lname"];
 $_SESSION["gender"] = $row["gender"];
 $_SESSION["email_id"] = $row["email_id"];
 $_SESSION["mob"] = $row["mob"];
 $_SESSION["dept"] = $row["department"];
 $_SESSION["year"] = $row["year"];
 $_SESSION["sub"] = $row["subject"];
 $fn=$_SESSION["fname"];
 $ln=$_SESSION["lname"];


 $yrr=$_SESSION["year"]
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome</title>
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
 
 
 
 
 
 
     
         
        
 <style>
 .containercategory{
 border: 2px solid purple;
 /* width: 100%; */
 position: absolute;
 top: 0;
 left: 0;
 }
 marquee{
     font-size:30px;
     color:white;
 }
 body{
	background-image: url('w1.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
}
 </style>
 
 <body>
 <marquee width="100%" direction="right" height="100px">
 Welcome <?php echo "$fn $ln";?>
 </marquee>
 
 
 <?php
 
 
 $ress= mysqli_query($conn,"select id,stud_id from marks where sub1 is null or sub2 is null or sub3 is null or sub4 is null;");
 if(mysqli_num_rows($ress)<1)
 {
 
  $dept=$_SESSION["dept"];
  $res1=mysqli_query($conn,"select marks.stud_id,marks.percentage from marks left join user_student on user_student.id=marks.stud_id where user_student.department='$dept' and user_student.year='$yrr' order by marks.percentage DESC limit 3 ");
 //select user_student.fname,user_student.lname,marks.percentage from user_student left join marks on user_student.id=marks.stud_id where user_student.department='$dept' and user_student.year='$year' order by marks.percentage DESC limit 3"
 
  if(mysqli_num_rows($res1) > 0)
  {
 
     echo '<div class="container placetable ">
     <div id="head" style="color:white;"> <strong>Leader Board</strong> </div>
     <table>
         <tr class="place_row">
             <th  class="table_heading">First Name</th>
             <th  class="table_heading">Last Name</th>
             <th class="table_heading">Percentage</th>
       
             
         </tr>
        
 </div>';
    while($top = mysqli_fetch_assoc($res1))
  {
 
    
     
     $id=$top["stud_id"];
      $res2=mysqli_query($conn,"select fname,lname from user_student where id='$id';");
      if(mysqli_num_rows($res2) > 0)
      {
         
        while($sd = mysqli_fetch_assoc($res2))
      {
   
      $fname = $sd["fname"];
         $lname = $sd["lname"];
         $percent = $top["percentage"];
       
 
         // echo $p_id . "<br>";    
         // echo $p_cat . "<br>";    
         // echo $p_des . "<br>";    
         // echo $p_loc . "<br>";    
         // echo $p_img . "<br>";    
         ?>
         <tr class="place_row">
         <th class="table_info"><?php echo $fname;?></th>
         <th class="table_info"><?php echo $lname;?></th>
         <th class="table_info"><?php echo $percent;?></th>
     
      
 
         </tr>
 
         <?php
         
     }
    
 }
 
 }
 echo "</table>";
  }
 
 else{
     ?>
     <h1 style="text-align: center; color:cadetblue"> No record found !!!</h1>
     <?php
 }
 // while($place = mysqli_fetch_array($res))
 
 }
 ?>
      
 
 
 
 
 
 
 
 
 
 
 
 
    
     
 </body>
 
 </html>
 <?php
 require "../../dbclose.php";
 ?>
 
 
 
 
 
 