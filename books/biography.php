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
            <a href="../productdescription.php?item=books/biography1"><img src="../images/books/biography1.jpeg" alt="biography1" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography1">Wings of Fire(English,Tiwari Arun)</a>
            <br/><h3>₹227</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography1">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography2"><img src="../images/books/biography2.jpeg" alt="biography2" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography2">Steve Jobs by Walter Isaacson(English)</a>
            <br/><h3>₹338</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography2">Add to Cart</a>
       </div>
    </td>


     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography3"><img src="../images/books/biography3.jpeg" alt="biography3" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography3">Adolf Hitler(English,Paperback)</a>
            <br/><h3>₹186</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography3">Add to Cart</a>
       </div>
    </td>
       <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography4"><img src="../images/books/biography4.jpeg" alt="biography4" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography4">A Brief History Of Time(Hawking Stephen)</a>
            <br/><h3>₹223</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography5"><img src="../images/books/biography5.jpeg" alt="biography5" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography5">WITHOUT FEAR-PB(Kuldip Nayar)</a>
            <br/><h3>₹186</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography5">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography6"><img src="../images/books/biography6.jpeg" alt="biography6" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography6">Elon Musk(Ashlee Vance)</a>
            <br/><h3>₹370</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography6">Add to Cart</a>
       </div>
    </td>


      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography7"><img src="../images/books/biography7.jpeg" alt="biography7" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography7">Alibaba(English,Clark Duncan)</a>
            <br/><h3>₹373</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography7">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/biography8"><img src="../images/books/biography8.jpeg" alt="biography8" width="200px" height="300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/biography8">An Indian Spy in Pakistan(English)</a>
            <br/><h3>₹178</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/biography8">Add to Cart</a>
       </div>
    </td>
  </tr>

</table>


	
</body>
</html>