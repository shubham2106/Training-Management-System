<!DOCTYPE html>
<html>
<body>
<style>

table{
border-collapse:collapse;
}

table,td,th{
border:1px solid black;
}
table {
    border-collapse: collapse;
    width: 25%;
    font-family: verdana;
    font-size: 14px;
}

th, td {
    padding: 15px;
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


</style>
<header>
<h1>SELECT COURSE ID TO EDIT DATABASE</h1>
</header>
<center>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select crs_id,crs_name from trg_calender";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo"<table border='1'><td>Course ID</td><td>Course Name</td>";
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";
	   echo "<td><a href='edit1.php?crs_id=".$row['crs_id']."'>".$row['crs_id']."</a></td><td>"
	   .$row["crs_name"]."</td><br>";      
       echo"</tr>";
   }
}
else
{ 
echo"0 results";
}
$conn->close();
?>
</center>

</body>
</html>