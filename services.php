<!doctype html>
<html>
<head>
    <?php include_once 'includes/head_items.php'?>
    <title>Services</title>
</head>
<body>>
    <script>
        AOS.init();
    </script>
    <!--Social Media-->
    <?php include_once 'includes/social_media.php'?>
    <!--Navigation Bar-->
    <?php include_once 'includes/navbar.php'?>

    <div id="services-top" class="w-100" style="background: url('images/achievement.jpg') fixed center no-repeat;background-size: 100% 100%; height: 400px;">
        <div style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.5)">
            <h1 id="services-h1" class="text-center display-2 text-white" style="position: relative; top:30%">Services</h1>
        </div>
    </div>

    <div id="services-main" class="container-fluid pt-0 pl-5 pr-5">
        <h1 class="display-3 mt-3 text-blue"> Services</h1>
        <!-- <p><i class="fas fa-cog fa-spin fa-2x"></i> Page under Construction</p> -->


        <div class="row mb-3">
            <div class="col-md-4">
                <h1>Web Development</h1>
                <img class="img-fluid" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201706/web-development-647_062317054646.jpg">
            </div>

            <div class="col-md-8 pt-5">
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            
        </div>

        <div class="row mb-3 mb-sm-5">

            <div class="col-md-8 pt-5">
                <h1>App Development</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <div class="col-md-4 mb-sm-5">
                
                <img class="img-fluid" src="http://advancya.com/-/media/Advancya/Pages/Mobile-01.ashx?h=279&la=en&w=449&hash=404A3EFE19237F942A290673F8C79B6DA8E5A05F">
            </div>
            
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <h1>Social Media Marketting</h1>
                <img class="img-fluid" src="http://www.webtrainings.in/videos/wp-content/uploads/2016/02/social-media-optimization.png">
            </div>

            <div class="col-md-8 pt-5">
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            
        </div>

        <div class="row mb-3">

            <div class="col-md-8 pt-5">
                <h1>Embroidery</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <div class="col-md-4">
                
                <img class="img-fluid" src="https://www.creativebug.com/pimage/dynamic/subject-slide~storage/public/images/tutorial_thumbnails/original/1379/dhe86llsspzhmc2dkbcs.jpg">
            </div>
            
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <h1>Graphic Design</h1>
                <img class="img-fluid" src="http://www.webtrainings.in/videos/wp-content/uploads/2016/02/social-media-optimization.png">
            </div>

            <div class="col-md-8 pt-5">
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            
        </div>
    </div>


    <!--Footer-->
    <?php include_once 'includes/above_footer.php'?>
    <?php include_once 'includes/footer.php'?>

    <script>
        $("#services").addClass("active");

        $(".navbar").removeClass("bg-transparent");
        $(".navbar").addClass("nav-bg");
    </script>

      <!--Tawk Widget-->
      <?php include_once 'includes/tawk_widget.php' ?>
</body>
</html>