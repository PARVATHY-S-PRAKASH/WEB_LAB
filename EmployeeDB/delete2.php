<html>
<body bgcolor="wheat">
<form action="main.html" method="post">
<center>
<?php
include_once'conn.php';
$rid=$_POST['id'];
$sql="DELETE FROM emp WHERE Id='$rid'";
if(mysqli_query($conn,$sql)){
echo  " <br>Record deleted successfully";
}
else{
echo  "Error deleting record:".mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<br>
<input type="submit" value="Back to home page" name="submit">
</center>
</body>
</html> 








