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
            <a href="../productdescription.php?item=books/entrance1"><img src="../images/books/entrance1.jpeg" alt="entrance1" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance1">Fundamentals of Database System Seventh Edition</a>
            <br/><h3>₹711</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance1">Add to Cart</a>
       </div>
    </td>

    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance2"><img src="../images/books/entrance2.jpeg" alt="entrance2" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance2">Comprehensive Guide to SBI Bank PO Preliminary exam</a>
            <br/><h3>₹450</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance2">Add to Cart</a>
       </div>
    </td>


    <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance3"><img src="../images/books/entrance3.jpeg" alt="entrance3" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance3">Basic Science & Engineering for Indian Railways(RRB)</a>
            <br/><h3>₹88</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance3">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance4"><img src="../images/books/entrance4.jpeg" alt="entrance4" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance4">IAS Mains Chapterwise Solved Papers General Studies</a>
            <br/><h3>₹256</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance5"><img src="../images/books/entrance5.jpeg" alt="entrance5" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance5">Chapterwise Solutions Physics JEE Main 2019</a>
            <br/><h3>₹110</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance5">Add to Cart</a>
       </div>
    </td>

     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance6"><img src="../images/books/entrance6.jpeg" alt="entrance6" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance6">Banking Interviews(English)</a>
            <br/><h3>₹73</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance6">Add to Cart</a>
       </div>
    </td>


     <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance7"><img src="../images/books/entrance7.jpeg" alt="entrance7" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance7">General Science for Competitive Exams</a>
            <br/><h3>₹126</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance7">Add to Cart</a>
       </div>
    </td>
      <td> 
	     <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=books/entrance8"><img src="../images/books/entrance8.jpeg" alt="entrance8" width="200px" height=300px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=books/entrance8">Magbook Indian Polity&Governance 2019</a>
            <br/><h3>₹168</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=books/entrance8">Add to Cart</a>
       </div>
    </td>	
  </tr>

</table>


	
</body>
</html>