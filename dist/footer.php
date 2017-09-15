		</div>
  	</main>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="js/ScrollMagic.js"></script>
<script type="text/javascript" src="js/plugins/debug.addIndicators.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.js"></script>
<script type="text/javascript" src="js/jquery.parallax-scroll.js"></script>
<script type="text/javascript">


	// init ScrollMagic controller
	var controller = new ScrollMagic.Controller();

	// 1st scene when trigger point is activeated class is added to #map1 element
	scene1 = new ScrollMagic.Scene({triggerElement: "#rotate-trigger1"})
								  .setClassToggle('#map1', 'active')	
								  .addIndicators()
							      .addTo(controller);









	/*
		SVG line for 1st leg of the route 
	*/
	function myMove() {

		var pos  = 2570;
		var id   = setInterval(frame, 11);
	
		function frame() {
			
			// when pos equals 0 then animation is completed and clears the setInterval
			if (pos == 0) {
	
				clearInterval(id);
		
			} else {				

				console.log(pos)
				pos--;
				

				if (pos == 2400) {

					var addSection = new Image();
					addSection.setAttribute('id', 'map2');
					//addSection.setAttribute('class', 'active');
					addSection.src = 'images/section-maps/section2.jpg';

					$('#map').append(addSection);

					scene2 = new ScrollMagic.Scene({triggerElement: "#rotate-trigger1"})
								  .setClassToggle('#map1, #map2, #cloud1', 'active')	
								  .addIndicators()
							      .addTo(controller);

					
					controller.updateScene(scene1, true);
					

				}
			}
		}
	}



	/*	
		Scroll to Section when new map images are added
	*/
	function scroll(addSection) {

		var id = addSection.getAttribute('id');
		console.log(id);


		$('html, body').animate({
			scrollTop: $("#" + id).offset().top
		}, 10000);
	}












	/*
		Reset Map
	*/
	function reset() {
	  	

		pos = 0;
		$('#map2').remove();
	}







</script>
</body>
</html>