@extends('layouts.back')

@section('section-top')
<div class="nav navbar-left">
    <a href="{{ URL::to('/') }}"><span class="fa fa-th"></span>View your Website</a>
</div>

@stop
@section('content')


    <div class="section section--top">

        <div class="page-title">
            <h3 class="pull-left"> <span class="fa fa-eye"></span> Dashboard </h3>
        </div>
        <div class="pull-right search">
            <form class="form-inline form-rounded" role="form">
                <div class="form-group">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" id="s" name="s" placeholder="Search..">
                </div>
            </form>
        </div>

      <ul class="action-list">
        <li><a  href="#" class=" btn btn-default">
            <i class="fa fa-copy"></i>
            <span>Add page</span>
          </a></li>
          <li><a  href="#" class=" btn btn-default">
            <i class="fa fa-bullhorn"></i>
            <span>Add Agent</span>
          </a></li>
          <li><a  href="#" class="btn btn-default">
            <i class="fa fa-user"></i>
            <span>Add Admin</span>
          </a></li>
          <li><a  href="#" class="btn btn-default">
            <i class="fa fa-user"></i>
            <span>Add Customer</span>
          </a></li>
          <li><a  href="#" class="btn btn-default">
            <i class="fa fa-check-circle"></i>
            <span>ADD SERVICE PROVIDER</span>
          </a></li>
      </ul>
        <div class="section-right">
            
        </div>
    </div>


    <div class="section section--box">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel">
                    <div class="panel__heading">
                        <h3 class="h4">Total Revenue</h3>
                    </div>
                    <div class="panel__content">
                        <div class="row-md stroke-bottom block--spread">
                            <div class="col-lg-12">
                                <label for="">Total Revenue</label>
                                <div class="form-group">
                                   <input type="text" class="form-control input-gray form-control-md" value='$243,000'  readonly> 
                                </div>
                            </div>
                        </div>
                        <div class="row-md stroke-bottom block--spread">
                            <div class="col-lg-12">
                                <label for="">Sold Properties</label>
                                <div class="form-group">
                                   <input type="text" class="form-control input-gray form-control-md" value='432' readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row-md stroke-bottom block--spread">
                            <div class="col-lg-12">
                                <label for="">Total Signups</label>
                                <div class="form-group">
                                    <input type="textarea" class="form-control input-gray form-control-md" value='850'  readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row-md block--spread m-0px">
                            <div class="col-lg-12">
                                <label for="">New Property Listings</label>
                                <div class="form-group m-0px">
                                    <input type="textarea" class="form-control input-gray form-control-md" value='500'  readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="panel">
                    <div class="panel__heading">
                        <h1 class="h4 pull-left">No of Property Listings ( Past 30 days )</h1>
                        <div class="pull-right">
                            <div class="pull-left selectpicker-md2 mr-5px">
                                <div class="btn-group grp-block">
                                    <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown">
                                        <span class="pull-left">
                                            All
                                        </span>
                                        <span class="pull-right">
                                            <span class="caret"></span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu--extended" role="menu">
                                        <li class="dd-menu--extended__item">
                                            <a href="#"> All </a>
                                        </li>
                                        <li class="dd-menu--extended__item">
                                            <a href="#"> Auction </a>
                                        </li>
                                        <li class="dd-menu--extended__item">
                                            <a href="#"> Private Sale </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group pull-left">
                                <input type="text" class="form-control" value="12,345" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="panel__sub_content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-l3 chart-cv">
                                 <canvas id="property_listings" class="chart" height="250" width="700"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel__heading">
                        <h1 class="h4 pull-left">No of Offers ( Past 30 days )</h1>
                        <div class="pull-right">
                            <div class="pull-left selectpicker-md2 mr-5px">
                                <div class="btn-group grp-block">
                                    <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown">
                                        <span class="pull-left">
                                            All
                                        </span>
                                        <span class="pull-right">
                                            <span class="caret"></span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu--extended" role="menu">
                                        <li class="dd-menu--extended__item">
                                            <a href="#"> All </a>
                                        </li>
                                        <li class="dd-menu--extended__item">
                                            <a href="#"> Auction </a>
                                        </li>
                                        <li class="dd-menu--extended__item">
                                            <a href="#"> Private Sale </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group pull-left">
                                <input type="text" class="form-control" value="12,345" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="panel__sub_content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-l3 chart-cv">
                                 <canvas id="offers" class="chart" height="250" width="700"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel__heading">
                        <h1 class="h4 pull-left">No of Vendor Registrations ( Past 30 days )</h1>
                        <div class="pull-right">
                            <div class="form-group pull-left">
                                <input type="text" class="form-control" value="12,345" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="panel__sub_content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-l3 chart-cv">
                                 <canvas id="vendor_registrations" class="chart" height="250" width="700"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel__heading">
                        <h1 class="h4 pull-left">No of Bidder / Buyer Registrations ( Past 30 days )</h1>
                        <div class="pull-right">
                            <div class="form-group pull-left">
                                <input type="text" class="form-control" value="12,345" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="panel__sub_content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-l3 chart-cv">
                                 <canvas id="bidder_buyer" class="chart" height="250" width="700"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>


