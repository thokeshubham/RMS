<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <title>navbar</title> -->
</head>
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
</style>

<body>

    <nav >
        <div class="containerfluid">
            <div>
                <h3 id="nav_heading">Student Panel</h3>
            </div>
               
            <ul id="navbar">
            
                <li class="nav_item "> <a href="swelcome.php">Home</a> </li>
                <li class="nav_item"> <a href="sassignment.php">F&S Learners</a> </li>
                <li class="nav_item"> <a href="sResult.php">Test Result</a> </li>
                
                <li class="nav_item"> <a href="sprofile.php">Profile</a> </li>
                <li class="nav_item"> <a href="slogout.php">Logout</a> </li>

               
                
                
               
            </ul>
            
        </div>
    </nav>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>