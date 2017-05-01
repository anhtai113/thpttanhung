<!DOCTYPE html>
<html>
<head>
	<title>TRƯỜNG THPT TÂN HƯNG</title>
	<meta charset="utf-8">
	<meta name="description" content="Camera a free jQuery slideshow with many effects, transitions, adaptive layout, easy to customize, using canvas and mobile ready"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
 	<script src="public/js/jquery-3.2.1.min.js"></script>
  	<script src="public/js/bootstrap.min.js"></script>
	<link rel='stylesheet' id='camera-css'  href='public/css/camera.css' type='text/css' media='all'> 
    <style>
		
	</style>
    <script type='text/javascript' src='public/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='public/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='public/js/camera.min.js'></script> 
    <script>
		jQuery(function(){
			
			jQuery('#camera_random').camera({
				thumbnails: true
			});

		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<img src="image/PHP1004.jpg" width="200px" height="150px">
			</div>
			<div class="col-md-8">
				<img src="image/banerqt.png" width="800px" height="150px">
			</div>
			<div class="col-md-2">
			<img src="image/PNV1004.jpg" width="200px" height="150px">
				
			</div>
		</div><!-- end row 1  -->
		<div style=" width: 100%;height: 900px;"><!-- div duong vien-->
			<div class="row">
				<div>
					<?php 
						include_once("trangchu/menu/menu.php");
					?>
				</div><!-- end row 2 row menu -->

				<div class="row">
					<?php 
						include_once("trangchu/popup/signup.php");
					 ?>
				</div><!--  end row 3 row popup sign up-->

				<div class="row">
					<?php 
						include_once("trangchu/popup/login.php");
					 ?>
				</div><!-- end row login -->
			</div><!-- end menu -->
			<div class="row" style="margin-top: -20px;">
				<?php 
					include_once("trangchu/search/search.php");
				?>
			</div><!-- end search -->
			<div class="row">
				<?php 
					include_once("trangchu/container/container_left.php");
					include_once("trangchu/container/container_right.php");
				?>
				
			</div>
		</div><!--end div duong vien-->
	</div><!-- end row container -->
</body>
</html>