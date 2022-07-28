<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$username=$_POST["username"];
$password=$_POST["password"];
$phoneno=$_POST["phoneno"];
$email=$_POST["email"];
 $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
if($firstname==""||$lastname==""||$username==""||$password==""||$phoneno==""||$email=="")
{
	header("Location:emptyregis.php");
}
else
{
$query="insert into regis(firstname,lastname,username,password,phoneno,email)VALUES('$firstname','$lastname','$username','$password','$phoneno','$email')";
  if(mysqli_query($dbc, $query)){
    header("Location:successfulregis.php");
    
}
  else{
    header("Location:sorryregis.php");
}
}
?>