<!DOCTYPE html>
<html>
<head>
<style>
a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: purple;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}

p{
    width: 200px;
    border: 1px solid #000000;
}

p.c {
    white-space: pre;
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
h1{
    font-size: 1.5 cm;
}
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}
h2{
    font-color: white;
}
table {
    border-collapse: collapse;
    width: 100%;
    font-family: verdana;
    font-size: 14px;
}

th, td {
    padding: 15px;
    text-align: center;
}
</Style>
</head>
<header><h1>TRAINING CALENDER DETAILS</h1></header>

<body>
<center>
<h2>DATA ENTRY</h2><br>
<button style="height:1cmpx;width:300px"><h2><a href="insert.php">INSERT COURSE</a></h2></button><br>
</center>
<br><br>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select * from trg_calender";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo"<table border='1' ><td><center>Course ID</center></td><td><center>Course Name</center></td><td><center>Start Date</center></td><td><center>End Date</center></td><td><center>Employee Level</center></td><td><center>Course Category</center></td><td><center>Course Status</center></td><td><center>Conducted By</center></td><td><center>Different Venue</center></td><td><center>Core Compitency</center></td><td><center>Approval Number</center></td><td>Approval Date</td><td><center>Remarks</center></td>";
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";    
       echo"<td>".$row["crs_id"]."</td><td>".$row["crs_name"]."</td><td>".$row["date_from"]."</td><td>".$row["date_to"]."</td><td>".$row["emp_level"]."</td><td>".$row["course_category"]."</td><td>".$row["crs_status"]."</td><td>".$row["conductedbyid"]."</td><td>".$row["different_venue"]."</td><td>".$row["corecompitency"]."</td><td>".$row["approvalno"]."</td><td>".$row["approvaldt"]."</td><td>".$row["remark"]."</td>";
       echo"</center></tr>";
   }
}

else
{ 
echo"0 results";
}

echo"</table><br><br><br>";
$conn->close();
?>
</body>
</html>