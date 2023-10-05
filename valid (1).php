<?php
$id=$_POST['un'];
$ps=$_POST['pw'];
$conn = new mysqli("localhost","id20906647_ganesh","Qq11111!","id20906647_mydb");
if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);
}
$sql="select * from admin where userid='$id' && password='$ps'";
$res=$conn->query($sql);
if($res->num_rows>0)
{
echo "
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
<script>
window.location.href='mark.html';
alert('LOGIN SUCCESSFUL');
</script>
</body>";
}
else
{
echo "
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
<script>
window.location.href='login.html';
alert('LOGIN UNSUCCESSFUL');
</script>
</body>";
}
?>