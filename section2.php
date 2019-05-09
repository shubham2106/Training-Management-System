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
$var=$_POST['course_name'];
// Counting number of checked checkboxes.
$checked_count = count($check);
echo"<br>";


$servername="localhost";
$username="root";
$password="";
$dbname="hrd";


$conn=mysqli_connect("$servername","$username","$password","$dbname");




foreach($check as $selected) 
{
$sql="insert into emp1(crs_id,id,year) values ('$var','$selected','2017-18')";
$sql1="update emp set crs_id='$var' where id=$selected";
$result=$conn->query($sql);
$result1=$conn->query($sql1);
echo"<br>";
}
if($result==TRUE);
{
	echo"<h1><center>Record Successfully Updated</h1></center><br><br>";
}
?>
<a href="hrdmain.php"><center><h1>Go Back to Home Page</h1></center>
</body>
</html>