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
       	  padding-top:30px;
       	 
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
            <a href="../productdescription.php?item=electronics/laptop1"><img src="../images/electronics/laptop1.jpeg" alt="laptop1" width="300px" height="200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop1">MSI GS Core i7 8th Gen-(16 GB/512 GB SSD)</a>
            <br/><h3>₹1,69,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop1">Add to Cart</a>
       </div>
    </td>

    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop2"><img src="../images/electronics/laptop2.jpeg" alt="laptop2" width="300px" height="200px"/>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop2">Asus ROG Strix Edition Core i7 7th Gen-(16 GB/1 TB HDD)</a>
            <br/><h3>₹1,39,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop2">Add to Cart</a>
       </div>
    </td>


    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop3"><img src="../images/electronics/laptop3.jpeg" alt="laptop3" width="300px" height="200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop3">Acer Predator Helios 300 Core i5 7th Gen-(8 GB/1 TB HDD)</a>
            <br/><h3>₹76,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop3">Add to Cart</a>
       </div>
    </td>

     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop4"><img src="../images/electronics/laptop4.jpeg" alt="laptop4" width="300px" height="200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop4">Lenovo Ideapad 330S Core i7 8th Gen-(8 GB/1 TB HDD/Windows)</a>
            <br/><h3>₹71,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop5"><img src="../images/electronics/laptop5.jpeg" alt="laptop5" width="300px" height="200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop5">Microsoft Surface Book 2 Core i7 8th Gen-(8 GB/256 GB SSD)</a>
            <br/><h3>₹1,85,999</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop5">Add to Cart</a>
       </div>
    </td>

    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop6"><img src="../images/electronics/laptop6.jpeg" alt="laptop6" width="300px" height="200px"/>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop6">Apple Macbook Pro Core i7 8th Gen-(16 GB/512 GB SSD)</a>
            <br/><h3>₹2,59,900</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop6">Add to Cart</a>
       </div>
    </td>


    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop7"><img src="../images/electronics/laptop7.jpeg" alt="laptop7" width="300px" height="200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop7">Dell Inspiron 13 7000 Core i7 8th Gen-(16 GB/512 GB SSD)</a>
            <br/><h3>₹94,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop7">Add to Cart</a>
       </div>
    </td>

     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/laptop8"><img src="../images/electronics/laptop8.jpeg" alt="laptop8" width="300px" height="200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/laptop8">HP Core i7 7th Gen-(16 GB/2 TB HDD/Windows 10 Home)</a>
            <br/><h3>₹89,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/laptop8">Add to Cart</a>
       </div>
    </td>

  </tr>

</table>


	
</body>
</html>