@extends('layouts.front')

@section('content')
<?php 
  $flag = true; 
  $banners = Site::getBanner('Home');
?>
<div class="banner banner-xs">
	<div class="container-l2">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Search</a></li>
		  <li class="active">322 SPRING RD CAMBERWELL 3132</li>
		</ol>
	</div>
</div>

<div class="nav-options">
    <div class="container-l2">
        <ul class="nav">
            <li class=''>
                 <a href="#"><span class="fa fa-caret-left"></span>Back to search results</a>
            </li>
        </ul>
    </div>
</div>


<div class="t-content"> <!-- main content -->

  <div class="container-l2">
    <div class="section section-l1">
      <div class="row">
          <div class="post post-single">
              <div class="row">
                <div class="section section-l3">
                  <div class="col-sm-6">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img post-img-slider list-block flexslider">
                          	<div class="ribbon-lg private"><span>Private Sale</span></div>
                          	<ul class="slides">
	                          	  <li><img src="{{ URL::asset('assets/site/placeholders/singleprop.jpg') }}" alt=""></li>
	                          	  <li><img src="{{ URL::asset('assets/site/placeholders/singleprop2.jpg') }}" alt=""></li>
	                          	  <li><img src="{{ URL::asset('assets/site/placeholders/singleprop3.jpg') }}" alt=""></li>
	                          	  <li><img src="{{ URL::asset('assets/site/placeholders/singleprop4.jpg') }}" alt=""></li>
	                          	  <li><img src="{{ URL::asset('assets/site/placeholders/singleprop5.jpg') }}" alt=""></li>
                          	 </ul>
                          </div>
                          <div class="post-thumb-slider list-block flexslider">
                          	<ul class="slides">
	                          	<li><img src="{{ URL::asset('assets/site/placeholders/thmb1.jpg') }}" alt=""></li>
	                          	<li><img src="{{ URL::asset('assets/site/placeholders/thmb2.jpg') }}" alt=""></li>
	                          	<li><img src="{{ URL::asset('assets/site/placeholders/thmb3.jpg') }}" alt=""></li>
	                          	<li><img src="{{ URL::asset('assets/site/placeholders/thmb4.jpg') }}" alt=""></li>
	                          	<li><img src="{{ URL::asset('assets/site/placeholders/thmb5.jpg') }}" alt=""></li>
                          	</ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
	                  	<div class="post-details">
	                  	  <h2>322 Spring Rd Camberwell 3132</h2>
	                      <ul class="accomodations">
	                          <li> 4 <span class="icon icon-bedroom"></span></li>
	                          <li> 2 <span class="icon icon-bath"></span></li>
	                          <li> 1 <span class="icon icon-car"></span></li>
	                      </ul>
	                      <h1 class="price">Price: <span>$499,000</span></h1>
	                      <div class="post-actions">
		                      <a href="#" class="btn btn-block btn-green btn-lg">Make an Offer</a>
		                      <div class="row">
		                      	<div class="col-sm-6">
		                      		<a href="#" class="btn btn-default btn-block btn-light btn-sm btn-secondary"><span class="fa fa-heart"></span>Favourite</a>
		                      	</div>	
		                      	<div class="col-sm-6">
		                      		<a  href="#"  class="btn btn-default btn-block btn-sm btn-secondary"><span class="fa fa-home"></span>Register Interest</a>
		                      	</div>	
		                      	<div class="col-sm-6">
		                      		<a  href="#" class="btn btn-default btn-block btn-light btn-sm btn-secondary"><span class="fa fa-share-square"></span>Share with Friends</a>
		                      	</div>	
		                      	<div class="col-sm-6">
		                      		<a  href="#" class="btn btn-default btn-block btn-sm btn-secondary"><span class="fa fa-question-circle"></span>Ask question</a>
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
    <div class="section section-l4">
    	<div class="tabbed">
	    	<ul class="nav nav-tabs" role="tablist" id="myTab">
			  <li class="active"><a href="#home" role="tab" data-toggle="tab">Property Details</a></li>
			  <li><a href="#profile" role="tab" data-toggle="tab">General Features</a></li>
			  <li><a href="#messages" role="tab" data-toggle="tab">Inspection Dates</a></li>
			  <li><a href="#settings" role="tab" data-toggle="tab">Map</a></li>
			  <li><a href="#settings" role="tab" data-toggle="tab">Documents</a></li>
			  <li><a href="#settings" role="tab" data-toggle="tab">My Offers</a></li>
			  <li><a href="#settings" role="tab" data-toggle="tab">Statistics</a></li>
			</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="home">
			  		<p class="first-letter">
			  			This is the description provided by the Vendor: Eg. Charming 2 bedroom, 2 bathroom modern recently renovated brick veneer home situated in prized location in walking distance to shops, public 
						transport and schools. Comprises sunny entrance hall, flowing into original living and dining  and opening  up into family  living zone with modern kitchen, meals area and family space. Upstairs   
 						parent's retreat includes walk in robes, ensuite bathroom and three further bedrooms are serviced by a large updated family bathroom. Further features include Car Port for two cars, covered deck, reverse cycle air con, alarm system, granite bench tops, miele appliances, wine cellar and inground swimming pool.             
			  		</p>
			  </div>
			  <div class="tab-pane" id="profile">
			  <div class="row">
			  	<div class="col-sm-2 border-right">
			  		<h4 class="title-l1">General Features</h4>
			  		<ul class="list-block list-feat">
			  			<li><span>Type</span>Unit</li>
			  			<li><span class="icon icon-bedroom-o"></span>3 Bedrooms</li>
			  			<li><span class="icon icon-bath-o"></span>3 Bedrooms</li>
			  			<li><span class="icon icon-car-o"></span>3 Bedrooms</li>
			  		</ul>
			  	</div>
			  	<div class="col-sm-10">
			  		<div class="ml-40">
				  		<h4 class="title-l1">Other Features</h4>
				  		<p>Comprises: [All features]. eg. Land size 632sqm, Small backyard, Carport, Solar Panels, Solar Hot Water, Grey Water System, Energy Efficiency Rating, Alarm System, Miele Appliances, Stone Benchtops, BIR's, Split System Airconditioning, Tennis Court, Inground Pool, Other Features..</p>
			  		</div>
			  	</div>
			  </div>
			  	
			  	<p></p>

			  </div>
			  <div class="tab-pane" id="messages">.3..</div>
			  <div class="tab-pane" id="settings">.4..</div>
			</div>
		</div>
    </div>
  </div>
</div><!-- main content end-->

@stop;