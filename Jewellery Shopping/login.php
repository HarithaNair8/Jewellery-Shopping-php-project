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
        <title>Jewellery Store | Login</title>
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
        <br><br><br><br><br><br>
		<div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 style="color: #ffffff;"><b>LOGIN</b></h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning" style="color: #000;"><b>Login to make a purchase</b></p>
							<?php
                                if(isset($_GET["error"])){
                                  echo $_GET['error'];
                                }
                            ?>
                            <form action="login_submit.php" method="POST" >
                                <div class="form-group">
                                    <input type="email"  class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" placeholder="Password" name="password">
                                </div>
								<button class="btn btn-success">Login</button>
							</form>
                        </div>
                        <div class="panel-footer" style="color: #ffffff"><b>Don't have an account?</b><a href="signup.php"><b>Register</b></a></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>

        
    </body>
</html>
