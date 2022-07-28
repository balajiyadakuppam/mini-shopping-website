<?php
session_start();
if(!isset($_SESSION["id"])){
 header("Location: index.php");
}
else
{
   $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
	$userid=$_SESSION["id"];
	$address=$_POST["address"];
	$debitcard=$_POST["debitcard"];
	$ccv=$_POST["ccv"];
	if($address==""||$debitcard==""||$ccv=="")
	{
		header("Location:emptyregis.php");
	}
	else
	{

	$query="insert into shipping(userid,address,debitcard,ccv)VALUES('$userid','$address','$debitcard','$ccv')";
   	        header("Location:successfulshipping.php");
	
	}
}
?>