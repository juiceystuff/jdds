<!DOCTYPE html>
<html>
<head>
	<title>...</title>

	<link rel="stylesheet" href="css/uikit.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/components/parallax.js"></script>

</head>

<!-- Navigation area -->

<a id="menulink" href="#">
	<div class="hamburger-wrapper">
		<div class="inner-hamburger-wrapper">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
		</div>
		<div class="menu-title"><h3>02921 259222</h3></div>
	</div>
</a>

<div class="navigation-wrapper">

	<ul class="navigation">
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <div class="uk-container uk-margin-large-left">
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-facebook"></i></a></div>
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-twitter"></i></a></div>
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-linkedin"></i></a></div>
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-google-plus"></i></a></div>
      </div>

</div>

<!-- End Navigation -->

<body>

	<div class="header">

		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-margin-large-top uk-align-center">
				<div class="uk-width-1-1">
					<a href="#"><img src="images/logo_2015.svg" class="js-logo" alt="Juiceystuff Logo" align="center"></a>				
				</div>
			</div>
		</div>	

		<div class="uk-container uk-container-center">
			<div class="beautiful" data-uk-parallax="{opacity: 0, y: 100}">
				<h1>beautiful.</h1>	
				<h2 align="center">stunningly crafted web development</h2>
				<button class="uk-button uk-margin-large-top" type="button">learn more</button>
			</div>
		</div>	
	</div>
	

	<div class="section1">
		<div class="uk-container uk-container-center">
			<div class="uk-grid uk-margin-large-top">
				<div class="uk-width-1-1">
					<h2>Better digital solutions</h2>
				</div>
			</div>

			<div class="uk-grid">
				<div class="uk-width-1-3">
				...
				</div>
			
				<div class="uk-width-1-3">
				...
				</div>

				<div class="uk-width-1-3">
					<div class="right-panel">
						<p>Enagaging with our clients, providing a partnership that remains solid through the
						products <br>and services we offer along side out 7 step approach in how we offer them.</p>
						<p>Based in Cwmbran near Newport, we work closely with clients both locally <br>and nationwide.
						We offer successful digital solutions that deliver amazing business results</p>
						<p>Creative and passionate about delivering cutting edge designs for your website, online marketing and branding</p>
					</div>
				</div>
			</div>

			<div class="uk-grid>">
				<div class="uk-width-1-1">
					<p>Enagaging with our clients, providing a partnership that remains solid through the
					products <br>and services we offer along side out 7 step approach in how we offer them.</p>
					<p>Based in Cwmbran near Newport, we work closely with clients both locally <br>and nationwide.
					We offer successful digital solutions that deliver amazing business results</p>
					<p>Creative and passionate about delivering cutting edge designs for your website, online marketing and branding</p>
				</div>
			</div>
		</div>
	</div>	
	

    <!-- making sure we can scroll -->
    <div style="height:200vh">

<!-- Script to handle navigation overlay -->
<script>
 	$(document).ready(function() {

 	$('#menulink').click(function(event) {
 		event.preventDefault();
 		if($('.navigation-wrapper').hasClass('show-menu')) {
 		$('.navigation-wrapper').removeClass('show-menu');
 			$('.navigation').hide();
 			$('.navigation li').removeClass('small-padding');
 		} else {
 			$('.navigation-wrapper').addClass('show-menu');
 			$('.navigation').fadeIn();
 			$('.navigation li').addClass('small-padding');
 	   }
 	});
  
 });
</script>
</body>
</html>