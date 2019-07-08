
@extends('layouts.base')
	@section('content')
    
    <!-- single -->
	<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-5">
				<h3 class="tittle text-bl let mb-2 pt-sm-3">Blog Details</h3>
			</div>
			<div class="blog_section px-lg-5">
				<div class="card border-0">
					<a href="#">
						<img src="images/single.jpg" alt="" class="img-fluid">
					</a>
					<div class="card-body p-0 py-4">
						<div class="row border-bottom pb-3">
							<div class="col-sm-6 col-4 perso-wthree">
								<h6 class="blog-first text-bl">
									<span class="fa fa-user mr-2"></span>Adrian Lie
								</h6>
							</div>
							<div class="col-sm-6 col-8 info-commt text-right">
								<ul class="blog_list">
									<li>Feb 16, 2019</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-heart-o mr-1"></span>30
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-comments-o mr-1"></span>18
										</a>
									</li>
								</ul>
							</div>
						</div>
						<a href="single.html" class="text-bl blog-grid-title mt-4 mb-3">Sed ut perspiciatis unde omnis
							iste natus</a>
						<p class="card-text">Morbi eget dui elit. In lectus eros, convallis vel dolor vitae, semper sodales risus. Donec
							convallis maximus neque
							vel cursus.</p>
					</div>
				</div>
				<a href="single.html" class="single-text text-bl font-weight-light my-3">Nemo enim ipsam voluptatem quia
					voluptas
					sit aspernatur aut odit aut fugit 2018</a>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
					dolore magna
					aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo
					consequat
					duis
					aute irudre dolor in elit sed uta labore dolore reprehender</p>
				<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
					labore dolore reprehender</p>
				<p>Jabore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi utaliquip
					exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore
					reprehender.
				</p>
				<a href="single.html" class="text-bl blog-grid-title mt-4 mb-3">Two Column Text Sample</a>
				<div class="row">
					<div class="col-md-6">
						<p>Morbi eget dui elit in lectus eros, convallis vel dolor vitae, semper sodales risus. Donec
							convallis maximus neque
							vel cursus.</p>
					</div>
					<div class="col-md-6">
						<p>In lectus eros, convallis vel dolor vitae, semper sodales risus. Donec
							convallis maximus neque
							vel cursus.</p>
					</div>
				</div>
				<a href="single.html" class="single-text text-bl font-weight-light mt-4">Nemo enim ipsam voluptatem quia
					voluptas sit aspernatur aut odit aut fugit 2019</a>
				<p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
					labore dolore reprehender</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
					dolore magna
					aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo
					consequat
					duis
					aute irudre dolor in elit sed uta labore dolore reprehender</p>
				<div class="comment-top mt-5">
					<h4>Comments</h4>
					<div class="media">
						<img src="images/te1.jpg" alt="" class="img-fluid" />
						<div class="media-body pt-xl-2 pl-3">
							<h5 class="mb-2 let">Joseph Goh</h5>
							<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
								cursus eros.
								Cras a ornare elit.</p>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/te2.jpg" alt="" class="img-fluid" />
						<div class="media-body  pt-xl-2 pl-3">
							<h5 class="mb-2 let">Goh James</h5>
							<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
								cursus eros.
								Cras a ornare elit.</p>
						</div>
					</div>
				</div>
				<div class="comment-top mt-5">
					<h4>Leave a Comment</h4>
					<div class="comment-bottom mobamuinfo_mail_grid_right">
						<form action="#" method="post">
							<div class="form-group">
								<input class="form-control" type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="Email" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="Subject" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
							</div>
							<button type="submit" class="btn submit mt-4">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //single -->

	<!-- middle section -->
	<section class="w3ls-middle py-5 text-center" id="some">
		<div class="container py-xl-5 my-lg-5">
			<span class="w3-line text-uppercase mb-3">Wander</span>
			<h3 class="w3pvt-web-title mb-4">Start Your Journey</h3>
			<p class="text-botm-mid">Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at sed ut
				perspiciatis unde omnis iste natus error.</p>
			<a href="#about" class="btn button-style-2 mt-sm-5 mt-4">Read More</a>
		</div>
	</section>
    <!-- //middle section -->
    
    
@endsection