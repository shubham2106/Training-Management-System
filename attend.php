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
table {
    border-collapse: collapse;
    width: 25%;
    font-family: verdana;
    font-size: 14px;
}

th, td {
    padding: 15px;
    text-align: center;
}
h1{
    font-size: 1.5 cm;
}
table,td,th{
border:1px solid black;
}

</style>
<center>
<?php
echo"<header><h1>ENTER THE COURSE ID TO FETCH THE DETAILS OF ATTENDANCE LIST.</h1></header>";
$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select crs_id,crs_name from trg_calender";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo"<table border='1'><td><b>Course ID</b></td><td><b>Course Name</b></td>";
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";
	   echo "<td><a href='attend1.php?crs_id=".$row['crs_id']."'>".$row['crs_id']."</a></td><td>"
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