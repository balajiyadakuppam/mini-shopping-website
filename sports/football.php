<?php
session_start();
if(!isset($_SESSION["id"])){
 header("Location: index.php");
 include 'navbar.php';
}
else
{
  include 'navbar_logout.php';
}
?>

<html>
<head>
	<style>
       .img{
       	  padding-left:65px;
       	  padding-top:30px;
       	 
       }
       .desc{
          padding-left:65px;
          width:200px;
          text-align:center;
         

        }	
        h3{
          text-align:center;
          }

         .addtocart{
          color:white;
          width:350px;
          background-color:#ff6600;
          font-size:20px;
          margin-left:100px;
          padding-left:25px;
          padding-right:25px;
          padding-top:10px;
          padding-bottom:10px;
          text-decoration:none;
         }
         .para:hover{
         	color:#3399ff;
         	font-size:18px;
         }
         .para{
         	font-size:18px;
         	color:#000000;
  

         }
         a{
         	text-decoration:none;
         }
         .seperate{
           width:300px;
           height:600px;
           

         }
      
    </style> 
</head>
<body>
  <table>
    <tr>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football1"><img src="../images/sports/football1.jpeg" alt="football1" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football1">RAHICO CLUB Multicolor Brazuca Football-Size: 5</a>
            <br/><h3>₹398</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football1">Add to Cart</a>
       </div>
    </td>

     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football2"><img src="../images/sports/football2.jpeg" alt="football2" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football2">Nivia Storm Football-Size:5(Pack of 1, Multicolor)</a>
            <br/><h3>₹349</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football2">Add to Cart</a>
       </div>
    </td>


      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football3"><img src="../images/sports/football3.jpeg" alt="football3" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football3">Sniper RUSSIA FIFA World cup 2018 Football-Size:5</a>
            <br/><h3>₹399</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football3">Add to Cart</a>
       </div>
    </td>
        <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football4"><img src="../images/sports/football4.jpeg" alt="football4" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football4">Nivia Classic with Sleeve Football Shin Guard(M, Black)</a>
            <br/><h3>₹261</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football5"><img src="../images/sports/football5.jpeg" alt="football5" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football5">Furious3D UEFA Star Champion League Football-Size:5</a>
            <br/><h3>₹381</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football5">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football6"><img src="../images/sports/football6.jpeg" alt="football6" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football6">Nivia Carbonite Web Goalkeeping Gloves(S,Multicolor)</a>
            <br/><h3>₹285</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football6">Add to Cart</a>
       </div>
    </td>


      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football7"><img src="../images/sports/football7.jpeg" alt="football7" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football7">ADIDAS Orange Starlancer V Football-Size:5</a>
            <br/><h3>₹1,348</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football7">Add to Cart</a>
       </div>
    </td>
       <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/football8"><img src="../images/sports/football8.jpeg" alt="football8" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/football8">Nivia Torrido Football-Size:5(Pack of 1,White,Multicolor)</a>
            <br/><h3>₹766</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/football8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>