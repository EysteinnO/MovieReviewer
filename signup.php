<?php



//Arryar búnir til 
$errors = [];
$missing = [];
//Tjékkar ef formið hefur verið submittað
if (isset($_POST['send'])) {

//Expected fields in form
$expected = ['uname', 'password', 'email'];
$required = ['uname', 'password', 'email'];
//Keyrt skriftuna
require './process.php';

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include 'title.php'; ?>
    <title>MovieReviewer<?php echo"&#8212;{$title}";?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">  

</head>

<body>

<?php 
include "menu.php"
?>

    <!-- Page Content -->
<div class="container">
 
<h1> Sign up </h1>

<?php if($missing || $errors) { ?>
    <p class="warning">Please fix the item(s) indicated.</p>
<?php } ?>

<form name="submitform" method="post" action="">
<div class="form-group col-md-9">
  <label for="uname" class="col-sm-2 control-label">
  <?php if ($missing && in_array('uname', $missing)) { ?>
    <span class="warning">Please enter your preferred username</span>
  <?php } ?>
  </label>
    <div class="col-sm-10">
      <input name="uname" type="text" class="form-control" id="uname" placeholder="Username"
      <?php if ($missing || $errors) {
      echo 'value="' . htmlentities($uname) . '"';
      } ?>>
    </div>  
</div>  

  <div class="form-group col-md-9">
    <label for="email" class="col-sm-2 control-label">
    <?php if ($missing && in_array('email', $missing)) { ?>
    <span class="warning">Please enter a valid email address</span>
    <?php } ?>
    </label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="email" placeholder="Email"
      <?php if ($missing || $errors) {
        echo 'value="' . htmlentities($email) . '"';
         } ?>>      
    </div>
  </div>

  <div class="form-group col-md-9">
    <label for="password" class="col-sm-2 control-label">
    <?php if ($missing && in_array('password', $missing)) { ?>
    <span class="warning">Please enter a valid password.</span>
    <?php } ?>
    </label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="password" placeholder="Password"
      <?php if ($missing || $errors) {
        echo 'value="' . htmlentities($password) . '"';
        } ?>>      
    </div>
  </div>
  
  <div class="form-group col-md-9">
    <div class="col-sm-offset-2 col-sm-10">    
    <input name="send" type="submit" class="btn btn-default">    
    
    </div>
  </div>

</form>

<pre>
<h1> Test </h1> 
<?php if ($_POST) { print_r($_POST);} ?>
</pre>
  
</div>


    <!-- /.container -->
<?php                                
                function displayRandomPhotoArea() {
                $photoAreas = array("brown.jpg", "green.jpg","goldmetallic.jpg");

                $randomNumber = rand(0, (count($photoAreas) - 1));   
                echo '<img src="myndir/' . $photoAreas[$randomNumber] . '" class="bg">';           
                }
                ?>    
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                    include "footer.php" 
                    ?>      
                </div>
            </div>
        </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
