<!DOCTYPE html>
<html>
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
</style>

<body>
<table border='1'>
<header>
<h1>INSERT DETAILS OF CALENDER</h1></header>
<center>
<form action="insert1.php" method="post" name="calendar" onSubmit="return(validate());">
<br>
<tr><td>course_name:</td><td><input type="text" name="course_name" value=""><br></td></tr>
<tr><td>From:</td><td><input type="date" name="From" value=""><br></td></tr>
<tr><td>To:</td><td><input type="date" name="To" value=""><br></td></tr>
<tr><td>emp_level:</td><td><input type="text" name="emp_level" value=""><br></td></tr>
<tr><td>course_category:</td><td><input type="text" name="course_category" value=""><br></td></tr>
<tr><td>status:</td><td><input type="text" name="status" value=""><br></td></tr>
<tr><td>conductedby:</td><td><input type="text" name="conductedby" value=""><br></td></tr>
<tr><td>different_venue:</td><td><input type="text" name="different_venue" value=""><br></td></tr>
<tr><td>corecompitency:</td><td><input type="text" name="corecompitency" value=""><br></td></tr>
<tr><td>approvalno:</td><td><input type="text" name="approvalno" value=""><br></td></tr>
<tr><td>appprovaldate:</td><td><input type="date" name="approvaldate" value=""><br></td></tr>
<tr><td>remark:</td><td><input type="text" name="remark" value=""><br></td></tr>
</table>
<br>
<input type="submit" name="submit"><br>

</form>
<script language="javascript">
function validate()
{ 
   if( document.calendar.course_name.value == "" )
   {
     alert( "Please provide your Course Name" );
     document.calendar.course_name.focus() ;
     return false;
   }
   if( document.calendar.From.value == "" )
   {
     alert( "Please provide Start date of this course" );
     document.calendar.From.focus() ;
     return false;
   }
   
   if( document.calendar.To.value == "" )
   {
     alert( "Please provide Closing date for this course" );
     document.calendar.To.focus() ;
     return false;
   }
   if( document.calendar.emp_level.value == "" )
   {
     alert( "Please provide employee level for this course!" );
     document.calendar.emp_level.focus() ;
     return false;
   } 
   if( document.calendar.course_category.value== "" )
   {
     alert( "Please enter course category for this course" );
     document.calendar.course_category.focus() ;
     return false;
   }      
   if( document.calendar.status.value == "" )
   {
     alert( "Please provide Status of this course" );
    document.calendar.status.focus() ;
     return false;
   }   
   if( document.calendar.conductedby.value == "" )
   {
     alert( "Please provide a Conducted By id" );
     document.calendar.conductedby.focus() ;
     return false;
   }
 if (document.calendar.different_venue.value=="") 
 {
     alert("Please enter Different venue")
     document.calendar.emailid.focus() ;
     return false;
 }
alert("your details are submitted");
   return( true );

}
</script>
</body>
</html>