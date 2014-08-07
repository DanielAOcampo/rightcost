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
          <li class="active">Login / Register</li>
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
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="section section-l2">
                    <div class="banner-form banner-form-show">

                        <h1 class="title">Login to your account</h1>

                        {{ Form::open(array('route' => 'login', 'role' => 'form', 'class' => '')) }}

                            @include('user::auth.login-form')

                        {{ Form::close() }}

                        <div class="banner-form-footer">
                           <!-- <p>Dont't have an account yet? <a href="{{ URL::to("/signup") }}">Sign up »</a></p>-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="section section-l2 skin-gray">
                <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="pull-left">Signup</li>
                      <li class="active pull-right"><a href="#home" role="tab" data-toggle="tab">Individual</a></li>
                      <li class="pull-right"><a href="#profile" role="tab" data-toggle="tab">Company</a></li>
                      <li class="pull-right"><a href="#messages" role="tab" data-toggle="tab">Real State Agent</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="home">
                        <form role="form">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Surname</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="" placeholder="">
                              </div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the Terms and Conditions of Use of Website
                                </label>
                            </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="" placeholder="">
                              </div>
                             <button type="submit" class="btn btn-default btn-lg">Submit</button>
                            </div>
                        </form>
                      </div>
                      <div class="tab-pane" id="profile">...</div>
                      <div class="tab-pane" id="messages">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- main content end-->

@stop;