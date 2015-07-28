<!DOCTYPE html>
<html>
<head>
	<title>...</title>

	<link rel="stylesheet" href="css/uikit.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/uikit-min.js"></script>
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
		<div class="menu-title"><h3>JuiceyStuff</h3></div>
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
      	<div class="uk-width-1-6">
      		<p>f</p>
      	</div>
      	<div class="uk-width-1-6">
      		<p>t</p>
      	</div>
      	<div class="uk-width-1-6">
      		<p>in</p>
      	</div>
      </div>

</div>

<!-- End Navigation -->

<body>

	<header class="header" data-uk-parallax="{bg: '0'}">
		<div class="beautiful">
			<h1>beautiful.</h1>	
			<button class="uk-button uk-margin-large-top" type="button">learn more</button>	
		</div>
	</header>

<div class="earth">
	<div class="uk-container">
		<div class="uk-width-medium-1-1 uk-margin-large-top">
			<h1>Out of this world<br />designs</h1>
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