<!DOCTYPE html>
<html>
<body>

<style>

table{
border-collapse:collapse;
width:50%
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

table,td,th{
border:1px solid black;
text-align:center;
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
<header><h1>Approval Letter</h1></header>
</center>
<p>&emsp;&emsp;&emsp;&emsp;2133/OFILKH/HRD/OFK 
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date: 23rd October 2018
<?php

$crs_id=$_GET['crs_id'];

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select crs_name,date_from,date_to,conductedbyid from trg_calender where crs_id=$crs_id";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

echo"<br><br><center><p><b><u><h2>Training on - ".$row['crs_name']." at ".$row['conductedbyid'].".<br></b></h2></u></p>";

echo"<br><br>This is to certify that the following candidates need your approval for the training <br> &nbsp;from ".$row['date_from']." to ".$row['date_to']." and herby they are instructed  to attend the training <br> at ".$row['conductedbyid'].".This Training will help these employees to learn many New things. ";
$a=1;
echo "<br><br><b>List of the Employee Selected for the Training:</b>";


$sql1="select emp.pno,emp.name,emp.desg,section_detail.sec_name from emp inner join section_detail on emp.sec_code=section_detail.sec_code where crs_id=$crs_id";
echo"<table border='1'><tr><td>S.No</td><td>Phone no.</td><td>Name</td><td>Designation</td><td>Section</td></tr>";

//echo "<form action='attended2.php' method='post'>";

//$result1=$conn->query($sql1);
if($result1=$conn->query($sql1))
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
echo"<br><br> If approved the above individuals will be intimated to attend the course.";

echo"<br><br> Sign Below and approve the candidates.</center>";

echo"<br><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;AJM/JPD MDO:";
echo"<br><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;JTGM/HGP:";
?>

</body>
</html>