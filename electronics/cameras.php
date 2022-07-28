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
            <a href="../productdescription.php?item=electronics/camera1"><img src="../images/electronics/camera1.jpeg" alt="camera1" width="250px" height="250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera1">Canon EOS 3000D DSLR Camera Single Kit with 18-55 lens (16 GB)</a>
            <br/><h3>₹21,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera1">Add to Cart</a>
       </div>
    </td>

    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera2"><img src="../images/electronics/camera2.jpeg" alt="camera2" width="250px" height="250px"/>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera2">Nikon D5300 DSLR Camera Body with Single Lens:(16 GB)</a>
            <br/><h3>₹35,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera2">Add to Cart</a>
       </div>
    </td>


    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera3"><img src="../images/electronics/camera3.jpeg" alt="camera3" width="250px" height="250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera3">Nikon D5600 DSLR Camera Body with Dual Lens:(16 GB)</a>
            <br/><h3>₹49,430</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera3">Add to Cart</a>
       </div>
    </td>

     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera4"><img src="../images/electronics/camera4.jpeg" alt="camera4" width="250px" height="250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera4">Canon 1300D DSLR Camera Body with Dual Lens:(16 GB)</a>
            <br/><h3>₹31,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera4">Add to Cart</a>
       </div>
    </td>
  </tr>

  <tr>
     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera5"><img src="../images/electronics/camera5.jpeg" alt="camera5" width="250px" height="250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera5">Canon EOS 1300D DSLR Camera Body with Dual Lens:(16 GB)</a>
            <br/><h3>₹32,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera5">Add to Cart</a>
       </div>
    </td>

    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera6"><img src="../images/electronics/camera6.jpeg" alt="camera6" width="250px" height="250px"/>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera6">Nikon D3400 DSLR Camera Body with Dual Lens:(16 GB)</a>
            <br/><h3>₹39,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera6">Add to Cart</a>
       </div>
    </td>


    <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera7"><img src="../images/electronics/camera7.jpeg" alt="camera7" width="250px" height="250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/camera7">Nikon D7200 (AF-S 18-140 mm VR Kit Lens) DSLR Camera</a>
            <br/><h3>₹67,970</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera7">Add to Cart</a>
       </div>
    </td>

     <td> 
       <div class="seperate">
          <div class="img">
            <a href="../productdescription.php?item=electronics/camera8"><img src="../images/electronics/camera8.jpeg" alt="camera8" width="250px" height="250px"/></a>
          </div>
          <div class="desc">
            <p><a class="para" href="../productdescription.php?item=electronics/mobile4">Canon EOS 80D(W) DSLR Camera (Body Only) (16 GB SD Card)</a>
            <br/><h3>₹65,990</h3></p>
          </div>
          <a class="addtocart" href="../addtocart.php?item=electronics/camera8">Add to Cart</a>
       </div>
    </td>

  </tr>

</table>


	
</body>
</html>