<?php 
require 'views/inc/navDrawer.php'; 
require 'views/inc/header.php';
?>

<section class='primary jagged'>
	<div class='jagged-upper'>
		<? echo file_get_contents("public/images/jagged_upper.svg"); ?>
	</div>
	<div class='jagged-lower'>
		<? echo file_get_contents("public/images/jagged_lower.svg"); ?>
	</div>

	<div class='container'>
		<h1 class='text-center'>Leave the entertainment to us</h1>
		<div class='row'>
			<div class='col-md-10 col-md-offset-1'>
				<p class='text-center'>Happiness is guaranteed at Barrel Full Of Monkeys! Make your event something your family and guests will never forget. We serve the East Bay, South Bay, San Francisco, Peninsula, Marin, and Vallejo Areas. Entertainment Packages Available.  No party is too large or too small.</p>
				<div class='socialIcons'>
					<!-- <a href='#' ><i class="fa fa-phone" aria-hidden="true"></i></a> -->
					<a class='circleIcon' href='#' ><i class="fa fa-envelope" aria-hidden="true"></i></a>
					<a href='#' >415 . 652 . 7909</a>
					<a class='circleIcon' href='#' ><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-8 col-md-offset-1 col-lg-offset-2'>
				<h1>SERVICES</h1>
			</div>
		</div>
		<div class='row service-row flex-container'>
			<div class='col-sm-6 col-md-5 col-lg-4'>
				<h3>Circus Variety Show</h3>
				<p>2 performers, unicycling, tall unicycle, juggling (ball, club and hats), comedy magic, hooping and more.</p>
				<p>The show can be 30-45 minutes. Usually we will stay for 15 minutes or so after the show to do some extra walk about with the children.</p>
				<p>We can provide our own wireless mics and mini PA.</p>
				<a class='btn btn-primary' href='https://www.youtube.com/watch?v=N7uTZpZ1klE' target="_blank">Watch a sample video</a>
				<p><small><strong>Space needs:</strong> To do all of our tricks we need 14 ft x 14ft performance area and 14ft height clearance. We prefer a wood floor or concrete. It is very difficult for us to perform our show on grass, gravel or on an incline. If the space is smaller we can adjust our show to fit the space.</small></p>
			</div>
			<div class='col-sm-6 col-md-5 col-lg-4 hidden-xs'>
				<img class='img-responsive img-slant-right' src='<? echo URL."/public/images/circusShow.jpg"; ?>'>
			</div>	
		</div>

		<div class='row service-row flex-container'>
			<div class='col-sm-6 col-md-5 col-lg-4 hidden-xs'>
				<img class='img-responsive img-slant-left' src='<? echo URL."/public/images/bubbleShow.jpg"; ?>'>
			</div>
			<div class='col-sm-6 col-md-5 col-lg-4'>
				<h3>Bubble Show</h3>
				<p>The bubble show is a great hit for younger children and is also fun for the older kids and even adults. It is a very interactive show with the kids taking turns making the bubbles. It is also a great photo opportunity.</p>
				<p>The show is 40 minutes long. Recommended for ages 0-6. </p>
				<a class='btn btn-secondary' href='https://www.youtube.com/watch?v=IJcUwyCVk3U' target="_blank">Watch a sample video</a>
				<p>For outdoor parties we offer an interactive bubble play station. This activity is very fun for the children for about 30-45 minutes.</p>
				<a class='btn btn-secondary' href='https://youtu.be/msJTA9qB9-U' target="_blank">video of bubble play</a>
				<p><small><strong>Space needs:</strong> We need a large indoor area for the show, at least 10x10 ft for the stage area, plus additional space for the children to sit. We can not guarantee the kid-inside-a-bubble trick outside.</small></p>
			</div>				
		</div>

		<div class='row service-row flex-container'>
			<div class='col-sm-6 col-md-5 col-lg-4'>
				<h3>Magic and puppet Shows</h3>
				<p>A fun and interactive show that entertains kids and parents alike. Perfect for any event, from birthday parties to stage shows! Your performer enters as the character of your choice.</p>
				<p>The audience and guests are invited to participate and interact during the entire 30 minute show. Although Our characters love to use both puppets and magic tricks for everyone, for ages 0-5 more puppets are suggested. For ages 5+ more magic is suggested.</p>
				<a class='btn btn-primary' href='https://www.youtube.com/watch?v=N7uTZpZ1klE' target="_blank">see pictures</a>
			</div>
			<div class='col-sm-6 col-md-5 col-lg-4 hidden-xs'>
				<img class='img-responsive img-slant-right' src='<? echo URL."/public/images/magicPuppetShow.jpg"; ?>'>
			</div>	
		</div>
	</div>
</section>

<?php // require 'views/inc/footer.php'; ?>