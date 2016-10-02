
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MR</a>
            </div>            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" id="here" <?php if($currentPage == 'index.php') {echo 'id="here" class="active"';} ?>>Reviews</a>
                    </li>
                    <li>
                        <a href="samband.php" id="here" <?php if($currentPage == 'samband.php') {echo 'id="here" class="active"';} ?>>About MR</a>
                    </li>
                    <li>
                        <a href="login.php" id="here" <?php if($currentPage == 'login.php') {echo 'id="here" class="active"';} ?>>Login</a>
                    </li>                    
                     <li>
                        <a href="signup.php" id="here" <?php if($currentPage == 'signup.php') {echo 'id="here" class="active"';} ?>>Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
