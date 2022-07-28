
<html>
<head>
	<style>
		h2{
			text-align:center;
		}
		tr{
			margin-bottom:25px;
			font-family:verdana;
			font-size:15px;
			color:white;
		}
		  .image
    	   {
      		width:50%;
      		float:left;
    		}
    		.data
   		 	{
     		width:50%;
      		float:right;
    		}
		td{
			padding-right:20px;
			color:#2a0120;
		}
		.submit{
			float:center;
			color:white;
			background-color:#2a0120;
			padding:10px 10px 10px 10px;
			margin-left:35%;
			margin-top:10px;
			font-size: 15px;
			
		}
		body{
			background-color:#76D7C4;
		}
		h2{
			color:white;
			font-style:italic;
		}
		.div1{
			border:2px solid green;
			border-radius:5px;
		}
		.div2{
			border:2px solid red;
			border-radius:5px;
		}
		#par{
			color:black;
			margin-left:30%;
			font-size:20px;
			
		}
		table{
			margin-left:20%;
		}
		input{
      	font-size:20px; 
    	}
    	.button{

      	font-size: 15px;
    		}
		body{
			background-color:#F5B041;
		}
		a{
			font-size: 20px;
			color:white;
			margin-left: 150px;

		}
		input{
		border:1px solid purple;
		border-radius:5px;
		background-color:#F9806D;
		}
	</style>
</head>
<body>
	<div class="image">
  		<img src="reglogo.png" height="450px" width="700px">
	</div>
	<div class="data">
	<center>
	<h2 style="font-family:verdana">New User Registration</h2>
	<p id="par"></p>
	<form method="POST" action="insert.php">
	<table cellspacing="15">
		
		<tr><td>First Name</td><td><input type="text" id="id1" onblur="fun1()" name="firstname" value=""/></td></tr>
		<tr><td>Last Name</td><td><input type="text" id="id2" onblur="fun2()" name="lastname" value=""/></td></tr>
		<tr><td>UserName</td><td><input type="text" id="id3" onblur="fun3()" name="username"value=""></td></tr>
		<tr><td>Password</td><td><input type="password" id="id4" onblur="fun4()" name="password" value=""> </td></tr>
		<tr><td>Phone Number</td><td><input type="text" name="phoneno" id="id7" onblur="fun7()"></td></tr>
		<tr><td>E-mail</td><td><input type="text" id="id8" name="email" onblur="fun8()"> </td></tr>

	</table>
	<input type="submit" value="Register" name="submit" class="submit" style="border:none; border-radius:5px;"/>
	<br/>
</form>
	<a style="text-decoration:none; color:blue;" href="index.php">Click here to login</a>
</form>
</center>
</div>
<script>
	var username,password;
	function fun1()
	{
		var x=document.getElementById("id1").value;
		var pat=/^[A-Za-z0-9]+$/;
		if(pat.test(x) && x.length>4)
		{
			document.getElementById("id1").className="div1";
			document.getElementById("par").style.display="none";
		}
		else
		{
			document.getElementById("id1").className="div2";
			document.getElementById("par").innerHTML="First name should be greater than 4 characters";
			document.getElementById("par").style.display="inline";
			document.getElementById("par").style.color="red";
			document.getElementById("id1").value="";
		}
	}
	function fun2()
	{
		var x=document.getElementById("id2").value;
		var pat=/^[A-Za-z0-9]+$/;
		if(pat.test(x) && x.length>4)
		{
			document.getElementById("id2").className="div1";
			document.getElementById("par").style.display="none";
		}
		else
		{
			document.getElementById("id2").className="div2";
			document.getElementById("par").innerHTML="Last name should be greater than 4 characters";
			document.getElementById("par").style.display="inline";
			document.getElementById("par").style.color="red";
			document.getElementById("id2").value="";
		}
	}
	function fun3()
	{
		var x=document.getElementById("id3").value;
		var pat=/^[A-Za-z]+[0-9]*$/;
		if(pat.test(x) && x.length>4)
		{
			document.getElementById("id3").className="div1";
			document.getElementById("par").style.display="none";
			username=x;
		}
		else
		{
			document.getElementById("id3").className="div2";
			document.getElementById("par").innerHTML="Username invalid:Username should contain alphabets";
			document.getElementById("par").style.display="inline";
			document.getElementById("par").style.color="red";
			document.getElementById("id3").value="";
		}
	}
	function fun4()
	{
		var x=document.getElementById("id4").value;
		var pat=/^[A-Za-z]*[0-9]*[A-Za-z0-9]*$/;
		if(pat.test(x) && x.length>4)
		{
			document.getElementById("id4").className="div1";
			document.getElementById("par").style.display="none";
			password=x;
			localStorage.setItem("username",username);
			localStorage.setItem("password",password);
		}
		else
		{
			document.getElementById("id4").className="div2";
			document.getElementById("par").innerHTML="Password invalid:Password should contain  more than 4 characters";
			document.getElementById("par").style.display="inline";
			document.getElementById("par").style.color="red";
			document.getElementById("id4").value="";
		}
	}
	
	function fun7()
	{
		var x=document.getElementById("id7").value;
		var pat=/^[0-9]{10}$/;
		if(pat.test(x) && x.length==10)
		{
			document.getElementById("id7").className="div1";
			document.getElementById("par").style.display="none";
		}
		else
		{
			document.getElementById("id7").className="div2";
			document.getElementById("par").innerHTML="Phone number invalid:Phone number should be numbers and length=10";
			document.getElementById("par").style.display="inline";
			document.getElementById("par").style.color="red";
			document.getElementById("id7").value="";
		}
	}
	function fun8()
	{
		var x=document.getElementById("id8").value;
		var pat=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(pat.test(x))
		{
			document.getElementById("id8").className="div1";
			document.getElementById("par").style.display="none";
		}
		else
		{
			document.getElementById("id8").className="div2";
			document.getElementById("par").innerHTML="Email invalid";
			document.getElementById("par").style.display="inline";
			document.getElementById("par").style.color="red";
			document.getElementById("id8").value="";
		}
	}
</script>	
	
</body>
</html>