<?php include 'header.php'; ?>  

	<style type="text/css">

		#cloud1 { position: absolute; top: -100px; right: 0; transition: top 5s; transition: right 5s, top 5s; }
		#cloud2 {
			position: absolute;
			top: 760px;
			left: 0;			
			 transition: left 5s, top 5s; 
		}
		.trigger { position: absolute; }

		#rotate-trigger1 { position: absolute; top: 40%; width: 100%; border: 1px solid red; }

		/*	Maps 		*/
		#map1,
		#map2 { transition: margin-left 5s, margin-top 5s; margin-left: 0px; margin-top: 0; position: relative; }
		#map1.active { margin-left: -400px; margin-top: -400px; position: relative; transition: margin-left 5s, margin-top 5s; }
		#map2.active { margin-left: -400px;  transition: margin-left 5s, margin-top 5s; }


		/* 	Clouds 		*/
	 	#cloud1.active { top: -450px; right: 0; transition: right 5s, top 5s; }
		#cloud2.active { position: absolute; top: 320px; left: -510px;  transition: left 5s, top 5s;  }

	 	

	</style>

	<div id="trigger">
		<div id="my-sticky-element"></div>
	</div>

	<div id="map">
		<img id="map1" class="maps" src="images/section-maps/section1.jpg" alt="">
		
		<img id="cloud1" class="" src="images/clouds/cloud1.png" alt=""  data-parallax='{"y" : -50}'>
		<img id="cloud2" class="" src="images/clouds/cloud2.png" alt="" data-parallax='{"x" : -150}'>

		<!-- Other map sections will be appended here -->
		<div id="rotate-trigger1"></div>
	</div>
		



<?php include 'footer.php';?>