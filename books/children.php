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
            <a href="../productdescription.php?item=books/children1"><img src="../images/books/children1.jpeg" alt="children1" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children1">Mahabharata(English, Hardcover, unknown)	</a>
            <br/><h3>₹1,594</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children1">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children2"><img src="../images/books/children2.jpeg" alt="children2" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children2">Best Of Tinkle:10 Tinkle Digests</a>
            <br/><h3>₹466</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children2">Add to Cart</a>
       </div>
    </td>


     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children3"><img src="../images/books/children3.jpeg" alt="children3" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children3">The Subtle Knife(Philip Pullman)</a>
            <br/><h3>₹329</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children3">Add to Cart</a>
       </div>
    </td>
       <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children4"><img src="../images/books/children4.jpeg" alt="children4" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children4">The Evertree(English,Lu Marie)</a>
            <br/><h3>₹298</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children5"><img src="../images/books/children5.jpeg" alt="children5" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children5">Secret Seven 15 copy box set INDIA</a>
            <br/><h3>₹1,313</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children5">Add to Cart</a>
       </div>
    </td>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children6"><img src="../images/books/children6.jpeg" alt="children6" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children6">POEMS FOR YOUNG CHILDREN(English)</a>
            <br/><h3>₹378</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children6">Add to Cart</a>
       </div>
    </td>


     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children7"><img src="../images/books/children7.jpeg" alt="children7" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children7	">Valmiki's Ramayana(English,Hardcover)</a>
            <br/><h3>₹520</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children7">Add to Cart</a>
       </div>
    </td>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/children8"><img src="../images/books/children8.jpeg" alt="children8" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/children8">Paper Folding Part 1(English,Paperback,Gurinder)</a>
            <br/><h3>₹116</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/children8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>