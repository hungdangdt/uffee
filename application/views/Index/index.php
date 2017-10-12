<?php
/**
 * Created by: HungDang
 * Filename: index.php
 * Date: 10/13/2017
 * Desription:
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>eCard</title>
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="/public/css/swiper.min.css" />
	<link rel="stylesheet" href="/public/css/app.css">
	<script>
        document.documentElement.className = 'js';
	</script>
</head>
<!-- Add class {catogry_code_name} to body -->

<body class="loading">
<header class="container">
	<a class="logo" href="https://daflon.vn" title="Go to Homepage">
		<!-- Logo change per events ecard_logo_{category_code_name}.png
		if not exit return ecard_logo_.png
		-->
		<img src="images/ecard_logo.png" alt="">
	</a>
	<!-- Navigation can edit on AdminCP -->
	<nav class="m-hide">
		<ul>
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>
				<a href="category.html">Ngày phụ nữ Việt nam</a>
			</li>
			<li>
				<a href="category.html">Ngày nhà giáo Việt nam</a>
			</li>
			<li>
				<a href="category.html">Noel</a>
			</li>
			<li>
				<a href="category.html">Tết</a>
			</li>
		</ul>
	</nav>
</header>
<section id="main" class="container">
	<div class="text">
		<!-- Add Gategory description on AdminCP -->
		<h1>Chuyên mục</h1>
	</div>

	<div class="row">
		<!-- Get all category with thumb images -->
		<div class="gallery col-lg-3 col-md-6 col-sm-6">
			<a href="category.html" title="Gategory Name">
				<div class="image-shadow img-fluid" style="background-image:url(images/20-11.jpg)">
					<img src="images/20-11.jpg" alt="Gategory Name" class="img-fluid">
				</div>
			</a>
		</div>
		<div class="gallery col-lg-3 col-md-6 col-sm-6">
			<a href="category.html" title="Gategory Name">
				<div class="image-shadow img-fluid" style="background-image:url(images/2.jpg)">
					<img src="images/2.jpg" alt="Gategory Name" class="img-fluid">
				</div>
			</a>
		</div>
		<div class="gallery col-lg-3 col-md-6 col-sm-6">
			<a href="category.html" title="Gategory Name">
				<div class="image-shadow img-fluid" style="background-image:url(images/3.jpg)">
					<img src="images/3.jpg" alt="Gategory Name" class="img-fluid">
				</div>
			</a>
		</div>
		<div class="gallery col-lg-3 col-md-6 col-sm-6">
			<a href="category.html" title="Gategory Name">
				<div class="image-shadow img-fluid" style="background-image:url(images/4.jpg)">
					<img src="images/4.jpg" alt="Gategory Name" class="img-fluid">
				</div>
			</a>
		</div>



</section>
<footer class="container">
	&copy ecard.daflon.vn

	<span class="block padding-t-3 sm-padding-t-0 sm-float-right grey-25" data-reactid="19">
      Made in&nbsp;
      <a target="_blank" class="grey-25 external-link" href="https://en.wikipedia.org/wiki/Ho_Chi_Minh_City">Saigon</a>
      &nbsp;with&nbsp;
      <a target="_blank" class="grey-25 external-link" href="https://en.wikipedia.org/wiki/Love">Love</a>
    </span>

</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/anime.min.js"></script>
<script src="/public/js/imagesloaded.pkgd.min.js"></script>
<script src="/public/js/swiper.jquery.min.js"></script>
<script src="/public/js/app.js"></script>
</body>

</html>
