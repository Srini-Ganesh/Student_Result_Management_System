<?php
$name = $_POST['fn'];
$id = $_POST['sn'];
$sex = $_POST['sex'];
$ei = $_POST['ei'];
$pn = $_POST['pn'];
$dp = $_POST['dp'];
$at = $_POST['at'];
$pw = $_POST['pw'];
$conn = new mysqli("localhost","id20906647_ganesh","Qq11111!","id20906647_mydb");
if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);
}
$ins="insert into admin  values('$id','$pw','$name','$sex','$ei',$pn,'$dp','$at')";
$res=$conn->query($ins);
if($res)
{
echo
"<html>
<head>
<style>
body{
    color: rgb(148, 142, 236);
    background-color: rgb(30, 35, 63);
    font-family: Geneva, Tahoma, sans-serif;
}
.submit_button{
    color: rgb(148, 142, 236);
    background-color: rgb(30, 35, 63);
    border-radius: 30px;
    border-style: solid;
    border-width: 1px;
    border-color: white;
}
.submit_button:hover{
    color:rgb(30, 35, 63);
    background-color: rgb(148, 142, 236);    
}
</style>
</head>
<body>
<center>RECORD INSERTED SUCCESSFULLY<br><br>
<a href='login.html'><button class='submit_button'>Goto Login</button></a></center>
</body>
</html>";
}
else
{
    echo "
    <html>
    <head>
    <style>
    body{
     color: rgb(148, 142, 236);
     background-color: rgb(30, 35, 63);
     font-family: Geneva, Tahoma, sans-serif;
    }
    </style>
    </head>
    <body>
    <center>RECORD NOT INSERTED SUCCESSFULLY<br><br>DUPLICATE RECORD</center>
    </body>
    </html>";
}
?>
