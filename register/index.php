<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-cup Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

</head>

<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">

        <?php include '../header.php' ?>

        <div class="cover-container">
            <div class="row containnerbody">


            <div class="container panel panel-info">
            <main role="main" class="container-fluid">
                <div class="panel panel-info">
                    <h2>Please Sign Up</h2><br>
                    <form class="form-horizontal" method="post" action="register.php">

                        <div class="row col-md-12" style="justify-content: center">
                            <div class="col-md-12">
                                <img id="blah" src="../pic/avatar.png" style="width: 150px" alt="your image" />
                            </div>
                            <div class="row"></div>
                            <div class="col-md-12">
                                <input type="file" class="btn btn-info btn-sm" name="pic" onchange="readURL(this)">
                            </div>
                        </div>

                        <br>

                        <div class="row col-md-12">
                            <div class="col-md-2">
                                <label for="inputFirstname" class="control-label">Firstname</label>
                            </div>
                            <div class="col-md-10">
                                <input name="txtFirstname" type="text" placeholder="Enter your First Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row col-md-12">
                            <div class="col-md-2">
                                <label for="inputLastname" class="control-label">Lastname</label>
                            </div>
                            <div class="col-md-10">
                                <input name="txtLastname" type="text" placeholder="Enter your Last Name" class="form-control" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row col-md-12">
                            <div class="col-md-2">
                                <label for="inputTelephone" class="control-label">Telephone</label>
                            </div>
                            <div class="col-md-10">
                                <input name="txtTel" type="text" placeholder="Enter your Telephone" class="form-control" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row col-md-12">
                            <div class="col-md-2">
                                <label for="inputEmail" class="control-label">Email</label>
                            </div>
                            <div class="col-md-10">
                                <input name="txtEmail" type="email" placeholder="Enter your email" class="form-control" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row col-md-12">
                            <div class="col-md-2">
                                <label for="inputPassword" class="control-label">Password</label>
                            </div>
                            <div class="col-md-10">
                                <input name="txtPassword" type="password" placeholder="Enter your Password" class="form-control" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row col-md-12">
                            <div class="col-md-2">
                                <label for="inputRepassword" class="control-label">Re-password</label>
                            </div>
                            <div class="col-md-10">
                                <input name="txtRepassword" type="password" placeholder="Enter your Re-password" class="form-control" required autofocus>
                            </div>
                        </div>
                        <br>
                        <button name="submit" class="btn btn-info btn-sm pull-right">Sign Up</button>
                    </form>
                </div>
            </main>
        </div>
            </div>


            <!--<footer class="mastfoot">-->
                <!--<div class="inner">-->
                    <!--<p>Created by <b style="color: white">ecup developer</b>.</p>-->
                <!--</div>-->
            <!--</footer>-->
            <footer class="footer">
                <div class="container">
                    <span class="text-muted"><p>Created by <b style="color: white">ecup developer</b>.</p></span>
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
<script src="js/vendor/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
