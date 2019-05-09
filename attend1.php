<!DOCTYPE html>
<html>
<body>
<?php

$crs_id=$_GET['crs_id'];
echo "<h2>crs_id:".$crs_id."</h2>";
$servername="localhost";
$username="root";
$password="";
$dbname="hrd";
$a=1;
$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select crs_name,date_from,date_to,conductedbyid from trg_calender where crs_id=$crs_id";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

echo"<br>The following employees has attended the course on - ".$row['crs_name'].",".$row['date_from']." to "
.$row['date_to']." at ".$row['conductedbyid'].".";

$sql1="select attended.id,attended.pno,attended.name,attended.desg,section_detail.sec_name from attended inner join section_detail on attended.sec_code=section_detail.sec_code where crs_id=$crs_id";
echo"<table border='1'><tr><td>S.No</td><td>employee ID</td><td>personnel no.</td></td><td>name</td><td>designation</td><td>section</td></tr>";

//echo "<form action='attended2.php' method='post'>";

//$result1=$conn->query($sql1);
if($result1=$conn->query($sql1))
{
  
   while($row1=$result1->fetch_assoc())
   {
       echo"<tr>";    
       echo"<br><td>".$a."</td><td>".$row1["id"]."</td><td>".$row1["pno"]."</td><td>".$row1["name"]."</td><td>".$row1["desg"]."</td><td>".$row1["sec_name"]."</td><br>";
       echo"</tr>";
	   $a+=1;
   }
}
else
{ 
echo "0 results";
}
echo"</table>";

echo"<br><br><br><br>HOS/HRD"; 
echo"<br>Dated:".date('d/m/y')."<br>";

?>
</body>
</html>