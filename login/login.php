<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-cup Website</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
</head>

<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <?php include '../header.php' ?>

        <div class="cover-container">
            <header class="masthead clearfix">
                <div class="inner">
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">Welcome to E-cup Website</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6" >
                                <a href="#" class="btn"><img src="../pic/loginwithfacebook.png" style="width: 300px;"></a>
                                <a href="#" class="btn"><img src="../pic/loginwithgoogle.png" style="width: 300px;"> </a>
                                <a href="../register/index.php" class="btn btn-lg btn-secondary" style="width: 300px; margin-top: 7px;">Register By Email</a>
                            </div>

                            <div class="col-md-6" style="border-left:1px solid #ccc;height:160px">
                                <form class="form-horizontal" method="post" action="check_login.php">
                                    <div class="row col-md-12">
                                        <input name="txtEmail" type="email" placeholder="Enter your email" class="form-control input-md" required autofocus>
                                    </div><br/>
                                    <div class="row col-md-12">
                                        <input name="txtPassword" type="password" placeholder="Enter your Password" class="form-control input-md">
                                    </div>
                                    <div class="spacing">
                                        <a href="#">
                                            <small> Forgot Password?</small>
                                        </a><br/>
                                    </div>
                                    <div class="spacing">
                                        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                                        <small> Remember me</small>
                                    </div>
                                    <button name="submit" class="btn btn-info btn-sm pull-right">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="mastfoot">
            <div class="inner">
            <p>Created by <b style="color: white">ecup developer</b>.</p>
            </div>
            </footer>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="/js/vendor/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
