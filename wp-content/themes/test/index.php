<?php get_header(); ?>

		<div class="slideshow-container">
			
			<div class="mySlides fade">
<!--				<div class="numbertext">1 / 3</div>	-->
				<img src="<?php bloginfo('template_directory') ?>/assets/img1.jpg" style="width:100%">
<!--				<div class="text">Caption Text</div>-->
			</div>
			
			<div class="mySlides fade">
<!--				<div class="numbertext">2 / 3</div>  -->
				<img src="<?php bloginfo('template_directory') ?>/assets/img2.jpg" style="width:100%">
<!--				<div class="text">Caption Two</div>-->
			</div>
			
			<div class="mySlides fade">
<!--				<div class="numbertext">3 / 3</div>  -->
				<img src="<?php bloginfo('template_directory') ?>/assets/img3.jpg" style="width:100%">
<!--				<div class="text">Caption Three</div>-->
			</div>

			<div style="text-align:center; position: absolute; top: -20px; z-index:10">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
			
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
							
			
		</div>
		
		<div class="holder" align="middle" style="margin-top:5px">

		<span><img src="<?php bloginfo('template_directory') ?>/assets/tes.jpg" style="border-left:3px solid white"></span>
		<span><img src="<?php bloginfo('template_directory') ?>/assets/tes2.jpg" style="border-left:3px solid white"></span>
		<span><img src="<?php bloginfo('template_directory') ?>/assets/tes3.jpg" style="border-left:3px solid white; border-right:3px solid white"></span>

		</div>

<?php get_footer(); ?>		
		
	</body>
	
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

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
	</script>
	
</html>