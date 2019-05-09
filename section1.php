<!DOCTYPE html>
<html>
<body>
<style>
table{
border-collapse:collapse;
}
table,td,th{
border:1px solid black;}
/*div.container {
    width: 100%;
    border: 1px solid gray;
}*/
header, footer {
    padding: 2em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}    
table {
    border-collapse: collapse;
    width: 100%;
    font-family: verdana;
    font-size: 14px;
}

th, td {
    padding: 15px;
}
h1{
    font-size: 1.5 cm;

}

#myDIV{
width:100%;
padding:10px 0;
textalign:center;
background-color=white;
margin-top:20px;
} 


</style>
<header><h1>SELECT EMPLOYEE FOR TRAINING</h1></header>
<?php
$sec_code=$_GET['sec_code'];

$servername="localhost";
$username="root";
$password="";
$dbname="hrd";

$conn=mysqli_connect("$servername","$username","$password","$dbname");

$sql="select * from emp where sec_code=$sec_code";
$result=$conn->query($sql);
 echo"<table border='1'><td><center>Employee ID</center></td><td><center>Phone Number</center></td><td><center>Name</center></td><td><center>Designation</center></td><td><center>Section Code</center></td><td><center>Date of Birth</center></td><td><center>Course Id</center></td><td><center>Joining Date</center></td><td><center>Date Post</center></td><td><center>Remark</center></td><td><center>Extra Nomination</center></td>";
echo "<form action='section2.php' method='post'>";

if($result->num_rows>0)
{
  
   while($row=$result->fetch_assoc())
   {
       
       echo"<tr><td><input type=checkbox name=check_list[] value=".$row["id"].">"   
	   .$row["id"]."</td><td><a href='previous.php?pno=".$row['pno'].
		   "' target='_blank'><center>".$row['pno']." </center> </a></td><td><center>".$row["name"]."</center></td><td><center>".$row["desg"]."</center></td><td><center>".$row["sec_code"]."</center></td><td><center>".$row["dob"]."</center></td><td><center>".$row["crs_id"]."</center></td><td><center>".$row["dt_apt_org"]."</center></td><td><center>".$row["dt_post"]."</center></td><td><center>".$row["remark"]."</center></td><td><center>".$row["extra_nomination"]."</center></td></tr>";
       ;
   }
}


else
{ 
echo"0 results";
}

$query = "SELECT crs_id, crs_name FROM trg_calender";
echo"<h2><center>Select Area of Training:  ";
echo'<select class="form7" value="course_ID" name="course_name" /></center>';

$result=$conn->query($query);
if($result->num_rows>0)
{
  
   while($row=$result->fetch_assoc())
   {
       echo'<option value='.$row['crs_id'].'name="course_ID">'.$row['crs_id'].'-'.$row['crs_name'].'</option>';
   }
}
echo"</table>";
echo"</select>";
echo "<br><center><input type=submit value=Submit></center><br>";
echo "</form>";
$conn->close();
?>
<script>
function myFunction(){
	var x=document.getElementById("myDIV");
	if(x.style.display=="none"){
		x.style.display="block";
	}
	else{
		x.style.display="none";
	}
}
</script>
</body>
</html>