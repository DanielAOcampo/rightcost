@extends('layouts.back')

@section('section-top')
<div class="nav navbar-left">
    <a href="{{ URL::to('/') }}"><span class="fa fa-th"></span>View your Website</a>
</div>

@stop
@section('content')

<div class="section section--top">
    <div class="page-title">
        <h3 class="pull-left"> <span class="fa fa-users"></span> Customer </h3>
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
          </a>
        </li>
          <li><a  href="#" class=" btn btn-default">
            <i class="fa fa-bullhorn"></i>
            <span>Add Agent</span>
          </a>
        </li>
          <li><a  href="#" class="btn btn-default">
            <i class="fa fa-user"></i>
            <span>Add Admin</span>
          </a>
        </li>
          <li><a  href="#" class="btn btn-default">
            <i class="fa fa-user"></i>
            <span>Add Customer</span>
          </a>
        </li>
          <li><a  href="#" class="btn btn-default">
            <i class="fa fa-check-circle"></i>
            <span>ADD SERVICE PROVIDER</span>
          </a>
        </li>
    </ul>
</div>


@stop





