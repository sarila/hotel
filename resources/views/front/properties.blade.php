@extendS('front.includes.layout')

@section('content')
  
  @include('front.includes.hero')


  <section class="ftco-section ftco-no-pb ftco-no-pt">
  	<div class="container">
    	<div class="row">
				<div class="col-md-12">
					<div class="search-wrap-1 ftco-animate p-4">
						<form action="#" class="search-property-1">
	        		<div class="row">
	        			<div class="col-lg align-items-end">
	        				<div class="form-group">
	        					<label for="#">Keyword</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="fa fa-search"></span></div>
			                <input type="text" class="form-control" placeholder="Enter Keyword">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-lg align-items-end">
	        				<div class="form-group">
	        					<label for="#">Property Type</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                        <option value="">Residence</option>
	                        <option value="">Offices</option>
	                        <option value="">Commercial</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-lg align-items-end">
	        				<div class="form-group">
	        					<label for="#">Location</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="fa fa-search"></span></div>
			                <input type="text" class="form-control" placeholder="Location">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-lg align-items-end">
	        				<div class="form-group">
	        					<label for="#">Price Limit</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                        <option value="">$5,000</option>
	                        <option value="">$10,000</option>
	                        <option value="">$50,000</option>
	                        <option value="">$100,000</option>
	                        <option value="">$200,000</option>
	                        <option value="">$300,000</option>
	                        <option value="">$400,000</option>
	                        <option value="">$500,000</option>
	                        <option value="">$600,000</option>
	                        <option value="">$700,000</option>
	                        <option value="">$800,000</option>
	                        <option value="">$900,000</option>
	                        <option value="">$1,000,000</option>
	                        <option value="">$2,000,000</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-lg align-self-end">
	        				<div class="form-group">
	        					<div class="form-field">
			                <input type="submit" value="Search" class="form-control btn btn-primary">
			              </div>
		              </div>
	        			</div>
	        		</div>
	        	</form>
	        </div>
				</div>
    	</div>
    </div>
  </section>

  <section class="ftco-section goto-here">
  	<div class="container">
  		<div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        	<span class="subheading">What we offer</span>
          <h2 class="mb-2">Properties</h2>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-4">
      		<div class="property-wrap ftco-animate">
      			<a href="properties-single.html" class="img" style="background-image: url(images/work-1.jpg);">
      				<div class="rent-sale">
      					<span class="sale">Sale</span>
      				</div>
      				<p class="price"><span class="orig-price">$300,000</span></p>
      			</a>
      			<div class="text">
      				<ul class="property_list">
      					<li><span class="flaticon-bed"></span>3</li>
      					<li><span class="flaticon-bathtub"></span>2</li>
      					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
      				</ul>
      				<h3><a href="#">The Blue Sky Home</a></h3>
      				<span class="location">Oakland</span>
      				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
      					<span class="fa fa-link"></span>
      				</a>
      				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
      					<div class="d-flex align-items-center">
        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        					<h3 class="ml-2">John Dorf</h3>
        				</div>
        				<span class="text-right">2 weeks ago</span>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-4">
      		<div class="property-wrap ftco-animate">
      			<a href="properties-single.html" class="img" style="background-image: url(images/work-2.jpg);">
      				<div class="rent-sale">
      					<span class="rent">Rent</span>
      				</div>
      				<p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small> / mo</small></span></p>
      			</a>
      			<div class="text">
      				<ul class="property_list">
      					<li><span class="flaticon-bed"></span>3</li>
      					<li><span class="flaticon-bathtub"></span>2</li>
      					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
      				</ul>
      				<h3><a href="#">The Blue Sky Home</a></h3>
      				<span class="location">Oakland</span>
      				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
      					<span class="fa fa-link"></span>
      				</a>
      				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
      					<div class="d-flex align-items-center">
        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        					<h3 class="ml-2">John Dorf</h3>
        				</div>
        				<span class="text-right">2 weeks ago</span>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-4">
      		<div class="property-wrap ftco-animate">
      			<a href="properties-single.html" class="img" style="background-image: url(images/work-3.jpg);">
      				<div class="rent-sale">
      					<span class="rent">Rent</span>
      				</div>
      				<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
      			</a>
      			<div class="text">
      				<ul class="property_list">
      					<li><span class="flaticon-bed"></span>3</li>
      					<li><span class="flaticon-bathtub"></span>2</li>
      					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
      				</ul>
      				<h3><a href="#">The Blue Sky Home</a></h3>
      				<span class="location">Oakland</span>
      				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
      					<span class="fa fa-link"></span>
      				</a>
      				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
      					<div class="d-flex align-items-center">
        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        					<h3 class="ml-2">John Dorf</h3>
        				</div>
        				<span class="text-right">2 weeks ago</span>
      				</div>
      			</div>
      		</div>
      	</div>

      	<div class="col-md-4">
      		<div class="property-wrap ftco-animate">
      			<a href="properties-single.html" class="img" style="background-image: url(images/work-4.jpg);">
      				<div class="rent-sale">
      					<span class="sale">Sale</span>
      				</div>
      				<p class="price"><span class="orig-price">$300,000</span></p>
      			</a>
      			<div class="text">
      				<ul class="property_list">
      					<li><span class="flaticon-bed"></span>3</li>
      					<li><span class="flaticon-bathtub"></span>2</li>
      					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
      				</ul>
      				<h3><a href="#">The Blue Sky Home</a></h3>
      				<span class="location">Oakland</span>
      				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
      					<span class="fa fa-link"></span>
      				</a>
      				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
      					<div class="d-flex align-items-center">
        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        					<h3 class="ml-2">John Dorf</h3>
        				</div>
        				<span class="text-right">2 weeks ago</span>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-4">
      		<div class="property-wrap ftco-animate">
      			<a href="properties-single.html" class="img" style="background-image: url(images/work-5.jpg);">
      				<div class="rent-sale">
      					<span class="rent">Rent</span>
      				</div>
      				<p class="price"><span class="old-price">800,000</span><span class="orig-price">$3,050<small> / mo</small></span></p>
      			</a>
      			<div class="text">
      				<ul class="property_list">
      					<li><span class="flaticon-bed"></span>3</li>
      					<li><span class="flaticon-bathtub"></span>2</li>
      					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
      				</ul>
      				<h3><a href="#">The Blue Sky Home</a></h3>
      				<span class="location">Oakland</span>
      				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
      					<span class="fa fa-link"></span>
      				</a>
      				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
      					<div class="d-flex align-items-center">
        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        					<h3 class="ml-2">John Dorf</h3>
        				</div>
        				<span class="text-right">2 weeks ago</span>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-4">
      		<div class="property-wrap ftco-animate">
      			<a href="properties-single.html" class="img" style="background-image: url(images/work-6.jpg);">
      				<div class="rent-sale">
      					<span class="rent">Rent</span>
      				</div>
      				<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
      			</a>
      			<div class="text">
      				<ul class="property_list">
      					<li><span class="flaticon-bed"></span>3</li>
      					<li><span class="flaticon-bathtub"></span>2</li>
      					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
      				</ul>
      				<h3><a href="#">The Blue Sky Home</a></h3>
      				<span class="location">Oakland</span>
      				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
      					<span class="fa fa-link"></span>
      				</a>
      				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
      					<div class="d-flex align-items-center">
        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        					<h3 class="ml-2">John Dorf</h3>
        				</div>
        				<span class="text-right">2 weeks ago</span>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
  	</div>
  </section>
@endsection