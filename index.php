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
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-facebook"></i></a></div>
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-twitter"></i></a></div>
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-linkedin"></i></a></div>
     	<div class"uk-width-1-6"><a href="#"><i class"uk-icon-medium-google-plus"></i></a></div>
      </div>

</div>

<!-- End Navigation -->

<body>

	<div class="header" data-uk-parallax="{bg: -100,}">
		<div class="uk-container uk-container-center">
			<div class="beautiful" data-uk-parallax="{opacity: 0, y: 100}">
				<h1>stunning.</h1>	
				<h2 align="center">beautifully crafted web development</h2>
				<button class="uk-button uk-margin-large-top" type="button">learn more</button>
			</div>
		</div>	
			
		<div class="section1">
			<div class="uk-container uk-container-center">
				<h2>Development &amp Design that's<br />just out of this world...</h2>	
				<i class="uk-icon-large uk-icon-rocket" id="rocket"></i>	
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


<!-- Script for parallax scrolling -->
//<script>
//	(function(){
//
//  var parallax = document.querySelectorAll(".parallax"),
//      speed = 0.5;
//
//  window.onscroll = function(){
//    [].slice.call(parallax).forEach(function(el,i){
//
//      var windowYOffset = window.pageYOffset,
//          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";
//
//      el.style.backgroundPosition = elBackgrounPos;
//
//   });
//  };
//
//})();
//</script>


</body>
</html>