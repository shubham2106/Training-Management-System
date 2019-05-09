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
<center>
<header><h1>CIRCULAR TO PARTICIPANTS</h1></header>
</center>
<p>&emsp;&emsp;&emsp;&emsp;2133/OFILKH/HRD/OFK 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date: 23rd October 2018<?php

$crs_id=$_GET['crs_id'];

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select crs_name,date_from,date_to,conductedbyid from trg_calender where crs_id=$crs_id";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

echo"<br><br><center><b><u><h2>Training on - ".$row['crs_name']." at ".$row['conductedbyid']."</b></u></h2>";


echo"<br><br>This to certify that the following candidates are approved by the<br> authorities to go for the training from ".$row['date_from']." to ".$row['date_to']."<br> at ".$row['conductedbyid'].". These Employees are instructed to  not miss the Training.";

$a=1;
$sql1="select emp.pno,emp.name,emp.desg,section_detail.sec_name from emp inner join section_detail on emp.sec_code=section_detail.sec_code where crs_id=$crs_id";
echo"<table border='1'><td>S.No</td><td>personnel no.</td><td>name</td><td>designation</td><td>section</td>";
echo "<form action='attended2.php' method='post'>";

$result1=$conn->query($sql1);
if($conn->query($sql1))
{
  
   while($row1=$result1->fetch_assoc())
   {
       echo"<tr>";    
       echo"<br><td>".$a."</td><td>".$row1["pno"]."</td><td>".$row1["name"]."</td><td>".$row1["desg"]."</td><td>".$row1["sec_name"]."</td><br>";
       echo"</tr>";
	   $a+=1;
   }
}
else
{ 
echo "0 results";
}
echo"</table>";
echo"<br><br>HOS are requested to ensure that these individuals have attended <br>the course without fail or a cancellation need to be taken from <br>MDO and need to be submitted to HRD earliest.";

echo"<br><br><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Approving Authority";

?>
</body>
</html>