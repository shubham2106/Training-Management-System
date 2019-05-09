<!DOCTYPE html>
<html>
<body>
<style>

table{
border-collapse:collapse;
width:50%
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

</style>
<center><header><h1>List of Employees Not Attended the Training</h1></header></center>
<?php

$crs_id=$_GET['crs_id'];
$servername="localhost";
$username="root";
$password="";
$dbname="hrd";
$a=1;
$conn=mysqli_connect("$servername","$username","$password","$dbname");


$a=1;
$sql="select crs_name,date_from,date_to,conductedbyid from trg_calender where crs_id=$crs_id";
$result=$conn->query($sql);

$row=$result->fetch_assoc();

echo"<br><br><center>The following employees has NOT attended the course on - ".$row['crs_name'].",<br>which was conducted from".$row['date_from']." to "
.$row['date_to']." at ".$row['conductedbyid'].".";

$sql1="SELECT emp.pno,emp.name,emp.desg,emp1.year,section_detail.sec_name FROM section_detail,emp inner join emp1 on emp.id=emp1.id WHERE section_detail.sec_code=emp.sec_code and emp1.crs_id=$crs_id and emp1.id not in (select id from attended WHERE crs_id=$crs_id) ";
echo"<table border='1'><tr><td>S.No</td><td>Phone No.</td></td><td>Name</td><td>Designation</td><td>Section</td><td>Year</td></tr>";


if($result1=$conn->query($sql1) )
{
   while($row1=$result1->fetch_assoc())
   {
	   
       echo"<tr>";    
       echo"<br><td>".$a."</td><td>".$row1["pno"]."</td><td>".$row1["name"]."</td><td>".$row1["desg"]."</td><td>".$row1["sec_name"]."</td><td>".$row1["year"]."</td><br>";
       //echo"</tr>";
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