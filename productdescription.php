<?php
session_start();
if(!isset($_SESSION["id"])){
 header("Location: index.php");
 include 'navbar.php';
}
else{
  include 'navbar_logout.php';
  $item=$_GET['item'];
   $dbc=mysqli_connect('localhost','id10909993_mindy811','12345678','id10909993_shopping')
   or die('Error connecting to MySQL server.');
 
  $query="SELECT name,description,price,rating,width,height FROM product where name='$item'";
  $result = mysqli_query($dbc, $query)
  or die('Error querying database.');
  
  while ($row=mysqli_fetch_row($result)){
    $name=$row[0];
    $description=$row[1];
    $price=$row[2];
    $rating=$row[3];
    $width=$row[4];
    $height=$row[5];
    }
    $img="images/".$name.".jpeg";
    $rate="₹".$price;
    
  }  
?>

<html>
  <head>
  	<style>
        img{
        	padding-left:100px;
        	padding-top:60px;
        	float:left;
          
        
        }
        .image{
        	width:50%;
        	float:left;

        }
        .right{
        	float:left;
        	margin-top:70px;
          width:50%;
        }
        #rate{
        	font-size:40px;
        }
        #rating{
        	padding:13px;
        	width:20px;
        	background-color:#00b33c;
          color:#ffffff;
        }
        .link{
        	background-color:#ff9933;
        	text-decoration:none;
        	font-size:35px;
        	color:#ffffff;
        	padding:11px;
        	margin-right:20px;

        }
       
    </style>
  </head>
  <body>
  	  <div class="image">
      <img src="<?php echo $img ?>" alt="<?php echo $name ?>" width="<?php echo $width   ?>" height="<?php echo $height ?>">
      </div>
       <div class="right">
        <h1 id='description'><?php echo $description ?></h1>
        <p id='rating'><?php echo $rating ?></p>
        <p id="rate"><?php echo $rate ?></p>
       

       <a class="link" href="addtocart.php?item=<?php echo $item ?>">Add to Cart</a>
       <a class="link" href="addtowishlist.php?item=<?php echo $item ?>">Add to WishList</a>
     
      </div>


  </body>
</html>