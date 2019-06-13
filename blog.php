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

    <div id="services-top" class="w-100" style="background: url('images/write.jpg') fixed center no-repeat;background-size: 100% 100%; height: 400px;">
        <div style="position: relative;width: 100%; height: 100%;background-color: rgba(0,0,0,0.5)">
            <h1 id="blog-h1" class="text-center display-2 text-white" style="position: relative; top:30%">We love to write ...</h1>
        </div>
    </div>

    <!-- Main body of Blog-->
    <div class="container-fluid ml-md-5">

    	<div class="row mt-5">
    		
    		<!--Main Blog Side-->
    		<div class="col-md-8 mr-2">

    			<!--Blog posts appear here-->
    			<div class="row bg-white shadow-sm p-3">
    				<div class="col-md-5">
    					<img class="img-fluid" src="images/write.jpg" alt="Blog Post Image">
    				</div>

    				<div class="col-md-7">
    					<h1>Blog Title</h1>
    					<p>Author | Date</p>

    					<p>
    						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..	
    					</p>
						<a class="btn btn-success" href="#">Read Post</a>
    				</div>
					
    			</div>

    			<div class="row bg-white shadow-sm p-3 mt-3">
    				<div class="col-md-5">
    					<img class="img-fluid" src="images/write.jpg" alt="Blog Post Image">
    				</div>

    				<div class="col-md-7">
    					<h1>Blog Title</h1>
    					<p>Author | Date</p>

    					<p>
    						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..	
    					</p>
						<a class="btn btn-success" href="#">Read Post</a>
    				</div>

					
    			</div>
    			
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