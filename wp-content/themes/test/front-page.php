<?php get_header(); ?>

		<div class="slideshow-container">
			
			<div class="mySlides w3-animate-opacity">
<!--				<img src="<?php bloginfo('template_directory') ?>/assets/Desain1.jpg" style="width:100%"> -->
				<?php if (dynamic_sidebar('slider1')); ?>
<!--				<div class="text">Caption Text</div>-->
			</div>
			
			<div  class="mySlides w3-animate-opacity">
<!--				<img src="<?php bloginfo('template_directory') ?>/assets/Desain2.jpg" style="width:100%">  -->
				<?php if (dynamic_sidebar('slider2')); ?>
			</div>

			<div style="text-align:center; position: absolute; top: -20px; z-index:10">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
			</div>
			
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
							
		</div>
		
		<div class="holder" align="middle" style="margin-bottom:10px">
		<div class="row">
			<div style="  display: flex; justify-content: center;">
				<div style="float:left; margin-right: 10px">
					<?php if (dynamic_sidebar('front-left')); ?>
				</div>
				<div style="float:left">
					<?php if (dynamic_sidebar('front-center')); ?>
				</div>
				<div style="float:left; margin-left: 10px">
					<?php if (dynamic_sidebar('front-right')); ?>
				</div>
			</div>
		</div>
		</div>

<?php get_footer(); ?>
		
	</body>
	
	<script>
		var slideIndex = 1;
				
		carousel();
		
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1} 
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none"; 
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block"; 
		  dots[slideIndex-1].className += " active";
		}

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			x[i].style.display = "none"; 
			}
			slideIndex++;
			if (slideIndex > x.length) {slideIndex = 1} 
			x[slideIndex-1].style.display = "block"; 
			setTimeout(carousel, 8000);
		}
		
	</script>
</html>