<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
               
        <meta charset="UTF-8">
        <title>Jewellery Store | Products</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to our Jewellery Store!</h1>
                <p>We have the best Antique jewellary collection for you. No need to hunt around, we have all in one place.</p>
                
            </div>
             
        </div>
        
                
                 <div class="container">
              <div class="row text-center">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/5.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Casatonia stones)</h3>
                              <p>Price:Rs.36000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/2.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Antique Gold Plating)</h3>
                              <p>Price:Rs.40000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/3.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Antique Ruby Collection)</h3>
                              <p>Price:Rs.50000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/6.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Casatonia stones</h3>
                              <p>Price:Rs.80000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/9.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Cartair Stone Work)</h3>
                              <p>Price:Rs.13000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/10.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Choker Antique set)</h3>
                              <p>Price:Rs.30000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/11.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Ear Ring(Heavy Gold plating)</h3>
                              <p>Price:Rs.8000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                   <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/12.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Jhumaka(Heavy Gold Work)</h3>
                              <p>Price:Rs.6000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/8.png" alt="Responsive image" id="imgs">
                          <div class="caption">
                              <h3>Necklace(Choker neck set)</h3>
                              <p>Price:Rs.40000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                             <!-- <button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/6.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Necklace(Casatonia stones)</h3>
                              <p>Price:Rs.10000.00</p>
                              <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/13.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Ear Ring(copper oxidized aqua blue)</h3>
                              <p>Price:Rs.1500.00</p>
                              <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <img src="img/14.png" alt="Responsive image">
                          <div class="caption">
                              <h3>Ear Ring(copper oxidized marron)</h3>
                              <p>Price:Rs.1300.00</p>
                              <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-success">Add to cart</a>
					<?php
					}
                                ?>
                              <!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
                          </div>
                      </div>
                      
                      
                      
                  </div>
                  
              </div>
             
          </div><br>
       <footer class="fo">
           <div class="container">
               <center>
                   <p>Copyright <small>&copy;</small> Lifestyle Store.All Rights Reserved|Contact Us: +91 90000 00000</p>
               </center>
           </div>
           
           
       </footer>
        
        
    </body>
</html>
