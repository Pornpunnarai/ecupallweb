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
            <div class="row containnerbody">


            <div class="container panel panel-info">
            <main role="main" class="container-fluid">
                <div class="panel panel-info">
                    <h2>Contact Us</h2><br>

                    <h4>เลขที่ 21/5 ซอย 9(ถนนศิริมังคลาจารย์) ตำบล สุเทพ อำเภอเมือง จังหวัด เชียงใหม่ 50200</h4><br>

                    <div class="row col-md-12" id="map" style="justify-content: center; width: 100%;height:400px;background:yellow"></div><br>

                    <div class="row">
                        <div class="col-md-4">
                            <p><img src="../pic/facebook-icon.png" width="100px"></p>
                            <p>Facebook.com/chiangmairea</p>
                        </div>

                        <div class="col-md-4">
                            <p><img src="../pic/Hamzasaleem-Stock-Mail.ico" width="100px"></p>
                            <p>chiangmairea@gmail.com</p>
                        </div>

                        <div class="col-md-4">
                            <p><img src="../pic/Circle-icons-phone.svg.png" width="100px"></p>
                            <p>053-213708</p>
                        </div>
                    </div>

                </div>
            </main>
        </div>
            </div>



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
<script>
    function myMap() {
        var mapOptions = {
            center:new google.maps.LatLng(18.7942832, 98.969709),
            zoom:15

        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArZaptkF-PvukPIiiLvmJykxgE6qRG5LI&callback=myMap"></script>
<script src="/js/vendor/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
