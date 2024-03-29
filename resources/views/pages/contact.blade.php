
@extends('layouts.base')
	@section('content')
	<!-- contact -->
	<div class="contact-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-sm-5 mb-4 pb-lg-4">
				<h3 class="tittle text-bl let">Contact Us</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 contact-w3pvt-mobiits-w3layouts">
					<h4 class="contact-title text-bl mb-4">Our Address</h4>
					<h5 class="font-weight-light text-bl">If you have any questions about the services we provide simply use the
						form below. We try and respond to all queries
						and comments within 24 hours.</h5>
					<div class="midd-contact my-xl-5 my-4 pl-4 border-left">
						<h6 class="text-bl mb-2">Address & Direction:</h6>
						<p>sed quia consequuntur magni dolores eos qui</p>
					</div>
					<p class="para-w3pvt-mobiits-w3layouts">
						<span class="fa fa-map-marker pr-3"></span>25095 Blue Ravine Rd,New Jersey</p>
					<p class="para-w3pvt-mobiits-w3layouts my-sm-3 my-2">
						<span class="fa fa-phone pr-3"></span>032 625 4592</p>
					<p class="para-w3pvt-mobiits-w3layouts">
						<span class="fa fa-envelope-open pr-2"></span>
						<a href="mailto:mail@example.com">info 1@example.com</a>
					</p>
				</div>
				<div class="col-lg-6 regstr-r-w3-w3pvt-mobiits mt-lg-0 mt-5">
					<h4 class="contact-title text-bl mb-4">Get in Touch</h4>
					<div class="form-bg-w3ls">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" name="Name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="Email" class="form-control" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="text" name="Subject" class="form-control" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<textarea name="Message" class="form-control" placeholder="Message" required=""></textarea>
							</div>
							<button type="submit" class="btn button-w3layouts">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1859251.8642025779!2d-76.08274894689792!3d40.06224332601239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey%2C+USA!5e0!3m2!1sen!2sin!4v1474436926209"
		 allowfullscreen></iframe>
	</div>
	<!-- //map -->

    @endsection