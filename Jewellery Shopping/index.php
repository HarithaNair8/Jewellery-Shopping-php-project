<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
      
        
        <meta charset="UTF-8">
        <title>Jewellery Store</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
           <div class="container">
               <center>
               <div id="banner_content">
                   <h1><b>We sell Antique jewellery.</b></h1>
                   <p><b>Flat 40% OFF on all Jewellery.</b></p>
                   <a href="products.php" target="_blank"> <button class="btn btn-danger btn-lg active" onclick="myFunction()"><b>Shop Now</b> </button></a>
                   <script>
                       function myFunction() {
                           alert("For Shopping Please Login/Signup");
                       }
                   </script>
                   
               </div>
                </center>
           </div>
       
       </div><br><br>
        
        
        
         <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
           <!-- <a href="#">-->
                <image src="img/1.png"/>
             <div class="caption">
                 <h2><b>Necklace</b></h2>
                 <p><b>Gold work antique collection.</b></p>
             </div>
           <!-- </a>-->
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            
             <image src="img/2.png"/>
             <div class="caption">
                 <h2><b>Necklace</b></h2>
                 <p><b>Necklace(Antique Gold Plating)</b></p>
             </div>
           
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            
             <image src="img/3.png"/>
             <div class="caption">
                 <h2><b>Necklace</b></h2>
                 <p><b>Necklace(Antique Ruby Collection)</b></p>
             </div>
            
                     </div>
        </div>
 
             </div>
         </div><br><br><br><br>
         
      
                
        
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> Lifestyle Store.All Rights Reserved|Contact Us: +91 90000 00000</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>

