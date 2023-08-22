</div>
<div id='booking'></div>
<footer>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-10 col-xs-offset-1 visible-xs-block text-center'>
				<img class='footer-logo' src='<? echo URL."/public/images/BFM_logo_v1.svg"; ?>'>
				<p>Fill out the below form to request a quote. Call or email us for more info or to book us for your event. We serve the East Bay, South Bay, San Francisco, Peninsula, Marin, and Vallejo Areas. No party is too large or too small!</p>
				<div class='socialIcons'>
					<!-- <a href='#' ><i class="fa fa-phone" aria-hidden="true"></i></a> -->
					<a class='circleIcon' href='mailto:revslimchance@gmail.com' ><i class="fa fa-envelope" aria-hidden="true"></i></a>
					<a href='tel:1-415-652-7609' >415 . 652 . 7609</a>
					<a class='circleIcon' href='https://www.facebook.com/SlimChanceCircus' ><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class='col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0'>
				<h2>REQUEST A QUOTE</h2>
				<form id='contactForm'>
					<div class='form-group'>
						<input type='text' id='nameInput' class='form-control' placeholder='Your Name'>
						<label>Your Name</label>
					</div>
					<div class='form-group'>
						<input type='email' id='emailInput' class='form-control' placeholder='Email address'>
						<label>Email address</label>
					</div>
					<div class='form-group'>
						<input type='email' id='phoneInput' class='form-control' placeholder='Phone number'>
						<label>Phone number</label>
					</div>
					<div class='form-group'>
						<input type='text' id='dateInput' class='form-control' placeholder='Event date/time'>
						<label>Event date/time</label>
					</div>
					<div class='form-group'>
						<input type='text' id='locationInput' class='form-control' placeholder='Location'>
						<label>Location</label>
					</div>
					<div class='form-group'>
						<input type='text' id='servicesInput' class='form-control' placeholder='Services Requested'>
						<label>Services Requested</label>
					</div>
					<div class='form-group'>
						<input type='text' id='attendeesInput' class='form-control' placeholder='Number of attendees'>
						<label>Number of attendees</label>
					</div>
					<div class='form-group'>
						<input type='text' id='ageInput' class='form-control' placeholder='Age of birthday child (if applicable)'>
						<label>Age of birthday child (if applicable)</label>
					</div>
					<a id='submitContact' class='btn btn-primary'>Submit</a>
					<p id='contactMsg'></p>
					<img id='contactLoader' src='<? // echo URL."/public/images/loader.svg"; ?>'>
				</form>
			</div>
			<div class='col-sm-6 hidden-xs text-center contact-blurb'>
				<img class='footer-logo' src='<? echo URL."/public/images/BFM_logo_v1.svg"; ?>'>
				<p>Fill out the form to the left to request a quote. Call or email us for more info or to book us for your event. We serve the East Bay, South Bay, San Francisco, Peninsula, Marin, and Vallejo Areas. No party is too large or too small!</p>
				<div class='socialIcons'>
					<!-- <a href='#' ><i class="fa fa-phone" aria-hidden="true"></i></a> -->
					<a class='circleIcon' href='mailto:revslimchance@gmail.com' ><i class="fa fa-envelope" aria-hidden="true"></i></a>
					<a href='tel:1-415-652-7609' >415 . 652 . 7609</a>
					<a class='circleIcon' href='https://www.facebook.com/SlimChanceCircus' ><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class='footer-lower text-center'>
		<p><!-- &copy; <?php // echo date("Y"); ?> Barrel Full Of Monkeys Entertainment | Site design by Sam Pelgrift -->&nbsp;</p>
	</div>
</footer>