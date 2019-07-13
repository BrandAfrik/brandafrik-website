<!doctype html>
<html>
<head>
    <?php include_once 'includes/head_items.php'?>
    <title>Contact Us</title>
</head>
<body>

    <script>
        AOS.init();
    </script>
    <!--Social Media-->
    <?php include_once 'includes/social_media.php'?>
    <?php include_once 'includes/navbar.php'?>

    <div id="contact-top" class="w-100" style="background: url('images/mobiles.jpg') fixed center no-repeat;background-size: 100% 70%; height: 350px; background-position:top">
        <div style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.5)">
            <h1 id="services-h1" class="text-center display-2 text-white" style="position: relative; top:30%">Get In Touch</h1>
        </div>
    </div>

    <div id="contact-main" style="height:400px;">
        <div class="row" style="height:100%">
            <div class="details col-md-6 button-background text-white">
                <h1>Our Contact Details</h1>

                <h5>Email : info@brandafrik.com</h5>
                <h5 class="mt-5">Telephone : <a class="text-white" style="text-decoration:none" href="tel:+233544813264"></i> O544813264</a></h5>
            </div>

            <div id="hj" class="col-md-6" style="background: url('images/woman-call.jpg')center no-repeat;background-size: 100% 100%;">
                <div class="text-center" style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.5)">
                    
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'includes/above_footer.php'?>
    <?php include_once 'includes/footer.php'?>

    <script>
        $("#contact").addClass("active");

        $(".navbar").removeClass("bg-transparent");
        $(".navbar").addClass("nav-bg");
        
    </script>

      <!--Tawk Widget-->
      <?php include_once 'includes/tawk_widget.php' ?>
</body>
</html>