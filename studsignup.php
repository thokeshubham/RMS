<?php
require '../dbconnect.php'; // getting ../dbconnect.php which connect to server
// require 'nav.php';  // getting navbar from nav.php 

 
 if($_SERVER["REQUEST_METHOD"]== "POST")
 {
     // accessing the name from html form
     
      $fname = $_POST["fname"]; 
      $lname = $_POST["lname"]; 
      $gender = $_POST["gender"];

         $usernm = $_POST["username"]; 
         $email = $_POST["email"];

         $contact = $_POST["mobileno"];
         $dept = $_POST["dept"];  
         $yr = $_POST["yr"]; 
         
         $pwd = $_POST["password"];
        
         
         
         
         // $sql = "  CALL `userentry`('$usernm', '$pwd', '$email', '$contact', '$gender')"; // calling stored procedure  i.e. sql query is written
         $sql = "insert into user_student(`fname`, `lname`, `Gender`, `username`, `email`, `mob`, `department`, `year`, `password`) values('$fname','$lname','$gender','$usernm','$email','$contact','$dept','$yr','$pwd');";
         $result = mysqli_query($conn , $sql); // executing SQL query
        //  $row = mysqli_fetch_assoc($result); //coverting sql data into array 
        //   echo $row["id"]; 
        
        if($result) // checking query is excuted or not
        {
           
     
                    echo '<div class="alert alert-success" role="alert">
                    successfully submited
                    </div>';
                
        }
           
        else{
          echo '<div class="alert alert-success" role="alert">
          Exception occured
          </div>';
            echo "we are facing some technical issue <br> sorry for inconvenince";
        }  
        
    
}
    ?>


<!DOCTYPE >
<html >
<head>

<title>Student SignUp</title>
<link rel="stylesheet" href="tcss/tbootstrap.css" />
<link rel="stylesheet" href="tcss/tstyle.css" />

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
</style>
</head>

<body>
<nav >
        <div class="containerfluid">
            <ul id="navbar">
                <h4 id="nav_heading">Student Singup</h4>
            </ul>
               
            <ul id="navbar">
            <h4 class="nav_item "> <a style="padding-left:1400px;" href="../index.php">RMS</a> </h4>
            
            </ul>
            
        </div>
 </nav>


<header>
<h2 align="center">Student Signup Form</h2>
</header>

<div class="container" > 
<div class="row" >
<div class="col-md-3">
</div>
<div class="col-md-7">
 
<form action="studsignup.php" method="post" onsubmit="return validate()  " name="signup_form">

<div class="col-md-10 box" align="center" >
 <h6>Create Account</h6>
   </div>
   <div  class="col-md-3 info">
 <label>First Name</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="fname" id="fname" class="form-control" placeholder="first name" required>
 </div>
 </div>

 <div  class="col-md-3 info">
 <label>Last Name</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="lname" id="lname" class="form-control" placeholder="last name" required>
 </div>
 </div>

 <div class="col-md-3 info">
 <label> Gender</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="radio"  name="gender" value="male" /> Male &nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio"  name="gender" value="female" />Female
  </div>
  </div>
 <div  class="col-md-3 info">
 <label>Username</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
 </div>
 </div>
 <div  class="col-md-3 info">
 <label>Email Id</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="email" id="email" class="form-control" placeholder="emailid" required>
 </div>
 </div>
  
 <div  class="col-md-3 info">
 <label> Mobile No</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="text" name="mobileno" id="mobileno" class="form-control" placeholder=" enter" required>
   </div>
 </div>
 
  <div  class="col-md-3 info">
 <label> Department</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <select name="dept" id="dept"   class="form-control" required>
 <option value="">Select Department</option>
 <option value="comp">Computer</option>
 <option value="mechanical">Mechenical</option>
 </select>
   </div>
 </div>

 <div  class="col-md-3 info">
 <label> Year</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <select name="yr" id="yr"   class="form-control" required>
 <option value="">Select Year</option>
 <option value="First">First</option>
 <option value="Second">Second</option>
 <option value="Third">Third</option>
 </select>
   </div>
 </div>




  <div  class="col-md-3 info">
 <label> Password</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="password" name="password" id="password" class="form-control" placeholder=" Enter Password" required>
   </div>
 </div>


 <div  class="col-md-3 info">
 <label>Confirm Password</label>
 </div>
 <div class="col-md-7 box">
 <div class="form-group">
 <input type="password" name="password" id="password" class="form-control" placeholder=" Re-Enter Password" required>
   </div>
 </div>

  <div class="col-md-10 box" align="center">
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <a style="color:black"; href="slogin.php" id="loginlink"> have account ! Login </a>

  </div>



</form>
</div>
</div>
</div>
   


</body>
</html>
<script>
    function validate() {
        var username = document.forms["signup_form"]["username"].value;
        var email = document.forms["signup_form"]["email"].value;
        var pwd = document.forms["signup_form"]["password"].value;
        var cpwd = document.forms["signup_form"]["cpassword"].value;
        var contact = document.forms["signup_form"]["contact_no"].value;


        // PASSWORD VALIDATION

        if (pwd == "") {
            alert("password should not be blank");
            return false;
        }
        if (pwd != cpwd) {
            alert("password does not match");
            return false;
        }
        if (pwd.trim() == "") {
            alert("white spaces not allowed");
            return fals
        }
        if (pwd.length < 8) {
            alert("password must be at least 8 characters");
            return false;
        }
        // CONTACT VALIDATION
        if (contact.length < 10 || contact.length > 10) {
            alert("contact must be 10 digit");
            return false;
        }

        return true;
    }


</script>