<!DOCTYPE html>
<html>
<body>
<center>

</center>
<style>

table {
    border-collapse: collapse;
    width: 35%;
    font-family: verdana;
    font-size: 14px;
}
table,td,th{
border:1px solid black;
text-align: center;
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
<header><h1> TRAINING CONDUCTING AUTHORITIES </h1></header>
<center>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select * from conducted_by";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo"<table border='1'><td>Venue ID</td><td>Venue Name</td><td>city</td><td>Authority</td>";
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";    
       echo"<br><td>".$row["venue_id"]."</td><td>".$row["venue"]."</td><td>".$row["city"]."</td><td>".$row["authority"]."</td><br>";
       echo"</tr>";
   }
}
else
{ 
echo"0 results";
}
echo"</table><br><br><br>";

$conn->close();

?>
<a href="hrdmain.php"><h1>Go Back to Home Page</h1></a>
</body>
</html>