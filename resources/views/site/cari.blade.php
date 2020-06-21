@extends('tempat/headercari')

@section('judul', 'aslam tampan')

@section('container')


	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('frontend')}}/images/category.jpg" data-speed="0.8"></div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Category -->

						<div class="category">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Don't Miss</div>
								<div class="section_tags ml-auto">
									<ul>
										<li class="active"><a href="category.html">all</a></li>
										<li><a href="category.html">style hunter</a></li>
										<li><a href="category.html">vogue</a></li>
										<li><a href="category.html">health & fitness</a></li>
										<li><a href="category.html">travel</a></li>
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>more
											<ul>
												<li><a href="category.html">new look 2018</a></li>
												<li><a href="category.html">street fashion</a></li>
												<li><a href="category.html">business</a></li>
												<li><a href="category.html">recipes</a></li>
												<li><a href="category.html">sport</a></li>
												<li><a href="category.html">celebrities</a></li>
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
									@foreach ($post as $pos)
									<div class="card card_small_with_image grid-item">
									<img class="card-img-top" src="{{$pos->asaDi()}}">
										<div class="card-body">
                                        <div class="card-title card-title-small"><a href="{{route('site.single.post',$pos->slug)}}">{{$pos->title}}</a></div>
											<small class="post_meta"><a href="{{route('site.single.post',$pos->slug)}}">{{$pos->user->name}}</a><span>{{$pos->created_at->format('D M Y')}}</span></small>
										</div>
									</div>
									@endforeach
								</div>
								<div>
									{{$post->links()}}
								</div>
							</div>
						</div>

					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>


@endsection