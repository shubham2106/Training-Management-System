<!DOCTYPE html>
<html>
<body>
<?php 
$username="root";
$servername="localhost";
$password="";
$db="hrd";

$conn=mysqli_connect("$servername","$username","$password","$db");
$val1=$_POST['course_name'];
$val2=$_POST['From'];
$val3=$_POST['To'];
$val4=$_POST['emp_level'];
$val5=$_POST['course_category'];
$val6=$_POST['status'];
$val7=$_POST['conductedby'];
$val8=$_POST['different_venue'];
$val9=$_POST['corecompitency'];
$val10=$_POST['approvalno'];
$val11=$_POST['approvaldate'];
$val12=$_POST['remark'];

echo "<form action='section2.php' method='post'>";
$count=0;
$sql="select * from trg_calender";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   while($row=$result->fetch_assoc())
  {
      $count++;
   }
}
$count+=1;
$sql1="insert into trg_calender(crs_id,crs_name,date_from,date_to,emp_level,course_category,crs_status,conductedbyid,
different_venue,corecompitency,approvalno,approvaldt,remark) values ('$count','$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$val11','$val12')";

$result1=$conn->query($sql1);
echo"<br>";

if($result==TRUE);
{
	echo"record successfully updated<br><br>";
}

?>

</body>
</html>
