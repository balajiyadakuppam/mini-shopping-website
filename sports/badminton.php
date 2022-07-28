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
            <a href="../productdescription.php?item=sports/badminton1"><img src="../images/sports/badminton1.jpeg" alt="badminton1" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton1">Yonex MAVIS 350-Green Cap Nylon Shuttle(Pack of 6)</a>
            <br/><h3>₹699</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton1">Add to Cart</a>
       </div>
    </td>

     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton2"><img src="../images/sports/badminton2.jpeg" alt="badminton2" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton2">Yonex Gr 201 Multicolor Strung Badminton Racquet</a>
            <br/><h3>₹352</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton2">Add to Cart</a>
       </div>
    </td>

      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton3"><img src="../images/sports/badminton3.jpeg" alt="badminton3" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton3">Yonex GR-303 Red, Blue Strung Badminton Racquet</a>
            <br/><h3>₹849</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton3">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton4"><img src="../images/sports/badminton4.jpeg" alt="badminton4" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton4">Nivia Ranger Combo Racquet - Badminton Kit(Pack of 2)</a>
            <br/><h3>₹426</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton5"><img src="../images/sports/badminton5.jpeg" alt="badminton5" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton5">Roxon Phantom Badminton Racquet Set Of 2 Pieces</a>
            <br/><h3>₹297</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton5">Add to Cart</a>
       </div>
    </td>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton6"><img src="../images/sports/badminton6.jpeg" alt="badminton6" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton6">Yonex SUNR 1815FK Badminton Kit Bag(Blue,Kit Bag)</a>
            <br/><h3>₹487</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton6">Add to Cart</a>
       </div>
    </td>

      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton7"><img src="../images/sports/badminton7.jpeg" alt="badminton7" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton7">Yonex GR-303 Silver, Blue Strung Badminton Racquet</a>
            <br/><h3>₹849</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton7">Add to Cart</a>
       </div>
    </td>
    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=sports/badminton8"><img src="../images/sports/badminton8.jpeg" alt="badminton8" width="200px" height=200px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=sports/badminton8">Silver's Pro 270 Nylon Shuttle-White Set Of 2 Pieces</a>
            <br/><h3>₹368</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=sports/badminton8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>