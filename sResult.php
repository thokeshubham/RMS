<?php
require "snav.php";
require_once "../../dbconnect.php";
?>



<?php
session_start();
if( $_SESSION["loggedin"] != 1)
{
    header("location: ../tlogin.php");
}

$dept = $_SESSION["dept"];

$fname = $_SESSION["fname"];
$lname = $_SESSION["lname"];

$year = $_SESSION["year"];
$sid = $_SESSION["sid"];

$sql="select sub1,sub2,sub3,sub4,percentage from marks where stud_id='$sid';";// and department='$dept' and year='$year'
// and department='$dept' and year='$year' use in above query
$result=mysqli_query($conn,$sql);
$studr=mysqli_fetch_assoc($result);

$subarr=array();

$sql1="select subject from user_teacher where department='$dept' and year='$year' order by subject;";

$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{


while($subl=mysqli_fetch_assoc($result1))
{
array_push($subarr,$subl["subject"]);
// echo "<br>";
// print_r($subarr);
}
}


?>





 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<style>
  body{
	background-image: url('w1.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
}
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

    // echo "<div id='head'> <strong>Place Details</strong> </div>";

    echo '<div class="container placetable ">
    <div id="head" style="color:white;"> <strong>Test Result</strong> </div>
    <table>


    <tr class="place_row">
    <th style="background-color:#03eb44;"  class="table_heading">Name:</th>
    
    <th style="padding-left:340px; background-color:#03eb44;">'?> <?php echo $fname;echo '  '; echo $lname;echo' </th>
    <th style="background-color:#03eb44;"></th>


    
</tr>


        <tr class="place_row">
            <th  class="table_heading">Subject</th>
            <th  class="table_heading">Total</th>
            <th class="table_heading">Obtained</th>

      
            
        </tr>
       
</div>';
   
      

        // echo $p_id . "<br>";    
        // echo $p_cat . "<br>";    
        // echo $p_des . "<br>";    
        // echo $p_loc . "<br>";    
        // echo $p_img . "<br>";    
        ?>
        <tr class="place_row">
        <th class="table_info"><?php echo substr($subarr[0],1);?></th>
        <th class="table_info">100</th>
        <th class="table_info"><?php echo $studr["sub1"];?></th>
        </tr>

        <tr class="place_row">
        <th class="table_info"><?php echo substr($subarr[1],1);?></th>
        <th class="table_info">100</th>
        <th class="table_info"><?php echo $studr["sub2"];?></th>
        </tr>

        <tr class="place_row">
        <th class="table_info"><?php echo substr($subarr[2],1);?></th>
        <th class="table_info">100</th>
        <th class="table_info"><?php echo $studr["sub3"];?></th>
        </tr>

        <tr class="place_row">
        <th class="table_info"><?php echo substr($subarr[3],1);?></th>
        <th class="table_info">100</th>
        <th class="table_info"><?php echo $studr["sub4"];?></th>
        </tr>
        <tr class="place_row">
        <th class="table_info"><?php echo "Percentage";?></th>
        <th class="table_info">100</th>
        <th class="table_info"><?php echo $studr["percentage"];?></th>
        </tr>
        <?php
        
    
    echo "</table>";


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

</style>

<body>
   
    
</body>

</html>

<?php
require "../../dbclose.php";
?> 
