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
            <div class="col-md-6 bg-success">
                <h1>Our Contact Details</h1>

                <h5>Email : </h5>
                <h5>Telephone : </h5>
            </div>

            <div class="col-md-6">

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