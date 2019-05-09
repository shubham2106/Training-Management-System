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
<h1>SELECT EMPLOYEES TO EDIT COURSE ID</h1>
</header>

<?php
$crs_id=$_GET['crs_id'];

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";


$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select * from emp where crs_id=$crs_id";
$result=$conn->query($sql);
 echo"<table border='1'><td>id</td><td>personal number</td><td>Name</td><td>designation</td><td>sec_code</td><td>date of birth</td><td>course id</td><td>date of joining</td><td>date post</td><td>remark</td><td>extra nomination</td>";
echo "<form action='edit2.php' method='post'>";

if($result->num_rows>0)
{
  
   while($row=$result->fetch_assoc())
   {
       echo"<tr>";
       echo"<br><td><input type=checkbox name=check_list[] value=".$row["id"].">"   
	   .$row["id"]."</td><td>".$row["pno"]."</td><td>".$row["name"]."</td><td>".$row["desg"]."</td><td>".$row["sec_code"]."</td><td>".$row["dob"]."</td><td>".$row["crs_id"]."</td><td>".$row["dt_apt_org"]."</td><td>".$row["dt_post"]."</td><td>".$row["remark"]."</td><td>".$row["extra_nomination"]."</td>";
       echo"</tr>";
   }
}


else
{ 
echo"0 results";
}
echo"</table><br><br>";
echo "<input type=submit value=submit>";
echo "</form>";
$conn->close();
?>
</body>
</html>
