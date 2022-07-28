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
            <a href="../productdescription.php?item=home/furniture1"><img src="../images/home/furniture1.jpeg" alt="furniture1" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture1">Spacewood Apex Engineered Wood 3 Door Wardrobe</a>
            <br/><h3>₹16,499</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture1">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture2"><img src="../images/home/furniture2.jpeg" alt="furniture2" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture2">Nilkamal Leo Engineered Wood Computer Desk</a>
            <br/><h3>₹1,979</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture2">Add to Cart</a>
       </div>
    </td>


    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture3"><img src="../images/home/furniture3.jpeg" alt="furniture3" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture3">UNIGEAR Portable Foldable Wooden Laptop Table Stand</a>
            <br/><h3>₹1,999</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture3">Add to Cart</a>
       </div>
    </td>
   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture4"><img src="../images/home/furniture4.jpeg" alt="furniture4" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture4">Nilkamal SUTLEJ Solid Wood 4 Seater Dining Set</a>
            <br/><h3>₹14,220</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture5"><img src="../images/home/furniture5.jpeg" alt="furniture5" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture5">Adiko Leatherette Office Arm Chair(Brown)</a>
            <br/><h3>₹5,636</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture5">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture6"><img src="../images/home/furniture6.jpeg" alt="furniture6" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture6"> Nilkamal Beaumont Engineered Wood TV Entertainment Unit</a>
            <br/><h3>₹5,799</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture6">Add to Cart</a>
       </div>
    </td>


   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture7"><img src="../images/home/furniture7.jpeg" alt="furniture7" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture7">Sofame Rio Double Sofa Sectional Bed </a>
            <br/><h3>₹24,616</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture7">Add to Cart</a>
       </div>
    </td>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/furniture8"><img src="../images/home/furniture8.jpeg" alt="furniture8" width="250px" height=250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/furniture8">Delite Kom 24 Inches wide Four Door Double Decker</a>
            <br/><h3>₹7,499</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/furniture8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>