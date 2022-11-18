<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Fetching</title>
</head>
<body>
    <?php

     include("connection.php");
     $uname = $_POST['user'];
     $pword = $_POST['pass'];
     $sql = "select * from login where username = '$uname' and password = '$pword'";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);
     if($count==1){
        echo '<script>alert("Login Successfull")</script>';
     }
     else{
        echo '<script>alert("Login Failed")</script>';
     }
?>
</body>
</html>