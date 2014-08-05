@extends('layouts.front')

@section('content')
<?php 
  $flag = true; 
  $banners = Site::getBanner('Home');
?>

@include('banner')

<div class="nav-options">
    <div class="container-l2">
        <ul class="nav">
            <li class='dropdown'><label for=""><span class="fa fa-sort-amount-desc"></span>Sort Order :</label>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Newest<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Featured</a></li>
                    <li><a href="#">Auction</a></li>
                    <li><a href="#">Private Sale</a></li>
                  </ul>
            </li>
            <li class='dropdown'><label for=""><span class="fa fa-list-ul"></span>Listing View :</label>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grid<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Grid</a></li>
                    <li><a href="#">List</a></li>
                  </ul>
            </li>
        </ul>
        <ul class="nav nav-right">
            <li><a href="#" class="map-view"><span class="fa fa-map-marker"></span>Show map view <span class="fa fa-caret-right"></span></a></li>
        </ul>
    </div>
</div>



<div class="t-content"> <!-- main content -->
  <div class="map-view-wrapper">
      <iframe scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106043.36300221241!2d151.15039885635767!3d-33.841847421989144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sph!4v1406902683163" width="100%" height="800" frameborder="0" style="border:0"></iframe>
  </div>
  <div class="container-l2">
    <div class="section section-l1">
      <div class="row">
        <div class="col-sm-9">
          <h4>LATEST PROPERTIES</h4>
          <div class="post post-block post-properties">
              <div class="row">
                <div class="section section-l3">

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop1.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours </h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item private" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop2.jpg') }}" alt="">
                              <h4 class="t-nano">PRIVATE SALE</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">&nbsp;</h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop3.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours </h5>
                              </div>
                          </div>
                      </div>
                  </div>

                   <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item private" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop4.jpg') }}" alt="">
                              <h4 class="t-nano">Private Sale</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">&nbsp;</h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item private" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop5.jpg') }}" alt="">
                              <h4 class="t-nano">PRIVATE SALE</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">&nbsp;</h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop1.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours </h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop1.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours </h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item private" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop2.jpg') }}" alt="">
                              <h4 class="t-nano">PRIVATE SALE</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">&nbsp;</h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop3.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours </h5>
                              </div>
                          </div>
                      </div>
                  </div>

                   <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop4.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours</h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop5.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours</h5>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-4">
                      <div class="post-item auction" data-scroll-reveal="enter bottom over .3s and move 30px after 0.3s">
                          <div class="post-img">
                              <img src="{{ URL::asset('assets/site/placeholders/prop1.jpg') }}" alt="">
                              <h4 class="t-nano">AUCTION</h4>
                              <div class="ribbon">
                                <div class="ribbon-inner">
                                  <span class="fa fa-home"></span>
                                </div>
                              </div>
                          </div>
                          <div class="post-details">
                              <h4 class="post-title">14 Sample St. Collingwood ...</h4>
                              <div class="prop-status">
                                  <ul class="accomodations">
                                      <li> 4 <span class="icon icon-bedroom"></span></li>
                                      <li> 2 <span class="icon icon-bath"></span></li>
                                      <li> 1 <span class="icon icon-car"></span></li>
                                  </ul>
                                  <h5 class="time">Time Left: 2days 4 hours </h5>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="section section-l1">
            <div class="row">
              <div class="col-xs-6 col-sm-12 ads">
                  <img src="{{ URL::asset('assets/site/placeholders/ads.jpg') }}" alt="">
              </div>
              <div class="col-xs-6 col-sm-12 ads">
                  <img src="{{ URL::asset('assets/site/placeholders/ads2.jpg') }}" alt="">
              </div>
              <div class="col-xs-6 col-sm-12 ads">
                  <img src="{{ URL::asset('assets/site/placeholders/ads3.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>
</div><!-- main content end-->


@stop