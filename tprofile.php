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






 ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-Home</title>
</head>

<style>
  
   .container{
     box-sizing: border-box;
     position: relative;
   }
   .container h3{
       text-align: center;
       font-size: 3rem;
       font-weight: 700;
       color: green;
       /* background-color: antiquewhite; */

   }
  
   #profiletable{
       /* border: 2px solid blue; */
       margin: auto;
       width: 70%;
        
   }
   .container table tr{
       /* border: 2px solid red; */
       line-height: 50px;
       background-color: aliceblue;
   }
   .container table tr th, td{
       /* border: 2px solid black; */
      text-align: center;
      font-size: 1.3rem;
      background-color: antiquewhite;
   }
   #newadmin{
       position: absolute;
       top: 0;
       right: 0;
       position: absolute;
        top: 0;
        right: 15px;
        margin-top: 6px;
    background-color: #ef8d8d;
    width: 166px;
    height: 31.7px;
    border-radius: 13px;
   }


   body{
	background-image: url('w1.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<?php
$fname = $_SESSION["fname"];
$lname = $_SESSION["lname"];
 $gender = $_SESSION["gender"];
 $email_id = $_SESSION["email_id"]; 
 
 $mob = $_SESSION["mob"];
 $dept = $_SESSION["dept"];
$year = $_SESSION["year"];
$sub = $_SESSION["sub"];
?>

<body>
    <div class="container mt-3">
        <h3 style="color:#2ff1bd;">Profile</h3>
        <table id="profiletable" class="mb-3">
            <tr>
                <th>First Name</th>
                <td><?php echo $fname ; ?></td>
            </tr>
            <tr>
            <th>Last Name</th>
            <td><?php echo $lname ; ?></td>
            </tr>
            <tr>
            <th>Gender</th>
            <td><?php echo $gender ; ?></td>
            </tr>
            <tr>
            <th>Email</th>
            <td> <?php echo $email_id ; ?></td>
            </tr>
            <tr>
            <th>Mobile No</th>
            <td><?php echo $mob ; ?></td>
            </tr>

            <tr>
            <th>Department</th>
            <td><?php echo $dept ; ?></td>
            </tr>
            <tr>
            <th>Year</th>
            <td><?php echo $year ; ?></td>
            </tr>
            <tr>
            <th>Subject</th>
            <td><?php echo $sub ; ?></td>
            </tr>
        </table>
        <div >
    <!-- <a href="adminregistration.php"><input type="button" value="Add New Admin" id="newadmin"></a> -->
</div>
    </div>

   
</body>
</html>
<?php
require_once "../../dbclose.php";
?>
   <!-- <div class="container-fluid">
        <h3>Profile</h3>
       
        <section class="container">

        
        <div class="showdata ">
            <strong class="show_text"> Userid : <b><?php echo $id ; ?></b> </strong>
        </div>
        <div class="showdata ">
            <strong class="show_text">UserName : <b><?php echo $adname ; ?></b> </strong>
        </div>
        <div class="showdata">
            <strong class="show_text">Email : <b><?php echo $ademail ; ?></b> </strong>
        </div>
        <div class="showdata">
            <strong class="show_text">Contact : <b><?php echo $adcont ; ?></b> </strong>
        </div>
        <div class="showdata">
            <strong class="show_text">Location : <b><?php echo $adlocation ; ?></b> </strong>
        </div>
    
        </section>
    </div> -->