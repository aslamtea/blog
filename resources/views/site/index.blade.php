@extends('tempat/header')

@section('judul', 'aslam tampan')

@section('container')


 	<!-- Home -->

     <div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{asset('img')}}/pantai.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_title">
											<a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
										</div>
										<div class="home_slider_item_link">
											<a href="post.html" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Blog Section - Don't Miss -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Don't Miss</div>
								<div class="section_tags ml-auto">
									<ul>
										<li class="active"><a href="#">all</a></li>
										<li><a href="#">style hunter</a></li>
										<li><a href="#">vogue</a></li>
										<li><a href="#">health & fitness</a></li>
										<li><a href="#">travel</a></li>
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>more
											<ul>
												<li><a href="#">new look 2018</a></li>
												<li><a href="#">street fashion</a></li>
												<li><a href="#">business</a></li>
												<li><a href="#">recipes</a></li>
												<li><a href="#">sport</a></li>
												<li><a href="#">celebrities</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="section_content">
								<div class="grid clearfix">


								

									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
									
									</div>

									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										
									</div>

                                    <!-- Small Card With Image -->
                                    @foreach ($post as $post)
									<div class="card card_small_with_image grid-item">
									<img class="card-img-top" src="{{$post->asaDi()}}">
										<div class="card-body">
                                        <div class="card-title card-title-small">
											<a href="{{route('site.single.post',$post->slug)}}">{{$post->title}}</a></div>
											<small class="post_meta"><a href="{{route('site.single.post',$post->slug)}}">{{$post->user->name}}</a><span>{{$post->created_at->format('D M Y')}}</span></small>
										</div>
									</div>
									@endforeach
									
								</div>
							</div>
						</div>

				
						

					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>
    @endsection