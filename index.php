
<!DOCTYPE html>
<html>
<head>
  <style>
    .data
    {
	border-radius:15px;
      position:absolute;
	  top:20%;
	  left:70%;
	  padding:20px;
	  background-color:#F1948A;
    }
	input[type=text]{
	border:none;
	border-bottom:2px solid purple;
	background-color:#F1948A;
	}
	input[type=password]{
	border:none;
	border-bottom:2px solid purple;
	background-color:#F1948A;
	}
	
    body
    {
      height:100%;
	  overflow:hidden;
    }
    h3{
      font-size: 30px;
    }
    label{
      font-size: 18px;
    }
    input{
      font-size:20px; 
      padding:5px;
    }
    .button{
		margin-right:15px;
      font-size: 12px;
	  font-family:verdana;
	  background-color:#2471A3;
	  border:none;
	  border-radius:5px;
    }
	.button:hover{
	background-color:green;
	}
    a{
      font-size: 20px;
      color:black;
    }
    label{
	font-family:verdana;
	}
	.image{
	width:100%;
	height:150%;
	position:absolute;
	top:0px;
	left:0px;
	}
  </style>
</head>
<body>
<div class="image">
<img src="store.jpg" height="680px" width="100%">
</div>
<div class="data">


<center>
  <form action="check.php" method="POST">
  <img src="signup.svg" width="60px" height="90px">
    <h3 style="color:#2471A3">LOGIN</h3><br>
  <label>Username:</label>
  <input type="text" id="id1" name="username" onblur="fun1()"/><br><br>
  <label>Password:</label>
  <input type="password" id="id2" name="password" onblur="fun2()"/><br><br>

  <input class="button" type="submit" value="LOGIN"/>
  <input class="button" type="reset" value="RESET"/><br><br><br>
  </form>
  
  <a href="regis.php" style="text-decoration:none; font-family:arial" >Create New Account</a>
</center>
</div>

</body>
</html>