<script>
    var randomScalingFactor1 = function(){ return Math.round(Math.random()*250)};
    var randomScalingFactor2 = function(){ return Math.round(Math.random()*140)};
    var randomScalingFactor3 = function(){ return Math.round(Math.random()*120)};
    var randomScalingFactor4 = function(){ return Math.round(Math.random()*120)};

    var propertyChart = {
        labels : ["11-Jun","12-Jun","13-Jun","14-Jun","15-Jun","16-Jun","17-Jun","18-Jun","19-Jun","20-Jun","21-Jun","22-Jun","23-Jun","24-Jun","25-Jun","26-Jun","27-Jun","28-Jun","29-Jun","30-Jun","01-Jul","02-Jul","03-Jul","04-Jul","05-Jul","06-Jul","07-Jul","08-Jul","09-Jul","10-Jul"],
        datasets : [
            {
                fillColor : "rgba(113,227,37,0.5)",
                highlightFill: "rgba(113,227,37,0.75)",
                data : [randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1()]
            },
            {
                fillColor : "rgba(13,77,126,0.4)",
                highlightFill : "rgba(151,187,205,0.75)",
                data : [randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1()]
            },
            {
                fillColor : "rgba(229,15,76,0.4)",
                highlightFill : "rgba(229,15,76,0.75)",
                data : [randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1()]
            }
        ]
    }

    var propertyChart2 = {
        labels : ["11-Jun","12-Jun","13-Jun","14-Jun","15-Jun","16-Jun","17-Jun","18-Jun","19-Jun","20-Jun","21-Jun","22-Jun","23-Jun","24-Jun","25-Jun","26-Jun","27-Jun","28-Jun","29-Jun","30-Jun","01-Jul","02-Jul","03-Jul","04-Jul","05-Jul","06-Jul","07-Jul","08-Jul","09-Jul","10-Jul"],
        datasets : [
            {
                fillColor : "rgba(113,227,37,0.5)",
                highlightFill: "rgba(113,227,37,0.75)",
                data : [randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2()]
            },
            {
                fillColor : "rgba(13,77,126,0.4)",
                highlightFill : "rgba(151,187,205,0.75)",
                data : [randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2()]
            },
            {
                fillColor : "rgba(229,15,76,0.4)",
                highlightFill : "rgba(229,15,76,0.75)",
                data : [randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2()]
            }
        ]
    }
     var propertyChart3 = {
        labels : ["11-Jun","12-Jun","13-Jun","14-Jun","15-Jun","16-Jun","17-Jun","18-Jun","19-Jun","20-Jun","21-Jun","22-Jun","23-Jun","24-Jun","25-Jun","26-Jun","27-Jun","28-Jun","29-Jun","30-Jun","01-Jul","02-Jul","03-Jul","04-Jul","05-Jul","06-Jul","07-Jul","08-Jul","09-Jul","10-Jul"],
        datasets : [
        
            {
                fillColor : "rgba(13,77,126,0.4)",
                highlightFill : "rgba(151,187,205,0.75)",
                data : [randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3()]
            }
        ]
    }
     var propertyChart4 = {
        labels : ["11-Jun","12-Jun","13-Jun","14-Jun","15-Jun","16-Jun","17-Jun","18-Jun","19-Jun","20-Jun","21-Jun","22-Jun","23-Jun","24-Jun","25-Jun","26-Jun","27-Jun","28-Jun","29-Jun","30-Jun","01-Jul","02-Jul","03-Jul","04-Jul","05-Jul","06-Jul","07-Jul","08-Jul","09-Jul","10-Jul"],
        datasets : [
            
            {
                fillColor : "rgba(229,15,76,0.4)",
                highlightFill : "rgba(229,15,76,0.75)",
                data : [randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4(),randomScalingFactor4()]
            }
        ]
    }

    window.onload = function(){
        var ctx = document.getElementById("property_listings").getContext("2d");
        var ctx2 = document.getElementById("offers").getContext("2d");
        var ctx3 = document.getElementById("vendor_registrations").getContext("2d");
        var ctx4 = document.getElementById("bidder_buyer").getContext("2d");


        window.myBar = new Chart(ctx).Bar(propertyChart, {
            responsive : true,
            scaleOverride: true,
            scaleSteps: 5,
            scaleStepWidth: 50,
            scaleStartValue: 0,
        });

        window.myBar2 = new Chart(ctx2).Bar(propertyChart2, {
            responsive : true,
            scaleOverride: true,
            scaleSteps: 7,
            scaleStepWidth: 20,
            scaleStartValue: 0,
        });
        window.myBar3 = new Chart(ctx3).Bar(propertyChart3, {
            responsive : true,
            scaleOverride: true,
            scaleSteps: 6,
            scaleStepWidth: 20,
            scaleStartValue: 0,
        });
        window.myBar4 = new Chart(ctx4).Bar(propertyChart4, {
            responsive : true,
            scaleOverride: true,
            scaleSteps: 6,
            scaleStepWidth: 20,
            scaleStartValue: 0,
        });
    }

</script>

@stop




