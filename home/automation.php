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
            <a href="../productdescription.php?item=home/automation1"><img src="../images/home/automation1.jpeg" alt="automation1" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation1">Google Home(White)(Best Selling)</a>
            <br/><h3>₹9,999</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation1">Add to Cart</a>
       </div>
    </td>

   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation2"><img src="../images/home/automation2.jpeg" alt="automation2" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation2">Xiaomi Mi 360 1080p Smart Security Camera</a>
            <br/><h3>₹2,699</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation2">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation3"><img src="../images/home/automation3.jpeg" alt="automation3" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation3">Google Home Mini(Chalk)</a>
            <br/><h3>₹4,499</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation3">Add to Cart</a>
       </div>
    </td>
   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation4"><img src="../images/home/automation4.jpeg" alt="automation4" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation4">Panasonic Security Camera(1 Channel)</a>
            <br/><h3>₹1,50,000</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation5"><img src="../images/home/automation5.jpeg" alt="automation5" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation5">yale YDM3212 Smart Door Lock</a>
            <br/><h3>₹24,499</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation5">Add to Cart</a>
       </div>
    </td>

   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation6"><img src="../images/home/automation6.jpeg" alt="automation6" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation6">Godrej Solus ST 7 VDP with Free Installation</a>
            <br/><h3>₹14,997</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation6">Add to Cart</a>
       </div>
    </td>

   <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation7"><img src="../images/home/automation7.jpeg" alt="automation7" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation7">Emotix Miko - Companion Robot</a>
            <br/><h3>₹15,000</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation7">Add to Cart</a>
       </div>
    </td>
    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=home/automation8"><img src="../images/home/automation8.jpeg" alt="automation8" width="250px" height=350px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=home/automation8">Smiledrive Freekee Bluetooth Smart lock</a>
            <br/><h3>₹2,599</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=home/automation8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>