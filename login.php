
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php
    include "menu.php"
    ?>
    <!-- Page Content -->    
    <div class="container">
    <h1> Log in </h1>

  <?php if($missing || $errors) { ?>
    <p class="warning">Please fix the item(s) indicated.</p>
    <?php } ?>
  <div class="form-group col-md-9">
    <label for="email" class="col-sm-2 control-label">
    <?php if ($missing && in_array('email', $missing)) { ?>
    <span class="warning">Please enter a valid email address</span>
    <?php } ?>
    </label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>

  <div class="form-group col-md-9">
    <label for="password" class="col-sm-2 control-label">
    <?php if ($missing && in_array('password', $missing)) { ?>
    <span class="warning">Please enter a valid password.</span>
    <?php } ?>
    </label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group col-md-9">
    <div class="col-sm-offset-2 col-sm-10">
      <input name="send" type="submit" class="btn btn-default">
    </div>
  </div>


</form>
    <!-- /.container -->

    <div class="container">
          
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

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
