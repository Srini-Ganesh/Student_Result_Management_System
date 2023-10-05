<?php
$conn = new mysqli("localhost","id20906647_ganesh","Qq11111!","id20906647_mydb");

if($conn->connect_error)
{
die("connection failed: ".$conn->connect_error);
}
$id=$_POST['dno'];
$sql="select * from marksheet where id='$id'";
$res=$conn->query($sql);
if($row=$res->fetch_assoc())
{
echo" <html>
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
<center><h1>RESULT</h1>
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
</center>
</body>
</html>";
}
else
{
echo "no record found";
}
$conn->close();
?>