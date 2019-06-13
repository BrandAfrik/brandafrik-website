<!doctype html>
<html>
<head>
    <?php include_once 'includes/head_items.php'?>
    <title>About Us</title>
</head>
<body>
    <script>
        AOS.init();
    </script>
    <!--Social Media-->
    <?php include_once 'includes/social_media.php'?>
    <?php include_once 'includes/navbar.php'?>

    <div id="about-us-top" class="w-100">
        <div style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.5)">
            <h1 class="text-center display-2 text-white" style="position: relative; top:40%">About Us</h1>
        </div>

    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-3 text-blue mt-3">About Us</h1>
                <p class="lead">
                    We are a team of young talented "Brand Afrikaans" that are poised to raise the bar in innovation and creativity on the African continent through the use of technology.
                    We are action oriented and proactive towards transcending our positive influence in our field of expertise to other facets of growth and development in the African technology market.
                </p>
            </div>
        </div>
    </div>

    <div id="full-team" class="container text-center">
        <div>
            <h1 class="display-4 text-blue">Our Team</h1>
            <img src="https://png.icons8.com/ios/52/191919/horizontal-line-filled.png">
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 mb-3">
                <div class="card shadow">
                    <img class="card-img-top img-fluid" src="images/Team/Sedem.jpg" alt="Sedem's Picture" alt="Card image cap">

                    <div class="card-body">
                        <h3 class="card-title">Sedem Balfour</h3>
                        <h5>Chief Executive Officer</h5>
                    </div>

                    <div class="card-footer">
                        <a class="mr-3 fb" href="https://facebook.com/balfourprospersedem.ocloo"><i class="fab fa-facebook fa-2x"></i></a>
                        <a class="mr-3 twit" href="https://twitter.com/BalfourSedem"><i class="fab fa-twitter fa-2x"></i></a>
                        <a class="mr-3 linked" href="https://www.linkedin.com/in/sedem-balfour-p-ocloo-70a13b15b/"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a class="mr-3 ig" href="https://www.instagram.com/balfoursedem/"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card shadow">
                    <img class="card-img-top img-fluid" src="images/Team/Isaac.jpg" alt="Isaac's Picture" alt="Card image cap">

                    <div class="card-body">
                        <h3 class="card-title">Isaac Attuah</h3>
                        <h5>Chief Operating Officer</h5>
                    </div>

                    <div class="card-footer">
                        <a class="mr-3 fb" href="https://www.facebook.com/isaacattuah"><i class="fab fa-facebook fa-2x"></i></a>
                        <a class="mr-3 twit" href="https://twitter.com/IsaacAttuah"><i class="fab fa-twitter fa-2x"></i></a>
                        <a class="mr-3 linked" href="https://www.linkedin.com/in/isaac-attuah-191b83145/"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a class="mr-3 ig" href="https://www.instagram.com/isaacattuah/"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow">
                    <img class="card-img-top img-fluid" src="images/Team/Amos.jpg" alt="Amos's Picture" alt="Card image cap">

                    <div class="card-body">
                        <h3 class="card-title">Amos Aidoo</h3>
                        <h5>Chief Developer</h5>
                    </div>

                    <div class="card-footer">
                        <a class="mr-3 fb" href="https://www.facebook.com/profile.php?id=100004536859303"><i class="fab fa-facebook fa-2x"></i></a>
                        <a class="mr-3 twit" href="https://twitter.com/AmosAidoo"><i class="fab fa-twitter fa-2x"></i></a>
                        <a class="mr-3 linked" href="https://www.linkedin.com/in/amos-aidoo-82332213a"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a class="mr-3 ig" href="https://www.instagram.com/_papakwesi/"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once 'includes/team.php'?>
    </div>

    <?php include_once 'includes/above_footer.php'?>
    <?php include_once 'includes/footer.php'?>

    <script>
        $("#about").addClass("active");

        $(".navbar").removeClass("bg-transparent");
        $(".navbar").addClass("nav-bg");
    </script>

      <!--Tawk Widget-->
      <?php include_once 'includes/tawk_widget.php' ?>
</body>
</html>