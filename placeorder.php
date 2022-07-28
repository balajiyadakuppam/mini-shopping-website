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
	$userid=$_SESSION["id"];
	include 'navbar_logout.php';
	$totalmoney=$_GET['money'];
	$userid=$_SESSION["id"];
	echo "<h1>Total Money to Pay:<label>$totalmoney</label></h1>";
	$query="select firstname,lastname,phoneno,email from regis where id='$userid'";
	$result = mysqli_query($dbc, $query);

	if (mysqli_num_rows($result) > 0) 
	{
    
    	while($row = mysqli_fetch_assoc($result)) 
    	{
        	$firstname=$row["firstname"];
        	$lastname=$row["lastname"];
        	$phoneno=$row["phoneno"];
        	$email=$row["email"];
        	echo "<h2 id='heading'>Your details:</h2>";
        	echo "<table>";
        	echo "<tr>";
        	echo "<td><h3>First Name:<label>$firstname</label></h3></td>";
        	echo "<td><h3>Last Name:<label>$lastname</label></h3></td>";
        	echo "</tr>";
        	echo "<tr>";
        	echo "<td><h3>Phone No:<label>$phoneno</label></h3></td>";
        	echo "<td><h3>Email:<label>$email</label></h3></td>";
        	echo "</tr>";
        	echo "</table>";
    	}
    		
	} 
}
?>
<html>
<head>
	<style>
		label{
			color:blue;
		}
		h1{
			text-align: center;
		}
		#heading{
			margin-left: 30%;
			color:#7D3C98;
		}
		td{
			padding-right: 70px;
		}
		table{
			
			margin-left: 30%;
		}
		#placeorder{
			text-align: center;
			background-color: #FF5733;
			color:white;
			font-size: 25px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 4px;
			padding-bottom: 4px;
			margin-left: 45%;
		}
	</style>
</head>	
<body>
	<form method="POST" action="final.php">
	<table cellspacing="15">
		
		<tr><td><h3>Address:</h3></td><td><textarea type="text" id="id1" cols="25" rows="4" name="address" value=""></textarea></td></tr>
		<tr><td><h3>Debit-card No:</h3></td><td><input type="text" id="id2" name="debitcard" value=""/></td></tr>
		<tr><td><h3>CVV No:</h3></td><td><input type="text" id="id3" name="ccv"value=""></td></tr>
	</table>
	<input type="submit" id="placeorder" value="Place order" name="submit" class="submit"/>
	<br/>
</form>
</body>
</html>