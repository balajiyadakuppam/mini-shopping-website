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
       	  padding-left:40px;
       	  padding-top:20px;
       	 
       }
       .desc{
          padding-left:50px;
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
          margin-left:80px;
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
            <a href="../productdescription.php?item=home/kitchen1"><img src="../images/home/kitchen1.jpeg" alt="kitchen1" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen1">Pigeon Special Combo Pack 2L,3L,5L Pressure Cooker(Aluminium)</a>
            <br/><h3>₹1,599</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen1">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen2"><img src="../images/home/kitchen2.jpeg" alt="kitchen2" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen2">BMS Lifestyle Non-Stick 12 Cavity Appam Patra Side</a>
            <br/><h3>₹399</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen2">Add to Cart</a>
       </div>
    </td>


    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen3"><img src="../images/home/kitchen3.jpeg" alt="kitchen3" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen3">Expresso Pot 2L(Stainless Steel, Induction Bottom)</a>
            <br/><h3>₹450</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen3">Add to Cart</a>
       </div>
    </td>
    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen4"><img src="../images/home/kitchen4.jpeg" alt="kitchen4" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen4">Prestige Marvel Plus Glass, Aluminium Manual Gas Stove</a>
            <br/><h3>₹5,889</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen5"><img src="../images/home/kitchen5.jpeg" alt="kitchen5" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen5">IFB 23 L Convection Microwave Oven(23SC3, Silver)</a>
            <br/><h3>₹8,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen5">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen6"><img src="../images/home/kitchen6.jpeg" alt="kitchen6" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen6">Philips HD4928/01 Induction Cooktop(Black)</a>
            <br/><h3>₹2,313</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen6">Add to Cart</a>
       </div>
    </td>


    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen7"><img src="../images/home/kitchen7.jpeg" alt="kitchen7" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen7">SKY TRENDS Valentine Gifts For Special Person 107 Ceramic Mug</a>
            <br/><h3>₹349</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen7">Add to Cart</a>
       </div>
    </td>

     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/kitchen8"><img src="../images/home/kitchen8.jpeg" alt="kitchen8" width="250px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/kitchen8">Classic Essentials Premium Glory with Permanent Lazer</a>	
            <br/><h3>₹2,849</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/kitchen8">Add to Cart</a>
       </div>
    </td>

  </tr>

</table>


	
</body>
</html>