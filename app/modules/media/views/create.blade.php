@extends('layouts.back')

@section('section-top')
<!-- Main Content -->
<div class="nav navbar-left">
    <a href="{{ URL::to('/') }}"><span class="fa fa-th"></span>View your Website</a>
</div>
@stop
<div class="section section--top">
	<div class="page-title">
        <h3 class="pull-left"> <span class="fa fa-photo"></span> Media </h3>
    </div>
</div>

@section('content')

{{ Site::system_messages() }}
@include('media::uploader')


@stop