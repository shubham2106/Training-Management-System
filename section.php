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
}
h1{
    font-size: 1.5 cm;
}
table,td,th{
border:1px solid black;
}

</style>
<header><h1>SELECT SECTION OF EMPLOYEE</h1></header>
<center>
<h1>CLICK ON SECTION WHICH YOU WANT TO SEND TO TRAINING</h1>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";
$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select * from section_detail";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo"<table border='1'><td><center><b>Section Code</b></center></td><td><center><b>Section Name</b></center></td>";
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";    
       echo "<br><td><a href='section1.php?sec_code=".$row['sec_code'].
		   "'><center>".$row['sec_code']."</center></a></td><td><center>".$row["sec_name"]."</td></center><br>";      
       echo"</tr>";
   }
}
else
{ 
echo"0 results";
}
$conn->close();
?>
</body>
</html>