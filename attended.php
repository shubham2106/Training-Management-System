<!DOCTYPE html>
<html>

<body>
<style>

table {
    border-collapse: collapse;
    width: 55%;
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
<header>
<h1> LIST OF EMPLOYEES SELECTED FOR TRAINING </h1>
</header>
<?php 


$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$crs_id=$_GET['crs_id'];

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select crs_id,pno,name,desg,id from emp where crs_id=$crs_id";
echo"<center><table border='1'><td><b>Employee ID</b></td><td><b>Phone No.</b></td><td><b>Course ID</b></td><td><b>Name</b></td><td><b>Designation</b></td></center>";
echo "<form action='attended2.php' method='post'>";
echo"<center>";
echo "<br><h3>Select the employees who attended the training:</h3>";
$result=$conn->query($sql);
if($conn->query($sql))
{
  
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";    
       echo"<td><input type=checkbox name=check_list[] value=".$row["id"].">".$row["id"]."</td><td>".$row["pno"]."</td><td>".$row["crs_id"]."</td><td>".$row["name"]."</td><td>".$row["desg"]."</td><br>";
       echo"</tr>";
   }
}
else
{ 
echo "0 results";
}
echo"</table><br><center>";
echo "<input type=submit value=Submit>";
echo "</form>";
echo"</center>";
$conn->close();
?>


</body>
</html>