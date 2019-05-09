<!DOCTYPE html>
<html>
<body>
<style>

table{
border-collapse:collapse;
}
div.container {
    width: 100%;
    border: 1px solid gray;
}
header, footer {
    padding: 2em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}    
#foot{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background: -webkit-linear-gradient(bottom left, skyblue, green);
   color: white;
   text-align: center;
   height:50px;   
}
table {
    border-collapse: collapse;
    width: 25%;
    font-family: verdana;
    font-size: 14px;
}

th, td {
    padding: 15px;
    text-align:center;
}
h1{
    font-size: 1.5 cm;
}
table,td,th{
border:1px solid black;
}

</style>
<header><h1>SELECT COURSE ID </h1></header>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");
echo"<center>";
$sql="select crs_id,crs_name from trg_calender";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo"<table border='1'><td><b>Course ID</b></td><td><b>Course Name</td></b>";
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";
	   echo "<td><a href='intimation1.php?crs_id=".$row['crs_id']."'>".$row['crs_id']."</a></td><td>"
	   .$row["crs_name"]."</td><br>";      
       echo"</tr>";
   }
}
else
{ 
echo"0 results";
}
$conn->close();
echo"</center>";
?>

<div id="foot">
  Copyright VIT University, Vellore, All rights reserved.<br>
  Designed by Sahil Jain, Shubham Mishra and Yash Rachhadia
</div>
</body>
</html>