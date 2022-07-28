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
       	  padding-left:85px;
       	  padding-top:30px;
       	 
       }
       .desc{
          padding-left:85px;
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
          margin-left:110px;
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
            <a href="../productdescription.php?item=electronics/mobile1"><img src="../images/electronics/mobile1.jpeg" alt="mobile1" width="200px" height="400px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile1">Apple iPhone XR (Black, 128 GB)</a>
            <br/><h3>₹81,900</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile1">Add to Cart</a>
       </div>
    </td>

    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile2"><img src="../images/electronics/mobile2.jpeg" alt="mobile2" width="200px" height="400px"/>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile2">Redmi Note 6 Pro (Black, 64 GB)</a>
            <br/><h3>₹13,999</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile2">Add to Cart</a>
       </div>
    </td>


    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile3"><img src="../images/electronics/mobile3.jpeg" alt="mobile3" width="200px" height="400px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile3">Vivo Y95 (Nebula Purple, 64 GB)</a>
            <br/><h3>₹15,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile3">Add to Cart</a>
       </div>
    </td>

     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile4"><img src="../images/electronics/mobile4.jpeg" alt="mobile4" width="200px" height="400px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile4">Samsung Galaxy J6 Plus (Red, 64 GB)</a>
            <br/><h3>₹12,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile5"><img src="../images/electronics/mobile5.jpeg" alt="mobile5" width="200px" height="400px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile5">Mi A2 (Red, 64 GB)  (4 GB RAM)</a>
            <br/><h3>₹14,389</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile5">Add to Cart</a>
       </div>
    </td>

    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile6"><img src="../images/electronics/mobile6.jpeg" alt="mobile6" width="200px" height="400px"/>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile6">Realme 2 Pro (Black Sea, 64 GB)</a>
            <br/><h3>₹15,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile6">Add to Cart</a>
       </div>
    </td>


    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile7"><img src="../images/electronics/mobile7.jpeg" alt="mobile7" width="200px" height="400px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile7">OPPO F5 Youth (Gold, 32 GB)</a>
            <br/><h3>₹14,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile7">Add to Cart</a>
       </div>
    </td>

     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/mobile8"><img src="../images/electronics/mobile8.jpeg" alt="mobile8" width="200px" height="400px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile8">Honor 9N (Midnight Black, 32 GB)</a>
            <br/><h3>₹9,999</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/mobile8">Add to Cart</a>
       </div>
    </td>

  </tr>

</table>


	
</body>
</html>