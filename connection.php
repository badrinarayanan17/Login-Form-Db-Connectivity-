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

$host = "localhost";
$user = "root";
$password = "";
$dbname = "demo_login";
$con = mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno()){
    die("Failed to connect with mysql".mysqli_connect_error());
}

?>
</body>
</html>