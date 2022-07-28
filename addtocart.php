<?php
session_start();
if(isset($_SESSION["id"]))
{
    $id=$_SESSION["id"];
    $item=$_GET['item'];
    $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
  $check=0;
  $q="SELECT cartno from status";
  $query="SELECT item,userid FROM cart";
  $result = mysqli_query($dbc, $query)
  or die('Error querying database1.');

  while ($row=mysqli_fetch_row($result)){
       $value=$row[0];
       $userid=$row[1];
       if($item==$value && $userid=$id)
       {
          $q="UPDATE cart SET count=count+1 where item='$item' and userid='$id'";
          $res=mysqli_query($dbc,$q) or die('Error querying database2');
          $check=1;
       }
   
    }   
if($check==0)
{
   $query="INSERT INTO cart(item,userid,count)VALUES('$item','$id','1')";
   $result = mysqli_query($dbc, $query)
   or die('Error querying database3.'); 
}
if($result)
header("Location:viewcart.php");
else
header("Location:incorrectlogin.php");
}
else
{
    header("Location: index.php");
}
?>