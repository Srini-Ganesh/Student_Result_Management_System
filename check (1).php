<?php
$name = $_POST['nam'];
$id = $_POST['dno'];
$language = $_POST['lan'];
$english = $_POST['eng'];
$allied = $_POST['ald'];
$major1 = $_POST['m1'];
$major2 = $_POST['m2'];
$lab1 = $_POST['l1'];
$lab2 = $_POST['l2'];
$ge = $_POST['ge'];
$se = $_POST['se'];

$conn = new mysqli("localhost","id20906647_ganesh","Qq11111!","id20906647_mydb");
if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);
}
$sql="select * from marksheet where id='$id'";
$res=$conn->query($sql);
$upd="update marksheet set name='$name',language=$language,english=$english,allied=$allied,major1=$major1,major2=$major2,lab1=$lab1,lab2=$lab2,general=$ge,elective=$se where id='$id'";
$ins="insert into marksheet  values('$name','$id',$language,$english,$allied,$major1,$major2,$lab1,$lab2,$ge,$se)";

if($res->num_rows>0) 
{
$conn->query($upd);
$updres=$conn->query($sql);
if($row=$updres->fetch_assoc())
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
<br>
<br>
<br>
<center>RECORD UPDATED SUCCESSFULLY<br><br>
<table border=1 >
<tr><th>$row[name]</th><th>$row[id]</th></tr>
<tr><td>LANGUAGE</td><td>$row[language]</td></tr>
<tr><td>ENGLISH</td><td>$row[english]</td></tr>
<tr><td>ALLIED</td><td>$row[allied]</td></tr>
<tr><td>MAJOR 1</td><td>$row[major1]</td></tr>
<tr><td>MAJOR 2</td><td>$row[major2]</td></tr>
<tr><td>LAB 1</td><td>$row[lab1]</td></tr>
<tr><td>LAB 2</td><td>$row[lab2]</td></tr>
<tr><td>GENERAL ELECTIVE</td><td>$row[general]</td></tr>
<tr><td>SPECIFIC ELECTIVE</td><td>$row[elective]</td></tr>
</table>
<br><br>
<a href=dbselect.php><button class='submit_button'>View All Student Records </button></a>
</center>
</body>
</html>";
}
    
}
else if($res->num_rows==0) 
{
$conn->query($ins);
$insres=$conn->query($sql);
if($row=$insres->fetch_assoc())
{
echo "<html>
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
<br>
<br>
<br>
<center>RECORD INSERTED SUCCESSFULLY<br><br>
<table border=1 >
<tr><th>$row[name]</th><th>$row[id]</th></tr>
<tr><td>LANGUAGE</td><td>$row[language]</td></tr>
<tr><td>ENGLISH</td><td>$row[english]</td></tr>
<tr><td>ALLIED</td><td>$row[allied]</td></tr>
<tr><td>MAJOR 1</td><td>$row[major1]</td></tr>
<tr><td>MAJOR 2</td><td>$row[major2]</td></tr>
<tr><td>LAB 1</td><td>$row[lab1]</td></tr>
<tr><td>LAB 2</td><td>$row[lab2]</td></tr>
<tr><td>GENERAL ELECTIVE</td><td>$row[general]</td></tr>
<tr><td>SPECIFIC ELECTIVE</td><td>$row[elective]</td></tr>
</table>
<br><br>
<a href=dbselect.php><button class='submit_button'>View All Student Records </button></a>
</center>
</body>
</html>";
}
}
$conn->close();
?>