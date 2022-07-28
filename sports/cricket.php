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
            <a href="../productdescription.php?item=sports/cricket1"><img src="../images/sports/cricket1.jpeg" alt="cricket1" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket1">Kookaburra kahuna poplar willow bat Poplar Willow Cricket Bat</a>
            <br/><h3>₹292</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket1">Add to Cart</a>
       </div>
    </td>

     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket2"><img src="../images/sports/cricket2.jpeg" alt="cricket2" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket2">MRF MRF-200 Poplar Willow Cricket Bat(6, 1.2 kg)</a>
            <br/><h3>₹285</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket2">Add to Cart</a>
       </div>
    </td>


     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket3"><img src="../images/sports/cricket3.jpeg" alt="cricket3" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket3">Suntop Camo Platinum Cricket Backpack Bag (Military Print)</a>
            <br/><h3>₹1,450</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket3">Add to Cart</a>
       </div>
    </td>
        <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket4"><img src="../images/sports/cricket4.jpeg" alt="cricket4" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket4">Kookaburra Kahuna Prodigy 100 Kashmir Willow Cricket Bat</a>
            <br/><h3>₹749</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket5"><img src="../images/sports/cricket5.jpeg" alt="cricket5" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket5">Yonker STEP ONE Cricket Helmet(Blue)</a>
            <br/><h3>₹990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket5">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket6"><img src="../images/sports/cricket6.jpeg" alt="cricket6" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket6">CLUB 2 Part Leather Cricket Leather Ball</a>
            <br/><h3>₹155</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket6">Add to Cart</a>
       </div>
    </td>


     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket7"><img src="../images/sports/cricket7.jpeg" alt="cricket7" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket7">JetFire Green Combo Wicket Keeping Gloves</a>
            <br/><h3>₹599</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket7">Add to Cart</a>
       </div>
    </td>
       <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/cricket8"><img src="../images/sports/cricket8.jpeg" alt="cricket8" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/cricket8">Redmax Ceat Popular Popular Cricket Bat</a>
            <br/><h3>₹450</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/cricket8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>