 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie-9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js jPanelMenu"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> {{ Site::title(); }} </title>
  <meta name="description" content="{{ Site::metaDescription(); }}">

  <link rel="stylesheet" href="{{ URL::asset('assets/site/css/bootstrap.css') }}">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ URL::asset('assets/global/js/libs/JvalidationEngine/css/validationEngine.jquery.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/global/js/libs/tagsinput/bootstrap-tagsinput.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/global/js/libs/tagsinput/app.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('assets/site/css/icons.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/site/css/main.css') }}">
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/global/css/ie.css') }}" />
  <![endif]-->

  <script type="text/javascript" src="{{ URL::asset('assets/global/js/ext/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/global/js/libs/jquery-1.10.1.js') }}"></script>
    <script>
    //<![CDATA[
    var baseURL = '{{ URL::to("/"); }}/';
    //]]>
    jQuery(function(){
      var visitortime = new Date();
      var visitortimezone = -visitortime.getTimezoneOffset()/60;
      @if(!Session::has('timezoneOffset'))
      //check if timezone has set
        jQuery.post(baseURL+'offsetTimeZone',{offset:visitortimezone},function(data){
          //location.reload(true);
        });

      @endif
    });
    </script>

</head>
  <body>



@include('layouts.top-nav')
<div class="body-wrapper body-default"> 
  {{ Site::system_messages() }}
  @yield('content')
  @include('layouts.footer')
</div>


  <script src="/assets/global/js/jquery.are-you-sure.js"></script>
  <script src="{{ URL::asset('assets/site/js/vendor/selectordie.min.js') }}"></script>
  <script src="{{ URL::asset('assets/site/js/vendor/scrollReveal.js') }}"></script>
  <script src="{{ URL::asset('assets/site/js/vendor/jquery.flexslider-min.js') }}"></script>
  <script src="{{ URL::asset('assets/global/js/ext/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('assets/site/js/main.js') }}"></script>
  </body>
</html>
