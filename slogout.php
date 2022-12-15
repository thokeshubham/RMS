<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
<?php require 'snav.php';

session_start();
session_unset();
session_destroy();


// require "../dbclose.php";
// mysqli_close($conn);

header("Location:../slogin.php");

?>

</body>
</html>