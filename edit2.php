<!DOCTYPE html>
<html>
<body>

<?php
//if(isset($_POST['submit'])){
$check=$_POST['check_list'] ;
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
$sql="update emp set crs_id='NULL' where id=$selected";
$sql1="delete from emp1 where id=$selected";
$result=$conn->query($sql);
$result1=$conn->query($sql1);
echo"<br>";
}
if($result==TRUE);
{
	echo"record successfully updated<br><br>";
}
if($result1==TRUE);
{
	echo"<br>";
}
?>
<a href="hrd.php">click here to go to main menu</a>
</body>
</html>