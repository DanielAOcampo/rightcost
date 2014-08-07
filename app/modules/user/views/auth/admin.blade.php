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

<div class="section section-l2">
    <div class="container-l2">
        <div class="col-md-12">
            <div class="col-md-4">
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
    </div>
</div>
</div><!-- main content end-->

@stop;