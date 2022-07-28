<?php
session_start();
if(!isset($_SESSION["id"])){
 header("Location: index.php");
 include 'navbar.php';
}
else
{
 $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
	$div=2;
	$check=0;
	$totalamount=0;
	$userid=$_SESSION["id"];
	include 'navbar_logout.php';
	$query="select item,count from cart where userid='$userid'";
	$result=mysqli_query($dbc,$query) or die('Error querying database1');
	echo "<table cellspacing='15'>";
	echo "<th width='20%'>Image</th>";
	echo "<th width='40%'>Description</th>";
	echo "<th width='10%'>Price</th>";
	echo "<th width='10%'>Quantity</th>";
	echo "<th width='20%'>Status</th>";	
	 while ($row=mysqli_fetch_row($result)){
       $item="images/".$row[0].".jpeg";
       $count=$row[1];
       $q="select description,price,width,height from product where name='$row[0]'";
       $res=mysqli_query($dbc,$q) or die('Error querying database1');
       while($r=mysqli_fetch_row($res))
       {
       		$description=$r[0];
       		$price=$r[1];
       		$width=$r[2];
       		$height=$r[3];
       		$width=$width;
       		$height=$height;
       		$totalamount=$totalamount+($count*$price);
       		echo "<tr>";
       		echo "<td width='20%'><img src='$item' width='150px' height='200px'></td>";
       		echo "<td width='40%' align='center'><h4>$description</h4></td>";
       		echo "<td width='10%' align='center'><h4>$price</h4></td>";
       		echo "<td width='10%' align='center'><h4>$count</h4></td>";
       		echo "<td width='20%' align='center'><h4><a href='removeitem.php?item=$row[0]'>Remove</a></h4></td>";
       		echo "</tr>";
       }
       echo "<br/>";
       $check=1;
 		
       
  
    }
    echo "</table>";
  if($check==1)
  {
  	//echo $totalamount;
  	echo "<div class='placeorder'>";
  	echo "<div class='left'>";
  		echo "<h3>Total Amount</h3>";
  		echo "<h2>RS.$totalamount</h2>";
  	echo "</div>";
  	echo "<div class='right'>";
  		echo "<a id='placeorder' href='placeorder.php?money=$totalamount'>Placeorder</a>";
  	echo "</div>";
  	echo "</div>";
  }   
  if($check==0)
  {
   	echo "<h3 id='msg'>No items in your cart<br>Go to Shopping</h3>"; 
  }


}
?>
<html>
<head>
	<style>
		img{
			padding-left: 40px;
		}
		#msg{

			color:#25BDA6;
			margin-left: 15%;
			font-size: 30px;
		}
		th{
			color:blue;
			margin-bottom: 30px;
		}
		tr
		{
			margin-bottom: 10px;
			margin-top: 10px; 
			border: 2px solid grey;
		}	
		table {
  			border-collapse: collapse;
  			width:80%;
  			margin-left: 10%;
  			margin-right: 10%;
			}

		table, th, td {
			  border: 1px solid grey;
			}
			a{
				text-decoration: none;
				color:#EE5C13;
			}
		.placeorder{

			float:right;
			width:30%;
			margin-top: 30px;
			border: 2px solid grey;
			margin-bottom: 30px;
		}
		.left{
			float:left;
			width:40%;
			margin-left: 8%;
		}
		.right{
			float:left;
			width:20%;
			margin-top: 10%;
			
		}
		#placeorder{
			text-decoration: none;
			font-size: 25px;
			color:white;
			background-color: #FF5733;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 4px;
			padding-bottom: 4px;
		}
		</style>
</head>
<body>
	
</body>
</html>