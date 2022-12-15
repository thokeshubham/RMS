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
$subname=$_SESSION["sub"];
$fch=$subname[0];

$colname="sub".$fch;
// echo $colname;
// echo $fch;

// echo $subname;



if($_SERVER["REQUEST_METHOD"]== "POST")
 {
     // accessing the name from html form
     if(isset($_POST["sub"]))
     {
         $sid = $_POST["sid"];
         $fname = $_POST["fname"]; 
         $smarks = $_POST["marks"]; 

                 //check whether the student detail entered is valid student and from same brach and year as teacher is
         $sql = "select id from user_student where id='$sid' and fname='$fname' and department='$dept' and year='$year';";  

         $result =mysqli_query($conn,$sql);
         $check=mysqli_num_rows($result);
         if($check>0)
         {


         $sql = "select stud_id from marks where stud_id='$sid';";
         $result =mysqli_query($conn,$sql);
         $check=mysqli_num_rows($result);
         if($check>0)
         {
             $sql ="update  marks set ".$colname."='$smarks' where stud_id='$sid';";
             $result =mysqli_query($conn,$sql);
             if($result) // checking query is excuted or not
             {
           
     
                    echo '<div class="alert alert-success" role="alert">
                    successfully submited!!!!
                    </div>';
                
              }
             else{
                echo '<div class="alert alert-success" role="alert">
                Exception occured  :  we are facing some technical issue <br> sorry for inconvenince
                </div>';
             } 


         }
         else
         {

         

         $sql = "insert into marks(stud_id,".$colname.") values('$sid','$smarks');";
         $result = mysqli_query($conn , $sql); // executing SQL query
     
        
         if($result) // checking query is excuted or not
         {
           
     
                    echo '<div class="alert alert-success" role="alert">
                    successfully submited
                    </div>';
                
         }
         else{
             echo '<div class="alert alert-success" role="alert">
          Exception occured  :  we are facing some technical issue <br> sorry for inconvenince
          </div>';
            
        }  
        }

        //  echo $smarks;
        //  echo $fname;
       
    }
    else
    {

        echo '<div class="alert alert-success" role="alert">
          Exception occured     : Invalid user-ID or First-Name
          </div>';
            

    }


  }
}





?>






<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Marks</title>

    <link rel="stylesheet" href="../tcss/tbootstrap.css" />
    <link rel="stylesheet" href="../tcss/tstyle.css" />
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


.containercategory{
border: 2px solid purple;
/* width: 100%; */
position: absolute;
top: 0;
left: 0;
}





/* *********************Form style******************* */
body{
	background-image: url('w1.jpg');
	min-height: 100%;
  background-position: center;
  background-size: cover;
}

</style>

<body>


<?php

// echo $dept;
// echo $year;


$res = mysqli_query($conn , "select * from user_student where department='$dept' and year='$year'");

 

if(mysqli_num_rows($res) > 0)
{
    // echo "<div id='head'> <strong>Place Details</strong> </div>";

    echo '<div class="container placetable ">
     <div id="head" style="color:white;"> <strong>Class Student</strong> </div>
    <table>
        <tr class="place_row">
        <th  class="table_heading">Student ID</th>
            <th  class="table_heading">First Name</th>
            <th  class="table_heading">Last Name</th>
            <th class="table_heading">Email</th>
      
            
        </tr>
       
</div>';
    while($stud = mysqli_fetch_array($res)){
       
      

        // echo $p_id . "<br>";    
        // echo $p_cat . "<br>";    
        // echo $p_des . "<br>";    
        // echo $p_loc . "<br>";    
        // echo $p_img . "<br>";    
        ?>
        <tr class="place_row">
        <th class="table_info"><?php echo $stud["id"];?></th>
        <th class="table_info"><?php echo $stud["fname"];?></th>
        <th class="table_info"><?php echo $stud["lname"];?></th>
        <th class="table_info"><?php echo $stud["email"];?></th>
    
     

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





<header>
<h2 align="center" style="color:white;">Student Marks</h2>
</header>

<div class="container" > 
<div class="row" >
<div class="col-md-3">
</div>
<div class="col-md-7">
 
<form action="testmarks.php" method="POST" onsubmit="return validate()  " name="marks_form">

<div class="col-md-10 box" align="center" >
 <h6>Student Details</h6>
   </div>

   <div  class="col-md-3 info">
 <label>ID</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="sid" id="sid" class="form-control" placeholder="Enter ID" required>
 </div>
 </div>

   <div  class="col-md-3 info">
 <label>First name</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required>
 </div>
 </div>

 <div  class="col-md-3 info">
 <label>Marks</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="marks" id="marks" class="form-control" placeholder="Enter Marks" required>
 </div>
 </div>



 <div class="col-md-10 box" align="center">
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>


<button type="reset" class="btn btn-primary">Reset</button>


  </div>





   
    
</body>

</html>
<?php
require "../../dbclose.php";
?>
