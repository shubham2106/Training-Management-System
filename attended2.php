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

</style>
<?php
//if(isset($_POST['submit'])){
$check=$_POST['check_list'] ;

$checked_count = count($check);

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");


echo $checked_count;
foreach($check as $selected) 
{
	$sql="select emp.crs_id,emp.name,emp.pno,emp.desg,emp.sec_code,trg_calender.course_category from emp inner join trg_calender on emp.crs_id=trg_calender.crs_id where emp.id=$selected";
	$result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $sql1="insert into attended(crs_id,id,name,desg,pno,sec_code,course_category) values('".$row['crs_id']."','$selected','".$row['name']."','".$row['desg']."','".$row['pno']."','".$row['sec_code']."','".$row['course_category']."')";
	$result=$conn->query($sql1);
	if($result==TRUE);
{
	echo"<h1><center>Record Successfully Updated</h1></center><br><br>";
}
}

?>
<a href="hrdmain.php"><center><h1>Go Back to Home Page</h1></a></center>
</body>
</html>