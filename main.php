<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Fetching</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu&display=swap" rel="stylesheet
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<style>
.userdet{
    width: 100%;
    height: 27px;
    border-radius: 10px;
    border-style: solid;
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 14px;
    padding-right: 14px;

}
form{
    color: white;
    text-align: center;
    padding: 50px;
    padding-left: 20px;
    width: 290px;
    height: 280px;
    border-radius: 6px;
    border-style: solid;
    border-width: 2px;
    background-color: white;
    align-items: center;
    margin-left: 450px;
    margin-top: 100px;
    border-color: #088178;
    margin-bottom: 90px;
}
body{
    font-family: 'Ubuntu', sans-serif;
    background-color: #A8E890;
    /*background-image: url("bookbg.jpg");
    background-size: 100%;*/
}
.snap-btn{

background-color: #ff571e;
color:white;
border:none;
border-radius:2px;
padding-top:14px;
padding-bottom:14px;
padding-left:60px;
padding-right: 60px;
font-weight:bold;
font-size:16px;
font-family: Poppins;
margin-top: 30px;
margin-left: 40px;
cursor:pointer;
transition: background-color 0.15s , opacity 0.15s;

}
.snap-btn:hover{

background-color: #ff4000;;

}
.snap-btn:active{

opacity:0.7;
}
</style>
<body>
<div class="content">
        <h2 style="font-family: Ubuntu; color: #333; margin-top:4%; font-size: 36px;text-align: center;">GOOD TO SEE YOU AGAIN</h2>
        <span class="border" style="background: #ff571e;"></span>
    </div>
    <form action="authentication.php" method="POST">
   	<div style="font-size: 40px;color: #ff571e;margin-left: 18px;">LOGIN</div>
   	<br>   
   	<input class="userdet" id = "user1" type="text" name="user" placeholder="Username" ><br><br>
   	<input class="userdet" id = "pass1" type="password" name="pass" placeholder="Password"><br><br>
   	<input type="submit" class="snap-btn"  name="login" value="LOGIN">
   </form>
</body>
</html>