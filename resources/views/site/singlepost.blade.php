@extends('tempat/headerpost')

@section('judul', 'aslam tampan')

@section('container')


	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend')}}/images/post.jpg" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
        <div class="post_title">{{$post->title}}</div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-9">
					<div class="post_content">
						<!-- Top Panel -->
						
						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
						<div class="author_image"><div><img src="{{$post->user->asaKau()}}" alt=""></div></div>
                        <div class="post_meta"><a href="#">{{$post->user->name}}</a><span>{{$post->created_at->format('D M Y')}}</span></div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- Post Body -->
						<div class="post_body" style="background-color:#ffffff">
							<div class="mb-5" style="text-align:center"><span class="col-lg-9" style="color:#000000"><span style="font-size:35px"><strong>{{$post->title}}</strong></span></span></div>
                            <div class="row mt-30 justify-content-center" >
                                <img src="{{$post->asaDi()}}" class="mr-3" style="width: 500px">
							</div >
							<div class="row justify-content-center">
								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>
							</div>
						
								{!!$post->content!!}
						
							
						
						</div>
						<p>oke atuh</p>
						
						<!-- Bottom Panel -->
						<div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><div><img src="{{asset('frontend')}}/images/author.jpg" alt=""></div></div>
							<div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- Similar Posts -->
						<div class="similar_posts">
							<div class="grid clearfix">

								@foreach ($posts as $pos)
								<div class="card card_small_with_image grid-item">
								<img class="card-img-top" src="{{$pos->asaDi()}}">
									<div class="card-body">
									<div class="card-title card-title-small"><a href="{{route('site.single.post',$pos->slug)}}">{{$pos->title}}</a></div>
										<small class="post_meta"><a href="{{route('site.single.post',$pos->slug)}}">{{$pos->user->name}}</a><span>{{$pos->created_at->format('D M Y')}}</span></small>
									</div>
								</div>
								@endforeach
								

							</div>
<br><br><br><br><br><br><br><br><br><br>
							<!-- Post Comment -->
							<div class="post_comment">
								<div class="post_comment_title">Post Comment</div>
								<div class="row">
									<div class="col-xl-8">
										<div class="post_comment_form_container">
											<form action="#">
												<input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required">
												<input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
												<textarea class="comment_text" placeholder="Your Comment" required="required"></textarea>
												<button type="submit" class="comment_button">Post Comment</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<!-- Comments -->
							<div class="comments">
								<div class="comments_title">Comments <span>(12)</span></div>
								<div class="row">
									<div class="col-xl-8">
										<div class="comments_container">
											<ul class="comment_list">
												<li class="comment">
													<div class="comment_body">
														<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author_image"><div><img src="{{asset('frontend')}}/images/comment_author_1.jpg" alt=""></div></div>
															<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
															<button type="button" class="reply_button ml-auto">Reply</button>
														</div>
														<div class="comment_content">
															<p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
														</div>
													</div>

													<!-- Reply -->
													<ul class="comment_list">
														<li class="comment">
															<div class="comment_body">
																<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author_image"><div><img src="{{asset('frontend')}}/images/comment_author_2.jpg" alt=""></div></div>
																	<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
																	<button type="button" class="reply_button ml-auto">Reply</button>
																</div>
																<div class="comment_content">
																	<p>Nulla facilisi. Aenean porttitor quis tortor id tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus molestie varius tincidunt. Vestibulum congue sed libero ac sodales.</p>
																</div>
															</div>

															<!-- Reply -->
															<ul class="comment_list">
																
															</ul>
														</li>
													</ul>
												</li>
												<li class="comment">
													<div class="comment_body">
														<div class="comment_panel d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author_image"><div><img src="{{asset('frontend')}}/images/comment_author_1.jpg" alt=""></div></div>
															<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
															<button type="button" class="reply_button ml-auto">Reply</button>
														</div>
														<div class="comment_content">
															<p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>


@endsection