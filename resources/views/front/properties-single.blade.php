@extendS('front.includes.layout')

@section('content')
    
   @include('front.includes.hero')

  <section class="ftco-section ftco-property-details">
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-md-12">
    			<div class="property-details">
    				<div class="img" style="background-image: url(images/work-1.jpg);">
    					<a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
		          	<span class="fa fa-play"></span>
		          </a>
    				</div>
    				<div class="text">
    					<span class="subheading">Oakland</span>
    					<h2>The Blue Sky Home</h2>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12 pills">
					<div class="bd-example bd-example-tabs">
						<div class="d-flex">
						  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

						    <li class="nav-item">
						      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
						    </li>
						  </ul>
						</div>

					  <div class="tab-content" id="pills-tabContent">
					    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
					    	<div class="row">
					    		<div class="col-md-4">
					    			<ul class="features">
					    				<li class="check"><span class="fa fa-check-circle"></span>Lot Area: 1,250 SQ FT</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Bed Rooms: 4</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Bath Rooms: 4</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Luggage</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Garage: 2</li>
					    			</ul>
					    		</div>
					    		<div class="col-md-4">
					    			<ul class="features">
					    				<li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ FT</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Water</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
					    			</ul>
					    		</div>
					    		<div class="col-md-4">
					    			<ul class="features">
					    				<li class="check"><span class="fa fa-check-circle"></span>Floor Area: 1,300 SQ FT</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Year Build:: 2019</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Water</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
					    				<li class="check"><span class="fa fa-check-circle"></span>Roofing: New</li>
					    			</ul>
					    		</div>
					    	</div>
					    </div>

					    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
					      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
								<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
					    </div>

					    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
					      <div class="row">
						   		<div class="col-md-7">
						   			<h3 class="head">23 Reviews</h3>
						   			<div class="review d-flex">
								   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
								   	<div class="review d-flex">
								   		<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
								   	<div class="review d-flex">
								   		<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
						   		</div>
						   		<div class="col-md-5">
						   			<div class="rating-wrap">
							   			<h3 class="head">Give a Review</h3>
							   			<div class="wrap">
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					(98%)
							   					</span>
							   					<span>20 Reviews</span>
								   			</p>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					(85%)
							   					</span>
							   					<span>10 Reviews</span>
								   			</p>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					(70%)
							   					</span>
							   					<span>5 Reviews</span>
								   			</p>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					(10%)
							   					</span>
							   					<span>0 Reviews</span>
								   			</p>
								   			<p class="star">
								   				<span>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					<i class="fa fa-star"></i>
								   					(0%)
							   					</span>
							   					<span>0 Reviews</span>
								   			</p>
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
  </section>
@endsection