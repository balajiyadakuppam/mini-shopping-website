<?php
session_start();
if(!isset($_SESSION["id"])){
header("Location: index.php");
include 'navbar.php';
}
else{
 $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
$item=$_GET['item'];
$count=0;
$userid=$_SESSION["id"];
$query="select count from cart where userid='$userid' and item='$item'";
if(mysqli_query($dbc,$query))
{
  $result=mysqli_query($dbc,$query);
  while($row=mysqli_fetch_row($result)){
  $count=$row[0];
  }
  if($count==1)
  {
		$q="delete from cart where userid='$userid' and item='$item'";
		$res=mysqli_query($dbc,$q) or die('error querying database');

  }
	else
	{
		$q="update cart set count=count-1 where userid='$userid' and item='$item'";
		$res=mysqli_query($dbc,$q) or die('error querying database1');
	}
}
header("Location:viewcart.php");
}
?>