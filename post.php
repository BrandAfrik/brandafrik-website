<!DOCTYPE html>
<html>
<head>
	<?php include_once 'includes/head_items.php'?>
	<title>Blog</title>
</head>
<body style="background-color: #fdfdfd">
	<script>
        AOS.init();
    </script>
    <!--Social Media-->
    <?php include_once 'includes/social_media.php'?>
    <?php include_once 'includes/navbar.php'?>

    <div id="services-top" class="w-100" style="background: url('images/team/Team 3.jpg') fixed center no-repeat;background-size: 100% 60%; background-position:top; height: 300px;">
        <div style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.7)">
            <h1 id="post-h1" class="text-center display-4 text-white" style="position: relative; top:30%">Title of the blog post</h1>
            <h1 class="text-center text-white" style="position: relative; top:35%">By John Doe</h1>
        </div>
    </div>

    <!-- Main body of Blog-->
    <div class="container-fluid ml-md-5" style="margin-bottom: 150px;">

    	<div class="row mt-5">
    		
    		<!--Single Blog Post-->
    		<div id="post-show" class="col-md-8 mr-2">

    			<!--Blog post appears here-->
    			<img class="img-fluid mb-3" src="images/team/Team 3.jpg" alt="#">
                
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Amet minus incidunt obcaecati neque voluptatum quia iste voluptas et saepe deleniti? 
                    Autem molestiae odio minima nesciunt minus fugit ipsum voluptatibus eaque?
                </p>
            </div>


    		<!--Right side bar-->
    		<div class="col-md-3 bg-white shadow-sm p-3">
    			<div>
    				<h1>Social Media</h1>
	    			<a href="#" class="fb"><i class="fab fa-facebook mr-2 fa-2x"></i></a>
	    			<a href="#" class="twit"><i class="fab fa-twitter mr-2 fa-2x"></i></a>
	    			<a href="#" class="ig"><i class="fab fa-instagram mr-2 fa-2x"></i></a>
	    			<a href="#" class="linked"><i class="fab fa-linkedin mr-2 fa-2x"></i></a>
    			</div>

    			<div class="mt-3">
	    			<h1>Recent posts</h1>
	    			No recent posts...
	    		</div>
    			
    		</div>
    	</div>
    </div>



    <?php include_once 'includes/above_footer.php'?>
    <?php include_once 'includes/footer.php'?>
    <script>
        $("#blog").addClass("active");

        $(".navbar").removeClass("bg-transparent");
        $(".navbar").addClass("nav-bg");
    </script>

      <!--Tawk Widget-->
      <?php include_once 'includes/tawk_widget.php' ?>

</body>
</html>