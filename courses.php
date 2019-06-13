<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php'?>
	<title>Courses</title>
</head>
<body style="background-color: #fdfdfd">
	<script>
        AOS.init();
    </script>
    <!--Social Media-->
    <?php include_once 'includes/social_media.php'?>
    <?php include_once 'includes/navbar.php'?>

    
    <div id="register-top" class="w-100" style="background: url('images/register_image.jpg') fixed center no-repeat;background-size: 100% 100%; height: 400px;">
        <div style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.5)">
            <h1 id="services-h1" class="text-center display-2 text-white" style="position: relative; top:30%">Learn a skill</h1>
        </div>
    </div>

        <!--Register-->
    <div id="courses" class="mt-5 mb-5 text-center">
        <div class="container">
            <!-- <h1 class="display-4">Pick A Course</h1> -->

            <div class="row">
                <div class="col-md-4 col-lg-4 mb-3 mb-sm-3">
                    <div class="card shadow-sm p-3 bg-white rounded">
                        <img class="card-img-top" src="images/web.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="https://docs.google.com/forms/d/1GhMurMc5qr_91aUHJaO2HEd5er7eRz0L7_GLzr0YFVk/edit?chromeless=1" class="btn text-white button-background">Register</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 mb-3 mb-sm-3">
                    <div class="card shadow-sm p-3 bg-white rounded">
                        <img class="card-img-top" src="images/design.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Graphic Design</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="https://goo.gl/forms/rWaXSeIKIOUd0c0X2" class="btn text-white button-background">Register</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="card shadow-sm p-3 bg-white rounded">
                        <img class="card-img-top" src="images/app.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">App Development</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="https://goo.gl/forms/RTHzlwIIQIeeLlg73" class="btn text-white button-background">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--What we teach-->
    <div id="fff" class="container mt-4">

        <div class="row text-center">
            <div class="mx-auto">
                <h1>Why we teach</h1>
                <p>
                    We believe in creating opportunities to help impact young people with skills that are in high demand.<br>
                    We are on a journey to contributing our quota to the socio-economic development in our sub-region.<br>
                    We believe that skill is the new currency.
                </p>
            </div>

            <!-- <div class="col-md-6 col-lg-6">
                <div id="map">
                    
                </div>
            </div> -->
        </div>
    </div>
    

    <!-- <div class="container mt-5 mx-auto">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeoTMAjdYzLbyDFCupDrbkMhZ8PPW5RTMYCXJ_i-x2mR8dbyw/viewform?embedded=true" width="1100" height="1452" frameborder="0" marginheight="100" marginwidth="0">Loading...</iframe>
    </div> -->


    <?php include_once 'includes/above_footer.php'?>
    <?php include_once 'includes/footer.php'?>
    <script>
        $("#register").addClass("active");

        $(".navbar").removeClass("bg-transparent");
        $(".navbar").addClass("nav-bg");
    </script>

      <!--Tawk Widget-->
      <?php include_once 'includes/tawk_widget.php' ?>

      <!--Google Maps-->
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiElf9RNhii3tKLcYjAJnmapXwbI8afik&callback=initMap">
    </script>

</body>
</html>