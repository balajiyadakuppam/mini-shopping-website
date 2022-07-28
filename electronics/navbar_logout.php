<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #2E86C1;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.cart
{
  float:right;
}
.logout
{
  float:right;
  
}
</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Electronics 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mobiles.php">Mobiles</a>
      <a href="cameras.php">Cameras</a>
      <a href="laptops.php">Laptops</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Home Appliances
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../home/kitchen.php">Kitchen & Dining</a>
      <a href="../home/furniture.php">Furniture</a>
      <a href="../home/automation.php">Home Automation</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Sports
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../sports/cricket.php">Cricket</a>
      <a href="../sports/badminton.php">Badminton</a>
      <a href="../sports/football.php">Football</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Books
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../books/entrance.php">Entrance Exam</a>
      <a href="../books/biography.php">Biography</a>
      <a href="../books/children.php">Children</a>
    </div>
  </div>

  <div class="logout">
  <div class="dropdown">
     <a class="dropbtn" href="../logout.php">Logout</a>
  </div>
 </div>
   <div class="cart">
  <div class="dropdown">
     <a class="dropbtn" href="../viewcart.php">Show Cart</a>
  </div>
 </div>
</div>



</body>
</html>
