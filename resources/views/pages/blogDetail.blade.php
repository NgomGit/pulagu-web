
@extends('layouts.base')
	@section('content')
    
    <!-- single -->
	<div class="blog-w3l py-5 col-md-8 col-lg-8" id="blog-detail-container">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-5">
				<h3 class="tittle text-bl let mb-2 pt-sm-3">Blog Details</h3>
			</div>
			<h3 class=" let mb-2 pt-sm-3">Description</h3>
						<p class="card-text col-md-9">Morbi eget dui elit. In lectus eros, convallis vel dolor vitae, semper sodales risus. Donec
							convallis maximus neque
							vel cursus.</p>
							<br/><br/>
			<div class="blog_section px-lg-5">

				<div class="card border-0 ">
					<a href="#">
						<img src="images/blog_1.3.jpg" alt="" class="" id="img-blog">
					</a>
					<div class="card-body p-0 py-4">
						<div class="row border-bottom pb-3 descriptio">
							<div class="col-sm-5 col-6 perso-wthree">
								<h6 class="blog-first text-bl">
									<span class="fa fa-user mr-2"></span>Adrian Lie
								</h6>
							</div>
							<div class="col-sm-6 col-6 info-commt text-right">
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
						
					</div>
				</div>
				<!--  -->
				<div class="comment-top mt-5 col-md-10 col-lg-10">
					<h4>Comments</h4>
					<div class="media">
						<img src="images/te1.jpg" alt="" class="img-fluid img-user-blog"  />
						<div class="media-body pt-xl-2 pl-3">
							<h5 class="mb-2 let">Joseph Goh</h5>
							<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
								cursus eros.
								Cras a ornare elit.</p>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/te2.jpg" alt="" class="img-fluid img-user-blog" />
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