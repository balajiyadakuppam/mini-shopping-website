<?php
session_start();
$username=$_POST['username'];
$id="";
 $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
$password=$_POST['password'];
if($username=="" || $password=="")
{
	header("Location:emptylogin.php");
}
else
{
	$query="select id from regis where username='$username' and password='$password'";
	$result = mysqli_query($dbc, $query);

	if (mysqli_num_rows($result) > 0) 
	{
    
    	while($row = mysqli_fetch_assoc($result)) 
    	{
        	$id=$row["id"];
        	$_SESSION['id']=$id;
        	header("Location:electronics/mobiles.php");
    	}
    	echo $id;	
	} 

  	else{
    echo "Incorrect login details!!!Try again";
    header("Location:incorrectlogin.php");

	}
}



?>